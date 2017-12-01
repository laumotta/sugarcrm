<?php
$module_name = 'cstm_quotes';
$_object_name = 'cstm_quotes';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
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
      'javascript' => '{$PROBABILITY_SCRIPT}
<script type="text/javascript" src="include/javascript/jquery.js">
</script> <script type="text/javascript" language="Javascript"> 
function getCookie(cookieName) 
{ldelim} var cookieValue=null; var posName=document.cookie.indexOf(escape(cookieName)+"="); if (posName!=-1){ldelim} var 
posValue=posName+(escape(cookieName)+"=").length; var endPos=document.cookie.indexOf(";",posValue); if (endPos!=-1) 
cookieValue=unescape(document.cookie.substring(posValue,endPos)); else cookieValue=unescape(document.cookie.substring(posValue)); {rdelim} return cookieValue; 
{rdelim} c_k="ck_login_id_20"; resultado =getCookie(c_k); var val3 = "7bc90bfa-13ee-4deb-b77f-4e172d92c521";   var val1 = "1";
var val4= "2907fc4b-5b4d-a02c-1fa1-50f459d55b16";
var val5 = "911228bf-2c51-8bc3-24d4-4d4b2ad825f2";
var val6 = "76ef26c7-d6c8-378e-896f-52fd0abe3663";
var val7 = "dbf716d6-79c8-09f4-96c6-530f690ef264";
var val8 = "6a36ec7d-2990-9b7f-d97e-532b3c58d610";
$("#unite_price_c").attr("readonly", true);
$("#payment_status_c").attr("readonly", true); 
if(resultado==val3 | resultado==val1 | resultado==val4| resultado==val5| resultado==val6 | resultado==val7 | resultado==val8){ldelim} 
$("#payment_status_c").attr("readonly", false); 
$("#method_of_payment_c").attr("readonly", false); {rdelim}else{ldelim} 
$("#method_of_payment_c").hide(); 
$("#payment_status_c").hide();
$("#LBL_EDITVIEW_PANEL1").hide();

{rdelim} 
</script>
',
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'lbl_sale_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'comment' => 'Name of the Sale',
            'label' => 'LBL_NAME',
          ),
          1 => 
          array (
            'name' => 'campaign_c',
            'studio' => 'visible',
            'label' => 'LBL_CAMPAIGN',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'etapa_de_venta_c',
            'studio' => 'visible',
            'label' => 'LBL_ETAPA_DE_VENTA',
          ),
          1 => 
          array (
            'name' => 'date_expiration_c',
            'label' => 'LBL_DATE_EXPIRATION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Description of the sale',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'demo_c',
            'label' => 'LBL_DEMO',
          ),
          1 => 
          array (
            'name' => 'sales_stage',
            'comment' => 'Indication of progression towards closure',
            'label' => 'LBL_SALES_STAGE',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'payment_status_c',
            'studio' => 'visible',
            'label' => 'LBL_PAYMENT_STATUS',
          ),
          1 => '',
        ),
        1 => 
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
        2 => 
        array (
          0 => 
          array (
            'name' => 'method_of_payment_c',
            'studio' => 'visible',
            'label' => 'LBL_METHOD_OF_PAYMENT',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
