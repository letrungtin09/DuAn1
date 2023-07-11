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

function showCard(){
    document.querySelector('.card-popup').style.opacity = '1';
}
function hideCard(){
    document.querySelector('.card-popup').style.opacity = '0';
}