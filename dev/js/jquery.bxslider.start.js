jQuery(document).ready(function($) {


  $('.Slider').bxSlider({
    mode: 'vertical',
    minSlides: 1,
    maxSlides: 1,
    startSlide: 0,
    //slideWidth: 1200,
    slideMargin: 0,
    // captions: true,
    pause: 4000,
    auto: false,
    speed: 500,
    infiniteLoop: false,
    hideControlOnEnd: true,
    touchEnabled: false,
    pager: false,
    controls: true,
    onSliderLoad: function() {
      $('.Slider').css('visibility', 'visible');

    }
  });

  $('.Slider2').bxSlider({


    onSliderLoad: function() {

      $('.Slider').css('visibility', 'visible');

      $(".slider-imac").animate({
        "right": "105px"
      }, "slow");

      $(".slider-ipad").delay(1000).animate({
        "right": "0px"
      }, "slow");

      $(".slider-iphone").delay(2000).animate({
        "right": "100px"
      }, "slow");

      $(".slider-h4").delay(3000).animate({
        "opacity": "1"
      }, "slow");

      $(".slider-p").delay(4000).animate({
        "opacity": "1"
      }, "slow");

      $(".slider-button").delay(5000).animate({
        "opacity": "1"
      }, "slow");

    },


    onSlideAfter: function() {


      $(".slider-imac").animate({
        "right": "105px"
      }, "slow");

      $(".slider-ipad").delay(1000).animate({
        "right": "0px"
      }, "slow");

      $(".slider-iphone").delay(2000).animate({
        "right": "100px"
      }, "slow");

      $(".slider-h4").delay(3000).animate({
        "opacity": "1"
      }, "slow");

      $(".slider-p").delay(4000).animate({
        "opacity": "1"
      }, "slow");

      $(".slider-button").delay(5000).animate({
        "opacity": "1"
      }, "slow");

    },

    onSlideBefore: function() {

      $('.Slider').css('visibility', 'visible');


      $(".slider-imac").css({
        "right": "-800px"
      });

      $(".slider-ipad").css({
        "right": "-800px"
      });

      $(".slider-iphone").css({
        "right": "-800px"
      });

      $(".slider-h4").css({
        "opacity": "0"
      });

      $(".slider-p").css({
        "opacity": "0"
      });

      $(".slider-button").css({
        "opacity": "0"
      });

    },




    mode: 'horizontal',
    minSlides: 1,
    maxSlides: 1,
    startSlide: 0,
    //slideWidth: 1200,
    slideMargin: 0,
    // captions: true,
    pause: 13000,
    auto: true,
    speed: 500,
    infiniteLoop: true,
    hideControlOnEnd: true,
    touchEnabled: false,
    pager: false,
    controls: false,
  });









});
