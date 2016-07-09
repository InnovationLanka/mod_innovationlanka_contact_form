<?php
/*
; mod_innovationlanka_contact_form
; Copyright (C) 2016 InnovationLanka. All rights reserved.
; Note : All ini files need to be saved as UTF-8 - No BOM
*/

// no direct access
defined('_JEXEC') or die;
JHtml::_('bootstrap.tooltip');
JHtml::_('behavior.tooltip');


$doc = JFactory::getDocument();
$doc->addStyleSheet(JURI::base().'modules/mod_innovationlanka_contact_form/assets/css/common.css'); 
$doc->addStyleSheet(JURI::base().'modules/mod_innovationlanka_contact_form/assets/css/bootstrap.min.css'); 
/*$doc->addScript(JURI::base().'modules/mod_innovationlanka_contact_form/assets/js/jquery-3.0.0.min.js');*/
$doc->addScript(JURI::base().'modules/mod_innovationlanka_contact_form/assets/js/bootstrap.min.js');
$doc->addScript(JURI::base().'modules/mod_innovationlanka_contact_form/assets/js/parsley.min.js');
$doc->addScript(JURI::base().'modules/mod_innovationlanka_contact_form/assets/js/form_temp_one.js');
?>
<style type="text/css">
	
	select, textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {
    border-radius: 3px;
    color: #555;
    display: inline-block;
    font-size: 13px;
    height: 40px;
    line-height: 18px;
    margin-bottom: 9px;
    padding: 10px 12px;
    transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
    width: 100%;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
    
}
.title{
margin-left: 100px;
margin-bottom: 40px;

}

.filled{

	background: #FFBABA;
	padding: 10px 10px 10px 20px;
	color: red;
}
.cap-generate{
	background: ;
	color: #008000;
}

</style>



<div class="mod_innovationlanka_contact_form mod_innovationlanka_contact_form_<?php echo $ext_id; ?> <?php echo $moduleclass_sfx ?>">	


<!-- your form content goes here -->


	<div class="container">

		<form action="#" method="post" id="contact_form_<?php echo $ext_id; ?>" data-parsley-validate="" class="well form-horizontal" >
		<fieldset>



		<!-- Text input-->

		<div class="form-group">
		  <label class="col-md-4 col-xs-4 col-sm-4 control-label">Name</label>  
		  <div class="col-md-4 col-xs-4 col-sm-4 inputGroupContainer">

		  <i class="glyphicon glyphicon-user"></i>
		  <input id="contact_us_username"  name="contact_us_username" placeholder="Name" class="form-control"  type="text" required="" data-parsley-length="[5, 200]">

		  </div>
		</div>

		<!-- Text input-->
		 <div class="form-group">
		  <label class="col-md-4 col-xs-4 col-sm-4 control-label">E-Mail</label>  
		    <div class="col-md-4 col-xs-4 col-sm-4 inputGroupContainer">
		    
		  <i class="glyphicon glyphicon-envelope"></i>
		  <input id="contact_us_from" name="contact_us_from" placeholder="E-Mail Address" class="form-control"  type="email" data-parsley-trigger="change" maxlength="300" required="" >
		
		   
		  </div>
		</div>


		<!-- Text input-->
		       
		<div class="form-group">
		  <label class="col-md-4 col-xs-4 col-sm-4 control-label">Phone #</label>  
		    <div class="col-md-4 col-xs-4 col-sm-4 inputGroupContainer">
		    
		       <i class="glyphicon glyphicon-earphone"></i>
		  	  <input id="contact_us_telephone" name="contact_us_telephone" placeholder="(+94)71 1234567" class="form-control" type="text" required="" data-parsley-length="[10, 10]">
		   
		  </div>
		</div>

		<!-- Text input-->
		      
		<div class="form-group">
		  <label class="col-md-4 col-xs-4 col-sm-4 control-label">Subject</label>  
		    <div class="col-md-4 col-xs-4 col-sm-4 inputGroupContainer">
		    
		  <i class="glyphicon glyphicon-home"></i>
		  <input id="contact_us_subject" name="contact_us_subject" placeholder="Subject" class="form-control" type="text" required="" data-parsley-length="[10, 500]">
		   
		  </div>
		</div>


		<!-- Text area -->
		  
		<div class="form-group">
		  <label class="col-md-4 col-xs-4 col-sm-4 control-label">Message</label>
		    <div class="col-md-4 col-xs-4 col-sm-4 inputGroupContainer">
		   
		        <i class="glyphicon glyphicon-pencil"></i>
		        <textarea class="form-control" id="contact_us_message" name="contact_us_message" placeholder="Message" required="" data-parsley-length="[20, 1000]"></textarea>
		  
		  </div>
		</div>


		<!-- Checkbox input-->
		 
		<div class="form-group">
		  <label class="col-md-4 col-xs-4 col-sm-4 control-label">Mail copy to your self</label>  
		    <div class="col-md-4 col-xs-4 col-sm-4 inputGroupContainer">
		    <div class="input-group">
		  <input name="send_copy_to_your_self" id="send_copy_to_your_self"  class="checkbox" value="1"  type="checkbox">
		    </div>
		  </div>
		</div>

		<div class="form-group">
		<label class="col-md-4 col-xs-4 col-sm-4 control-label">verification code *</label>		    
        <div class="col-md-4 col-xs-4 col-sm-4 inputGroupContainer">
		 <div class="input-group">
    		<img src="" alt="" id="captcha" />&nbsp  
            <button class="btn cap-generate"  type="button" name="button" onclick="change_captcha()">Generate new code</button>   
            </div>
		  </div>    
        </div>

		<div class="form-group">
		<label class="col-md-4 col-xs-4 col-sm-4 control-label">Enter verification code *</label>
		
		<div class="col-md-4 col-xs-4 col-sm-4 inputGroupContainer">
		 <div class="input-group">
		<input name="code" type="text" id="code" required="" class="form-control">  
		<div id="cap-error"></div> 
		 </div>
		  </div> 
		</div>



		<!-- Success message -->
		<div class=""  id="success_message"></div>

		<!-- Button -->
		<div class="form-group">
		  <label class="col-md-4 col-xs-4 col-sm-4 control-label"></label>
		  <div class="col-md-4 col-xs-4 col-sm-4">
		    <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
		  </div>
		</div>

		<input type="hidden" name="mod_id" id="mod_id" value="<?php echo $ext_id; ?>">
		<input type="hidden" name="base_url" id="base_url" value="<?php echo JURI::base(); ?>">

		</fieldset>
		</form>

	</div>

</div><!-- /.container -->


