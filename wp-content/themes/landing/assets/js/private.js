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
  
  $('.tab-faq a').click(function(){
    var tab_id = $(this).attr('data-tab');
    $('.tab-faq a').removeClass('active');
    $('.content-faq-tab').removeClass('active');
    $(this).addClass('active');
    $("#"+tab_id).addClass('active');
  })

})

$('[data-countdown]').each(function() {
  var $this = $(this), finalDate = $(this).data('countdown');
  $this.countdown(finalDate, function(event) {
    $this.html(event.strftime(''
    + '<label class="weed-count"><span>%w</span> tuần</label> '
    + '<label><span>%d</span> days</label> ' + '<p>:</p>'
    + '<label><span>%H</span> hours</label> ' + '<p>:</p>'
    + '<label><span>%M</span> minutes</label> ' + '<p>:</p>'
    + '<label><span>%S</span> seconds</label>'));
  });
});
