<?php
// created: 2011-08-04 11:49:54
$dictionary["accounts_cstm_invoices"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'accounts_cstm_invoices' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'cstm_invoices',
      'rhs_table' => 'cstm_invoices',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'accounts_cstm_invoices_c',
      'join_key_lhs' => 'accounts_ca379ccounts_ida',
      'join_key_rhs' => 'accounts_c4e85nvoices_idb',
    ),
  ),
  'table' => 'accounts_cstm_invoices_c',
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
      'name' => 'accounts_ca379ccounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'accounts_c4e85nvoices_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'accounts_cstm_invoicesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'accounts_cstm_invoices_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_ca379ccounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'accounts_cstm_invoices_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'accounts_c4e85nvoices_idb',
      ),
    ),
  ),
);
?>
