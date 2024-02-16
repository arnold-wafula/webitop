<?php
//
// File generated by ... on the 2024-02-16T09:48:54+0100
// Please do not edit manually
//

/**
 * Classes and menus for authent-ldap (version 3.1.1)
 *
 * @author      iTop compiler
 * @license     http://opensource.org/licenses/AGPL-3.0
 */


/**
                    * LDAP Authentication
                    * User authentication Module, no password at all!
                    *
                    * @copyright   Copyright (C) 2010-2023 Combodo SARL
                    * @license     http://opensource.org/licenses/AGPL-3.0
                    */
class UserLDAP extends UserInternal
{
	public static function Init()
	{
		$aParams = array(			'category' => 'addon/authentication,grant_by_profile,silo',
			'key_type' => 'autoincrement',
			'name_attcode' => array('login'),
			'image_attcode' => '',
			'state_attcode' => '',
			'reconc_keys' => array('login'),
			'db_table' => 'priv_user_ldap',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
			'style' =>  new ormStyle(null, null, null, null, null, null),);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeString("ldap_server", array("sql"=>'ldap_server', "is_null_allowed"=>true, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));



		MetaModel::Init_SetZListItems('details', array (
  'col:col1' => 
  array (
    'fieldset:User:info' => 
    array (
      0 => 'contactid',
      1 => 'org_id',
      2 => 'email',
      3 => 'login',
      4 => 'language',
      5 => 'status',
    ),
  ),
  'col:col2' => 
  array (
    'fieldset:User:profiles' => 
    array (
      0 => 'profile_list',
    ),
    'fieldset:UserLDAP:server' => 
    array (
      0 => 'ldap_server',
    ),
  ),
  0 => 'allowed_org_list',
  1 => 'log',
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'login',
  1 => 'contactid',
  2 => 'status',
  3 => 'org_id',
  4 => 'ldap_server',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'first_name',
  1 => 'last_name',
  2 => 'status',
  3 => 'org_id',
  4 => 'ldap_server',
));
;
	}


