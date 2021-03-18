<?php
/**
 * The main template file
 *
 * @package Techno
 */

wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/default.min.css', [], wp_get_theme()->get( 'Version' ) );
wp_enqueue_style( 'fullpage', get_template_directory_uri() . '/assets/css/fullpage.min.css', [], wp_get_theme()->get( 'Version' ) );

wp_enqueue_script( 'fullpage', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.min.js', [ 'jquery' ], '2.9.7' );
wp_enqueue_script( 'fullpage-init', get_template_directory_uri() . '/assets/js/fullpage-init.js', [ 'jquery', 'fullpage' ], wp_get_theme()->get( 'Version' ) );

get_header();
?>

  <div id="fullpage">
    <div class="section">Some section</div>
    <div class="section">Some section</div>
    <div id="news-and-promotions" class="section">
      <div class="container d-flex flex-column">
        <h1 class="fw-bold text-primary">Новости и акции</h1>
        <div class="d-flex">
          <?php foreach ([1, 2, 3] as $item): ?>
          <a class="d-flex flex-column item" href="#">
            <img src="" alt="">
            <span>19.09.2020</span>
            <span class="fw-bold">Сдача ЖК "Европейский квартал" в г. Черновцы</span>
          </a>
          <?php endforeach; ?>
        </div>
        <a class="btn btn-danger btn-wide mx-auto">Все новости</a>
      </div>
    </div>
    <div class="section">Some section</div>
  </div>

<?php
get_footer();
