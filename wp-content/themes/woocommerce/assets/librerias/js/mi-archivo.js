jQuery(function ($) {



    $('#carrusel-smartphones').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 1000,
        arrows: true,
        dots: false,
        pauseOnHover: true,
        responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 2
            }
        }, {
            breakpoint: 375,
            settings: {
                slidesToShow: 1
            }
        }]
    });



    $('#carrusel-notebooks').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 1000,
        arrows: true,
        dots: false,
        pauseOnHover: true,
        responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 2
            }
        }, {
            breakpoint: 375,
            settings: {
                slidesToShow: 1
            }
        }]
    });

    $('#carrusel-relacionados').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 1000,
        arrows: true,
        dots: false,
        pauseOnHover: true,
        responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 2
            }
        }, {
            breakpoint: 375,
            settings: {
                slidesToShow: 1
            }
        }]
    });

    
    $('.entry-title').prependTo('.summary');
	$('.related').css('width','100%');
    $('#carrusel-relacionados').css('position','relative');
    $('#carrusel-relacionados div.slick-list div.slick-track div.product').addClass('tarjeta-producto-home');

		

		
	


});

