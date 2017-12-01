<?php
// created: 2015-06-17 18:39:05
$dictionary["cstm_products"]["fields"]["cstm_paquetes_cstm_products"] = array (
  'name' => 'cstm_paquetes_cstm_products',
  'type' => 'link',
  'relationship' => 'cstm_paquetes_cstm_products',
  'source' => 'non-db',
  'vname' => 'LBL_CSTM_PAQUETES_CSTM_PRODUCTS_FROM_CSTM_PAQUETES_TITLE',
);
$dictionary["cstm_products"]["fields"]["cstm_paquetes_cstm_products_name"] = array (
  'name' => 'cstm_paquetes_cstm_products_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CSTM_PAQUETES_CSTM_PRODUCTS_FROM_CSTM_PAQUETES_TITLE',
  'save' => true,
  'id_name' => 'cstm_paquea136aquetes_ida',
  'link' => 'cstm_paquetes_cstm_products',
  'table' => 'cstm_paquetes',
  'module' => 'cstm_Paquetes',
  'rname' => 'name',
);
$dictionary["cstm_products"]["fields"]["cstm_paquea136aquetes_ida"] = array (
  'name' => 'cstm_paquea136aquetes_ida',
  'type' => 'link',
  'relationship' => 'cstm_paquetes_cstm_products',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CSTM_PAQUETES_CSTM_PRODUCTS_FROM_CSTM_PRODUCTS_TITLE',
);
