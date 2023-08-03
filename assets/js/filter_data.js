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