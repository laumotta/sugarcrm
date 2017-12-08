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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Opportunities/Opportunities.js',
        ),
      ),
      'javascript' => '{$PROBABILITY_SCRIPT}
<script type="text/javascript" src="include/javascript/jquery.js"></script>
<script type="text/javascript" language="Javascript">   
document.getElementById("expiration_c").disabled = true;
document.getElementById("discount_c").disabled = true;
document.getElementById("release_payment_c").disabled = true;
document.getElementsByName("discount_c")[0].onchange = function() {ldelim}

var cantidadc = document.getElementsByName("acquired_credits_c")[0].value;
var amountc =document.getElementsByName("unite_price_c")[0].value;
cantidad= cantidadc.replace(",","");
monto= amountc.replace(",","");
var descuento =document.getElementsByName("discount_c")[0].value;
var precio = monto/1.16;

var precio2 = cantidad * precio ;


var desc=precio2-(precio2 * (descuento/100));
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
 
var valido = "1";
var val1 = "bd30fcfa-9872-a757-f88e-4d2f1fcc35a7";
var val2 = "7025a145-9a72-3f64-affa-4d3ae161f7ac";
var val3 = "7bc90bfa-13ee-4deb-b77f-4e172d92c521";
var val4= "2907fc4b-5b4d-a02c-1fa1-50f459d55b16";
var val5 = "911228bf-2c51-8bc3-24d4-4d4b2ad825f2";
var val6= "76ef26c7-d6c8-378e-896f-52fd0abe3663";
var val7= "dbf716d6-79c8-09f4-96c6-530f690ef264";
var val8= "6a36ec7d-2990-9b7f-d97e-532b3c58d610";

if(resultado==valido || resultado==val3 || resultado==val4|| resultado==val5|| resultado==val6|| resultado==val7|| resultado==val8){ldelim} 
document.getElementById("release_payment_c").disabled = false;
{rdelim} 

if(resultado==val1 || resultado==val2 || resultado==val3 || resultado==val4 || resultado==val5|| resultado==val6|| resultado==val7|| resultado==val8){ldelim}
$("#discount_c").attr("readonly", false);
$("#amount").attr("readonly", false);
document.getElementById("discount_c").disabled = false;
{rdelim}


if( (document.getElementsByName("release_payment_c")[0].value) == "Liberado" ||
(document.getElementsByName("release_payment_c")[0].value) == "Facturado" )  {ldelim}
 document.getElementById("amount").disabled = true;
 document.getElementById("acquired_credits_c").disabled = true;
document.getElementById("category_c").disabled = true;
document.getElementById("product_c").disabled = true;
document.getElementById("name").disabled = true;
document.getElementById("account_name").disabled = true;
document.getElementById("description").disabled = true;
document.getElementById("app_c").disabled = true;
document.getElementById("release_payment_c").disabled = true;
document.getElementById("payment_method_c").disabled = true;
document.getElementById("unite_price_c").disabled = true;
$("#btn_account_name").attr("disabled", true);
$("#btn_clr_account_name").attr("disabled", true);


{rdelim}

	recordid = document.getElementsByName("record")[0].value;

if(recordid != ""){ldelim}
$("#assigned_user_name").attr("disabled", true);
$("#assigned_user_id").attr("disabled", true);
$("#btn_assigned_user_name").attr("disabled", true);
$("#btn_clr_assigned_user_name").attr("disabled", true);
{rdelim}


if(resultado==val1 || resultado==valido|| resultado==val4 || resultado==val5|| resultado==val6|| resultado==val7|| resultado==val8){ldelim} $("#unite_price_c").attr("readonly", false);
{rdelim}

$(document).ready(function(){ldelim}	 
	$("#category_c").change(function(){ldelim}
	$.post("cstm/oportunidad.php",{ldelim}categoria:$("#category_c").val(){rdelim},function(data){ldelim}
	$("#products").html(data);
	{rdelim});
	{rdelim}); 

	$("#unite_price_c").change(function(){ldelim}
	calcula_monto();
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
            'customCode' => '
			<input type="text" name="{$fields.unite_price_c.name}" id="{$fields.unite_price_c.name}" value="{$fields.unite_price_c.value}" READONLY>
			',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'amount',
            'customCode' => '<input type="text" name="{$fields.amount.name}" id="{$fields.amount.name}" value="{$fields.amount.value}"
READONLY>',
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
            'name' => 'discount_c',
            'label' => 'LBL_DISCOUNT',
            'customCode' => '
                        <input type="text" name="{$fields.discount_c.name}" id="{$fields.discount_c.name}" value="{$fields.discount_c.value}" READONLY>
                        ',
          ),
          1 => 
          array (
            'name' => 'payment_method_c',
            'studio' => 'visible',
            'label' => 'LBL_PAYMENT_METHOD',
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
            'name' => 'cstm_contracts_opportunities_name',
            'label' => 'LBL_CSTM_CONTRACTS_OPPORTUNITIES_FROM_CSTM_CONTRACTS_TITLE',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'opportunity_stage_c',
            'studio' => 'visible',
            'label' => 'LBL_OPPORTUNITY_STAGE',
          ),
          1 => 
          array (
            'name' => 'ticket_otrs_c',
            'label' => 'LBL_TICKET_OTRS',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => 
          array (
            'name' => 'demo_c',
            'label' => 'LBL_DEMO',
          ),
        ),
        9 => 
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
        10 => 
        array (
          0 => 
          array (
            'name' => 'leads_opportunities_name',
          ),
          1 => 
          array (
            'name' => 'cstm_quotes_opportunities_name',
            'label' => 'LBL_CSTM_QUOTES_OPPORTUNITIES_FROM_CSTM_QUOTES_TITLE',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'llamadas_contestadas_c',
            'label' => 'LBL_LLAMADAS_CONTESTADAS',
          ),
          1 => 
          array (
            'name' => 'llamadas_no_contestadas_c',
            'label' => 'LBL_LLAMADAS_NO_CONTESTADAS',
          ),
        ),
        12 => 
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
        13 => 
        array (
          0 => 
          array (
            'name' => 'unidad_medida_c',
            'label' => 'LBL_UNIDAD_MEDIDA',
          ),
          1 => 
          array (
            'name' => 'clave_c',
            'label' => 'LBL_CLAVE',
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
            'name' => 'probability',
            'comment' => 'The probability of closure',
            'label' => 'LBL_PROBABILITY',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
          1 => 
          array (
            'name' => 'product_id_c',
            'studio' => 'visible',
            'label' => '',
            'customCode' => '<input type="hidden" name="{$fields.cstm_products_id_c.name}" 
id="{$fields.cstm_products_id_c.name}" value="{$fields.cstm_products_id_c.value}" > 
<input type="hidden" value="{$fields.cstm_commi141cissions_ida.value}" id="{$fields.cstm_commi141cissions_ida.name}" 
name="{$fields.cstm_commi141cissions_ida.name}"/>
',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'serial_c',
            'label' => 'LBL_SERIAL',
            'customCode' => '<input type="hidden" name="{$fields.serial_c.name}"
id="{$fields.serial_c.name}" value="{$fields.serial_c.value}" >',
          ),
          1 => 
          array (
            'name' => 'cstm_invoices_opportunities_name',
            'label' => 'LBL_CSTM_INVOICES_OPPORTUNITIES_FROM_CSTM_INVOICES_TITLE',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'saved_c',
            'label' => 'LBL_SAVED',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
