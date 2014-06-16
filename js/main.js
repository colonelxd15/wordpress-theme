jQuery(document).ready(function($) {
  
    $('input[id$="s"]').attr('placeholder', 'Search...');

 	$.each($('input, textarea'), function(index, value) {
		$(this).data('holder', $(this).attr('placeholder'));
	});

    $('input, textarea').focusin(function(){
        $(this).attr('placeholder','');
    });

    $('input, textarea').focusout(function(){
        $(this).attr('placeholder', $(this).data('holder'));
    });

    $('.navbar-toggle').on('click', function(){
    	$(this).toggleClass('navbar-toggle-animate');
    	$('.navigation-class').toggleClass('animate-nav');

    });

});


