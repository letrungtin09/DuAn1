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
    truncateDesText();
    truncatePopTitle();
});

function truncateCardTitle(){
    var cardList = document.getElementsByClassName('card-title');
    for(var i = 0; i < cardList.length; i++){
        var text = cardList[i].innerHTML;
        var newText = truncateString(text,45);
        cardList[i].innerHTML = newText;
    }
}

function truncateDesText(){
    var desList = document.getElementsByClassName('description-text');
    for(var i = 0; i < desList.length; i++){
        var textDes = desList[i].innerHTML;
        var newTextDes = truncateString(textDes,120);
        desList[i].innerHTML = newTextDes;
    }
}

function truncatePopTitle(){
    var titleList = document.getElementsByClassName('popover-title');
    for(var i = 0; i < titleList.length; i++){
        var textTitle = titleList[i].innerHTML;
        var newTextTitle = truncateString(textTitle,50);
        titleList[i].innerHTML = newTextTitle;
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
// Code giới hạn từ cho title
var textElements = document.querySelectorAll('.tieu-de-limited');
for(var textElement of textElements){
    var originalText = textElement.textContent;
    var trimmedText = originalText.trim().slice(0,34) + '...';
    textElement.textContent = trimmedText;
}
