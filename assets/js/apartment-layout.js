(function ($) {
  $(document).ready(function () {
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      dots: false,
      items: 4,
      autoplay: true,
      smartSpeed: 1500,
      autoplaySpeed: 1500,
      autoplayTimeout: 10000,
      navText: [
        '<i class="ti ti-arrow-right ti-rotate-180 text-primary" aria-hidden="true"></i>',
        '<i class="ti ti-arrow-right text-primary" aria-hidden="true"></i>'
      ],
      responsiveClass: true,
      responsive:{
        0: {
          items: 1,
          nav: true,
        },
        600: {
          items: 1
        },
        1000: {
          items: 2,
          nav: false,
          navContainer: '.owl-nav'
        },
        1440: {
          items: 4
        }
      }
    });
  });
})(jQuery);
