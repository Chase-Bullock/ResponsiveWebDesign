$(document).ready(function(){

    /* For sticky navigation */
    $('.js-section-features').waypoint(function(direction){
        if(direction == "down") {
            $('nav').addClass('sticky');
        } else {
            $('nav').removeClass('sticky');
        }
    }, {
        offset: '100px;'
    });


    /* Scroll down buttons */
    $('.js-scroll-to-plans').click(function(){
        $('html, body').animate({scrollTop: $('.js-section-form').offset().top-120}, 1000);
    })

    $('.js-scroll-to-start').click(function(){
        $('html, body').animate({scrollTop: $('.js-section-features').offset().top}, 1000);
    });

    /* Navigation scroll */

    // Select all links with hashes
$('a[href*="#"]')
// Remove links that don't actually link to anything
.not('[href="#"]')
.not('[href="#0"]')
.click(function(event) {
  // On-page links
  if (
    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
    && 
    location.hostname == this.hostname
  ) {
    // Figure out element to scroll to
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    // Does a scroll target exist?
    if (target.length) {
      // Only prevent default if animation is actually gonna happen
      event.preventDefault();
      $('html, body').animate({
        scrollTop: target.offset().top - 125
      }, 1000, function() {
        // Callback after animation
        // Must change focus!
        var $target = $(target);
        $target.focus();
        if ($target.is(":focus")) { // Checking if the target was focused
          return false;
        } else {
          $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
          $target.focus(); // Set focus again
        };
      });
    }
  }
});

    /* Animation on scroll */
    $('.js-wp-1').waypoint(function(direction){
        $('.js-wp-1').addClass('animated fadeIn');
    },{
        offset: '75%'
    });

    $('.js-wp-2').waypoint(function(direction){
        $('.js-wp-2').addClass('animated fadeInUp');
    },{
        offset: '55%'
    });
    
    $('.js-wp-3').waypoint(function(direction){
        $('.js-wp-3').addClass('animated fadeIn');
    },{
        offset: '55%'
    });

    $('.js-wp-4').waypoint(function(direction){
        $('.js-wp-4').addClass('animated pulse');
    },{
        offset: '55%'
    });

    $('.js-portfolio-1').waypoint(function(direction){
        $('.js-portfolio-1').addClass('animated pulse');
    },{
        offset: '55%'
    });

    $('.js-portfolio-2').waypoint(function(direction){
        $('.js-portfolio-2').addClass('animated pulse');
    },{
        offset: '55%'
    });

    $('.js-portfolio-3').waypoint(function(direction){
        $('.js-portfolio-3').addClass('animated pulse');
    },{
        offset: '55%'
    });

    /* Mobile Navigation */

    $('.js-nav-icon').click(function(){
        var nav = $('.js-main-nav');
        var icon = $('.js-nav-icon i');

        nav.slideToggle(200);

        if (icon.hasClass('ion-navicon-round')) {
            icon.addClass('ion-close-round');
            icon.removeClass('ion-navicon-round');
        } else {
            icon.addClass('ion-navicon-round');
            icon.removeClass('ion-close-round');


        }
    });


    /* MAPS */
    
    var map = new GMaps({
        div: '.map',
        lat: 38.7436266,
        lng: -9.11,
        zoom: 12
      });

      map.addMarker({
        lat: 38.7436266,
        lng: -9.1602037,
        title: 'Libson',
        infoWindow: {
            content: '<p>Our Libson HQ</p>'
        }
    });

});