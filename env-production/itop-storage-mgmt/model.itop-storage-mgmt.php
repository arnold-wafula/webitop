<?php
//
// File generated by ... on the 2024-02-09T14:12:16+0100
// Please do not edit manually
//

/**
 * Classes and menus for itop-storage-mgmt (version 3.1.1)
 *
 * @author      iTop compiler
 * @license     http://opensource.org/licenses/AGPL-3.0
 */



class StorageSystem extends DatacenterDevice
{
	public static function Init()
	{
		$aParams = array(			'category' => 'bizmodel,searchable',
			'key_type' => 'autoincrement',
			'complementary_name_attcode' => array('organization_name', 'location_name'),
			'name_attcode' => array('name'),
			'image_attcode' => '',
			'state_attcode' => '',
			'reconc_keys' => array('name', 'org_id', 'organization_name'),
			'db_table' => 'storagesystem',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
			'style' =>  new ormStyle(null, null, null, null, null, 'itop-storage-mgmt/../../images/icons/icons8-server-storage.svg'),);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeLinkedSet("logicalvolume_list", array("linked_class"=>'LogicalVolume', "ext_key_to_me"=>'storagesystem_id', "count_min"=>0, "count_max"=>0, "display_style"=>'', "edit_mode"=>LINKSET_EDITMODE_INPLACE, "allowed_values"=>null, "with_php_constraint"=>false, "with_php_computation"=>false, "depends_on"=>array(), "always_load_in_tables"=>false, "tracking_level"=>LINKSET_TRACKING_ALL)));



		MetaModel::Init_SetZListItems('details', array (
  0 => 'contacts_list',
  1 => 'documents_list',
  2 => 'applicationsolution_list',
  3 => 'physicalinterface_list',
  4 => 'fiberinterfacelist_list',
  5 => 'networkdevice_list',
  6 => 'logicalvolume_list',
  7 => 'san_list',
  8 => 'providercontracts_list',
  9 => 'services_list',
  'col:col1' => 
  array (
    'fieldset:Server:baseinfo' => 
    array (
      0 => 'name',
      1 => 'org_id',
      2 => 'status',
      3 => 'business_criticity',
      4 => 'location_id',
      5 => 'rack_id',
      6 => 'enclosure_id',
    ),
    'fieldset:Server:moreinfo' => 
    array (
      0 => 'brand_id',
      1 => 'model_id',
      2 => 'managementip',
      3 => 'nb_u',
      4 => 'serialnumber',
      5 => 'asset_number',
    ),
  ),
  'col:col2' => 
  array (
    'fieldset:Server:Date' => 
    array (
      0 => 'move2production',
      1 => 'purchase_date',
      2 => 'end_of_warranty',
    ),
    'fieldset:Server:power' => 
    array (
      0 => 'powerA_id',
      1 => 'powerB_id',
      2 => 'redundancy',
    ),
    'fieldset:Server:otherinfo' => 
    array (
      0 => 'description',
    ),
  ),
));
		MetaModel::Init_SetZListItems('summary', array (
  0 => 'org_id',
  1 => 'location_id',
  2 => 'model_id',
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'name',
  1 => 'org_id',
  2 => 'status',
  3 => 'business_criticity',
  4 => 'location_id',
  5 => 'brand_id',
  6 => 'model_id',
  7 => 'managementip',
  8 => 'serialnumber',
  9 => 'asset_number',
  10 => 'powerA_id',
  11 => 'powerB_id',
  12 => 'move2production',
  13 => 'purchase_date',
  14 => 'end_of_warranty',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'org_id',
  1 => 'status',
  2 => 'business_criticity',
  3 => 'location_id',
  4 => 'brand_id',
  5 => 'model_id',
  6 => 'serialnumber',
));
;
	}

	public static function GetRelationQueriesEx($sRelCode)
	{
		switch ($sRelCode)
		{
		case 'impacts':
			$aRels = array(
				'logicalvolume' => array (
  '_legacy_' => false,
  'sDirection' => 'both',
  'sDefinedInClass' => 'StorageSystem',
  'sNeighbour' => 'logicalvolume',
  'sQueryDown' => NULL,
  'sQueryUp' => NULL,
  'sAttribute' => 'logicalvolume_list',
),
			);
			return array_merge($aRels, parent::GetRelationQueriesEx($sRelCode));

		default:
			return parent::GetRelationQueriesEx($sRelCode);
		}
	}

}


