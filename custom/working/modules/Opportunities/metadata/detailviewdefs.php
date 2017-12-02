<?php
$viewdefs ['Opportunities'] = 
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
            'customCode' => '<input title="{$APP.LBL_DUP_MERGE}" accesskey="M" class="button" onclick="this.form.return_module.value=\'Opportunities\';this.form.return_action.value=\'DetailView\';this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Step1\'; this.form.module.value=\'MergeRecords\';" name="button" value="{$APP.LBL_DUP_MERGE}" type="submit">',
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
          0 => 
          array (
            'name' => 'name',
            'comment' => 'Name of the opportunity',
            'label' => 'LBL_OPPORTUNITY_NAME',
          ),
          1 => 
          array (
            'name' => 'account_name',
            'label' => 'LBL_ACCOUNT_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'category_c',
            'studio' => 'visible',
            'label' => 'LBL_CATEGORY',
          ),
          1 => 
          array (
            'name' => 'app_c',
            'studio' => 'visible',
            'label' => 'LBL_APP',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'product_c',
            'label' => 'LBL_PRODUCT',
          ),
          1 => 
          array (
            'name' => 'acquired_credits_c',
            'label' => 'LBL_ACQUIRED_CREDITS',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'amount',
            'label' => '{$MOD.LBL_AMOUNT} ({$CURRENCY})',
          ),
          1 => 
          array (
            'name' => 'date_closed',
            'comment' => 'Expected or actual date the oppportunity will close',
            'label' => 'LBL_DATE_CLOSED',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'discount_c',
            'label' => 'LBL_DISCOUNT',
          ),
          1 => 
          array (
            'name' => 'release_payment_c',
            'studio' => 'visible',
            'label' => 'LBL_RELEASE_PAYMENT',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'balance_c',
            'label' => 'LBL_BALANCE',
          ),
          1 => 
          array (
            'name' => 'ticket_otrs_c',
            'label' => 'LBL_TICKET_OTRS',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'expiration_c',
            'studio' => 'visible',
            'label' => 'LBL_EXPIRATION',
          ),
          1 => 
          array (
            'name' => 'unite_price_c',
            'label' => 'LBL_UNITE_PRICE',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'sales_stage',
            'comment' => 'Indication of progression towards closure',
            'label' => 'LBL_SALES_STAGE',
          ),
          1 => 
          array (
            'name' => 'opportunity_stage_c',
            'studio' => 'visible',
            'label' => 'LBL_OPPORTUNITY_STAGE',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'probability',
            'comment' => 'The probability of closure',
            'label' => 'LBL_PROBABILITY',
          ),
          1 => 
          array (
            'name' => 'cstm_quotes_opportunities_name',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'nl2br' => true,
          ),
          1 => 
          array (
            'name' => 'products_id_c',
            'studio' => 'visible',
            'label' => 'LBL_PRODUCTS_ID',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'cstm_commissions_opportunities_name',
          ),
          1 => 
          array (
            'name' => 'cstm_contracts_opportunities_name',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'payment_method_c',
            'studio' => 'visible',
            'label' => 'LBL_PAYMENT_METHOD',
          ),
          1 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'closing_sales_strategy_c',
            'label' => 'LBL_CLOSING_SALES_STRATEGY',
          ),
          1 => 
          array (
            'name' => 'reason_loss_sale_c',
            'label' => 'LBL_REASON_LOSS_SALE',
          ),
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'leads_opportunities_name',
          ),
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'opportunity_type',
            'comment' => 'Type of opportunity (ex: Existing, New)',
            'label' => 'LBL_TYPE',
          ),
          1 => 
          array (
            'name' => 'lead_source',
            'comment' => 'Source of the opportunity',
            'label' => 'LBL_LEAD_SOURCE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'next_step',
            'comment' => 'The next step in the sales process',
            'label' => 'LBL_NEXT_STEP',
          ),
          1 => 
          array (
            'name' => 'campaign_name',
            'label' => 'LBL_CAMPAIGN',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'label' => 'LBL_DATE_MODIFIED',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
          ),
          1 => 
          array (
            'name' => 'saved_c',
            'label' => 'LBL_SAVED',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'cstm_invoices_opportunities_name',
          ),
          1 => 
          array (
            'name' => 'invoiced_c',
            'studio' => 'visible',
            'label' => 'LBL_INVOICED',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'claveunidad_c',
            'studio' => 'visible',
            'label' => 'LBL_CLAVEUNIDAD',
          ),
          1 => 
          array (
            'name' => 'clave_producto_c',
            'studio' => 'visible',
            'label' => 'LBL_CLAVE_PRODUCTO',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'clave_c',
            'label' => 'LBL_CLAVE',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
