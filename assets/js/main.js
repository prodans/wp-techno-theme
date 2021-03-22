(function ($) {
  $(document).on('click', '[data-modal]', function (event) {
    event.preventDefault();
    console.log(event, this)

    const $this = $(this);
    const $modal = $($this.data('modal'));

    $('body').addClass('modal-open');
    $modal.addClass('d-flex');
    setTimeout(function () {
      $modal.addClass('show');
      setTimeout(function () {
        $modal.find('.fade').addClass('show');
      }, 600);
    }, 0);
  });
  $(document).on('click', '.modal-close', function () {
    console.log(this)
    const $this = $(this);
    const $modal = $this.closest('.modal');

    $('body').removeClass('modal-open');
    $modal.addClass('from-right');
    $modal.find('.show').removeClass('show');
    setTimeout(function () {
      $modal.removeClass('show');
    }, 100);
    setTimeout(function () {
      $modal.removeClass('d-flex');
      $modal.removeClass('from-right');
    }, 1000);
  });
})(jQuery);
