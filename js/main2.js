$(document).ready(main);

var contador = 1;

function main () {
	$('.clsmenu2').click(function(){
		if (contador == 1) {
			$('nav').animate({
				left: '0'
			});
			contador = 0;
		} else {
			contador = 1;
			$('nav').animate({
				left: '-100%'
			});
		}
	});

	// Mostramos y ocultamos submenus
	$('.clssubmenu').click(function(){
		$(this).children('.children').slideToggle();
	});
}
