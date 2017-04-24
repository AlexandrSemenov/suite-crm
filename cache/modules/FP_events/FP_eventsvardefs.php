<?php 
 $GLOBALS["dictionary"]["FP_events"]=array (
  'table' => 'fp_events',
  'audited' => true,
  'duplicate_merge' => true,
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_ID',
      'type' => 'id',
      'required' => true,
      'reportable' => true,
      'comment' => 'Unique identifier',
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_NAME',
      'type' => 'name',
      'link' => true,
      'dbType' => 'varchar',
      'len' => 255,
      'unified_search' => true,
      'full_text_search' => 
      array (
        'boost' => 3,
      ),
      'required' => true,
      'importable' => 'required',
      'duplicate_merge' => 'enabled',
      'merge_filter' => 'selected',
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'group' => 'created_by_name',
      'comment' => 'Date record created',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'group' => 'modified_by_name',
      'comment' => 'Date record last modified',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'modified_user_id' => 
    array (
      'name' => 'modified_user_id',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_MODIFIED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'group' => 'modified_by_name',
      'dbType' => 'id',
      'reportable' => true,
      'comment' => 'User who last modified record',
      'massupdate' => false,
    ),
    'modified_by_name' => 
    array (
      'name' => 'modified_by_name',
      'vname' => 'LBL_MODIFIED_NAME',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'rname' => 'user_name',
      'table' => 'users',
      'id_name' => 'modified_user_id',
      'module' => 'Users',
      'link' => 'modified_user_link',
      'duplicate_merge' => 'disabled',
      'massupdate' => false,
    ),
    'created_by' => 
    array (
      'name' => 'created_by',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_CREATED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'dbType' => 'id',
      'group' => 'created_by_name',
      'comment' => 'User who created record',
      'massupdate' => false,
    ),
    'created_by_name' => 
    array (
      'name' => 'created_by_name',
      'vname' => 'LBL_CREATED',
      'type' => 'relate',
      'reportable' => false,
      'link' => 'created_by_link',
      'rname' => 'user_name',
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'created_by',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
      'importable' => 'false',
      'massupdate' => false,
    ),
    'description' => 
    array (
      'name' => 'description',
      'vname' => 'LBL_DESCRIPTION',
      'type' => 'text',
      'comment' => 'Full text of the note',
      'rows' => 6,
      'cols' => 80,
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'default' => '0',
      'reportable' => false,
      'comment' => 'Record deletion indicator',
    ),
    'created_by_link' => 
    array (
      'name' => 'created_by_link',
      'type' => 'link',
      'relationship' => 'fp_events_created_by',
      'vname' => 'LBL_CREATED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'modified_user_link' => 
    array (
      'name' => 'modified_user_link',
      'type' => 'link',
      'relationship' => 'fp_events_modified_user',
      'vname' => 'LBL_MODIFIED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'assigned_user_id' => 
    array (
      'name' => 'assigned_user_id',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'vname' => 'LBL_ASSIGNED_TO_ID',
      'group' => 'assigned_user_name',
      'type' => 'relate',
      'table' => 'users',
      'module' => 'Users',
      'reportable' => true,
      'isnull' => 'false',
      'dbType' => 'id',
      'audited' => true,
      'comment' => 'User ID assigned to record',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_name' => 
    array (
      'name' => 'assigned_user_name',
      'link' => 'assigned_user_link',
      'vname' => 'LBL_ASSIGNED_TO_NAME',
      'rname' => 'user_name',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'assigned_user_id',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_link' => 
    array (
      'name' => 'assigned_user_link',
      'type' => 'link',
      'relationship' => 'fp_events_assigned_user',
      'vname' => 'LBL_ASSIGNED_TO_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
      'duplicate_merge' => 'enabled',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'table' => 'users',
    ),
    'duration_hours' => 
    array (
      'name' => 'duration_hours',
      'vname' => 'LBL_DURATION_HOURS',
      'type' => 'int',
      'group' => 'duration',
      'len' => '3',
      'comment' => 'Duration (hours)',
      'importable' => 'required',
      'required' => true,
    ),
    'duration_minutes' => 
    array (
      'name' => 'duration_minutes',
      'vname' => 'LBL_DURATION_MINUTES',
      'type' => 'int',
      'group' => 'duration',
      'len' => '2',
      'comment' => 'Duration (minutes)',
    ),
    'date_start' => 
    array (
      'name' => 'date_start',
      'vname' => 'LBL_DATE',
      'type' => 'datetimecombo',
      'dbType' => 'datetime',
      'comment' => 'Date of start of meeting',
      'importable' => 'required',
      'required' => true,
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'display_default' => 'now&12:45pm',
      'validation' => 
      array (
        'type' => 'isbefore',
        'compareto' => 'date_end',
        'blank' => false,
      ),
    ),
    'date_end' => 
    array (
      'name' => 'date_end',
      'vname' => 'LBL_DATE_END',
      'type' => 'datetimecombo',
      'dbType' => 'datetime',
      'massupdate' => false,
      'comment' => 'Date meeting ends',
      'enable_range_search' => true,
      'display_default' => 'now&01:45pm',
      'options' => 'date_range_search_dom',
    ),
    'link' => 
    array (
      'name' => 'link',
      'vname' => 'LBL_RESPONSE_LINK',
      'type' => 'varchar',
      'source' => 'non-db',
      'reportable' => true,
    ),
    'link_declined' => 
    array (
      'name' => 'link_declined',
      'vname' => 'LBL_RESPONSE_LINK_DECLINED',
      'type' => 'varchar',
      'source' => 'non-db',
      'reportable' => true,
    ),
    'budget' => 
    array (
      'required' => false,
      'name' => 'budget',
      'vname' => 'LBL_BUDGET',
      'type' => 'currency',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 26,
      'size' => '20',
      'enable_range_search' => false,
      'precision' => 6,
    ),
    'currency_id' => 
    array (
      'required' => false,
      'name' => 'currency_id',
      'vname' => 'LBL_CURRENCY',
      'type' => 'currency_id',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 36,
      'size' => '20',
      'dbType' => 'id',
      'studio' => 'visible',
      'function' => 
      array (
        'name' => 'getCurrencyDropDown',
        'returns' => 'html',
      ),
    ),
    'duration' => 
    array (
      'name' => 'duration',
      'vname' => 'LBL_DURATION',
      'type' => 'enum',
      'options' => 'duration_dom',
      'source' => 'non-db',
      'comment' => 'Duration handler dropdown',
      'massupdate' => false,
      'reportable' => false,
      'importable' => false,
    ),
    'invite_templates' => 
    array (
      'required' => false,
      'name' => 'invite_templates',
      'vname' => 'LBL_INVITE_TEMPLATES',
      'type' => 'enum',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
      'options' => 'email_templet_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'accept_redirect' => 
    array (
      'name' => 'accept_redirect',
      'vname' => 'LBL_ACCEPT_REDIRECT',
      'type' => 'url',
      'massupdate' => '0',
      'default' => '',
      'no_default' => false,
      'comments' => 'Insert a URL to a web page here.',
      'help' => 'Insert the URL for the page that you want the event delegates to see when they accept the invitation from the email.',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'dbType' => 'varchar',
      'gen' => '0',
      'link_target' => '_blank',
      'id' => 'FP_eventsaccept_redirect',
    ),
    'decline_redirect' => 
    array (
      'required' => false,
      'name' => 'decline_redirect',
      'vname' => 'LBL_DECLINE_REDIRECT',
      'type' => 'url',
      'massupdate' => '0',
      'default' => NULL,
      'no_default' => false,
      'comments' => 'Insert a URL to a web page here.',
      'help' => 'Insert the URL for the page that you want the event delegates to see when they have declined the invitation from the email.',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'dbType' => 'varchar',
      'gen' => NULL,
      'link_target' => '_blank',
      'id' => 'FP_eventsdecline_redirect',
    ),
    'fp_events_contacts' => 
    array (
      'name' => 'fp_events_contacts',
      'type' => 'link',
      'relationship' => 'fp_events_contacts',
      'source' => 'non-db',
      'vname' => 'LBL_FP_EVENTS_CONTACTS_FROM_CONTACTS_TITLE',
    ),
    'fp_events_leads_1' => 
    array (
      'name' => 'fp_events_leads_1',
      'type' => 'link',
      'relationship' => 'fp_events_leads_1',
      'source' => 'non-db',
      'vname' => 'LBL_FP_EVENTS_LEADS_1_FROM_LEADS_TITLE',
    ),
    'fp_events_prospects_1' => 
    array (
      'name' => 'fp_events_prospects_1',
      'type' => 'link',
      'relationship' => 'fp_events_prospects_1',
      'source' => 'non-db',
      'vname' => 'LBL_FP_EVENTS_PROSPECTS_1_FROM_PROSPECTS_TITLE',
    ),
    'fp_event_locations_fp_events_1' => 
    array (
      'name' => 'fp_event_locations_fp_events_1',
      'type' => 'link',
      'relationship' => 'fp_event_locations_fp_events_1',
      'source' => 'non-db',
      'vname' => 'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE',
      'id_name' => 'fp_event_locations_fp_events_1fp_event_locations_ida',
    ),
    'fp_event_locations_fp_events_1_name' => 
    array (
      'name' => 'fp_event_locations_fp_events_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE',
      'save' => true,
      'id_name' => 'fp_event_locations_fp_events_1fp_event_locations_ida',
      'link' => 'fp_event_locations_fp_events_1',
      'table' => 'fp_event_locations',
      'module' => 'FP_Event_Locations',
      'rname' => 'name',
    ),
    'fp_event_locations_fp_events_1fp_event_locations_ida' => 
    array (
      'name' => 'fp_event_locations_fp_events_1fp_event_locations_ida',
      'type' => 'link',
      'relationship' => 'fp_event_locations_fp_events_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE',
    ),
  ),
  'relationships' => 
  array (
    'fp_events_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'FP_events',
      'rhs_table' => 'fp_events',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'fp_events_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'FP_events',
      'rhs_table' => 'fp_events',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'fp_events_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'FP_events',
      'rhs_table' => 'fp_events',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'optimistic_locking' => true,
  'unified_search' => true,
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'fp_eventspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
  ),
  'templates' => 
  array (
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
  'custom_fields' => false,
);