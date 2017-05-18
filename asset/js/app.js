var burger = document.querySelector('.burger');
var nav = document.querySelector('header .nav');
var abonnez = document.querySelector('.abonnez');
var commande = document.querySelector('.commande');

burger.addEventListener('click', menuBurger)

function menuBurger() {
	if (nav.style.left == '') {	
		nav.style.left = '0';
		abonnez.style.left = '3%';
	} else {
		nav.style.left = '';
		abonnez.style.left = '';
	}
}