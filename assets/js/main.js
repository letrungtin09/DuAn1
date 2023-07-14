// OWl CAROUSEL COURSES
$('.courses__item').owlCarousel({
    loop:true,
    margin:15,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:5
        },
        1000:{
            items:5
        }
    }
});

$('.feedback__item').owlCarousel({
    loop:true,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },600:{
            items:2
        },
        1000:{
            items:3
        }
    }
});

$('.bestseller__item').owlCarousel({
    loop:true,
    margin:15,
    nav:false,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:5
        },
        1000:{
            items:5
        }
    }
});

$('.bestseller__item').find('.owl-nav').removeClass('disabled');
$('.bestseller__item').on('changed.owl.carousel', function(event) {
	$(this).find('.owl-nav').removeClass('disabled');
});
