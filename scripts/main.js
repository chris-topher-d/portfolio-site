$(document).ready(function() {
  $('.scroll').click(function(e) {
    var section = $(this).attr('href');

    $('html, body').animate({
      scrollTop: $(section).offset().top
    }, 1000);

    // e.preventDefault();
  });
});
