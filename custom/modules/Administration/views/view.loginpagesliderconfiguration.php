<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
require_once('include/MVC/View/SugarView.php');

class AdministrationViewLoginpagesliderconfiguration extends SugarView {

    function display() {
        global $db;
        require_once 'custom/modules/Administration/slider_function.php';
        parent::display();
        $getConf = getSliderConfiguration();
        $html = '';
        $html .= "<form action='' method='post' onsubmit='return validationNumber();'>
                <input type='hidden' name='module' value='Administration'>
                <input type='hidden' name='action' value='storeConfigurationSetting'>
                <table class=\"actionsContainer\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
                <tbody>
                <tr>
                <td>
		        <input title=\"Save [Alt+S]\" accesskey=\"S\" class=\"button primary\" name=\"submit_conf\" value=\" Save \" type=\"submit\">
		        &nbsp;<input title=\"Cancel\" onclick=\"document.location.href='index.php?module=Administration&amp;action=index'\" class=\"button\" name=\"cancel\" value=\" Cancel \" type=\"button\">
                </td>
	            </tr>
	            </tbody></table>
                <table class=\"edit view\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
                <tbody>
                <tr><th scope=\"row\" colspan=\"4\" align=\"left\"><h4>Image Slider Configuration</h4></th></tr>
                <tr>
    	        <td scope=\"row\" valign=\"top\" width=\"20%\">No of images to be displayed on image slider:</td>
    	        <td valign=\"top\" width=\"30%\">
    		    <input type='text' name='image_count'  id='image_count_text' style=' width:40%;' value='{$getConf['image_count']}'>
    	        </td>
    	        <td scope=\"row\" width=\"17%\"></td>
                <td></td>
                </tr>
                </tbody></table>
                <div style=\"padding-top: 2px;\">
                <input title=\"Save [Alt+S]\" class=\"button primary\" name=\"submit_conf\" value=\" Save \" type=\"submit\">
		        &nbsp;<input title=\"Cancel\" onclick=\"document.location.href='index.php?module=Administration&amp;action=index'\" class=\"button\" name=\"cancel\" value=\" Cancel \" type=\"button\">
                </div>
                </form>";
        echo $html;
    }

}
?>
<script type="text/javascript">
    function validationNumber() {
        var reg = new RegExp('^[0-9]+$');
        var textID = document.getElementById('image_count_text').value;
        if (textID == '') {
            alert("Please enter number.");
            return false;
        }
        if (!reg.test(textID) && typeof reg != 'undefined') {
            alert("Please enter only positive integer number.");
            return false;
        }
        if (textID != '' && textID <= 0) {
            alert("Allowed only greater than 0.");
            return false;
        }
    }
</script>
