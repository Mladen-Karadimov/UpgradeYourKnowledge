var main = function() {
	$('#go_on').click(function() {
		$('#welcome_window').animate({
			left: "-105%"
		}, 3000);

		$('body').delay(30000).css("background-color","#9D9D9D");
	});
}

$(document).ready(main);

