(function ($) {
    $(document).ready(function() {
        $('#fullpage').fullpage({
            css3: true,
            navigation: true,
            navigationPosition: 'left',
            afterRender: function() {
                $('#fp-nav')
                    .prepend('<span class="prev"></span>')
                    .append('<span class="next"></span>');

                $('#fp-nav').find('span.prev, span.next').on('click', function () {
                    if ($(this).hasClass('prev')) {
                        $.fn.fullpage.moveSectionUp();
                    } else {
                        $.fn.fullpage.moveSectionDown();
                    }
                });
            }
        });
    });
})(jQuery);
