<?php 
 //WARNING: The contents of this file are auto-generated


$admin_option_defs = array();

$admin_option_defs['Administration']['Login_Manage_Image_Configuration'] = array(
    '',
    'LBL_CONFIGURATION_FOR_LOGIN_IMAGE_SLIDER',
    'LBL_CONFIGURATION_FOR_LOGIN_IMAGE_SLIDER_DESCRITOPN',
    'index.php?module=Administration&action=loginPageSliderConfiguration'
);
$admin_option_defs['Administration']['Login_Manage_Images'] = array(
    '',
    'LBL_UPLOAD_IMAGE_FOR_LOGIN_SLIDER',
    'LBL_UPLOAD_IMAGE_FOR_LOGIN_SLIDER_DESCRITOPN',
    'index.php?module=Administration&action=loginPageSliderGallery'
);
$admin_group_header[] = array(
    'LBL_UPLOAD_IMAGE_FOR_LOGIN_SLIDER_SECTION',
    '',
    false,
    $admin_option_defs,
    'LBL_UPLOAD_IMAGE_FOR_LOGIN_SLIDER_SECTION_DESCRIPTION'
);




$admin_option_defs=array();
$admin_option_defs['Administration']['pm_processmanager_info']= array('helpInline','LBL_PM_PROCESSMANAGER_LICENSE_TITLE','LBL_PM_PROCESSMANAGER_LICENSE','./index.php?module=PM_ProcessManager&action=license');

$admin_group_header[]= array('LBL_PM_PROCESSMANAGER','',false,$admin_option_defs, '');


?>