class SANSwitch extends DatacenterDevice
{
	public static function Init()
	{
		$aParams = array(			'category' => 'bizmodel,searchable',
			'key_type' => 'autoincrement',
			'complementary_name_attcode' => array('organization_name', 'location_name'),
			'name_attcode' => array('name'),
			'image_attcode' => '',
			'state_attcode' => '',
			'reconc_keys' => array('name', 'org_id', 'organization_name'),
			'db_table' => 'sanswitch',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
			'style' =>  new ormStyle(null, null, null, null, null, 'itop-storage-mgmt/../../images/icons/icons8-switch-san.svg'),);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeLinkedSetIndirect("datacenterdevice_list", array("linked_class"=>'lnkSanToDatacenterDevice', "ext_key_to_me"=>'san_id', "ext_key_to_remote"=>'datacenterdevice_id', "count_min"=>0, "count_max"=>0, "duplicates"=>false, "display_style"=>'', "allowed_values"=>null, "with_php_constraint"=>false, "with_php_computation"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));



		MetaModel::Init_SetZListItems('details', array (
  0 => 'contacts_list',
  1 => 'documents_list',
  2 => 'applicationsolution_list',
  3 => 'physicalinterface_list',
  4 => 'fiberinterfacelist_list',
  5 => 'networkdevice_list',
  6 => 'datacenterdevice_list',
  7 => 'providercontracts_list',
  8 => 'services_list',
  'col:col1' => 
  array (
    'fieldset:Server:baseinfo' => 
    array (
      0 => 'name',
      1 => 'org_id',
      2 => 'status',
      3 => 'business_criticity',
      4 => 'location_id',
      5 => 'rack_id',
      6 => 'enclosure_id',
    ),
    'fieldset:Server:moreinfo' => 
    array (
      0 => 'brand_id',
      1 => 'model_id',
      2 => 'nb_u',
      3 => 'managementip',
      4 => 'serialnumber',
      5 => 'asset_number',
    ),
  ),
  'col:col2' => 
  array (
    'fieldset:Server:Date' => 
    array (
      0 => 'move2production',
      1 => 'purchase_date',
      2 => 'end_of_warranty',
    ),
    'fieldset:Server:power' => 
    array (
      0 => 'powerA_id',
      1 => 'powerB_id',
      2 => 'redundancy',
    ),
    'fieldset:Server:otherinfo' => 
    array (
      0 => 'description',
    ),
  ),
));
		MetaModel::Init_SetZListItems('summary', array (
  0 => 'org_id',
  1 => 'location_id',
  2 => 'model_id',
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'name',
  1 => 'org_id',
  2 => 'status',
  3 => 'business_criticity',
  4 => 'location_id',
  5 => 'brand_id',
  6 => 'model_id',
  7 => 'managementip',
  8 => 'serialnumber',
  9 => 'asset_number',
  10 => 'powerA_id',
  11 => 'powerB_id',
  12 => 'move2production',
  13 => 'purchase_date',
  14 => 'end_of_warranty',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'org_id',
  1 => 'status',
  2 => 'business_criticity',
  3 => 'location_id',
  4 => 'brand_id',
  5 => 'model_id',
  6 => 'serialnumber',
));
;
	}

	public static function GetRelationQueriesEx($sRelCode)
	{
		switch ($sRelCode)
		{
		case 'impacts':
			$aRels = array(
				'datacenterdevice' => array (
  '_legacy_' => false,
  'sDirection' => 'both',
  'sDefinedInClass' => 'SANSwitch',
  'sNeighbour' => 'datacenterdevice',
  'sQueryDown' => NULL,
  'sQueryUp' => NULL,
  'sAttribute' => 'datacenterdevice_list',
),
			);
			return array_merge($aRels, parent::GetRelationQueriesEx($sRelCode));

		default:
			return parent::GetRelationQueriesEx($sRelCode);
		}
	}

}


