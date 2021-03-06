<?php
$viewdefs ['Opportunities'] = 
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
<script type="text/javascript" src="include/javascript/jquery.js"></script>
<script type="text/javascript" language="Javascript">   
document.getElementById("release_payment_c").disabled = true;
document.getElementsByName("discount_c")[0].onchange = function() {ldelim}
var monto =document.getElementsByName("amount")[0].value;
var descuento =document.getElementsByName("discount_c")[0].value;
var precio = monto/1.16;
var desc=precio-(precio * (descuento/100));
var total = desc * 1.16;
document.getElementsByName("amount")[0].value=total.toFixed(3);
{rdelim}
function getCookie(cookieName) {ldelim} 
var cookieValue=null;
var posName=document.cookie.indexOf(escape(cookieName)+"=");
if (posName!=-1){ldelim} 
var posValue=posName+(escape(cookieName)+"=").length;
var endPos=document.cookie.indexOf(";",posValue);
if (endPos!=-1) cookieValue=unescape(document.cookie.substring(posValue,endPos));
else cookieValue=unescape(document.cookie.substring(posValue));
{rdelim} 
return cookieValue; 
{rdelim} 
c_k="ck_login_id_20";
resultado =getCookie(c_k);
 
var valido = "911228bf-2c51-8bc3-24d4-4d4b2ad825f2";
if(resultado==valido){ldelim} 
document.getElementById("release_payment_c").disabled = false;
{rdelim} 
if( (document.getElementsByName("release_payment_c")[0].value) == "Liberado" ||
(document.getElementsByName("release_payment_c")[0].value) == "Facturado" )  {ldelim}
 document.getElementById("amount").disabled = true;
 document.getElementById("acquired_credits_c").disabled = true;
{rdelim}
$(document).ready(function(){ldelim}	 
	$("#category_c").change(function(){ldelim}
	$.post("cstm/oportunidad.php",{ldelim}categoria:$("#category_c").val(){rdelim},function(data){ldelim}
	$("#products").html(data);
	{rdelim});
	{rdelim}); 
 	{rdelim});
 </script>',
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
            'name' => 'category_c',
            'studio' => 'visible',
            'label' => 'LBL_CATEGORY',
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
            'name' => 'product_c',
            'label' => 'LBL_PRODUCT',
            'customCode' => '<div id="products">
			<input type="text" name="{$fields.product_c.name}" id="{$fields.product_c.name}" value="{$fields.product_c.value}">
			</div>',
          ),
          1 => 
          array (
            'name' => 'name',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'acquired_credits_c',
            'label' => 'LBL_ACQUIRED_CREDITS',
          ),
          1 => 
          array (
            'name' => 'app_c',
            'studio' => 'visible',
            'label' => 'LBL_APP',
          ),
        ),
        3 => 
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
        4 => 
        array (
          0 => 
          array (
            'name' => 'amount',
          ),
          1 => 
          array (
            'name' => 'date_closed',
          ),
        ),
        5 => 
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
        6 => 
        array (
          0 => 
          array (
            'name' => 'sales_stage',
            'comment' => 'Indication of progression towards closure',
            'label' => 'LBL_SALES_STAGE',
          ),
          1 => 
          array (
            'name' => 'probability',
            'comment' => 'The probability of closure',
            'label' => 'LBL_PROBABILITY',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
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
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
