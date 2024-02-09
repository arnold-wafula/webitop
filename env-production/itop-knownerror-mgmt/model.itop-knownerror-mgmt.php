<?php
//
// File generated by ... on the 2024-02-09T14:12:15+0100
// Please do not edit manually
//

/**
 * Classes and menus for itop-knownerror-mgmt (version 3.1.1)
 *
 * @author      iTop compiler
 * @license     http://opensource.org/licenses/AGPL-3.0
 */


/**
* Description of known error
*/
class KnownError extends cmdbAbstractObject
{
	public static function Init()
	{
		$aParams = array(			'category' => 'bizmodel,searchable,knownerrormgmt',
			'key_type' => 'autoincrement',
			'name_attcode' => array('name'),
			'image_attcode' => '',
			'state_attcode' => '',
			'reconc_keys' => array('org_id', 'name'),
			'db_table' => 'knownerror',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
			'style' =>  new ormStyle(null, null, null, null, null, 'itop-knownerror-mgmt/../../images/icons/icons8-book-error.svg'),);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeString("name", array("sql"=>'name', "is_null_allowed"=>false, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalKey("org_id", array("targetclass"=>'Organization', "allowed_values"=>null, "sql"=>'cust_id', "is_null_allowed"=>false, "on_target_delete"=>DEL_MANUAL, "display_style"=>'select', "create_temporary_object"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("cust_name", array("extkey_attcode"=>'org_id', "target_attcode"=>'name', "allowed_values"=>null, "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalKey("problem_id", array("targetclass"=>'Problem', "allowed_values"=>null, "sql"=>'problem_id', "is_null_allowed"=>true, "on_target_delete"=>DEL_MANUAL, "display_style"=>'select', "create_temporary_object"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("problem_ref", array("extkey_attcode"=>'problem_id', "target_attcode"=>'ref', "allowed_values"=>null, "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeText("symptom", array("sql"=>'symptom', "is_null_allowed"=>false, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeText("root_cause", array("sql"=>'rootcause', "is_null_allowed"=>true, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeText("workaround", array("sql"=>'workaround', "is_null_allowed"=>true, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeText("solution", array("sql"=>'solution', "is_null_allowed"=>true, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeString("error_code", array("sql"=>'error_code', "is_null_allowed"=>true, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeEnum("domain", array("allowed_values"=>new ValueSetEnum("Application,Desktop,Network,Server" , true), "display_style"=>'list', "sql"=>'domain', "default_value"=>'Application', "is_null_allowed"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeString("vendor", array("sql"=>'vendor', "is_null_allowed"=>true, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeString("model", array("sql"=>'model', "is_null_allowed"=>true, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeString("version", array("sql"=>'version', "is_null_allowed"=>true, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeLinkedSetIndirect("ci_list", array("linked_class"=>'lnkErrorToFunctionalCI', "ext_key_to_me"=>'error_id', "ext_key_to_remote"=>'functionalci_id', "count_min"=>0, "count_max"=>0, "duplicates"=>false, "display_style"=>'', "allowed_values"=>null, "with_php_constraint"=>false, "with_php_computation"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeLinkedSetIndirect("document_list", array("linked_class"=>'lnkDocumentToError', "ext_key_to_me"=>'error_id', "ext_key_to_remote"=>'document_id', "count_min"=>0, "count_max"=>0, "duplicates"=>false, "display_style"=>'', "allowed_values"=>null, "with_php_constraint"=>false, "with_php_computation"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));



		MetaModel::Init_SetZListItems('details', array (
  0 => 'name',
  1 => 'org_id',
  2 => 'problem_id',
  3 => 'error_code',
  4 => 'domain',
  5 => 'vendor',
  6 => 'model',
  7 => 'version',
  8 => 'symptom',
  9 => 'root_cause',
  10 => 'workaround',
  11 => 'solution',
  12 => 'ci_list',
  13 => 'document_list',
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'name',
  1 => 'org_id',
  2 => 'problem_id',
  3 => 'error_code',
  4 => 'domain',
  5 => 'symptom',
));
		MetaModel::Init_SetZListItems('default_search', array (
  0 => 'name',
  1 => 'error_code',
  2 => 'symptom',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'org_id',
  1 => 'problem_id',
  2 => 'error_code',
  3 => 'symptom',
));
;
	}


}

/**
* n-n link between any Infra and a Known Error
*/
class lnkErrorToFunctionalCI extends cmdbAbstractObject
{
	public static function Init()
	{
		$aParams = array(			'category' => 'bizmodel,searchable,knownerrormgmt,lnkknownerror',
			'key_type' => 'autoincrement',
			'is_link' => true,
			'name_attcode' => '',
			'image_attcode' => '',
			'state_attcode' => '',
			'reconc_keys' => array('functionalci_id', 'error_id'),
			'db_table' => 'lnkerrortofunctionalci',
			'db_key_field' => 'link_id',
			'db_finalclass_field' => '',
			'style' =>  new ormStyle(null, null, null, null, null, null),
			'uniqueness_rules' => array (
  'no_duplicate' => 
  array (
    'attributes' => 
    array (
      0 => 'error_id',
      1 => 'functionalci_id',
    ),
    'filter' => '',
    'disabled' => false,
    'is_blocking' => true,
  ),
),);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeExternalKey("functionalci_id", array("targetclass"=>'FunctionalCI', "allowed_values"=>null, "sql"=>'functionalci_id', "is_null_allowed"=>false, "on_target_delete"=>DEL_AUTO, "display_style"=>'select', "create_temporary_object"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("functionalci_name", array("extkey_attcode"=>'functionalci_id', "target_attcode"=>'name', "allowed_values"=>null, "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalKey("error_id", array("targetclass"=>'KnownError', "allowed_values"=>null, "sql"=>'error_id', "is_null_allowed"=>false, "on_target_delete"=>DEL_AUTO, "display_style"=>'select', "create_temporary_object"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("error_name", array("extkey_attcode"=>'error_id', "target_attcode"=>'name', "allowed_values"=>null, "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeString("reason", array("sql"=>'dummy', "is_null_allowed"=>true, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));



		MetaModel::Init_SetZListItems('details', array (
  0 => 'error_id',
  1 => 'functionalci_id',
  2 => 'reason',
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'functionalci_id',
  1 => 'error_id',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'functionalci_id',
  1 => 'error_id',
  2 => 'reason',
));
;
	}


}

/**
* n-n link between any Contract and a Document
*/
class lnkDocumentToError extends cmdbAbstractObject
{
	public static function Init()
	{
		$aParams = array(			'category' => 'bizmodel,searchable,knownerrormgmt,lnkknownerror',
			'key_type' => 'autoincrement',
			'is_link' => true,
			'name_attcode' => array('document_name', 'error_name'),
			'image_attcode' => '',
			'state_attcode' => '',
			'reconc_keys' => array('document_id', 'error_id'),
			'db_table' => 'lnkdocumenttoerror',
			'db_key_field' => 'link_id',
			'db_finalclass_field' => '',
			'style' =>  new ormStyle(null, null, null, null, null, null),
			'uniqueness_rules' => array (
  'no_duplicate' => 
  array (
    'attributes' => 
    array (
      0 => 'document_id',
      1 => 'error_id',
    ),
    'filter' => '',
    'disabled' => false,
    'is_blocking' => true,
  ),
),);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeExternalKey("document_id", array("targetclass"=>'Document', "allowed_values"=>null, "sql"=>'document_id', "is_null_allowed"=>false, "on_target_delete"=>DEL_AUTO, "display_style"=>'select', "create_temporary_object"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("document_name", array("extkey_attcode"=>'document_id', "target_attcode"=>'name', "allowed_values"=>null, "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalKey("error_id", array("targetclass"=>'KnownError', "allowed_values"=>null, "sql"=>'error_id', "is_null_allowed"=>false, "on_target_delete"=>DEL_AUTO, "display_style"=>'select', "create_temporary_object"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("error_name", array("extkey_attcode"=>'error_id', "target_attcode"=>'name', "allowed_values"=>null, "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeString("link_type", array("sql"=>'link_type', "is_null_allowed"=>true, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));



		MetaModel::Init_SetZListItems('details', array (
  0 => 'document_id',
  1 => 'error_name',
  2 => 'link_type',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'document_id',
  1 => 'error_name',
  2 => 'link_type',
));
;
	}


}
//
// Menus
//
class MenuCreation_itop_knownerror_mgmt extends ModuleHandlerAPI
{
	public static function OnMenuCreation()
	{
		global $__comp_menus__; // ensure that the global variable is indeed global !
		$__comp_menus__['ProblemManagement'] = new MenuGroup('ProblemManagement', 42, 'fas fa-question' , null, UR_ACTION_MODIFY, UR_ALLOWED_YES, null);
		$__comp_menus__['NewError'] = new NewObjectMenuNode('NewError', 'KnownError', $__comp_menus__['ProblemManagement']->GetIndex(), 3 , null, UR_ACTION_MODIFY, UR_ALLOWED_YES, null);
		$__comp_menus__['SearchError'] = new SearchMenuNode('SearchError', 'KnownError', $__comp_menus__['ProblemManagement']->GetIndex(), 4, null , null, UR_ACTION_MODIFY, UR_ALLOWED_YES, null);
		$__comp_menus__['Problem:Shortcuts'] = new TemplateMenuNode('Problem:Shortcuts', '', $__comp_menus__['ProblemManagement']->GetIndex(), 5 , null, UR_ACTION_MODIFY, UR_ALLOWED_YES, null);
		$__comp_menus__['Problem:KnownErrors'] = new OQLMenuNode('Problem:KnownErrors', "SELECT KnownError", $__comp_menus__['Problem:Shortcuts']->GetIndex(), 3, true , null, UR_ACTION_MODIFY, UR_ALLOWED_YES, null, true);
	}
} // class MenuCreation_itop_knownerror_mgmt
