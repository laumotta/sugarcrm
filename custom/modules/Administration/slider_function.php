<?php

function getSliderConfiguration() {
    global $db;
    $getConfiguration_setting = "SELECT *
                                        FROM config
                                        WHERE category = 'image_slider_conf'";
    $query = $db->query($getConfiguration_setting);
    $getConf = array();
    while ($result = $db->fetchByAssoc($query)) {
        $getConf[$result['name']] = $result['value'];
    }
    return $getConf;
}

function getCurrentThemeAndCompanyLogoDetails() {
    $currentThemeAndLogoDetailsArray = array();
    $themeObject = SugarThemeRegistry::current();
    $companyLogoURL = $themeObject->getImageURL('company_logo.png');
    $company_logo_attributes = sugar_cache_retrieve('company_logo_attributes');
    $currentThemeAndLogoDetailsArray['theme_name'] = $themeObject->name;
    $currentThemeAndLogoDetailsArray['theme_dirName'] = $themeObject->dirName;
    $currentThemeAndLogoDetailsArray['logo_url'] = $companyLogoURL;
    $currentThemeAndLogoDetailsArray['logo_width'] = $company_logo_attributes[1];
    $currentThemeAndLogoDetailsArray['logo_height'] = $company_logo_attributes[2];

    return $currentThemeAndLogoDetailsArray;
}

function getImagesFromSliderFolder($dir) {
    $fileNameArray = array();
    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            while (false !== ($file = readdir($dh))) {
                if (!in_array($file, array(".", ".."))) {
                    $fileNameArray[] = $dir . $file;
                }
            }
            closedir($dh);
        }
    }
    asort($fileNameArray);
    if (is_array($fileNameArray)) {
        foreach ($fileNameArray as $file_path) {
            $code = explode('background_image_', $file_path);
            $code = explode('.', $code[1]);
            $fileNameArray_withCode[$code[0]] = $file_path;
        }
    }
    return $fileNameArray_withCode;
}

function getConvertedUploadImageSizeInMB($size) {
    $imageSize = round($size / pow(1024, 2));
    return $imageSize;
}

function getFilesBasedOnImageConfiguration($image_count) {
    $ImagePath = array();
    $image = 'background_image_';
    for ($i = 1; $i <= $image_count; $i++) {
        $ImagePath[] = $image . $i;
    }
    return $ImagePath;
}
