(function ($) {
  $(document).ready(function () {
    const check = document.getElementById('switch');
    const box = document.querySelector('.flip-box-inner');

    check.onclick = function () {
      if (check.checked) {
        box.classList.add('rotate');
      } else {
        box.classList.remove('rotate');
      }
    }

    $('.else-room .owl-carousel').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      navContainer: '.else-room .owl-nav',
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
      responsive:{
        0: {
          items: 1,
        },
        600: {
          items: 2
        },
        1000: {
          items: 3,
        },
        1440: {
          items: 4
        }
      }
    });
  });
})(jQuery);


