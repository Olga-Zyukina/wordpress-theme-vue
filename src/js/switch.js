// Switch Product.php

(function() {
  "use strict";
 
  function onClickInput(event) {
    var mixInput = event.target.getAttribute('data-id');
    document.querySelectorAll('.active').forEach(
			function( el ) {
				el.classList.remove('active');
			}
		);
    document.querySelector('.left-column img[data-id = "' + mixInput + '"]').classList.toggle('active');
      
    document.querySelectorAll('.left-column h2.active').forEach(
			function( el ) {
				el.classList.remove('active');
			}
		);
    document.querySelector('.left-column h2[data-id = "' + mixInput + '"]').classList.toggle('active');

    document.querySelectorAll('.product-price .active').forEach(
			function( el ) {
				el.classList.remove('active');
			}
		);
    document.querySelector('.product-price span[data-id = "' + mixInput + '"]').classList.toggle('active');

    document.querySelectorAll('.disp').forEach(
			function( el ) {
				el.classList.remove('disp');
			}
		);
    document.querySelector('.tabs-pro ul[data-id = "' + mixInput + '"]').classList.toggle('disp');
    
    document.querySelectorAll('.tabs-pro li').forEach(
			function( el ) {
				el.classList.remove('current-pro');
			}
		);
    document.querySelectorAll('.tab-block').forEach(
			function( el ) {
				el.classList.remove('current-pro');
			}
		);
    document.querySelector('.tabs-pro li[data-id = "' + mixInput + '"]').classList.toggle('current-pro');
    var tab_id = document.querySelector('.tabs-pro li[data-id = "' + mixInput + '"]').getAttribute('data-tab');
    document.querySelector("#"+tab_id).classList.toggle('current-pro');
  };

  function onClickTab(event) {
    var tab_id = event.target.getAttribute('data-tab');    
    document.querySelectorAll('#tab_third li').forEach(
			function( el ) {
				el.classList.remove('current-pro');
			}
		);

    document.querySelectorAll('.tab-block').forEach(
			function( el ) {
				el.classList.remove('current-pro');
			}
		);
    document.querySelector('#tab_third li[data-tab = "' + tab_id + '"]').classList.toggle('current-pro');
    document.querySelector("#"+tab_id).classList.toggle('current-pro');
    };    
  
  document.querySelectorAll(".density-choose input").forEach( 
		function( el ) {
			el.addEventListener("click", onClickInput);
		}
	);
  
  document.querySelectorAll("#tab_third li").forEach( 
		function( el ) {
			el.addEventListener("click", onClickTab);
		}
	); 
})();