	/**
	 * Check the user's password against the LDAP server
	 * Algorithm:
	 * 1) Connect to the LDAP server, using a predefined account (or anonymously)
	 * 2) Search for the specified user, based on a specific search query/pattern
	 * 3) If exactly one user is found, continue, otherwise return false (wrong user or wrong query configured)
	 * 3) Bind again to LDAP using the DN of the found user and the password
	 * 4) If the bind is successful return true, otherwise return false (wrong password)
	 *
	 * @param string $sPassword The user's password to validate against the LDAP server
	 *
	 * @return boolean True if the password is Ok, false otherwise
	 * @throws \ArchivedObjectException
	 * @throws \CoreException
	 */
	public function CheckCredentials($sPassword)
	{
		$sServer = $this->Get('ldap_server');
		if (empty($sServer))
		{
			$sLDAPHost = MetaModel::GetModuleSetting('authent-ldap', 'host', 'localhost');
			$iLDAPPort = MetaModel::GetModuleSetting('authent-ldap', 'port', 389);

			$sDefaultLDAPUser = MetaModel::GetModuleSetting('authent-ldap', 'default_user', '');
			$sDefaultLDAPPwd = MetaModel::GetModuleSetting('authent-ldap', 'default_pwd', '');
			$bLDAPStartTLS = MetaModel::GetModuleSetting('authent-ldap', 'start_tls', false);

			$aOptions = MetaModel::GetModuleSetting('authent-ldap', 'options', array());
			$sLDAPUserQuery = MetaModel::GetModuleSetting('authent-ldap', 'user_query', '');
			$sBaseDN = MetaModel::GetModuleSetting('authent-ldap', 'base_dn', '');
			$bDebug = MetaModel::GetModuleSetting('authent-ldap', 'debug', false);
		}
		else
		{
			$aServers = MetaModel::GetModuleSetting('authent-ldap', 'servers', array());
			if (!array_key_exists($sServer, $aServers))
			{
				$bDebug = MetaModel::GetModuleSetting('authent-ldap', 'debug', false);
				$this->LogIssue($bDebug, "ldap_authentication: bad LDAP server configuration: '$sServer' not found");
				return false;
			}
			$aServerParams = $aServers[$sServer];
			$sLDAPHost = isset($aServerParams['host']) ? $aServerParams['host'] : 'localhost';
			$iLDAPPort = isset($aServerParams['port']) ? $aServerParams['port'] : 389;
			$sDefaultLDAPUser = isset($aServerParams['default_user']) ? $aServerParams['default_user'] : '';
			$sDefaultLDAPPwd = isset($aServerParams['default_pwd']) ? $aServerParams['default_pwd'] : '';
			$bLDAPStartTLS = isset($aServerParams['start_tls']) ? $aServerParams['start_tls'] : false;
			$aOptions = isset($aServerParams['options']) ? $aServerParams['options'] : array();
			$sLDAPUserQuery = isset($aServerParams['user_query']) ? $aServerParams['user_query'] : '';
			$sBaseDN = isset($aServerParams['base_dn']) ? $aServerParams['base_dn'] : '';
			$bDebug = isset($aServerParams['debug']) ? $aServerParams['debug'] : false;
		}

		$hDS = @ldap_connect($sLDAPHost, $iLDAPPort);
		if ($hDS === false)
		{
			$this->LogIssue($bDebug, "ldap_authentication: can not connect to the LDAP server '$sLDAPHost' (port: $iLDAPPort). Check the configuration file config-itop.php.");
			return false;
		}
		if (array_key_exists(LDAP_OPT_DEBUG_LEVEL, $aOptions))
		{
			// Set debug level before trying to connect, so that debug info appear in the PHP error log if ldap_connect goes wrong
			$bRet = ldap_set_option($hDS, LDAP_OPT_DEBUG_LEVEL, $aOptions[LDAP_OPT_DEBUG_LEVEL]);
			$this->LogInfo($bDebug, "ldap_set_option('LDAP_OPT_DEBUG_LEVEL', '{$aOptions[LDAP_OPT_DEBUG_LEVEL]}') returned ".($bRet ? 'true' : 'false'));
		}
		foreach($aOptions as $name => $value)
		{
			$bRet = ldap_set_option($hDS, $name, $value);
			$this->LogInfo($bDebug, "ldap_set_option('$name', '$value') returned ".($bRet ? 'true' : 'false'));
		}
		if ($bLDAPStartTLS)
		{
			$this->LogInfo($bDebug, "ldap_authentication: start tls required.");
			$hStartTLS = ldap_start_tls($hDS);
			//$this->LogIssue($bDebug, "ldap_authentication: hStartTLS = '$hStartTLS'");
			if (!$hStartTLS)
			{
				$this->LogIssue($bDebug, "ldap_authentication: start tls failed.");
				return false;
			}
		}

		if ($bind = @ldap_bind($hDS, $sDefaultLDAPUser, $sDefaultLDAPPwd))
		{
			// Search for the person, using the specified query expression
			$sLogin = $this->Get('login');
			$iContactId = $this->Get('contactid');
			$sFirstName = '';
			$sLastName = '';
			$sEMail = '';
			if ($iContactId > 0)
			{
				$oPerson = MetaModel::GetObject('Person', $iContactId);
				if (is_object($oPerson))
				{
					$sFirstName = $oPerson->Get('first_name');
					$sLastName = $oPerson->Get('name');
					$sEMail = $oPerson->Get('email');
				}
			}
			// %1$s => login
			// %2$s => first name
			// %3$s => last name
			// %4$s => email
			$sQuery = sprintf($sLDAPUserQuery, $sLogin, $sFirstName, $sLastName, $sEMail);
			$hSearchResult = @ldap_search($hDS, $sBaseDN, $sQuery);

			$iCountEntries = ($hSearchResult !== false) ? @ldap_count_entries($hDS, $hSearchResult) : 0;
			switch($iCountEntries)
			{
				case 1:
				// Exactly one entry found, let's check the password by trying to bind with this user
				$aEntry = @ldap_get_entries($hDS, $hSearchResult);
				$sUserDN = $aEntry[0]['dn'];
				$bUserBind =  @ldap_bind($hDS, $sUserDN, $sPassword);
				if (($bUserBind !== false) && !empty($sPassword))
				{
					@ldap_unbind($hDS);
					return true; // Password Ok
				}
				$this->LogIssue($bDebug, "ldap_authentication: wrong password for user: '$sUserDN'.");
				return false; // Wrong password
				break;

				case 0:
				// User not found...
				$this->LogIssue($bDebug, "ldap_authentication: no entry found with the query '$sQuery', base_dn = '$sBaseDN'. User not found in LDAP.");
				break;

				default:
				// More than one entry... maybe the query is not specific enough...
				$this->LogIssue($bDebug, "ldap_authentication: several (".@ldap_count_entries($hDS, $hSearchResult).") entries match the query '$sQuery', base_dn = '$sBaseDN', check that the query defined in config-itop.php is specific enough.");
			}
			return false;
		}
		else
		{
			// Trace: invalid default user for LDAP initial binding
			$this->LogIssue($bDebug, "ldap_authentication: cannot bind to the LDAP server '$sLDAPHost' (port: $iLDAPPort), user='$sDefaultLDAPUser', pwd='****'. Error: '".ldap_error($hDS)."'. Check the configuration file config-itop.php.");
			return false;
		}
	}


	public function TrustWebServerContext()
	{
		return false;
	}


	public function CanChangePassword()
	{
		return false;
	}


	public function ChangePassword($sOldPassword, $sNewPassword)
	{
		return false;
	}


	protected function LogIssue($bDebug, $sMessage, $aData = array())
	{
		if ($bDebug)
		{
			if (MetaModel::IsLogEnabledIssue() && MetaModel::IsValidClass('EventIssue'))
			{
				$oLog = new EventIssue();

				$oLog->Set('message', $sMessage);
				$oLog->Set('userinfo', '');
				$oLog->Set('issue', 'LDAP Authentication');
				$oLog->Set('impact', 'User login rejected');
				$oLog->Set('data', $aData);
				$oLog->DBInsertNoReload();
			}
		}
		IssueLog::Error($sMessage);
	}


	protected function LogInfo($bDebug, $sMessage)
	{
		if ($bDebug)
		{
			IssueLog::Info($sMessage);
		}
	}

}