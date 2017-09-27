$(document).ready(function(){
	
	    $(window).scroll(function(){

            if($(window).width() >= 800){
    	        if( $(this).scrollTop() > 0 ) {
    	           $('header').addClass('header2');
    	       } else{
    	           $('header').removeClass('header2');
    	       }
           }
           else{
             if( $(this).scrollTop() > 0 ) {
                   $('header').addClass('posicion-fija');
               } else{
                   $('header').removeClass('posicion-fija');
               }
           }

	   });
    // }

		$(function() {
    var contador = 1;
    var pull = $('.menu-op');
    menu = $('nav');
    abrir = $('.abrir');
    cerrar = $('.cerrar');
    // menuHeight = pull.height();

    $(pull).on('click', function(e) {
        e.preventDefault();
         if (contador == 1) {
               menu.slideToggle(1000);
                menu.css({
                    position: 'fixed',
                    top:'100px',
                    'z-index':'3'

                }); 
                contador = 0;
            } else {
                menu.slideToggle(1000);
                // cerrar.slideToggle(1000);
                // abrir.slideToggle(1000);
                contador = 1;
            }

        // if($(window).width() < 800){
        //     menu.position().top();

        //     if(menu > 10){
        //          menu.css({
        //                'position': 'fixed',
        //                'top':'10px'
        //            }); 
        //     }
           
        // }
    });
});

	// }
});
