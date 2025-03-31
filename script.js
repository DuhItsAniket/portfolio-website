// Smooth scrolling functionality
$(document).ready(function() {
  $('a.nav-link').on('click', function(e){
    e.preventDefault();
    $('html, body').animate({
      scrollTop: $($(this).attr('href')).offset().top - 60
    }, 600);
  });
});
