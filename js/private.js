
var btn = $('.back-to-top a');
btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '500');
});

$('.btn-bar a').click(function(event) {
  $(this).toggleClass('active');
  $('.box-side-bar').toggleClass('active');
});