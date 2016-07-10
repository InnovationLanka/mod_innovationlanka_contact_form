<?php
/*
; mod_innovationlanka_contact_form
; Copyright (C) 2016 InnovationLanka. All rights reserved.
; Note : All files need to be saved as UTF-8 - No BOM
*/

// no direct access
defined('_JEXEC') or die;
JHtml::_('bootstrap.tooltip');


$app             = JFactory::getApplication();
$doc             = JFactory::getDocument();
$user            = JFactory::getUser();
//$this->language  = $doc->language;
//$this->direction = $doc->direction;

/*// Getting params from template
$params = $app->getTemplate(true)->params;

// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->get('sitename');*/

// Output as HTML5
$doc->setHtml5(true);

/*// Add JavaScript Frameworks
JHtml::_('bootstrap.framework');
// Load optional RTL Bootstrap CSS
JHtml::_('bootstrap.loadCss', false, $this->direction);*/
$doc->addStyleSheet('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css');
//$doc->addStyleSheet('modules/mod_innovationlanka_contact_form/assets/css/bootstrap-3.3.6-dist/css/bootstrap.min.css');
$doc->addStyleSheet('modules/mod_innovationlanka_contact_form/assets/css/bootstrap-3.3.6-dist/js/bootstrap.min.js');

$doc->addScript('modules/mod_innovationlanka_contact_form/assets/js/angular.min.js');
$doc->addScript('modules/mod_innovationlanka_contact_form/assets/js/angular-messages.min.js');
$doc->addScript('modules/mod_innovationlanka_contact_form/assets/js/angular-animate.min.js');

$doc->addScript('modules/mod_innovationlanka_contact_form/assets/js/spin.min.js');
$doc->addScript('modules/mod_innovationlanka_contact_form/assets/js/angular-spinner.min.js');
$doc->addScript('modules/mod_innovationlanka_contact_form/assets/js/angular-loading-spinner.js');


//$doc->addScript('modules/mod_innovationlanka_contact_form/assets/js/app.js');


// get item id
$menu = $app->getMenu()->getActive()->id;



?>



<style type="text/css">
input.ng-invalid.ng-touched {
  border-color: #a94442;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
  }

 input.ng-valid.ng-touched {
 border-color: #3c763d;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
  }



.form-control-feedback.glyphicon-ok {
    color: #3c763d;
}
.form-control-feedback.glyphicon-remove {
    color: #a94442;
}


.err-hide{
  display: none;
}


</style>

<style type="text/css">
	select, textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {
height: inherit;
  height: 34px;
    width: 848px;
	}

</style>



<input type="hidden" name="modid" id="modid" class="examplex" value="<?php echo $ext_id; ?>" />
<link href="modules/mod_innovationlanka_contact_form/assets/css/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">


<div class="mod_innovationlanka_contact_form mod_innovationlanka_contact_form_<?php echo $ext_id; ?> <?php echo $moduleclass_sfx ?>">	


<script type="text/javascript" src="modules/mod_innovationlanka_contact_form/assets/js/app.js"></script>


<section ng-controller="RegistrationFormController">
<div class="ricf-wrapper" id="ricf-wrapper-angular">
<form name="ricf_form" id="ricf_form" novalidate="true">

<div class="row">
<div class="col-md-12">



<div class="form-group has-feedback" ng-class="{ 'has-error': ricf_form.contact_us_from.$touched && ricf_form.contact_us_from.$invalid,'has-success': ricf_form.contact_us_from.$valid }">
<label class="control-label" for="contact_us_from">Your Email</label>
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
<input type="email" ui-bar custom="contact_us_from" placeholder="your email address" id="contact_us_from" name="contact_us_from" class="form-control" minlength="3" maxlength="300" required ng-model="contactform.contact_us_from">  
</div>
<span class="glyphicon form-control-feedback contact_us_from"></span>

<div class="help-block" multiple ng-messages="ricf_form.contact_us_from.$error" ng-show="ricf_form.contact_us_from.$touched">
<div ng-message="required"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Please enter a value for this field.</div>
<div ng-message="maxlength"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> This field can be at most 15 characters long.</div>
<div ng-message="minlength"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> This field can be at least 5 characters long.</div>
<div ng-message="email"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Valid email required.</div>
</div>
</div>


<div class="form-group has-feedback" ng-class="{ 'has-error': ricf_form.contact_us_username.$touched && ricf_form.contact_us_username.$invalid,'has-success': ricf_form.contact_us_username.$valid }">
<label class="control-label" for="contact_us_username">Your Name</label>
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
<input type="text" ui-bar custom="contact_us_username" placeholder="e.g: Saman" id="contact_us_username" name="contact_us_username" class="form-control" minlength="3" maxlength="150" required ng-model="contactform.contact_us_username">  <!-- pattern="^[_A-z0-9]{1,}$" -->
</div>
<span class="glyphicon form-control-feedback contact_us_username"></span>

<div class="help-block" multiple ng-messages="ricf_form.contact_us_username.$error" ng-show="ricf_form.contact_us_username.$touched">
<div ng-message="required"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Please enter a value for this field.</div>
<div ng-message="maxlength"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> This field can be at most 15 characters long.</div>
<div ng-message="minlength"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> This field can be at least 5 characters long.</div>
<div ng-message="number"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> only number accpeted.</div>
</div>
</div>


