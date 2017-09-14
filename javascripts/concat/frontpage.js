$(document).ready(function(){
  $('.frontpage-slider').slick({
    // Find options here: http://kenwheeler.github.io/slick/
  });
});

// Remove all empty <p> tags
$(document).ready(function(){
  $('p').each(function() {
    var $this = $(this);
    if($this.html().replace(/\s|&nbsp;/g, '').length === 0)
        $this.remove();
  });
});


$('.social-toggle').on('click', function(event) {
  event.preventDefault();
  $(this).next().toggleClass('social-visible');
});

$('.language-switcher-toggle').on('click', function(event) {
  event.preventDefault();
  $('.language-switcher').toggleClass('is-visible');
  $(this).toggleClass('not-visible');
});
