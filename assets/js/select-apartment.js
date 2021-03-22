(function ($) {
  $(document).ready(function () {
    $('.construction-progress .owl-carousel').owlCarousel({
      loop: true,
      margin: 20,
      nav: true,
      navContainer: '.construction-progress .owl-nav',
      dots: true,
      dotsContainer: '.construction-progress .owl-dots',
      items: 3,
      autoplay: true,
      smartSpeed: 1500,
      autoplaySpeed: 1500,
      autoplayTimeout: 10000,
      navText: [
        '<i class="ti ti-arrow-right ti-rotate-180 text-primary" aria-hidden="true"></i>',
        '<i class="ti ti-arrow-right text-primary" aria-hidden="true"></i>'
      ],
      responsiveClass:true,
      responsive:{
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        1000: {
          items: 2
        },
        1440: {
          items: 3
        }
      }
    });
    $('.gallery .owl-carousel').owlCarousel({
      items: 1,
      navContainer: '.gallery .owl-nav',
      dots: false,
      navText: [
        '<i class="ti ti-arrow-right ti-rotate-180 text-primary" aria-hidden="true"></i>',
        '<i class="ti ti-arrow-right text-primary" aria-hidden="true"></i>'
      ],
      loop: true,
      nav: true,
      autoplay: true,
      smartSpeed: 1500,
      autoplaySpeed: 1500,
      autoplayTimeout: 10000,
    })
    });
})(jQuery);
