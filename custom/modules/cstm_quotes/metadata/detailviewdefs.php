<?php
$module_name = 'cstm_quotes';
$_object_name = 'cstm_quotes';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 
          array (
            'customCode' => '<input title="Vista Impresi&oacute;n" accesskey="" class="button" onclick="window.open(\'cstm/cotizadorControl.php?record={$fields.id.value}\', \'\',\'\',\'\');" name="button" value="Vista de Impresi&oacute;n" type="button">
<input title="Imprimir" accesskey="" class="button" onclick="window.open(\'cstm/cotizadorControl.php?print=true&record={$fields.id.value}\',\'\',\'\',\'width=100,height=100\');" name="button" value="Imprimir" type="button">

<input title="Facturar" accesskey="" class="button" onclick="location.href=\'cstm/FacControl.php?cstm_quotes={$fields.id.value}\'" name="button" value="Facturar" type="button" {if $fields.cstm_quotes_cstm_invoices_name.value==\'\' } disabled=\'disabled\'{/if}>
',
          ),
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'no_c',
            'label' => 'LBL_NO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'accounts_cstm_quotes_name',
          ),
          1 => 'sales_stage',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'payment_status_c',
            'studio' => 'visible',
            'label' => 'LBL_PAYMENT_STATUS',
          ),
          1 => 
          array (
            'name' => 'method_of_payment_c',
            'studio' => 'visible',
            'label' => 'LBL_METHOD_OF_PAYMENT',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
          ),
          1 => 'date_closed',
        ),
        4 => 
        array (
          0 => 'assigned_user_name',
          1 => 
          array (
            'name' => 'date_modified',
            'label' => 'LBL_DATE_MODIFIED',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'date_expiration_c',
            'label' => 'LBL_DATE_EXPIRATION',
          ),
          1 => '',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'nl2br' => true,
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'note_c',
            'studio' => 'visible',
            'label' => 'LBL_NOTE',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'subtotal_c',
            'label' => 'LBL_SUBTOTAL',
          ),
          1 => 
          array (
            'name' => 'descuento_c',
            'label' => 'LBL_DESCUENTO',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'iva_c',
            'label' => 'LBL_IVA',
          ),
          1 => 
          array (
            'name' => 'total_c',
            'label' => 'LBL_TOTAL',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'executed_c',
            'label' => 'LBL_EXECUTED',
          ),
          1 => 
          array (
            'name' => 'cstm_quotes_cstm_invoices_name',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'leads_cstm_quotes_name',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'leads_cstm_quotes_1_name',
          ),
        ),
      ),
      'lbl_detailview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'deposit_date_c',
            'label' => 'LBL_DEPOSIT_DATE',
          ),
          1 => 
          array (
            'name' => 'bank_account_c',
            'studio' => 'visible',
            'label' => 'LBL_BANK_ACCOUNT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'transactionno_c',
            'label' => 'LBL_TRANSACTIONNO',
          ),
          1 => 
          array (
            'name' => 'authorizeid_c',
            'label' => 'LBL_AUTHORIZEID',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'txnresponsecode_c',
            'label' => 'LBL_TXNRESPONSECODE',
          ),
          1 => 
          array (
            'name' => 'txnresponsecodedesc_c',
            'label' => 'LBL_TXNRESPONSECODEDESC',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'acqresponsecode_c',
            'label' => 'LBL_ACQRESPONSECODE',
          ),
          1 => 
          array (
            'name' => 'message_c',
            'label' => 'LBL_MESSAGE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'receiptno_c',
            'label' => 'LBL_RECEIPTNO',
          ),
          1 => 
          array (
            'name' => 'batchno_c',
            'label' => 'LBL_BATCHNO',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'cardtype_c',
            'label' => 'LBL_CARDTYPE',
          ),
          1 => 
          array (
            'name' => 'riskoverallresult_c',
            'label' => 'LBL_RISKOVERALLRESULT',
          ),
        ),
      ),
    ),
  ),
);
?>
