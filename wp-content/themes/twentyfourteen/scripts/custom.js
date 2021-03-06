//------------------------------------------------------------------------
//								PRELOADER SCRIPT
//------------------------------------------------------------------------
$(window).load(function() { // makes sure the whole site is loaded

	"use strict";
    
    $('#preloader').delay(400).fadeOut('slow'); // will fade out the white DIV that covers the website.
    $('.clock').fadeOut(); // will first fade out the loading animation
	
	new WOW().init();
	
	$.stellar();
	
})




$(document).ready(function(){
	
	"use strict";	
	
//------------------------------------------------------------------------
//						TESTIMONIALS SLIDER SETTINGS
//------------------------------------------------------------------------
    var owl = $("#testimonials-slider");
    owl.owlCarousel({
        items : 5, 
        itemsDesktop : [1400,4], 
        itemsDesktopSmall : [1200,3], 
        itemsTablet: [900,2], 
        itemsMobile : [600,1],
		autoPlay : 4000,
		stopOnHover:true
    });
	
	$(".round_btn_dark").click(function (e){
		e.preventDefault();
		$("#contact-detail").modal('show');
	})
		
	$('.flexslider').flexslider({
		animation: "fade",
							direction: "horizontal",
							startAt: 0,         
							slideshowSpeed: 6500,         
							animationSpeed: 600, 
							useCSS: false,
	});

	 
	 
//------------------------------------------------------------------------
//						INTRO SUPERSLIDER SETTINGS
//------------------------------------------------------------------------
	$("#slides").superslides({
		play: 8000, //Milliseconds before progressing to next slide automatically. Use a falsey value to disable.
		animation: "fade", //slide or fade. This matches animations defined by fx engine.
		pagination: false, //Generate pagination. Add an id to your slide to use custom pagination on that slide.
		inherit_height_from:"#intro" // Accepts window or element selector. Use to constrain slider to an element's height.
		
		// more options: https://github.com/nicinabox/superslides
	});
		


	
//------------------------------------------------------------------------
//					SUBSCRIBE FORM VALIDATION'S SETTINGS
//------------------------------------------------------------------------          
    $('#subscribe_form').validate({
        onfocusout: false,
        onkeyup: false,
        rules: {
            email: {
                required: true,
                email: true
            }
        },
        errorPlacement: function(error, element) {
            error.appendTo( element.closest("form"));
        },
        messages: {
            email: {
                required: "We need your email address to contact you",
                email: "Please, enter a valid email"
            }
        },
					
        highlight: function(element) {
            $(element)
        },                    
					
        success: function(element) {
            element
            .text('').addClass('valid')
        }
    }); 
	

		
				
//------------------------------------------------------------------------------------
//						SUBSCRIBE FORM MAILCHIMP INTEGRATIONS SCRIPT
//------------------------------------------------------------------------------------		
    $('#subscribe_form').submit(function() {
        $('.error').hide();
        $('.error').fadeIn();
        // submit the form
        if($(this).valid()){
            $('#subscribe_submit').button('loading'); 
            var action = $(this).attr('action');
            $.ajax({
                url: action,
                type: 'POST',
                data: {
                    newsletter_email: $('#subscribe_email').val()
                },
                success: function(data) {
                    $('#subscribe_submit').button('reset');
					
					//Use labels to display messages
                    //$('.error').html(data);
					
					//Use modal popups to display messages
					$('#modalSubscribe .modal-title').html('<i class="icon-envelope-letter"></i>' + data);
					$('#modalSubscribe').modal('show');
					
                },
                error: function() {
                    $('#subscribe_submit').button('reset');
					
                    //Use labels to display messages
                   	//$('.error').html('Oops! Something went wrong!');
					
					//Use modal popups to display messages
					$('#modalSubscribe .modal-title').html('<i class="icon-ban"></i>Oops!<br>Something went wrong!');
					$('#modalSubscribe').modal('show');
					
                }
            });
        // return false to prevent normal browser submit and page navigation 
        }
        return false; 
    });
	  


//------------------------------------------------------------------------------------
//								CONTACT FORM SCRIPT
//------------------------------------------------------------------------------------	
	
    $('#contact_form').submit(function() {
        // submit the form
        if($(this).valid()){
            $('#contact_submit').button('loading'); 
            var action = $(this).attr('action');
            $.ajax({
                url: action,
                type: 'POST',
                data: {
                    contactname: $('#contact_name').val(),
                    contactemail: $('#contact_email').val(),
                    contactmessage: $('#contact_message').val()
                },
                success: function() {
                    $('#contact_submit').button('reset');
					
					//Use button to display messages
                    //$('#contact_submit').button('complete');
					
					//Use modal popups to display messages
					$('#modalContact .modal-title').html('<i class="icon-paper-plane"></i>Well done!<br>Your message has been successfully sent!');
					$('#modalContact').modal('show');
                },
                error: function() {
                    $('#contact_submit').button('reset');
					
					//Use button to display messages
                    //$('#contact_submit').button('error');
					
					//Use modal popups to display messages
					$('#modalContact .modal-title').html('<i class="icon-ban"></i>Oh no!<br>Something went wrong!');
					$('#modalContact').modal('show');
                }
            });
        // return false to prevent normal browser submit and page navigation 
        } else {
            $('#contact_submit').button('reset')
        }
        return false; 
    });	        

});