<?php
/*
  ; mod_innovationlanka_contact_form
  ; Copyright (C) 2016 InnovationLanka. All rights reserved.
  ; Note : All ini files need to be saved as UTF-8 - No BOM
 */

// no direct access
defined('_JEXEC') or die;
$document = JFactory::getDocument();

$document->addStyleSheet("modules/mod_innovationlanka_contact_form/assets/libraries/angular_libraries/angular_material/angular-material/angular-material.css");

$document->addScript("modules/mod_innovationlanka_contact_form/assets/libraries/angular_libraries/angularjs/angular/angular.js");
$document->addScript("modules/mod_innovationlanka_contact_form/assets/libraries/angular_libraries/angularjs/angular-animate/angular-animate.js");
$document->addScript("modules/mod_innovationlanka_contact_form/assets/libraries/angular_libraries/angularjs/angular-aria/angular-aria.js");
$document->addScript("modules/mod_innovationlanka_contact_form/assets/libraries/angular_libraries/angularjs/angular-messages/angular-messages.js");
$document->addScript("modules/mod_innovationlanka_contact_form/assets/libraries/angular_libraries/angular_material/angular-material/angular-material.js");
$document->addScript("modules/mod_innovationlanka_contact_form/assets/libraries/spinjs/spin.js");
$document->addScript("modules/mod_innovationlanka_contact_form/assets/libraries/angular_libraries/angular_spinner/angular-spinner.js");
$document->addScript("modules/mod_innovationlanka_contact_form/assets/js/contact_form.js");
?>

<div class="mod_innovationlanka_contact_form mod_innovationlanka_contact_form_<?php echo $ext_id; ?> <?php echo $moduleclass_sfx ?>">
    <div id="" ng-app="contactFormApplication" ng-controller="contactFormController">
        <div layout="column" ng-cloak>
            <md-content>
                <form name="contact_form">
                    <md-input-container class="md-block">
                        <label><?php echo $email_label; ?></label>
                        <input <?php $email_required ? print "required" : print ""; ?> type="email" name="contact_us_from" ng-model="contact_us_from"
                                                                                       ng-minlength="<?php echo $email_min_length; ?>" md-maxlength="<?php echo $email_max_length; ?>" ng-pattern="/^.+@.+\..+$/" />
                        <div ng-messages="contact_form.contact_us_from.$error" role="alert">
                            <div ng-message-exp="['required', 'ng-minlength', 'md-maxlength', 'pattern']">
                                Your email must be between <?php echo $email_min_length; ?> and <?php echo $email_max_length; ?> characters long and look like an e-mail address.
                            </div>
                            <!--<div ng-message="md-maxlength">The E-mail has to be less than 30 characters long.</div>-->
                        </div>
                    </md-input-container>
                    <md-input-container class="md-block">
                        <label><?php echo $name_label; ?></label>
                        <input <?php $name_required ? print "required" : print ""; ?> name="contact_us_username" ng-model="contact_us_username"
                                                                                      minlength="<?php echo $name_min_length; ?>" md-maxlength="<?php echo $name_max_length; ?>" />
                        <div ng-messages="contact_form.contact_us_username.$error" role="alert">
                            <div ng-message-exp="['required', 'minlength', 'md-maxlength']">
                                Your name must be between <?php echo $name_min_length; ?> and <?php echo $name_max_length; ?> characters long.
                            </div>
                            <!--<div ng-message="md-maxlength">The E-mail has to be less than 30 characters long.</div>-->
                        </div>
                    </md-input-container>
                    <md-input-container class="md-block">
                        <label><?php echo $subject_label; ?></label>
                        <input <?php $subject_required ? print "required" : print ""; ?> name="contact_us_subject" ng-model="contact_us_subject"
                                                                                         minlength="<?php echo $subject_min_length; ?>" md-maxlength="<?php echo $subject_max_length; ?>"/>
                        <div ng-messages="contact_form.contact_us_subject.$error" role="alert">
                            <div ng-message-exp="['required', 'minlength', 'md-maxlength']">
                                Your subject must be between <?php echo $subject_min_length; ?> and <?php echo $subject_max_length; ?> characters long.
                            </div>
                            <!--<div ng-message="md-maxlength">The E-mail has to be less than 30 characters long.</div>-->
                        </div>
                    </md-input-container>
                    <md-input-container class="md-block">
                        <label><?php echo $telephone_label; ?></label>
                        <input <?php $telephone_required ? print "required" : print ""; ?> name="contact_us_telephone" ng-model="contact_us_telephone"
                                                                                           minlength="<?php echo $telephone_min_length; ?>" md-maxlength="<?php echo $telephone_max_length; ?>" ng-pattern="/[0-9]/" />
                        <div ng-messages="contact_form.contact_us_telephone.$error" role="alert">
                            <div ng-message-exp="['minlength', 'md-maxlength', 'pattern']">
                                Your telephone must be between <?php echo $telephone_min_length; ?> and <?php echo $telephone_max_length; ?> characters long and look like a telephone number.
                            </div>
                            <!--<div ng-message="md-maxlength">The E-mail has to be less than 30 characters long.</div>-->
                        </div>
                    </md-input-container>
                    <md-input-container class="md-block">
                        <label><?php echo $message_label; ?></label>
                        <textarea <?php $message_required ? print "required" : print ""; ?> name="contact_us_message" ng-model="contact_us_message"
                                                                                            ng-minlength="<?php echo $message_min_length; ?>" md-maxlength="<?php echo $message_max_length; ?>"></textarea>
                        <div ng-messages="contact_form.contact_us_message.$error" role="alert">
                            <div ng-message-exp="['required', 'ng-minlength', 'md-maxlength']">
                                Your message must be between <?php echo $message_min_length; ?> and <?php echo $message_max_length; ?> characters long.
                            </div>
                            <!--<div ng-message="md-maxlength">The E-mail has to be less than 30 characters long.</div>-->
                        </div>
                    </md-input-container>
                    <div flex-xs flex="50">
                        <md-checkbox md-no-ink aria-label="Send copy to your self" ng-model="send_copy_to_your_self" class="md-primary">
                            Send Copy To Yourself
                        </md-checkbox>
                    </div>
                    <md-button ng-click="sendMessage();" class="md-raised md-primary"><?php echo $submit_button_label; ?></md-button>
                    <span us-spinner="{radius:35, width:8, length: 16}" spinner-on="show_spinner"></span>
                </form>
            </md-content>
        </div>
    </div>
</div>