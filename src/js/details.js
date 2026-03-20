function onToggle(event) {
	"use strict";
	if (event.target.open) {
		document.querySelectorAll(".faq__page > details[open]").forEach(
			function( el ) {
				if (el === event.target) {
					return;
				}
				el.open = false;
			}
		);
	}
};
document.querySelectorAll(".faq__page > details").forEach( 
	function( el ) {
		el.addEventListener("toggle", onToggle);
	}
);