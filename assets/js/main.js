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

function anhien(){
    var fillter = document.getElementById("searchCourse_content-filter-id");
    if(fillter.style.display == "none") fillter.style.display = "block";
    else fillter.style.display = "none";
}
function hienthem(){
    var detailText = document.getElementById("coursecontent_container-content-text");
    var buttonText = document.getElementById("coursecontent_container-content-button-text");
    var shadowText = document.getElementById("coursecontent_container-content-shadow");
    if(detailText.style.height == "100%") {
        detailText.style.height = "250px";
        buttonText.innerText = "Hiện thêm"
        shadowText.style.display = "block";
    }else {
        detailText.style.height = "100%";
        buttonText.innerText = "Ẩn bớt"
        shadowText.style.display = "none";
    }
    
}
