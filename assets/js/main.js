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
$('.select_fillter_controller').change(function(){
    var value = $(this).find(':selected').val();
    window.location.replace(value);
})
$(document).ready(function(){
    filter_data();
    function filter_data(){
        $('.filter_data').html('<div id="searchCourse_content-product" style="" ></div>');
        var action = 'fetch_data';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        var type = get_filter('searchCourse_content-filter-checkbox_class_type');
        var level = get_filter('searchCourse_content-filter-checkbox_class_level');
        var teacher = get_filter('searchCourse_content-filter-checkbox_class_teacher');
        $.ajax({
            url:"model/xuly.php",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, type:type, level:level, teacher:teacher},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }
    function get_filter(class_name){
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }
    $('.common_selector').click(function(){
        filter_data();
    });
    $('#price_range').slider({
        range:true,
        min:0,
        max:5000000,
        values:[1000, 5000000],
        step:500,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });
});
