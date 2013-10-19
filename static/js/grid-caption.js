$(document).ready(function() {

	$("[rel='tooltip']").tooltip();

	$('#caption-hover .thumbnail').hover(

	function() {
		$(this).find('.caption').fadeIn(250);
	},

	function() {
		$(this).find('.caption').fadeOut(250);
	});

});