class TapeLibrary extends DatacenterDevice
{
	public static function Init()
	{
		$aParams = array(			'category' => 'bizmodel,searchable',
			'key_type' => 'autoincrement',
			'complementary_name_attcode' => array('organization_name', 'location_name'),
			'name_attcode' => array('name'),
			'image_attcode' => '',
			'state_attcode' => '',
			'reconc_keys' => array('name', 'org_id', 'organization_name'),
			'db_table' => 'tapelibrary',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
			'style' =>  new ormStyle(null, null, null, null, null, 'itop-storage-mgmt/../../images/icons/icons8-tape-library.svg'),);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeLinkedSet("tapes_list", array("linked_class"=>'Tape', "ext_key_to_me"=>'tapelibrary_id', "count_min"=>0, "count_max"=>0, "display_style"=>'', "edit_mode"=>LINKSET_EDITMODE_INPLACE, "allowed_values"=>null, "with_php_constraint"=>false, "with_php_computation"=>false, "depends_on"=>array(), "always_load_in_tables"=>false, "tracking_level"=>LINKSET_TRACKING_ALL)));



		MetaModel::Init_SetZListItems('details', array (
  0 => 'tapes_list',
  1 => 'contacts_list',
  2 => 'documents_list',
  3 => 'applicationsolution_list',
  4 => 'physicalinterface_list',
  5 => 'fiberinterfacelist_list',
  6 => 'networkdevice_list',
  7 => 'providercontracts_list',
  8 => 'services_list',
  'col:col1' => 
  array (
    'fieldset:Server:baseinfo' => 
    array (
      0 => 'name',
      1 => 'org_id',
      2 => 'status',
      3 => 'business_criticity',
      4 => 'location_id',
      5 => 'rack_id',
      6 => 'enclosure_id',
    ),
    'fieldset:Server:moreinfo' => 
    array (
      0 => 'brand_id',
      1 => 'model_id',
      2 => 'managementip',
      3 => 'nb_u',
      4 => 'serialnumber',
      5 => 'asset_number',
    ),
  ),
  'col:col2' => 
  array (
    'fieldset:Server:Date' => 
    array (
      0 => 'move2production',
      1 => 'purchase_date',
      2 => 'end_of_warranty',
    ),
    'fieldset:Server:power' => 
    array (
      0 => 'powerA_id',
      1 => 'powerB_id',
      2 => 'redundancy',
    ),
    'fieldset:Server:otherinfo' => 
    array (
      0 => 'description',
    ),
  ),
));
		MetaModel::Init_SetZListItems('summary', array (
  0 => 'org_id',
  1 => 'location_id',
  2 => 'model_id',
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'name',
  1 => 'org_id',
  2 => 'status',
  3 => 'business_criticity',
  4 => 'location_id',
  5 => 'brand_id',
  6 => 'model_id',
  7 => 'managementip',
  8 => 'serialnumber',
  9 => 'asset_number',
  10 => 'powerA_id',
  11 => 'powerB_id',
  12 => 'move2production',
  13 => 'purchase_date',
  14 => 'end_of_warranty',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'org_id',
  1 => 'status',
  2 => 'business_criticity',
  3 => 'location_id',
  4 => 'brand_id',
  5 => 'model_id',
  6 => 'serialnumber',
));
;
	}

	public static function GetRelationQueriesEx($sRelCode)
	{
		switch ($sRelCode)
		{
		case 'impacts':
			$aRels = array(
				'tape' => array (
  '_legacy_' => false,
  'sDirection' => 'both',
  'sDefinedInClass' => 'TapeLibrary',
  'sNeighbour' => 'tape',
  'sQueryDown' => NULL,
  'sQueryUp' => NULL,
  'sAttribute' => 'tapes_list',
),
			);
			return array_merge($aRels, parent::GetRelationQueriesEx($sRelCode));

		default:
			return parent::GetRelationQueriesEx($sRelCode);
		}
	}

}


