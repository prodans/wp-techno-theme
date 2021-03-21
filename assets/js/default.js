(function ($) {
  $(document).ready(function () {
    $('#fullpage').fullpage({
      css3: true,
      navigation: true,
      navigationPosition: 'left',
      afterRender: function () {
        $('#fp-nav')
            .prepend('<span class="prev ti ti-arrow-right ti-rotate-270"></span>')
            .append('<span class="next ti ti-arrow-right ti-rotate-90"></span>');

        $('#fp-nav').find('span.prev').on('click', function () {
          $.fn.fullpage.moveSectionUp();
        });

        $('#fp-nav').find('span.next').on('click', function () {
          $.fn.fullpage.moveSectionDown();
        });
      }
    });

    $('.section-links .owl-carousel').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      navContainer: '.owl-nav',
      dots: false,
      items: 1,
      autoplay: true,
      smartSpeed: 1500,
      autoplaySpeed: 1500,
      autoplayTimeout: 10000,
      navText: [
        '<i class="ti ti-arrow-right ti-rotate-180 text-primary" aria-hidden="true"></i>',
        '<i class="ti ti-arrow-right text-primary" aria-hidden="true"></i>'
      ]
    });

    $('.section-complexes .owl-carousel').owlCarousel({
      items: 3,
    });
  });
})(jQuery);