<div class="form-group has-feedback" ng-class="{ 'has-error': ricf_form.contact_us_subject.$touched && ricf_form.contact_us_subject.$invalid,'has-success': ricf_form.contact_us_subject.$valid }">
<label class="control-label" for="contact_us_subject">Subject</label>
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-question-circle-o" aria-hidden="true"></i></span>
<input type="text" ui-bar custom="contact_us_subject" placeholder="your subject" id="contact_us_subject" name="contact_us_subject" class="form-control" minlength="3" maxlength="300" required ng-model="contactform.contact_us_subject"> 
</div>
<span class="glyphicon form-control-feedback contact_us_subject"></span>

<div class="help-block" multiple ng-messages="ricf_form.contact_us_subject.$error" ng-show="ricf_form.contact_us_subject.$touched">
<div ng-message="required">Please enter a value for this field.</div>
<div ng-message="maxlength">This field can be at most 15 characters long.</div>
<div ng-message="minlength">This field can be at least 5 characters long.</div>
<div ng-message="number">only number accpeted.</div>
</div>
</div>



<div class="form-group has-feedback" ng-class="{ 'has-error': ricf_form.contact_us_telephone.$touched && ricf_form.contact_us_telephone.$invalid,'has-success': ricf_form.contact_us_telephone.$valid }">
<label class="control-label" for="contact_us_telephone">Your Telephone No.</label>
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
<input type="number" ui-bar custom="contact_us_telephone" placeholder="e.g: 0711234567" id="contact_us_telephone" name="contact_us_telephone" class="form-control" minlength="10" maxlength="10" required ng-model="contactform.contact_us_telephone">  <!-- pattern="^[_A-z0-9]{1,}$" -->
</div>
<span class="glyphicon form-control-feedback contact_us_telephone"></span>

<div class="help-block" multiple ng-messages="ricf_form.contact_us_telephone.$error" ng-show="ricf_form.contact_us_telephone.$touched">
<div ng-message="required">Please enter a value for this field.</div>
<div ng-message="maxlength">This field can be at most 15 characters long.</div>
<div ng-message="minlength">This field can be at least 5 characters long.</div>
<div ng-message="number">only number accpeted.</div>
</div>
</div>


<div class="form-group has-feedback" ng-class="{ 'has-error': ricf_form.contact_us_message.$touched && ricf_form.contact_us_message.$invalid,'has-success': ricf_form.contact_us_message.$valid }">
<label class="control-label" for="contact_us_message">Message</label>
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-commenting" aria-hidden="true"></i></span>
<textarea custom="contact_us_message" placeholder="type your message" id="contact_us_message" name="contact_us_message" class="form-control" minlength="3" maxlength="500" required ng-model="contactform.contact_us_message"></textarea>
</div>
<span class="glyphicon form-control-feedback contact_us_message"></span>

<div class="help-block" multiple ng-messages="ricf_form.contact_us_message.$error" ng-show="ricf_form.contact_us_message.$touched">
<div ng-message="required">Please enter a value for this field.</div>
<div ng-message="maxlength">This field can be at most 15 characters long.</div>
<div ng-message="minlength">This field can be at least 5 characters long.</div>
</div>
</div>



<!-- <div class="form-group has-feedback" ng-class="{ 'has-error': ricf_form.contact_us_attachement.$touched && ricf_form.contact_us_attachement.$invalid,'has-success': ricf_form.contact_us_attachement.$valid }">
<label class="control-label" for="contact_us_attachement">Name</label>
<div class="input-group">
<span class="input-group-addon">@</span>
<input type="file" custom="contact_us_attachement" placeholder="contact_us_attachement" id="contact_us_attachement" name="contact_us_attachement" class="form-control" minlength="3" maxlength="15" required ng-model="contact_us_attachement">
</div>
<span class="glyphicon form-control-feedback contact_us_attachement"></span>

<div class="help-block" multiple ng-messages="ricf_form.contact_us_attachement.$error" ng-show="ricf_form.contact_us_attachement.$touched">
<div ng-message="required">Please enter a value for this field.</div>
<div ng-message="maxlength">This field can be at most 15 characters long.</div>
<div ng-message="minlength">This field can be at least 5 characters long.</div>
</div>
</div> -->


<div class="form-group has-feedback" ng-class="{ 'has-error': ricf_form.send_copy_to_your_self.$touched && ricf_form.send_copy_to_your_self.$invalid,'has-success': ricf_form.send_copy_to_your_self.$valid }">
<label class="control-label" for="send_copy_to_your_self">Send Copy to Your Self</label>
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-envelope-square" aria-hidden="true"></i></span>
<input type="checkbox" custom="send_copy_to_your_self" id="send_copy_to_your_self" name="send_copy_to_your_self" class="form-control" ng-model="contactform.send_copy_to_your_self">
</div>
<span class="glyphicon form-control-feedback send_copy_to_your_self"></span>

<div class="help-block" multiple ng-messages="ricf_form.send_copy_to_your_self.$error" ng-show="ricf_form.send_copy_to_your_self.$touched">
<div ng-message="required">Please enter a value for this field.</div>
<div ng-message="maxlength">This field can be at most 15 characters long.</div>
<div ng-message="minlength">This field can be at least 5 characters long.</div>
</div>
</div>





<div class="form-group">
<button type="reset" class="btn btn-warning" ng-show="!ricf_form.$pristine">Reset</button>
<button type="button" class="btn btn-info" ng-disabled="!ricf_form.$valid" ng-click="reg();">Submit</button>
<!-- <button type="button" class="btn btn-info" ng-click="reg();">Submit2</button> -->
</div>





</div>
</div>
</form>
</div>
</section>
</div>