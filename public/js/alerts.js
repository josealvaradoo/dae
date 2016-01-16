$(document).on('ready',function() {

	var closeButton = $('.alert > .close');
	closeButton.on('click', function() {
		closeButton.parent().fadeOut('slow');
	});

});