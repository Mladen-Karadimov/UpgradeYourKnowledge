var main = function() {
	

	$('#welcome_window h2').hover(function() {
		$(this).animate({
			fontSize : '84px'
		}, 300);
	},

	function() {
		$(this).animate({
			fontSize : '72px'
		}, 250);
	});	
}

$(document).ready(main);

