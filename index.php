<?php
/**
 * The main template file
 *
 * @package Techno
 */

wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/default.min.css', [], wp_get_theme()->get( 'Version' ) );
wp_enqueue_style( 'fullpage', get_template_directory_uri() . '/assets/css/fullpage.min.css', [], wp_get_theme()->get( 'Version' ) );
wp_enqueue_style( 'owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', [], '2.3.4' );

wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/default.js', [ 'jquery', 'fullpage', 'owl-carousel' ], wp_get_theme()->get( 'Version' ) );
wp_enqueue_script( 'fullpage', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.0/fullpage.min.js', [ 'jquery' ], '3.1.0' );
wp_enqueue_script( 'owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', [ 'jquery' ], '2.3.4' );


get_header();
?>
  <section class="content">
    <div id="fullpage">
      <div class="section section-links" data-anchor="">
        <div class="owl-nav d-flex container">
          <div class="owl-count d-flex">
            <div class="owl-count-current text-primary mb-auto">1</div>
            <div class="owl-count-all mt-auto">6</div>
          </div>
        </div>
        <div class="owl-carousel">
          <?php foreach ([1, 2, 3] as $item): ?>
            <div class="item" style="background-image: url(<?= get_template_directory_uri() ?>/assets/dummy/1.png)">
              <div class="container">
                <h1 class="title">Квартиры от 700 000 грн.</h1>
                <div class="subtitle">ЖК Millenium</div>
                <a href="#" class="btn btn-danger btn-wide d-inline-flex align-items-center">Подробнее<i class="ti ti-arrow-right"></i></a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="section section-complexes" data-anchor="complexes">
        <div class="owl-carousel">
          <?php foreach ([1, 2, 3] as $item): ?>
            <div class="item d-flex flex-column justify-content-end align-items-center text-center" style="background-image: url(<?= get_template_directory_uri() ?>/assets/dummy/2<?= $item ?>.jpg)">
              <div class="title">Квартиры от 700 000 грн.</div>
              <div class="subtitle">ЖК Millenium</div>
              <a href="#" class="btn btn-danger btn-wide d-inline-flex align-items-center">Подробнее<i class="ti ti-arrow-right"></i></a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="section section-news" data-anchor="news">
        <div class="container d-flex flex-column">
          <h1 class="fw-bold text-primary">Новости и акции</h1>
          <div class="owl-carousel">
            <?php foreach ([1, 2, 3] as $item): ?>
              <a class="d-flex flex-column item" href="#">
                <img src="<?= get_template_directory_uri() ?>/assets/dummy/2.png" alt="">
                <span class="date">19.09.2020</span>
                <span class="fw-bold">Сдача ЖК "Европейский квартал" в г. Черновцы</span>
              </a>
            <?php endforeach; ?>
          </div>
          <a class="btn btn-danger btn-wide mx-auto">Все новости</a>
        </div>
      </div>
      <div class="section section-contacts" data-anchor="contacts">Some section</div>
    </div>
  </section>
<?php
get_footer();
