<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
require_once('include/MVC/View/SugarView.php');

class AdministrationViewLoginpageslidergallery extends SugarView
{

    function display()
    {
        require_once 'custom/modules/Administration/slider_function.php';
        parent::display();
        global $current_user, $db, $sugar_config;
        $dir = "custom/include/loginSlider/images/slider/";
        $getConf = getSliderConfiguration();
        $fileNameArrayCount = $getConf['image_count'];
        if (isset($_REQUEST['delete'])) {
            $deleteFile = $_REQUEST['id'];
            unlink($deleteFile);
        }
        $showMsg = "display:none";
        if($_REQUEST['displayMsg']){
            $showMsg = '';
        }
        
        $fileNameArray = getImagesFromSliderFolder($dir);
        //$uploadImageSize = getConvertedUploadImageSizeInMB($sugar_config['upload_maxsize']);
        $html = '';
        $html .= "<span style='color:red; $showMsg'><li>Please upload images with following extensions only ('gif', 'GIF', 'jpeg', 'JPEG', 'jpg', 'JPG', 'png', 'PNG').</li>
                                                   <li>Upload file size should be at max 2 MB.</li>
                                                   <li>Image dimension should be greater than 700(height) x 1000(width). </li>
                                                   </span>";
        $html .= "<span style='position: relative;left: 40%;color:red;$showMsg'><b>Image upload failed, please make sure above conditions are met.</b></span><br><br>";
        $html .= "<table class=\"edit view\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\">
                   <tbody>
                    <tr><th scope=\"row\" colspan=\"4\" align=\"left\"><h4>Upload Slider Images</h4></th></tr>
                    <tr>
    	            <td scope=\"row\" colspan=\"4\" align=\"left\">
                    <div class='dashletPanelMenu wizard'>
                    <div class='bd'>
		            <div class='screen'>";
        if ($fileNameArrayCount > 0) {
            $class = '';
            for ($i = 1; $i <= $fileNameArrayCount; $i++) {
                if (($i % 6) == 0) {
                    $class = 'last';
                } else {
                    $class = '';
                }
                $checkFile = $fileNameArray[$i];
                $file = (in_array($checkFile, $fileNameArray)) ? $checkFile : 'custom/include/loginSlider/images/no-image.png';
                $deleteUrl = ($file == 'custom/include/loginSlider/images/no-image.png') ? '#' : 'index.php?module=Administration&action=loginPageSliderGallery&delete=true&id=' . $file;
                $html .= "<div class='login-img-uploading {$class}'>";
                $html .= "<form action='' method='post' enctype='multipart/form-data'>";
                $html .= "<input type='hidden' name='module' value='Administration'>";
                $html .= "<input type='hidden' name='action' value='uploadImage'>";
                $html .= "<p class'img'> <img src='{$file}?v=" . rand(0, 1000) . "' name='img_{$i}' height='140px' width='110px'>";
                $html .= "</p>
                        <div class='btm-block'><p class='uploader'><input style='width: 99%;' required='true' type='file' name='file' /></p>
                        <div class='bottm-btn'> <input type='submit' name='submit' value='Upload' /><input type='hidden' name='uploadImage_code' value='{$i}' />
                            <a  href='{$deleteUrl}' >
                                <input type='button' value='Remove Image' />
                            </a>
                        </div>
                        </div> ";
                $html .= "</form>";
                $html .= "</div>";
            }
        } else {
            $html .= "<span>Please configure number of images to display in slider from <a href='index.php?module=Administration&action=loginPageSliderConfiguration'>here</a>.</span> <br /><br />";
        }
        $html .= "<div>
                    <a href='index.php?module=Administration&action=index'>
                        <input type='button' name='cancel' value='Return To Admin' />
                    </a>
                 </div>
                 </td>
                </tr>
                </tbody></table>";
        $html .= "</div></div></div>";
        echo $html;
    }

}

?>
<style type="text/css">
    .login-img-uploading {
        width: 14.6%;
        display: inline-block;
        border: 1px solid #ccc;
        margin: 0px 1% 2% 0;
        padding: 0.5%;
    }

    .login-img-uploading.last {
        margin-right: 0px;
    }

    .login-img-uploading img {
        width: 100%;
    }

    .login-img-uploading .btm-block {
        border-top: 1px solid #ccc;
        padding: 5px;
    }

    .login-img-uploading .btm-block .bottm-btn {
        margin-top: 10px;
    }

    .login-img-uploading .btm-block .bottm-btn input {
        padding: 3px 16px 2px 17px;
    }


</style>