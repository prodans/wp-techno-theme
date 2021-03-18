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
  });
})(jQuery);
