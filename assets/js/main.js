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


// COURSE CONTENT
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
    filter_data();
    function filter_data(){
        $('.filter_data').html('<div id="searchCourse_content-product" style="" ></div>');
        var action = 'fetch_data';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        var type = get_filter('searchCourse_content-filter-checkbox_class_type');
        var level = get_filter('searchCourse_content-filter-checkbox_class_level');
        var teacher = get_filter('searchCourse_content-filter-checkbox_class_teacher');
        var arrange = get_arrange('select_fillter_controller');
        var pages = get_page('pagination_data');
        var wordsearch = get_keyword();
        $.ajax({
            url:"model/xuly.php",
            method:"POST",
            data:{action:action, wordsearch:wordsearch, pages:pages, minimum_price:minimum_price, arrange:arrange, maximum_price:maximum_price, type:type, level:level, teacher:teacher},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
        $.ajax({
            url:"model/xulypagination.php",
            method:"POST",
            data:{action:action, wordsearch:wordsearch, pages:pages, minimum_price:minimum_price, arrange:arrange, maximum_price:maximum_price, type:type, level:level, teacher:teacher},
            success:function(data){
                $('.pagination_data').html(data);
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
    function get_keyword(){
        var keyWord = document.getElementById("searchCourse_header-title-id").innerText;
        return keyWord;
    }
    function get_arrange(class_name){
        var arrange = $('.'+class_name).find(':selected').val();
        return arrange;
    }
    function get_page(class_name){
        var page = $('.'+class_name).find('.active').val();
        return page;
    }
    $('.common_selector').click(function(){
        filter_data();
    });

    $('.select_fillter_controller').change(function(){
        filter_data();
    })
    $('#price_range').slider({
        range:true,
        min:1000,
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
function myFunction(element) {
    element.classList.add("active");
    filter_data();
}

// PAY COURSE
function checkedInput1(){
    document.getElementById("check-1").checked = true;
    document.getElementById("check-2").checked = false;
}
function checkedInput2(){
    document.getElementById("check-1").checked = false;
    document.getElementById("check-2").checked = true;
}

// card-title
window.addEventListener("load", function(){
    truncateCardTitle();
});

function truncateCardTitle(){
    var cardList = document.getElementsByClassName('card-title');
    for(var i = 0; i < cardList.length; i++){
        var text = cardList[i].innerHTML;
        var newText = truncateString(text,45);
        cardList[i].innerHTML = newText;
    }
}

function truncateString(str, num){
    if(str.length > num){
        return  str.slice(0, num) + "...";
    }else{
        return str;
    }
}

    // CODE THAO TÁC VỚI CHECK BOX
    var masterCheckbox = document.getElementById('masterCheckbox');
    var subCheckbox = document.querySelectorAll('.subCheckbox');
    masterCheckbox.checked;
    function handleMasterCheckboxChange() {
        if (masterCheckbox.checked == true) {
            for (subCheck of subCheckbox) {
                subCheck.checked = true;
            }
        }
        else {
            for (subCheck of subCheckbox) {
                subCheck.checked = false;
            }
        }
    }
    masterCheckbox.addEventListener('change', handleMasterCheckboxChange);

// active sidebar admin
var mainNav = document.getElementById("adminNav");
var listNav = mainNav.getElementsByTagName("a");
for (var i = 0; i < listNav.length; i++) {
    listNav[i].addEventListener("click", function () {
        var current = document.querySelector("#adminNav .txt-sidebar .active");
        current.className = current.className.replace("active", "");
        // Cộng thêm class active cho thẻ li được click
        this.className += "active";
    });
}
