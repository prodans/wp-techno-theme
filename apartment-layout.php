<?php
/**
 * Template Name: Apartment Layout
 */

wp_enqueue_style( 'select-apartment', get_template_directory_uri() . '/assets/css/apartment-layout.min.css' );
wp_enqueue_style( 'owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', [], '2.3.4' );

wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/apartment-layout.js', ['owl-carousel' ], wp_get_theme()->get( 'Version' ) );
wp_enqueue_script( 'owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', [ 'jquery' ], '2.3.4' );


get_header();
?>

  <section class="content d-flex flex-wrap">
    <nav class="links">
    <ul class="nav flex-column sidebar">
      <li>
        <i class="ti ti-key text-primary"></i>
        <span class="text-uppercase text-primary fw-bold">Подбор квартиры</span>
      </li>
      <li class="bg-light">
        <i class="ti ti-house text-primary"></i>
        <span>Про комплекс</span>
      </li>
      <li class="bg-light">
        <i class="ti ti-room text-primary"></i>
        <span>Планировка</span>
      </li>
      <li class="bg-light">
        <i class="ti ti-bus text-primary"></i>
        <span>Инфраструктура</span>
      </li>
      <li class="bg-light">
        <i class="ti ti-crane text-primary"></i>
        <span>Ход строительства</span>
      </li>
      <li class="bg-light">
        <i class="ti ti-image text-primary"></i>
        <span>Галерея</span>
      </li>
      <li class="bg-light">
        <i class="ti ti-doc text-primary"></i>
        <span>Документы</span>
      </li>
    </ul>
  </nav>
    <div class="main bg-light">
      <div class="back d-flex">
        <i class="ti ti-arrow-right ti-rotate-180"></i>
        <p class="text-uppercase">ДО ВИБОРУ КВАРТИР</p>
      </div>
      <div class="header">
        <p class="text-uppercase fw-bold text-center">3-КІМНАТНА</p>
      </div>
      <div class="options d-flex justify-content-between">
        <div class="area d-flex">
          <div class="text-center">
            <p class="text-primary">Загальна (м<sup>2</sup>)</p>
            <p class="fw-bold text-primary">98,42</p>
          </div>
          <div class="text-center">
            <p class="text-primary">Житлова (м<sup>2</sup>)</p>
            <p class="fw-bold text-primary">46,20</p>
          </div>
        </div>
        <div class="param">
          <div class="about d-flex">
            <div>
              <p>Черга: 1</p>
            </div>
            <div>
              <p>Секція: A5</p>
              <p>Поверх: 1</p>
            </div>
          </div>
          <div class="form-check form-switch">
            <label class="form-check-label" for="flexSwitchCheckDefault">2D</label>
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault">3D</label>
          </div>
        </div>
        <div class="price text-center">
          <p class="text-uppercase">ЦІНА ВІД:</p>
          <p class="fw-bold"><span>17 482 </span>ГРН/М<sup>2</sup></p>
        </div>
      </div>
      <div class="room-layout d-flex">
        <ul>
          <li class="list-unstyled d-flex justify-content-between">
            <div class="d-flex">
              <div class="text-center">1</div>
              <span>Житлова кімната</span>
            </div>
              <span>15,21 м<sup>2</sup></span>
          </li>
          <li class="list-unstyled d-flex justify-content-between">
            <div class="d-flex">
              <div class="text-center">2</div>
              <span>Житлова кімната</span>
            </div>
              <span>15,21 м<sup>2</sup></span>
          </li>
          <li class="list-unstyled d-flex justify-content-between">
            <div class="d-flex">
              <div class="text-center">3</div>
              <span>Засклена лоджія</span>
            </div>
              <span>15,21 м<sup>2</sup></span>
          </li>
          <li class="list-unstyled d-flex justify-content-between">
            <div class="d-flex">
              <div class="text-center">4</div>
              <span>Вбиральня</span>
            </div>
              <span>15,21 м<sup>2</sup></span>
          </li>
        </ul>
        <div class="photo-layout">
          <img src="<?= get_template_directory_uri() ?>/assets/dummy/3.jpg" alt="">
        </div>
        <div class="plan">
          <img src="<?= get_template_directory_uri() ?>/assets/dummy/4.jpg" alt="">
          <button class="btn btn-outline-primary btn-wide">
            <i class="ti ti-printer"></i>
            РОЗДРУКУВАТИ
          </button>
          <button class="btn btn-outline-primary btn-wide">
            <i class="ti ti-download"></i>
            ЗАВАНТАЖИТИ ПЛАН
          </button>
        </div>
      </div>
      <div class="else-room">
        <div class="header text-uppercase fw-bold">ІНШІ 3-КІМНАТНІ КВАРТИРИ</div>
        <div class="owl-carousel apartments">
          <div class="apartments-box">
            <div class="d-flex justify-content-between">
              <span class="fw-bold">№78</span>
              <span>3-комн.</span>
              <span>ЖК “Millenium”</span>
            </div>
            <div class="d-flex justify-content-between">
              <span class="fw-bold">93.72 м<sup>2</sup></span>
              <span>8 этаж</span>
            </div>
            <div class="apart-img">
              <img src="<?= get_template_directory_uri() ?>/assets/dummy/5.jpg" alt="">
            </div>
            <div class="price">954 680 грн.</div>
            <button class="btn btn-wide btn-outline-primary text-uppercase">Подробнее</button>
          </div>
          <div class="apartments-box">
            <div class="d-flex justify-content-between">
              <span class="fw-bold">№78</span>
              <span>3-комн.</span>
              <span>ЖК “Millenium”</span>
            </div>
            <div class="d-flex justify-content-between">
              <span class="fw-bold">93.72 м<sup>2</sup></span>
              <span>8 этаж</span>
            </div>
            <div class="apart-img">
              <img src="<?= get_template_directory_uri() ?>/assets/dummy/5.jpg" alt="">
            </div>
            <div class="price">954 680 грн.</div>
            <button class="btn btn-wide btn-outline-primary text-uppercase">Подробнее</button>
          </div>
          <div class="apartments-box">
            <div class="d-flex justify-content-between">
              <span class="fw-bold">№78</span>
              <span>3-комн.</span>
              <span>ЖК “Millenium”</span>
            </div>
            <div class="d-flex justify-content-between">
              <span class="fw-bold">93.72 м<sup>2</sup></span>
              <span>8 этаж</span>
            </div>
            <div class="apart-img">
              <img src="<?= get_template_directory_uri() ?>/assets/dummy/5.jpg" alt="">
            </div>
            <div class="price">954 680 грн.</div>
            <button class="btn btn-wide btn-outline-primary text-uppercase">Подробнее</button>
          </div>
        </div>
        <div class="owl-nav">
          <div class="owl-dots d-flex align-items-center"></div>
        </div>
      </div>
    </div>
  </section>


<?php

get_footer();
