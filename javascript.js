var main = function() {
	$('#go_on').click(function() {
		$('#welcome_window').animate({
			left: "-105%"
		}, 250);

		$('#top_menu').animate({
			top: "0"
		}, 500);	

		$('body').delay(30000).css("background-color","#B6B6B6");

		$('#top_menu #menu_container ul li').delay(350).animate({
			fontSize: '45px'
		}, 250);
		
	});

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

	$('#facts').click(function(){
		$('#container, #left, #right').fadeIn("slow", function() {
			left: "0";

		}).css("display","inline-block");
	});

}

$(document).ready(main);