class NAS extends DatacenterDevice
{
	public static function Init()
	{
		$aParams = array(			'category' => 'bizmodel,searchable',
			'key_type' => 'autoincrement',
			'complementary_name_attcode' => array('organization_name', 'location_name'),
			'name_attcode' => array('name'),
			'image_attcode' => '',
			'state_attcode' => '',
			'reconc_keys' => array('name', 'org_id', 'organization_name'),
			'db_table' => 'nas',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
			'style' =>  new ormStyle(null, null, null, null, null, 'itop-storage-mgmt/../../images/icons/icons8-nas.svg'),);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeLinkedSet("nasfilesystem_list", array("linked_class"=>'NASFileSystem', "ext_key_to_me"=>'nas_id', "count_min"=>0, "count_max"=>0, "display_style"=>'', "edit_mode"=>LINKSET_EDITMODE_INPLACE, "allowed_values"=>null, "with_php_constraint"=>false, "with_php_computation"=>false, "depends_on"=>array(), "always_load_in_tables"=>false, "tracking_level"=>LINKSET_TRACKING_ALL)));



		MetaModel::Init_SetZListItems('details', array (
  0 => 'contacts_list',
  1 => 'documents_list',
  2 => 'applicationsolution_list',
  3 => 'physicalinterface_list',
  4 => 'fiberinterfacelist_list',
  5 => 'networkdevice_list',
  6 => 'nasfilesystem_list',
  7 => 'providercontracts_list',
  8 => 'services_list',
  'col:col1' => 
  array (
    'fieldset:Server:baseinfo' => 
    array (
      0 => 'name',
      1 => 'org_id',
      2 => 'status',
      3 => 'business_criticity',
      4 => 'location_id',
      5 => 'rack_id',
      6 => 'enclosure_id',
    ),
    'fieldset:Server:moreinfo' => 
    array (
      0 => 'brand_id',
      1 => 'model_id',
      2 => 'managementip',
      3 => 'nb_u',
      4 => 'serialnumber',
      5 => 'asset_number',
    ),
  ),
  'col:col2' => 
  array (
    'fieldset:Server:Date' => 
    array (
      0 => 'move2production',
      1 => 'purchase_date',
      2 => 'end_of_warranty',
    ),
    'fieldset:Server:power' => 
    array (
      0 => 'powerA_id',
      1 => 'powerB_id',
      2 => 'redundancy',
    ),
    'fieldset:Server:otherinfo' => 
    array (
      0 => 'description',
    ),
  ),
));
		MetaModel::Init_SetZListItems('summary', array (
  0 => 'org_id',
  1 => 'location_id',
  2 => 'model_id',
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'name',
  1 => 'org_id',
  2 => 'status',
  3 => 'business_criticity',
  4 => 'location_id',
  5 => 'brand_id',
  6 => 'model_id',
  7 => 'managementip',
  8 => 'serialnumber',
  9 => 'asset_number',
  10 => 'powerA_id',
  11 => 'powerB_id',
  12 => 'move2production',
  13 => 'purchase_date',
  14 => 'end_of_warranty',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'org_id',
  1 => 'status',
  2 => 'business_criticity',
  3 => 'location_id',
  4 => 'brand_id',
  5 => 'model_id',
  6 => 'serialnumber',
));
;
	}

	public static function GetRelationQueriesEx($sRelCode)
	{
		switch ($sRelCode)
		{
		case 'impacts':
			$aRels = array(
				'nasfilesystem' => array (
  '_legacy_' => false,
  'sDirection' => 'both',
  'sDefinedInClass' => 'NAS',
  'sNeighbour' => 'nasfilesystem',
  'sQueryDown' => NULL,
  'sQueryUp' => NULL,
  'sAttribute' => 'nasfilesystem_list',
),
			);
			return array_merge($aRels, parent::GetRelationQueriesEx($sRelCode));

		default:
			return parent::GetRelationQueriesEx($sRelCode);
		}
	}

}


