jQuery(document).ready(function(){

	// IE Console
	if (!window.console) console = {log: function() {}}; 

	// Json URLs
	var pbid = "01sb0000001iuXX"; // products bundle code
	
	var lead_url= "https://sf.smartheart.co.jp/?action=getleadjson&pbid=" + pbid; // Lead + Products URL
	var RegistrationHandler="https://spdev.shahal.co.il/SmartheartPortal/RegistrationHandler.ashx"; // Security Question URL
	var salesforce = "https://sf.smartheart.co.jp"; // Respond to server URL 
	//var salesforce ="http://localhost:3199/HS-SF/HS-SF.ashx"; // debug
 
	// salesforce mocky respond
	//var salesforce ="http://www.mocky.io/v2/52e6478c728ed156026df6fb" // mocky false
	//var salesforce = "http://www.mocky.io/v2/52e6480f728ed15f026df6fc" // mocky true

	var products = null; // all products
	var selected_prod = null ;
	var selected_serv = null ;
	var serviceCode =  null;


	// lead check
		jQuery.getJSON(lead_url , { lid: lead} )
		  .done(function( json ) {

			    jQuery(".loading").hide();
			    
			     if (json.Success==false) {  	
			     	jQuery(".noLead").show();
			 	 	window.location = "http://www.smartheart.co.jp/";	
			 	 } else {

			 	 	
			 	 	products = json.Value2; // set "products" var



					//set lead details
			 	 	jQuery("#first_name").attr("value",json.Value.FirstName);
			 	 	jQuery("#last_name").attr("value",json.Value.LastName);
			 	 	jQuery("#email").attr("value",json.Value.Email);
			 	 	jQuery("#ph").attr("value",json.Value.Phone);

			 	 	// show form
			 	 	jQuery("#cmaForm").show();
			 	 }

		  })
		  .fail(function( jqxhr, textStatus, error ) {
		    var err = textStatus + ", " + error;
		    console.log( "lead Failed: " + err );
		    jQuery(".loading").hide();
		    jQuery(".error").show();
		});




/*add values for the security question*/
/*  var mocky_question = "http://www.mocky.io/v2/52db97490a9f2e3d005fe738";  */
	var q_data = JSON.stringify({a:"q",did:"1",l:"ja-jp"});
	var request = jQuery.ajax({
	  url: RegistrationHandler,
	  type: "POST",
	  data: q_data,
	  crossDomain: true ,
      dataType: 'json'
	});
	 
	request.done(function( data ) {
		jQuery.each(data.questions, function(key, value) {   
		     jQuery('#securityQuestion')
		         .append(jQuery("<option></option>")
		         .attr("value",value.id)
		         .text(value.quest)); 
		});
	});
	 
	request.fail(function( jqXHR, textStatus ) {
	  console.log( "security question failed: " + textStatus );
	});


	// accordion functions
	var accordion = jQuery("#stepForm").accordion({  
			heightStyle: "content",
            autoHeight: false,
            animate: 1200,
            beforeActivate: function( event, ui ) {

            	 if (current == 0  ||  current == 3) {
            	 	 jQuery('.right_msg').hide();
	            	 jQuery('.outer-rounded-box-bold').css('width', '100%');	
            	 } ;

            	 if (current == 1 || current == 4){ // temp disable prev button - fix bug
            		jQuery('.prevbutton').attr("disabled", true);
            	 };

            	jQuery('body').tooltipster('disable').tooltipster('hide');
          
            },
            activate: function( event, ui ) {

            	 if (current != 0 && current != 3 ) {
	            	 jQuery('.outer-rounded-box-bold').animate({
							width: '61%'
					 },"fast");	
					 jQuery('.right_msg').delay(500).fadeIn();
	            };

	            if (current == 1 || current == 4 ){  // temp disable prev button - fix bug
	           		setTimeout(function() {
					jQuery('.prevbutton').attr("disabled", false);
					}, 500);	
	            };


            	jQuery('body').tooltipster('enable');
            }
         });
	var current = 0;

	// tooltip

		jQuery('#cmaForm input,select').tooltipster({ 
	//	timer: '1',
		fixedWidth: '0',
		animation: 'fade',
		theme: '.tooltipster-light',
        trigger: 'custom', // default is 'hover' which is no good here
        onlyOne: false,    // allow multiple tips to be open at a time
        position: 'bottom-right'  // display the tips to the right of the element
  		});
	

	jQuery('.tooltip').tooltipster({theme:'.my-custom-theme'});

	var img = new Image();
	img.src = "/wp-content/themes/enfold/images/cc_jp.png";

	jQuery('#sec_code_tip').tooltipster({
                content: '<img src="'+ img.src +'" /> '
    });


	// Numbers Mask
	//jQuery("#npi").mask("9999999999");
	//jQuery("#zip").mask("99999");

	// add * to required field labels
	jQuery('label.requiredv').append('&nbsp;<strong>*</strong>&nbsp;');


	function ConvertFormToJSON(form){
	    var array = jQuery(form).serializeArray();
	    var json = {};
	    
	    jQuery.each(array, function() {
	        json[this.name] = this.value || '';
	    });
	    
	    return json;
	}

	// add validation Required

	jQuery.validator.addMethod("pageRequired", function(value, element) {
		var jQueryelement = jQuery(element)
		function match(index) {
			return current == index && jQuery(element).parents("#sf" + (index + 1)).length;
		}
		if (match(0) || match(1) || match(2) || match(3) || match(4)) {
		
			return !this.optional(element);
		}
		return "dependency-mismatch";
	}, "必須欄にご記入ください");



	// validate form

	var v = jQuery("#cmaForm").validate({
		errorPlacement: function (error, element) {
            jQuery(element).tooltipster('update', jQuery(error).text());
            jQuery(element).tooltipster('show');
            jQuery(element).css("border","3px solid red");
        },
        success: function (label, element) {
            jQuery(element).tooltipster('hide'); 
            jQuery(element).css("border","3px solid green");

        },
		onkeyup: false,
		onblur: false,
		submitHandler: function() {  // -=    on submit - send data to server  =-
			jQuery('.buttonWrapper').hide();
			jQuery('p.loading').show();

			var prod_payments =jQuery('#prod_payments').val();
			selected_prod.NoOfPayments=prod_payments; // set NoOfPayments for selected product object
			if (prod_payments>3) { selected_prod.Credit = 1; } else selected_prod.Credit = 0; // set Credit for product 

			if (selected_serv != null){
				selected_serv.Credit = 0; // default Credit for service
				selected_serv.NoOfPayments= 0; // default NoOfPayments for service
			}
			
			if (jQuery('.serv_payments').is(":visible")){  // check if service exist 
				var serv_payments =jQuery('#serv_payments').val();
				selected_serv.NoOfPayments=serv_payments; // set NoOfPayments for service
				if (serv_payments>3) { selected_serv.Credit = 1; } else selected_serv.Credit = 0; // set Credit for service 
			};

			 // create products JSON
			var json_prod="[" + JSON.stringify(selected_prod);
				if (selected_serv != null){
					json_prod=json_prod +
					"," +
					JSON.stringify(selected_serv);
				};
			json_prod=json_prod +"]";

 
			var f_data = {  
			 action: "convcharg",      
			 lid: lead,  //Lead Id
			 fn:jQuery('#first_name').val(), //FirstName
			 ln:jQuery('#last_name').val(), //LastName
			 e:jQuery('#email').val(), //email
			 ph:jQuery('#ph').val(), // Phone
			 ci:jQuery('#city').val(), //City
			 co: "japan", //Country
			 pc:jQuery('#zip').val(), //PostCode
			 st:jQuery('#street').val(), // Street
			 ti:jQuery('#title').find("option:selected").text(), // title
			 pr:json_prod, // Products in JSON
			 pt:"0", // Payment Type
			 cc:jQuery('#card_num').val(), //Credit Card
			 ce:jQuery('#actualDate').val(), //Ecc Expire Date
			 chn: jQuery('#card_holder').val(), //Card Holder Name
			 ccv:jQuery('#sec_code').val(), //SecurityCode
			 g: jQuery('#title').find("option:selected").val(), //gender
			 sq:jQuery('#securityQuestion').find("option:selected").val(), //SecurityQuestion
			 sa:jQuery('#securityAnss').val(), //Security Answer
			 p:jQuery('#pass').val(), //password
		//	 pn: , //Purchase Number
			 sc: serviceCode , //Service Code 
			 size: jQuery('#belt_size').val(), // Belt Size 
			 pro: "0"
			};

		

		// sends data to sales force
			    var sendDataToSF = jQuery.ajax({
				  url: salesforce,
				  type: "POST",
				  data: f_data,
				  crossDomain: true ,
			      dataType: 'json'
				});
				 
				sendDataToSF.done(function( data ) {
					jQuery('.right_msg').hide();

					if (data != null)
					{
						if (data.Success == true){
							jQuery('#cmaForm').slideToggle(function() {
								jQuery(".done").fadeIn();    /// done with success
							});
						}
						else
						{
							jQuery('#cmaForm').slideToggle(function() {	
								jQuery(".done_error").text(data.Msg).fadeIn(); // done with error
							});
						};
					} else
					{
						jQuery('#cmaForm').slideToggle(function() {	
							jQuery(".error").fadeIn();  // no connection
						});
					} 
				});
				 
				sendDataToSF.fail(function( jqXHR, textStatus ) {
				    console.log( "sendDataToSF fail: " + textStatus );
					jQuery('#cmaForm').slideToggle(function() {	
						jQuery(".error").fadeIn();  // no connection
					});
				});

		},
	});

	jQuery.extend(jQuery.validator.messages, {
    remote: "Please fix this field.",
    email: "Please enter a valid email address.",
    url: "Please enter a valid URL.",
    date: "Please enter a valid date.",
    dateISO: "Please enter a valid date (ISO).",
    number: "有効な番号を入力してください。",
    digits: "Please enter only digits.",
    creditcard: "有効なクレジットカード番号を入力してください。",
    equalTo: "パスワードが確認用パスワードと一致しません",
    accept: "Please enter a value with a valid extension.",
    maxlength: jQuery.validator.format(""),
    minlength: jQuery.validator.format("パスワードには最低6文字必要です"),
    rangelength: jQuery.validator.format("Please enter a value between {0} and {1} characters long."),
    range: jQuery.validator.format("Please enter a value between {0} and {1}."),
    max: jQuery.validator.format("Please enter a value less than or equal to {0}."),
    min: jQuery.validator.format("")
	});

 
	jQuery.validator.addMethod("pwcheck", function(value) {  // add password regex
	   return /\d/.test(value) // has a digit
	},"パスワードは、6文字以上で、必ず英文字と数字を組み合わせてください。");


	// back buttons do not need to run validation
	jQuery("#sf2 .prevbutton").click(function(){
		current = 0;
		accordion.accordion("option", "active", 0);
		
	});
	jQuery("#sf3 .prevbutton").click(function(){
		current = 1;
		accordion.accordion("option", "active", 1);
		
	});
	jQuery("#sf4 .prevbutton").click(function(){
		current = 2;
		accordion.accordion("option", "active", 2);
		
	});

	jQuery("#sf5 .prevbutton").click(function(){
		current = 3;
		accordion.accordion("option", "active", 3);
		
	});
	// these buttons all run the validation, overridden by specific targets above
	jQuery(".open4").click(function() {
	  if (v.form()) {
	  	current = 4;
	    accordion.accordion("option", "active", 4);
	    scrollDown();
	  }
	});
	jQuery(".open3").click(function() {
	  if (v.form()) {
	  	current = 3;
	    accordion.accordion("option", "active", 3);
	    scrollDown();
	  }
	});
	jQuery(".open2").click(function() {
	  if (v.form()) {
	  	current = 2;
	    accordion.accordion("option", "active", 2);
	    scrollDown();
	  }
	});
	var prod_id
	jQuery(".open1").click(function() {

		new_prod_id = jQuery(this).attr("prod_id");
		if(typeof new_prod_id !== "undefined"){
			prod_id= new_prod_id;
				switch(prod_id)
				{
				case "0": // just product
				  selected_prod = products[1];
				  selected_serv = null ;
				  serviceCode = "1";  // set service code to " no feedback"
				  jQuery(".serv_payments").hide(); 
				  break;
				case "1": // product + Monthly
				  selected_prod = products[1];
				  selected_serv = products[3];
				  serviceCode = "2";  // set service code to feedback"
				  jQuery(".serv_payments").hide();
				  break;
				case "2": // product + One Year
				  selected_prod = products[0];
				  selected_serv = products[2];
				  serviceCode = "2";  // set service code to feedback"
				  jQuery(".serv_payments").show();
				  break;	  
				}
				jQuery (".prod_price_divide").text(selected_prod.Price);  // set default price for prod division
				if (selected_serv != null){
					jQuery (".serv_price_divide").text(selected_serv.Price);  // set default price for serv division
				}
				
		}

	  	current = 1;
	    accordion.accordion("option", "active", 1);
	    scrollDown();

	});



	function scrollDown(){
		jQuery('html, body').animate({
		  scrollTop: jQuery(".simple-rounded-box").offset().top
		}, 2000);

	}

 
	jQuery(function() {		 
	  	jQuery( "#exp_date" ).datepicker({
	      changeMonth: true,
	      changeYear: true,
	      showButtonPanel: true,
          altFormat: 'ymm',
          altField: "#actualDate",
          dateFormat : 'yy-mm',
          closeText : "終了",
          monthNamesShort: [ "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12" ],
	         beforeShow: function(input, inst) {
 				jQuery(this).tooltipster('disable').tooltipster('hide');

      		  },
	         onClose: function(dateText, inst) {
		        var month = jQuery("#ui-datepicker-div .ui-datepicker-month :selected").val();
	            var year = jQuery("#ui-datepicker-div .ui-datepicker-year :selected").val();
	            jQuery(this).datepicker('setDate', new Date(year, month, 1));
 				jQuery(this).tooltipster('enable');
      		  },
	    }).bind('click keyup', function() {

	    	/*
	 		jQuery( ".ui-datepicker-month" ).before( "<p class='date_title'>月</p>" );
			jQuery( ".ui-datepicker-year" ).before( "<p class='date_title'>年</p>" );
			jQuery(".ui-icon").hide();
			*/
		});
 	 });

	

	// hide ui-accordion css

	jQuery(".ui-accordion-link").hide();
	jQuery(".ui-accordion-content , .ui-accordion-container, .ui-accordion-link").removeClass();

 

	
	// Product Price ,Payments  Division
	jQuery( "#prod_payments" ).change(function() {
	  var payments = jQuery(this).val();
	  var price_divide = Math.floor(selected_prod.Price / payments);
	  jQuery (".prod_price_divide").text(price_divide);
	});

	// Service Price ,Payments  Division
	jQuery( "#serv_payments" ).change(function() {
	  var payments = jQuery(this).val();
	  var price_divide = Math.floor(selected_serv.Price / payments);
	  jQuery (".serv_price_divide").text(price_divide);
	});

	jQuery( "#serv_interest" ).change(function() {
	var gmo = "<option value='5'>5</option><option value='6'>6</option><option value='10'>10</option><option value='12'>12</option>";
	var credit = "<option value='1'>1</option><option value='3'>3</option>";

	  if (jQuery(this).val() == "gmo") {
	  		  jQuery ("#serv_payments").empty().append(gmo);

	  }else {
	  		  jQuery ("#serv_payments").empty().append(credit);

	  }


	  jQuery( "#serv_payments" ).change();
	});


	jQuery( "#prod_interest" ).change(function() {
	var gmo = "<option value='5'>5</option><option value='6'>6</option><option value='10'>10</option><option value='12'>12</option>";
	var credit = "<option value='1'>1</option><option value='3'>3</option>";

	  if (jQuery(this).val() == "gmo") {

	 		  jQuery ("#prod_payments").empty().append(gmo);
	  }else {

	 		  jQuery ("#prod_payments").empty().append(credit);
	  }

	  jQuery( "#prod_payments" ).change(); // update price dev

	});

});


