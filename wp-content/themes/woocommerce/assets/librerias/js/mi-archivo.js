jQuery(function($) {

 

    $('#carrusel-productos').slick({
        slidesToShow: 5,
        slidesToScroll: 3,
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

//$('div.id-aca').attr('id', 'carrusel-productos-destacados');
//$('.carrusel-aqui').addClass('slidel');




    $('#carrusel-productos-destacados').slick({
        slidesToShow: 3,
        slidesToScroll: 4,
        autoplay: true,
        autoplaySpeed: 1000,
        arrows: true,
        dots: true,
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

  

});