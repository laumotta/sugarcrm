<?PHP

require_once('modules/Administration/controller.php');

class CustomAdministrationController extends AdministrationController {

    public function action_loginPageSliderGallery() {
        global $current_user;
        if (!is_admin($current_user)) {
            sugar_die($GLOBALS['app_strings']['ERR_NOT_ADMIN']);
        }
        $this->view = 'loginpageslidergallery';
        $GLOBALS['view'] = $this->view;
    }

    public function action_uploadImage() {
        global $db, $sugar_config, $current_user;
        require_once 'custom/modules/Administration/slider_function.php';
        if (!is_admin($current_user)) {
            sugar_die($GLOBALS['app_strings']['ERR_NOT_ADMIN']);
        }

        $allowedExts = array("gif", "GIF", "jpeg", "JPEG", "jpg", "JPG", "png", "PNG");
        $temp = explode(".", $_FILES["file"]["name"]);
        $extension = end($temp);
        $directory = 'custom/include/loginSlider/images/slider/';
        $fileNameArray = getImagesFromSliderFolder($directory);
        list($width_uploadImage, $height_uploadImage) = getimagesize($_FILES["file"]["tmp_name"]);
        $_FILES["file"]["name"] = 'background_image_' . $_REQUEST['uploadImage_code'] . '.' . $extension;

        if (is_array($fileNameArray)) {
            foreach ($fileNameArray as $code_new => $filePath) {
                if (file_exists($fileNameArray[$code_new])) {
                    if (strpos($_FILES["file"]["name"], '_' . $code_new) !== false) {
                        unlink($fileNameArray[$code_new]);
                    }
                }
            }
        }
        $displayMsg = false;
        $validImageTypes = array("image/gif", "image/jpeg", "image/jpg", "image/pjpeg", "image/x-png", "image/png");
        $imgSize = getConvertedUploadImageSizeInMB($_FILES["file"]["size"]);
        if (isset($_REQUEST['submit'])) {
            if (in_array($_FILES["file"]["type"], $validImageTypes) &&
                    $imgSize <= 2 &&
                    in_array($extension, $allowedExts) &&
                    $width_uploadImage >= 1000 &&
                    $height_uploadImage >= 700
            ) {
                if ($_FILES["file"]["error"] > 0) {
                    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
                } else {
                    move_uploaded_file($_FILES["file"]["tmp_name"], 'custom/include/loginSlider/images/slider/' . $_FILES["file"]["name"]);
                }
            } else {
                $displayMsg = true;
            }
        }
        header("Location:index.php?module=Administration&action=loginPageSliderGallery&displayMsg=" . $displayMsg);
        exit;
    }

    public function action_loginPageSliderConfiguration() {
        global $current_user;
        if (!is_admin($current_user)) {
            sugar_die($GLOBALS['app_strings']['ERR_NOT_ADMIN']);
        }
        $this->view = 'loginPageSliderConfiguration';
        $GLOBALS['view'] = $this->view;
    }

    public function action_storeConfigurationSetting() {
        require_once 'custom/modules/Administration/slider_function.php';
        global $db;
        $image_count = $_REQUEST['image_count'];
        $getConf = getSliderConfiguration();
        $directory = 'custom/include/loginSlider/images/slider/';
        $fileNameArray = getImagesFromSliderFolder($directory);
        $retainedImages = getFilesBasedOnImageConfiguration($image_count);
        if (isset($_REQUEST['submit_conf'])) {
            foreach ($fileNameArray as $index => $file_name) {
                $parts = explode('/', $file_name);
                $filename = end($parts);
                $fname = explode(".", $filename);
                $Org_filename = $fname[0];
                if (!in_array($Org_filename, $retainedImages)) {
                    unlink($file_name);
                    }
                }
            if (!empty($getConf)) {
                $updateConf_2 = "Update config set value = '{$image_count}'
                                                            where name = 'image_count'";
                $db->query($updateConf_2);
                header("Location:index.php?module=Administration&action=index");
            } else {
                $storeConf = "Insert into config (category,
                                          name,
                                          value) 
                                  Values                                              
                                          ('image_slider_conf',
                                           'image_count',
                                           '{$image_count}') ";
                $db->query($storeConf);
                header("Location:index.php?module=Administration&action=index");
            }
        }
    }

}

?>
