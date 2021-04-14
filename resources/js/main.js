$(document).ready(function(){
	var altura = $('.menu').offset().top;
	
	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura ){
			$('.menu').addClass('menu-fixed');
		} else {
			$('.menu').removeClass('menu-fixed');
		}
	});
 
});

function correo(){
	alert("rodriguezpackito@gmail.com");
}
function telefono(){
	alert("+52 1 55 1506 4688");
}