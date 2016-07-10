<?php

/*
  ; mod_innovationlanka_contact_form
  ; Copyright (C) 2016 InnovationLanka. All rights reserved.
  ; Note : All ini files need to be saved as UTF-8 - No BOM
 */

// no direct access
defined('_JEXEC') or die;
//error_reporting(E_ALL & ~E_NOTICE);
require_once __DIR__ . '/helper.php';

$document = JFactory::getDocument();
//$document->addStyleSheet('modules/mod_innovationlanka_contact_form/assets/bxslider-4-boostrap-version/jquery.bxslider.css');
//$document->addStyleSheet('modules/mod_innovationlanka_contact_form/assets/css/r_style.css');

$moduleclass_sfx = $params->get('moduleclass_sfx');
$ext_id = "mod_" . $module->id;

$ModuleId = $module->id;
$params_json_decode = json_decode($module->params);




/*$_getParams= modInnovationlankaContactFormHelper::_getParams();
var_dump($_getParams);*/



$email_label = $params->get('email_label');
$email_min_length = $params->get('email_min_length');
$email_max_length = $params->get('email_max_length');
$email_required = $params->get('email_required');

$name_label = $params->get('name_label');
$name_min_length = $params->get('name_min_length');
$name_max_length = $params->get('name_max_length');
$name_required = $params->get('name_required');

$subject_label = $params->get('subject_label');
$subject_min_length = $params->get('subject_min_length');
$subject_max_length = $params->get('subject_max_length');
$subject_required = $params->get('subject_required');

$telephone_label = $params->get('telephone_label');
$telephone_min_length = $params->get('telephone_min_length');
$telephone_max_length = $params->get('telephone_max_length');
$telephone_required = $params->get('telephone_required');

$message_label = $params->get('message_label');
$message_min_length = $params->get('message_min_length');
$message_max_length = $params->get('message_max_length');
$message_required = $params->get('message_required');

$submit_button_label = $params->get('submit_button_label');



/*
$layout= $params->get('layout');
if($layout_change_param==1){
require JModuleHelper::getLayoutPath('mod_innovationlanka_contact_form',$params->get('layout', 'templateOne'));
}else if($layout_change_param==2){
require JModuleHelper::getLayoutPath('mod_innovationlanka_contact_form',$params->get('layout', 'templateOne'));
}else{
require JModuleHelper::getLayoutPath('mod_innovationlanka_contact_form', $params->get('layout', 'templateTwo'));	
}*/






require JModuleHelper::getLayoutPath('mod_innovationlanka_contact_form', $params->get('layout', 'default'));

