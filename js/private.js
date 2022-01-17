$('.slide-project').slick({
    autoplay: false,
    arrow: false,
    dots: false,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: '',
    nextArrow: '',
}); 

$(document).ready(function(){
  
  $('.clc-tab').click(function(){
    var tab_id = $(this).attr('data-tab');

    $('.clc-tab').removeClass('active');
    $('.detail-tab').removeClass('active');

    $(this).addClass('active');
    $("#"+tab_id).addClass('active');
  })

})