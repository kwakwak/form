jQuery(document).ready(function(){

	// accordion functions
	var accordion = jQuery("#stepForm").accordion({  
			heightStyle: "content",
            autoHeight: false,
            animate: 800,
            beforeActivate: function( event, ui ) {
            	jQuery('body').tooltipster('disable').tooltipster('hide');
          
            },
            activate: function( event, ui ) {

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
	




	// Numbers Mask
	//jQuery("#npi").mask("9999999999");
	//jQuery("#zip").mask("99999");

	// add * to required field labels
	jQuery('label.requiredv').append('&nbsp;<strong>*</strong>&nbsp;');




	// add validation

	jQuery.validator.addMethod("pageRequired", function(value, element) {
		var jQueryelement = jQuery(element)
		function match(index) {
			return current == index && jQuery(element).parents("#sf" + (index + 1)).length;
		}
		if (match(0) || match(1) || match(2) || match(3)) {
		
			return !this.optional(element);
		}
		return "dependency-mismatch";
	}, jQuery.validator.messages.required)


	var v = jQuery("#cmaForm").validate({
		errorPlacement: function (error, element) {
            jQuery(element).tooltipster('update', jQuery(error).text());
            jQuery(element).tooltipster('show');
        },
        success: function (label, element) {
            jQuery(element).tooltipster('hide'); // normal validate behavior
            //jQuery(element).tooltipster('update', 'accepted'); // as per OP
        },
        

		onkeyup: false,
		onblur: false,
		submitHandler: function() {
			alert(jQuery('#cmaForm').serialize());
		}
	});

	// back buttons do not need to run validation
	jQuery("#sf2 .prevbutton").click(function(){
		accordion.accordion("option", "active", 0);
		current = 0;
	});
	jQuery("#sf3 .prevbutton").click(function(){
		accordion.accordion("option", "active", 1);
		current = 1;
	});
	jQuery("#sf4 .prevbutton").click(function(){
		accordion.accordion("option", "active", 2);
		current = 2;
	});
	// these buttons all run the validation, overridden by specific targets above
	jQuery(".open3").click(function() {
	  if (v.form()) {
	    accordion.accordion("option", "active", 3);
	    current = 3;
	    scrollDown();
	  }
	});
	jQuery(".open2").click(function() {
	  if (v.form()) {
	    accordion.accordion("option", "active", 2);
	    current = 2;
	    scrollDown();
	  }
	});
	jQuery(".open1").click(function() {
	  if (v.form()) {	
	    accordion.accordion("option", "active", 1);
	    current = 1;
	    scrollDown();
	  }
	});
	jQuery(".open0").click(function() {
	  if (v.form()) {
	    accordion.accordion("option", "active", 0);
	    current = 0;
	    scrollDown();
	  }
	});

	function scrollDown(){
		jQuery('html, body').animate({
		  scrollTop: jQuery(".simple-rounded-box").offset().top
		}, 2000);
	}

	function makeAjaxCall(pUrl,sParams,pCalback){

	if (window.XDomainRequest )
	{
              
		var xdr = new XDomainRequest();
		var exParams="";
		if (xdr)
		{
           
		   jQuery.each(sParams, function(i, val){
		    exParams = exParams + i + '='+ val+ '&';
		   });
                     exParams = exParams.substr(0, exParams.length-1 );
			xdr.onload = function()
			{
				pCalback(xdr.responseText);
			};
                        xdr.open("post", pUrl);
                        setTimeout(function () {
                             xdr.send(JSON.stringify(sParams));
                        }, 0);

		}
	}
	else{
                     
			jQuery.ajax(
			{
			 url: pUrl,
			type:'POST',
			data:sParams
			}).done(function( res ) {
						pCalback(res);
						});


		

		}
	}

	/*add values for the security question*/
	cloudUrl = "http://spdev.shahal.co.il/SmartheartPortal/RegistrationHandler.ashx";
	sUrl = {a:"q",did:"1",l:"ja-jp"};
	makeAjaxCall(cloudUrl,sUrl, function(res) {
	            
			
			var res = JSON.parse(res);
			if (res)	{
				for (var i = 0; i < res.questions.length; i++) {
		
					jQuery('#securityQuestion').append(jQuery('<option>', {
					value: res.questions[i].id,
					text: res.questions[i].quest
					}));

				}
				jQuery('#securityQuestion').prop('disabled', false);
			}
	 });


	jQuery(function() {		 
	  	jQuery( "#exp_date" ).datepicker({
	      changeMonth: true,
	      changeYear: true,
	         beforeShow: function(input, inst) {
 				jQuery('#card_num').tooltipster('hide');
      		  },
	         onClose: function(input, inst) {
 				jQuery(this).tooltipster('hide');
      		  },
	    });
 	 });

	// hide ui-accordion css

	jQuery(".ui-accordion-link").hide();
	jQuery(".ui-accordion-content , .ui-accordion-container, .ui-accordion-link").removeClass();

});