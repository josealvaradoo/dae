$(document).on('ready',function() {

	var closeButton = $('.alert > .close');
	closeButton.each(function() {
		$(this).on('click', function() {
			$(this).parent().fadeOut('slow');
		});
	});

});