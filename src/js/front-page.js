import '../css/front-page.css';
(function() {
	"use strict";
	function onClickCircle(event) {
		document.querySelectorAll("circle").forEach(
			function( el ) {
				el.classList.remove('active');
			}
		);
		event.target.classList.toggle('active');
		document.querySelectorAll('.scheme__items li').forEach(
			function( el ) {
				el.classList.remove('active');
			}
		);
		document.querySelector('.scheme__items li[data-id="' + event.target.getAttribute('data-id') + '"]').classList.toggle('active');
	};
	document.querySelectorAll("circle").forEach( 
		function( el ) {
			el.addEventListener("click", onClickCircle);
		}
	);
})();