<?php
/*
; mod_innovationlanka_contact_form
; Copyright (C) 2016 InnovationLanka. All rights reserved.
; Note : All files need to be saved as UTF-8 - No BOM
*/

defined('_JEXEC') or die;
jimport( 'joomla.utilities.date' );
 
class modInnovationlankaContactFormHelper

{
		 
public static function sendMessageAjax() {
$app = JFactory::getApplication();
$preData = (object) json_decode(file_get_contents("php://input"), TRUE);



#1 - data sanitize
$data = modInnovationlankaContactFormHelper::_getDataSanitization($preData);
#2 - send mail - 2
$mailStatus = modInnovationlankaContactFormHelper::_getSendMail($data);



echo json_encode(array('mailSendStatus'=>$mailStatus));
exit();
$app->close();
    }
	 
	
/**
* This method sanitize the post data
* return: array
*/
protected function _getDataSanitization($preData){
$app = JFactory::getApplication();
$sanitizeArray = new stdClass();

$sanitizeArray->contact_us_from = trim($preData->contact_us_from);
$sanitizeArray->contact_us_message = trim($preData->contact_us_message);
$sanitizeArray->contact_us_subject = ucwords(strtolower(trim($preData->contact_us_subject)));
$sanitizeArray->contact_us_telephone = trim($preData->contact_us_telephone);
$sanitizeArray->contact_us_username =  ucwords(strtolower(trim($preData->contact_us_username)));
$sanitizeArray->send_copy_to_your_self = trim($preData->send_copy_to_your_self);

return $sanitizeArray;
$app->close();
}


/**
* Mail sending function - joomla mailer
* return: boolean or error message
*/
protected function _getSendMail($data){
$app = JFactory::getApplication();
$mailer =& JFactory::getMailer(); 
$config =& JFactory::getConfig();
//$mailer->AddCustomHeader("Content-type: text/html; charset=UTF-8");  

$to = array( 
$config->get( 'mailfrom' ),
$config->get( 'fromname' ) );

$mailer->setBody($data->contact_us_message);
$mailer->setSubject($data->contact_us_subject);
$mailer->setSender($data->contact_us_from);
$mailer->addRecipient($to[0]);

if($data->send_copy_to_your_self=='1'){
	$mailer->addRecipient($data->contact_us_from);
}

$mailer->isHTML(true);
$mailer->Encoding = 'base64';
//$mailer->AddEmbeddedImage( JPATH_COMPONENT.'/assets/images/ical-logo.png', 'logo_id', 'logo.jpg', 'base64', 'image/jpeg' );
$send = $mailer->Send();
if ( $send !== true ) {
   $final_state = 'Jmailer Error: ' . $send->__toString();
} else {
   $final_state = true;
}

return $final_state;
$app->close();
}



} // MAIN CLASS END


	/*  Sample method */
/*	public static function getData(&$module)
	{
	
	$params_json_decode = json_decode($module->params);	
	date_default_timezone_set('Asia/Colombo');

	$today = date('Y-m-d');

	$db = JFactory::getDbo();
	$query = $db->getQuery(true);
	
	// query goes here
	
	$db->setQuery($query);
	$results = $db->loadObjectList();
		 
	return $results;

			
	}*/