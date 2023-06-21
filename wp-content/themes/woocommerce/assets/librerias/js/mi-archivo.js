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

    


		

		
	


});

