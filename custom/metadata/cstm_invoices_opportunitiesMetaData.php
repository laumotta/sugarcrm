<?php
// created: 2011-08-04 12:17:52
$dictionary["cstm_invoices_opportunities"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'cstm_invoices_opportunities' => 
    array (
      'lhs_module' => 'cstm_invoices',
      'lhs_table' => 'cstm_invoices',
      'lhs_key' => 'id',
      'rhs_module' => 'Opportunities',
      'rhs_table' => 'opportunities',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cstm_invoicpportunities_c',
      'join_key_lhs' => 'cstm_invoi1350nvoices_ida',
      'join_key_rhs' => 'cstm_invoi8ba3unities_idb',
    ),
  ),
  'table' => 'cstm_invoicpportunities_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'cstm_invoi1350nvoices_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cstm_invoi8ba3unities_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cstm_invoic_opportunitiesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cstm_invoic_opportunities_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cstm_invoi1350nvoices_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'cstm_invoic_opportunities_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cstm_invoi8ba3unities_idb',
      ),
    ),
  ),
);
?>
