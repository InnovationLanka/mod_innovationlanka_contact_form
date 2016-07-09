//initialize variable and function on the load the page
jQuery(document).ready(function() {	


 //Get module name
 var modname = jQuery('#mod_id').val();
 //Set the form id
 form_id='#contact_form_'+modname;

 //Set the base url id
 base_url=form_id+' #base_url';
 //Get base url value
 base_url = jQuery(base_url).val();

 //Set the message id
 success_message=form_id+' #success_message';
 //Set the code id
 code=form_id+' #code';

 //Set the capture error id
 codecap=form_id+' #cap-error';

 //Generate capture onload
 change_captcha();

 	//Form submit function
	jQuery( "form" ).submit(function(event) {
   
   	  //Get code value
      var codevalue = jQuery(code).val();

          var dataString = '';

                        //second script start          
                        jQuery.ajax({
                        type:"POST",
                        
                        url: base_url+"modules/mod_innovationlanka_contact_form/assets/captcha_stylish99/post.php?code="+codevalue,
                       // url: "index.php?option=com_ajax&Itemid=102&module=innovationlanka_contact_form&method=validateCapture&format=row&code="+code,
                        data: dataString,
                        cache: false,
                        success: function(done){

				                if(done==1)
				                {
				                		  //Sending message
				  		 			      jQuery(success_message).html('<img src="'+base_url+'modules/mod_innovationlanka_contact_form/assets/images/loader.gif"> Message sending....').addClass('alert alert-info');
				                		  //Capture code sucsess
				  		 			      jQuery(codecap).html('');
				  		 			      //Call send message
				  		 			      Sendmessage();
				                }
				                else
				                {
				                		  //Invalid capture message
				                   		  jQuery(codecap).html('<ul class="filled"><li>Error ! Invalid captcha code.</li></ul>');
				                  
				                }
                            
                                              
                
                } });//second script end   

  		 
         //Prevent form submit
  		 event.preventDefault();

	});


		function Sendmessage(){

			modname = jQuery('#mod_id').val();

			var username='#contact_form_'+modname+' #contact_us_username';
			var contact_us_username = jQuery(username).val();

			var from='#contact_form_'+modname+' #contact_us_from';
			var contact_us_from = jQuery(from).val();

			var telephone='#contact_form_'+modname+' #contact_us_telephone';
			var contact_us_telephone = jQuery(telephone).val();

			var subject='#contact_form_'+modname+' #contact_us_subject';
			var contact_us_subject = jQuery(subject).val();

			var message='#contact_form_'+modname+' #contact_us_message';
			var contact_us_message = jQuery(message).val();

			var copyself='#contact_form_'+modname+' #send_copy_to_your_self';
			//var send_copy_to_your_self = jQuery(copyself).val();

      if (jQuery(copyself).is(":checked"))
      {

        send_copy_to_your_self=true;

      }else{
                
          send_copy_to_your_self=false;
      }



	var data = new Array();

		data1= {"data":[ { contact_us_from: contact_us_from ,contact_us_username: contact_us_username, contact_us_subject: contact_us_subject  ,contact_us_telephone: contact_us_telephone ,  contact_us_message: contact_us_message  , send_copy_to_your_self: send_copy_to_your_self }]};

data= { contact_us_from: contact_us_from ,contact_us_username: contact_us_username, contact_us_subject: contact_us_subject  ,contact_us_telephone: contact_us_telephone ,  contact_us_message: contact_us_message  , send_copy_to_your_self: send_copy_to_your_self };

    var jsonObj;

		jQuery.ajax({
		    type: 'POST',
		    url: 'index.php?option=com_ajax&module=innovationlanka_contact_form&method=sendMessage&format=json',
		    data: JSON.stringify(data), // or JSON.stringify ({name: 'jonas'}),
		    success: function(data) { 

      var data=JSON.stringify(data);
		  jsonObj = JSON.parse(data);

       if(jsonObj.mailSendStatus==true){
		 jQuery(success_message).html('Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.').removeClass('alert alert-info').addClass('alert alert-success');
         setTimeout(function(){jQuery(success_message).html('').removeClass('alert alert-success'); 
          jQuery(form_id)[0].reset();
          }, 5000);
       }


		},
		    contentType: "application/json",
		    dataType: 'json'
		});


		}


});

   function change_captcha()
   {

      var modname = jQuery('#mod_id').val();
      var base_url='#contact_form_'+modname+' #base_url';
      var base_url = jQuery(base_url).val();

      var captcha='#contact_form_'+modname+' #captcha';
     
      //document.getElementById('captcha').src=base_url+"modules/mod_innovationlanka_contact_form/assets/captcha_stylish99/get_captcha.php?rnd=" + Math.random();
      
        var url=base_url+"modules/mod_innovationlanka_contact_form/assets/captcha_stylish99/get_captcha.php?rnd=" + Math.random();
        jQuery(captcha).attr("src", url);
    
   }