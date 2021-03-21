<?php
/**
 * Template Name: Select Apartment
 */

wp_enqueue_style( 'about-us', get_template_directory_uri() . '/assets/css/about-us.min.css' );
wp_enqueue_style( 'about-us', get_template_directory_uri() . '/assets/css/main.min.css' );
wp_enqueue_style( 'select-apartment', get_template_directory_uri() . '/assets/css/select-apartment.min.css' );
wp_enqueue_style( 'owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', [], '2.3.4' );

wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/select-apartment.js', ['owl-carousel' ], wp_get_theme()->get( 'Version' ) );
wp_enqueue_script( 'owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', [ 'jquery' ], '2.3.4' );

get_header();
?>

<div class="cont d-flex flex-wrap">
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
  <div class="main">
    <div class="select-apart d-flex" style="background-image:  url(<?= get_template_directory_uri() ?>/assets/dummy/sloy-11.jpg)">
      <div class="main-text m-auto">
        <p>Современные квартиры по доступной цене</p>
        <p>ЖК Millenium</p>
      </div>
      <div class="main-footer d-flex flex-wrap justify-content-between">
        <div class="d-flex flex-wrap">
          <div class="big-text fw-bold">1-к</div>
          <div>
            <p class="price">от 29 м2 до 55 м2</p>
            <p class="price fw-bold">от 19 500 грн/м2</p>
          </div>
        </div>
        <div class="d-flex flex-wrap">
          <div class="big-text fw-bold">2-к</div>
          <div>
            <p class="price">от 29 м2 до 55 м2</p>
            <p class="price fw-bold">от 19 500 грн/м2</p>
          </div>
        </div>
        <div class="d-flex flex-wrap">
          <div class="big-text fw-bold">3-к</div>
          <div>
            <p class="price">от 29 м2 до 55 м2</p>
            <p class="price fw-bold">от 19 500 грн/м2</p>
          </div>
        </div>
      </div>
    </div>
    <div class="about-complex d-flex">
      <div class="photo-complex">
        <img src="<?= get_template_directory_uri() ?>/assets/dummy/ph1.jpg)" alt="">
        <img src="<?= get_template_directory_uri() ?>/assets/dummy/ph21.jpg)" alt="">
        <img src="<?= get_template_directory_uri() ?>/assets/dummy/ph3.jpg)" alt="">
      </div>
      <div class="text-complex">
        <p class="text-primary fw-bold">
          Сочетания комфорта и современности жилья в ЖК Millenium
        </p>
        <p>
          <p>Жилой комплекс "Millenium" в Черновцах - это настоящий бриллиант среди других новостроек Черновцов.</p>
          <p>Проект разработан в соответствии всех передовых современных стандартов. Выбирая ЖК "Millenium", Вы навсегда получите повод для гордости за место жительства.</p>
          <p>Стильное панорамное остекление придает зданию современные черты, даже в пасмурные дни, ваше жилье останется  светлым и будет поднимать вам настроение.</p>
          <p>Разрабатывая проект ЖК "Millenium", мы объединили в нем изысканность дизайна фасада, выбрали лучшие материалы для его строительства, а наши архитекторы разработали наиболее комфортные планирования для вашего жилища.</p>
          <p>Наша новостройка является идеальным решением, как для уютной и комфортной жизни, так и для приобретения коммерческих помещений.</p>
        </p>
      </div>
    </div>
    <div class="constr-techno">
      <p class="text-primary fw-bold text-center">Технологии строительства</p>
      <div class="d-flex flex-wrap w-100">
        <div>
          <div class="position-absolute about-block text-primary">
            <p class="ms-auto">Монолитно-каркасные технологии</p>
          </div>
          <img src="<?= get_template_directory_uri() ?>/assets/dummy/constr-techno/ph1.jpg)" alt="">
        </div>
        <div>
          <div class="position-absolute about-block text-primary">
            <p>Внешние стены</p>
          </div>
          <img src="<?= get_template_directory_uri() ?>/assets/dummy/constr-techno/ph2.jpg)" alt=""></div>
        <div>
          <div class="position-absolute about-block text-primary">
            <p>Архитектурные формы</p>
          </div>
          <img src="<?= get_template_directory_uri() ?>/assets/dummy/constr-techno/ph3.jpg)" alt=""></div>
        <div>
          <div class="position-absolute about-block text-primary">
            <p>Окна</p>
          </div>
          <img src="<?= get_template_directory_uri() ?>/assets/dummy/constr-techno/ph4.jpg)" alt=""></div>
        <div>
          <div class="position-absolute about-block text-primary">
            <p>Внутренняя отделка</p>
          </div>
          <img src="<?= get_template_directory_uri() ?>/assets/dummy/constr-techno/ph5.jpg)" alt=""></div>
        <div>
          <div class="position-absolute about-block text-primary">
            <p>Энергосистемы</p>
          </div>
          <img src="<?= get_template_directory_uri() ?>/assets/dummy/constr-techno/ph6.jpg)" alt=""></div>
        <div>
          <div class="position-absolute about-block text-primary">
            <p>Вода и канализация</p>
          </div>
          <img src="<?= get_template_directory_uri() ?>/assets/dummy/constr-techno/ph7.jpg)" alt=""></div>
        <div>
          <div class="position-absolute about-block text-primary">
            <p>Закрытая территория</p>
          </div>
          <img src="<?= get_template_directory_uri() ?>/assets/dummy/constr-techno/ph8.jpg)" alt=""></div>
        <div>
          <div class="position-absolute about-block text-primary">
            <p>Квартиры</p>
          </div>
          <img src="<?= get_template_directory_uri() ?>/assets/dummy/constr-techno/ph9.jpg)" alt=""></div>
        <div>
          <div class="position-absolute about-block text-primary">
            <p>Зоны отдыха</p>
          </div>
          <img src="<?= get_template_directory_uri() ?>/assets/dummy/constr-techno/ph10.jpg)" alt=""></div>
        <div>
          <div class="position-absolute about-block text-primary">
            <p>Квартиры с террасами</p>
          </div>
          <img src="<?= get_template_directory_uri() ?>/assets/dummy/constr-techno/ph11.jpg)" alt=""></div>
        <div>
          <div class="position-absolute about-block text-primary">
            <p>Лифт</p>
          </div>
          <img src="<?= get_template_directory_uri() ?>/assets/dummy/constr-techno/ph12.jpg)" alt=""></div>
      </div>
    </div>
    <div class="apartment-layout">
      <div class="fw-bold">
        <p>Выберите этаж</p>
      </div>
      <div>
        <img src="<?= get_template_directory_uri() ?>/assets/dummy/layout.jpg" alt="" style="width: 100%">
      </div>
      <div class="parameters">
        <p>Подбор по параметрам</p>
      </div>
    </div>
    <div class="infrastructure">
    </div>
    <div class="construction-progress">
      <div class="m-auto text-primary fw-bold">
        <p>Ход строительства</p>
      </div>
      <div class="camera text-primary d-flex">
        <i class="ti ti-camera"></i>
        <p class="fs-4">Онлайн-трансляция</p>
      </div>
      <div class="owl-carousel">
        <div class="item position-relative">
          <img src="<?= get_template_directory_uri() ?>/assets/dummy/carousel/ph1.jpg)" alt="">
          <div class="count-img position-absolute d-flex fw-bold">
            <i class="ti ti-image"></i>
            <p>7</p>
          </div>
        </div>
        <div class="item position-relative">
          <img src="<?= get_template_directory_uri() ?>/assets/dummy/carousel/ph2.jpg)" alt="">
          <div class="count-img position-absolute d-flex fw-bold">
            <i class="ti ti-image"></i>
            <p>7</p>
          </div>
        </div>
        <div class="item position-relative">
          <img src="<?= get_template_directory_uri() ?>/assets/dummy/carousel/ph3.jpg)" alt="">
          <div class="count-img position-absolute d-flex fw-bold">
            <i class="ti ti-image"></i>
            <p>7</p>
          </div>
      </div>
      </div>
      <div class="owl-nav d-flex justify-content-between">
        <div class="owl-dots d-flex align-items-center"></div>
      </div>
    </div>
    <div class="gallery position-relative">
      <div class="owl-nav d-flex container">
        <div class="owl-count d-flex">
          <div class="owl-count-current text-primary mb-auto">1</div>
          <div class="owl-count-all mt-auto">6</div>
        </div>
      </div>
      <div class="owl-carousel">
        <img src="<?= get_template_directory_uri() ?>/assets/dummy/Photo_12.jpg" alt="">
      </div>
    </div>
    <div class="documents"></div>
  </div>
</div>

<?php


get_footer();