class FiberChannelInterface extends NetworkInterface
{
	public static function Init()
	{
		$aParams = array(			'category' => 'bizmodel,searchable',
			'key_type' => 'autoincrement',
			'name_attcode' => array('name', 'datacenterdevice_name'),
			'image_attcode' => '',
			'state_attcode' => '',
			'reconc_keys' => array('name', 'datacenterdevice_id', 'datacenterdevice_name'),
			'db_table' => 'fiberchannelinterface',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
			'style' =>  new ormStyle(null, null, null, null, null, 'itop-storage-mgmt/../../images/icons/icons8-globe-fiber.svg'),
			'obsolescence_expression' => 'datacenterdevice_id_obsolescence_flag',);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeDecimal("speed", array("sql"=>'speed', "is_null_allowed"=>true, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "digits"=>6, "decimals"=>2, "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeString("topology", array("sql"=>'topology', "is_null_allowed"=>true, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeString("wwn", array("sql"=>'wwn', "is_null_allowed"=>true, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalKey("datacenterdevice_id", array("targetclass"=>'DatacenterDevice', "allowed_values"=>null, "sql"=>'datacenterdevice_id', "is_null_allowed"=>false, "on_target_delete"=>DEL_AUTO, "display_style"=>'select', "create_temporary_object"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("datacenterdevice_name", array("extkey_attcode"=>'datacenterdevice_id', "target_attcode"=>'name', "allowed_values"=>null, "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("org_id", array("extkey_attcode"=>'datacenterdevice_id', "target_attcode"=>'org_id', "allowed_values"=>null, "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("location_id", array("extkey_attcode"=>'datacenterdevice_id', "target_attcode"=>'location_id', "allowed_values"=>null, "always_load_in_tables"=>false)));



		MetaModel::Init_SetZListItems('details', array (
  0 => 'name',
  1 => 'datacenterdevice_id',
  2 => 'location_id',
  3 => 'org_id',
  4 => 'speed',
  5 => 'topology',
  6 => 'wwn',
));
		MetaModel::Init_SetZListItems('summary', array (
  0 => 'wwn',
  1 => 'datacenterdevice_id',
  2 => 'location_id',
  3 => 'org_id',
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'name',
  1 => 'speed',
  2 => 'topology',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'name',
  1 => 'datacenterdevice_id',
  2 => 'speed',
  3 => 'topology',
));
;
	}


}


class Tape extends cmdbAbstractObject
{
	public static function Init()
	{
		$aParams = array(			'category' => 'bizmodel,searchable,configmgmt',
			'key_type' => 'autoincrement',
			'name_attcode' => array('name'),
			'image_attcode' => '',
			'state_attcode' => '',
			'reconc_keys' => array('tapelibrary_id', 'name'),
			'db_table' => 'tape',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
			'style' =>  new ormStyle(null, null, null, null, null, 'itop-storage-mgmt/../../images/icons/icons8-cassette.svg'),
			'obsolescence_expression' => 'tapelibrary_id_obsolescence_flag',);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeString("name", array("sql"=>'name', "is_null_allowed"=>false, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeText("description", array("sql"=>'description', "is_null_allowed"=>true, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeString("size", array("sql"=>'size', "is_null_allowed"=>true, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalKey("tapelibrary_id", array("targetclass"=>'TapeLibrary', "allowed_values"=>null, "sql"=>'tapelibrary_id', "is_null_allowed"=>false, "on_target_delete"=>DEL_AUTO, "display_style"=>'select', "create_temporary_object"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("tapelibrary_name", array("extkey_attcode"=>'tapelibrary_id', "target_attcode"=>'name', "allowed_values"=>null, "always_load_in_tables"=>false)));



		MetaModel::Init_SetZListItems('details', array (
  0 => 'name',
  1 => 'description',
  2 => 'tapelibrary_id',
  3 => 'size',
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'name',
  1 => 'tapelibrary_id',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'tapelibrary_id',
  1 => 'size',
));
;
	}


}


class NASFileSystem extends cmdbAbstractObject
{
	public static function Init()
	{
		$aParams = array(			'category' => 'bizmodel,searchable,configmgmt',
			'key_type' => 'autoincrement',
			'complementary_name_attcode' => array('nas_name', 'location_name'),
			'name_attcode' => array('name'),
			'image_attcode' => '',
			'state_attcode' => '',
			'reconc_keys' => array('nas_id', 'name'),
			'db_table' => 'nasfilesystem',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
			'style' =>  new ormStyle(null, null, null, null, null, 'itop-storage-mgmt/../../images/icons/icons8-map-as-drive.svg'),
			'obsolescence_expression' => 'nas_id_obsolescence_flag',);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeString("name", array("sql"=>'name', "is_null_allowed"=>false, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeText("description", array("sql"=>'description', "is_null_allowed"=>true, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeString("raid_level", array("sql"=>'raid_level', "is_null_allowed"=>true, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeString("size", array("sql"=>'size', "is_null_allowed"=>true, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalKey("nas_id", array("targetclass"=>'NAS', "allowed_values"=>null, "sql"=>'nas_id', "is_null_allowed"=>false, "on_target_delete"=>DEL_AUTO, "display_style"=>'select', "create_temporary_object"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("nas_name", array("extkey_attcode"=>'nas_id', "target_attcode"=>'name', "allowed_values"=>null, "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("org_id", array("extkey_attcode"=>'nas_id', "target_attcode"=>'org_id', "allowed_values"=>null, "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("location_id", array("extkey_attcode"=>'nas_id', "target_attcode"=>'location_id', "allowed_values"=>null, "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("location_name", array("extkey_attcode"=>'nas_id', "target_attcode"=>'location_name', "allowed_values"=>null, "always_load_in_tables"=>false)));



		MetaModel::Init_SetZListItems('details', array (
  0 => 'name',
  1 => 'nas_id',
  2 => 'location_id',
  3 => 'org_id',
  4 => 'description',
  5 => 'raid_level',
  6 => 'size',
));
		MetaModel::Init_SetZListItems('summary', array (
  0 => 'nas_id',
  1 => 'location_id',
  2 => 'org_id',
  3 => 'raid_level',
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'name',
  1 => 'nas_id',
  2 => 'raid_level',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'nas_id',
  1 => 'raid_level',
  2 => 'size',
));
;
	}


}


class LogicalVolume extends cmdbAbstractObject
{
	public static function Init()
	{
		$aParams = array(			'category' => 'bizmodel,searchable,configmgmt',
			'key_type' => 'autoincrement',
			'complementary_name_attcode' => array('lun_id'),
			'name_attcode' => array('storagesystem_name', 'name'),
			'image_attcode' => '',
			'state_attcode' => '',
			'reconc_keys' => array('lun_id', 'name', 'storagesystem_id', 'storagesystem_name'),
			'db_table' => 'logicalvolume',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
			'style' =>  new ormStyle(null, null, null, null, null, 'itop-storage-mgmt/../../images/icons/icons8-hdd.svg'),
			'obsolescence_expression' => 'storagesystem_id_obsolescence_flag',);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeString("name", array("sql"=>'name', "is_null_allowed"=>false, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeString("lun_id", array("sql"=>'lun_id', "is_null_allowed"=>false, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeText("description", array("sql"=>'description', "is_null_allowed"=>true, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeString("raid_level", array("sql"=>'raid_level', "is_null_allowed"=>true, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeString("size", array("sql"=>'size', "is_null_allowed"=>true, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalKey("storagesystem_id", array("targetclass"=>'StorageSystem', "allowed_values"=>null, "sql"=>'storagesystem_id', "is_null_allowed"=>false, "on_target_delete"=>DEL_AUTO, "display_style"=>'select', "create_temporary_object"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("storagesystem_name", array("extkey_attcode"=>'storagesystem_id', "target_attcode"=>'name', "allowed_values"=>null, "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("org_id", array("extkey_attcode"=>'storagesystem_id', "target_attcode"=>'org_id', "allowed_values"=>null, "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("location_id", array("extkey_attcode"=>'storagesystem_id', "target_attcode"=>'location_id', "allowed_values"=>null, "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("location_name", array("extkey_attcode"=>'storagesystem_id', "target_attcode"=>'location_name', "allowed_values"=>null, "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeLinkedSetIndirect("servers_list", array("linked_class"=>'lnkServerToVolume', "ext_key_to_me"=>'volume_id', "ext_key_to_remote"=>'server_id', "count_min"=>0, "count_max"=>0, "duplicates"=>false, "display_style"=>'', "allowed_values"=>null, "with_php_constraint"=>false, "with_php_computation"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeLinkedSetIndirect("virtualdevices_list", array("linked_class"=>'lnkVirtualDeviceToVolume', "ext_key_to_me"=>'volume_id', "ext_key_to_remote"=>'virtualdevice_id', "count_min"=>0, "count_max"=>0, "duplicates"=>false, "display_style"=>'', "allowed_values"=>null, "with_php_constraint"=>false, "with_php_computation"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));



		MetaModel::Init_SetZListItems('details', array (
  0 => 'name',
  1 => 'lun_id',
  2 => 'storagesystem_id',
  3 => 'location_id',
  4 => 'org_id',
  5 => 'description',
  6 => 'raid_level',
  7 => 'size',
  8 => 'servers_list',
  9 => 'virtualdevices_list',
));
		MetaModel::Init_SetZListItems('summary', array (
  0 => 'lun_id',
  1 => 'raid_level',
  2 => 'description',
  3 => 'storagesystem_id',
  4 => 'location_id',
  5 => 'org_id',
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'name',
  1 => 'lun_id',
  2 => 'raid_level',
  3 => 'storagesystem_id',
  4 => 'location_id',
  5 => 'org_id',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'lun_id',
  1 => 'storagesystem_id',
  2 => 'raid_level',
  3 => 'size',
  4 => 'location_id',
  5 => 'org_id',
));
;
	}

	public static function GetRelationQueriesEx($sRelCode)
	{
		switch ($sRelCode)
		{
		case 'impacts':
			$aRels = array(
				'server' => array (
  '_legacy_' => false,
  'sDirection' => 'both',
  'sDefinedInClass' => 'LogicalVolume',
  'sNeighbour' => 'server',
  'sQueryDown' => NULL,
  'sQueryUp' => NULL,
  'sAttribute' => 'servers_list',
),
				'VirtualDevice' => array (
  '_legacy_' => false,
  'sDirection' => 'both',
  'sDefinedInClass' => 'LogicalVolume',
  'sNeighbour' => 'VirtualDevice',
  'sQueryDown' => NULL,
  'sQueryUp' => NULL,
  'sAttribute' => 'virtualdevices_list',
),
			);
			return array_merge($aRels, parent::GetRelationQueriesEx($sRelCode));

		default:
			return parent::GetRelationQueriesEx($sRelCode);
		}
	}

}


class lnkServerToVolume extends cmdbAbstractObject
{
	public static function Init()
	{
		$aParams = array(			'category' => 'bizmodel,configmgmt',
			'key_type' => 'autoincrement',
			'is_link' => true,
			'name_attcode' => array('server_name', 'volume_name'),
			'image_attcode' => '',
			'state_attcode' => '',
			'reconc_keys' => array('volume_id', 'server_id'),
			'db_table' => 'lnkservertovolume',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
			'style' =>  new ormStyle(null, null, null, null, null, null),
			'uniqueness_rules' => array (
  'no_duplicate' => 
  array (
    'attributes' => 
    array (
      0 => 'server_id',
      1 => 'volume_id',
    ),
    'filter' => '',
    'disabled' => false,
    'is_blocking' => true,
  ),
),);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeExternalKey("volume_id", array("targetclass"=>'LogicalVolume', "allowed_values"=>null, "sql"=>'volume_id', "is_null_allowed"=>false, "on_target_delete"=>DEL_AUTO, "display_style"=>'select', "create_temporary_object"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("volume_name", array("extkey_attcode"=>'volume_id', "target_attcode"=>'name', "allowed_values"=>null, "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalKey("server_id", array("targetclass"=>'Server', "allowed_values"=>null, "sql"=>'server_id', "is_null_allowed"=>false, "on_target_delete"=>DEL_AUTO, "display_style"=>'select', "create_temporary_object"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("server_name", array("extkey_attcode"=>'server_id', "target_attcode"=>'name', "allowed_values"=>null, "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeString("size_used", array("sql"=>'size_used', "is_null_allowed"=>true, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));



		MetaModel::Init_SetZListItems('details', array (
  0 => 'server_id',
  1 => 'volume_id',
  2 => 'size_used',
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'volume_id',
  1 => 'server_id',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'server_id',
  1 => 'volume_id',
  2 => 'size_used',
));
;
	}


}


class lnkSanToDatacenterDevice extends cmdbAbstractObject
{
	public static function Init()
	{
		$aParams = array(			'category' => 'bizmodel,configmgmt',
			'key_type' => 'autoincrement',
			'is_link' => true,
			'name_attcode' => array('san_name', 'datacenterdevice_name'),
			'image_attcode' => '',
			'state_attcode' => '',
			'reconc_keys' => array('san_id', 'datacenterdevice_id'),
			'db_table' => 'lnkdatacenterdevicetosan',
			'db_key_field' => 'id',
			'db_finalclass_field' => '',
			'style' =>  new ormStyle(null, null, null, null, null, null),
			'uniqueness_rules' => array (
  'no_duplicate' => 
  array (
    'attributes' => 
    array (
      0 => 'san_id',
      1 => 'datacenterdevice_id',
    ),
    'filter' => '',
    'disabled' => false,
    'is_blocking' => true,
  ),
),);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeExternalKey("san_id", array("targetclass"=>'SANSwitch', "allowed_values"=>null, "sql"=>'san_id', "is_null_allowed"=>false, "on_target_delete"=>DEL_AUTO, "display_style"=>'select', "create_temporary_object"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("san_name", array("extkey_attcode"=>'san_id', "target_attcode"=>'name', "allowed_values"=>null, "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalKey("datacenterdevice_id", array("targetclass"=>'DatacenterDevice', "allowed_values"=>null, "sql"=>'datacenterdevice_id', "is_null_allowed"=>false, "on_target_delete"=>DEL_AUTO, "display_style"=>'select', "create_temporary_object"=>false, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeExternalField("datacenterdevice_name", array("extkey_attcode"=>'datacenterdevice_id', "target_attcode"=>'name', "allowed_values"=>null, "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeString("san_port", array("sql"=>'san_port', "is_null_allowed"=>true, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));
		MetaModel::Init_AddAttribute(new AttributeString("datacenterdevice_port", array("sql"=>'datacenterdevice_port', "is_null_allowed"=>true, "default_value"=>'', "allowed_values"=>null, "depends_on"=>array(), "always_load_in_tables"=>false)));



		MetaModel::Init_SetZListItems('details', array (
  0 => 'san_id',
  1 => 'san_port',
  2 => 'datacenterdevice_id',
  3 => 'datacenterdevice_port',
));
		MetaModel::Init_SetZListItems('standard_search', array (
  0 => 'san_id',
  1 => 'san_port',
  2 => 'datacenterdevice_id',
  3 => 'datacenterdevice_port',
));
		MetaModel::Init_SetZListItems('list', array (
  0 => 'san_id',
  1 => 'san_port',
  2 => 'datacenterdevice_id',
  3 => 'datacenterdevice_port',
));
;
	}


}