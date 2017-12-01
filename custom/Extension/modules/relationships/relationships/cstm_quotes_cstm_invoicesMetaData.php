<?php
// created: 2013-11-21 12:20:09
$dictionary["cstm_quotes_cstm_invoices"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'cstm_quotes_cstm_invoices' => 
    array (
      'lhs_module' => 'cstm_quotes',
      'lhs_table' => 'cstm_quotes',
      'lhs_key' => 'id',
      'rhs_module' => 'cstm_invoices',
      'rhs_table' => 'cstm_invoices',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cstm_quotesstm_invoices_c',
      'join_key_lhs' => 'cstm_quotedec0_quotes_ida',
      'join_key_rhs' => 'cstm_quote822dnvoices_idb',
    ),
  ),
  'table' => 'cstm_quotesstm_invoices_c',
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
      'name' => 'cstm_quotedec0_quotes_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cstm_quote822dnvoices_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cstm_quotes_cstm_invoicesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cstm_quotes_cstm_invoices_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cstm_quotedec0_quotes_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'cstm_quotes_cstm_invoices_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cstm_quote822dnvoices_idb',
      ),
    ),
  ),
);
?>
