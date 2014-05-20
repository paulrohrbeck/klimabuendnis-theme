
// variables

var svalue = 'Suche...';

// start jQuery
jQuery(document).ready(function(){

	// navigation:
	jQuery('ul.menu').superfish({
			delay:         800,                // the delay in milliseconds that the mouse can remain outside a submenu without it closing
			dropShadows:   false               // completely disable drop shadows by setting this to false
	});	

	// focused name box
	jQuery('#s').attr("value", svalue);

	// focused name box
	jQuery('#s').focus(function() {
		if(jQuery(this).attr("value") == svalue) {
			jQuery(this).attr("value", '');
		}
	});	
	// name unfocused -> goes back to saved content
	jQuery('#s').blur(function() {
		if(jQuery(this).attr("value") == '') {
			jQuery(this).attr("value", svalue);
		}
	});

	jQuery('#commentform').hide();
	
	jQuery('#reply-title').addClass('plus');
	jQuery('#reply-title').click(function(){
		jQuery('#commentform').toggle(500);
		jQuery('#reply-title').toggleClass('plus');
		jQuery('#reply-title').toggleClass('minus');
	});
	
	
});