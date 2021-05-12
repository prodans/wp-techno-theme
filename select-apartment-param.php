<?php
/**
 * Template Name: Select Apartment Param
 */

wp_enqueue_style( 'nouislider', get_template_directory_uri() . '/assets/css/nouislider.min.css' );
wp_enqueue_style( 'select-apartment-param', get_template_directory_uri() . '/assets/css/select-apartment-param.min.css' );

wp_enqueue_script( 'nouislider', get_template_directory_uri() . '/assets/js/nouislider.min.js' );
wp_enqueue_script( 'select-apartment-param', get_template_directory_uri() . '/assets/js/select-apartment-param.js', ['jquery', 'nouislider'],  wp_get_theme()->get( 'Version' ) );

get_header();
?>

  <section class="content d-flex flex-wrap">
    <nav class="links">
      <div class="links-header">
        <i class="ti ti-key text-primary"></i>
        <span class="text-uppercase text-primary fw-bold">Подбор квартиры</span>
      </div>
      <ul class="nav flex-column sidebar">
        <li class="bg-light">
          <i class="ti ti-house text-primary"></i>
          <span>Про комплекс</span>
        </li>
        <li class="bg-light">
          <i class="ti ti-room text-primary"></i>
          <span class="text-primary">Планировка</span>
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
    <div class="main bg-light position-relative">
      <div class="img position-absolute">
        <img src="<?= get_template_directory_uri() ?>/assets/dummy/6.jpg)" alt="" style="width: 100%">
      </div>
      <div class="layout">
        <div class="filters d-flex justify-content-between position-relative">
          <div class="number-room">
            <span>К-во комнат</span>
            <div class="buttons d-flex">
              <input type="checkbox" class="btn-check btn-checkbox" id="btncheck1" autocomplete="off">
              <label class="btns pointer" for="btncheck1">1</label>

              <input type="checkbox" class="btn-check btn-checkbox" id="btncheck2" autocomplete="off">
              <label class="btns pointer" for="btncheck2">2</label>

              <input type="checkbox" class="btn-check btn-checkbox" id="btncheck3" autocomplete="off">
              <label class="btns pointer" for="btncheck3">3</label>
            </div>
          </div>
          <div class="forms">
            <form id="d">
              <span>Этаж</span>
              <div class="form-group">
                <div id="float" class="form-control-slider"></div>
                <div class="filters-inputs d-flex justify-content-between">
                  <label class="form-control-label">
                    <input type="number" min="1" max="9" placeholder="1" class="form-control-input" data-type="input0">
                  </label>
                  <label class="form-control-label">
                    <input type="number" min="1" max="9" placeholder="9" class="form-control-input" data-type="input1">
                  </label>
                </div>
              </div>
            </form>
          </div>
          <div class="forms">
            <form>
              <span>Площадь</span>
              <div class="form-group">
                <div id="area" class="form-control-slider"></div>
                <div class="filters-inputs d-flex justify-content-between">
                  <label class="form-control-label">
                    <span>от</span>
                    <input type="number" min="36" max="51" placeholder="36" class="form-control-input" data-type="input-area0">
                    <span>м<sup>2</sup></span>
                  </label>
                  <label class="form-control-label">
                    <span>до</span>
                    <input type="number" min="36" max="51" placeholder="51" class="form-control-input" data-type="input-area1">
                    <span>м<sup>2</sup></span>
                  </label>
                </div>
              </div>
            </form>
          </div>
          <div class="forms">
            <form>
              <span>Стоимость</span>
              <div class="form-group">
                <div id="cost" class="form-control-slider"></div>
                <div class="filters-inputs d-flex justify-content-between">
                  <label class="form-control-label">
                    <span>от</span>
                    <input type="number" min="695 036" max="954 680" placeholder="695 036" class="form-control-input" style="width: 2.85rem;" data-type="input-cost0">
                    <span>грн.</span>
                  </label>
                  <label class="form-control-label">
                    <span>до</span>
                    <input type="number" min="695 036" max="954 680" placeholder="954 680" class="form-control-input" style="width: 2.85rem;" data-type="input-cost1">
                    <span>грн.</span>
                  </label>
                </div>
              </div>
            </form>
          </div>
          <button class="btn reset-filters bg-light position-absolute">
            <span>&#xD7</span>
            <span>Сбросить фильтр</span>
          </button>
        </div>
        <div class="box">
          <div class="box-filters d-flex justify-content-between">
            <div class="d-flex">
              <div class="box-filter-price">
                <span>По цене</span>
                <i class="ti ti-arrow-up"></i>
              </div>
              <div class="box-filter-area">
                <span>По площади</span>
                <i class="ti ti-arrow-up"></i>
              </div>
            </div>
            <div class="d-flex">
              <input type="radio" class="btn-check radio" name="btnradio" id="btnradio1" autocomplete="off">
              <label class="btn btns-radio" for="btnradio1">
                <i class="ti ti-bars"></i>
                Списком
              </label>

              <input type="radio" class="btn-check radio" name="btnradio" id="btnradio2" autocomplete="off" checked>
              <label class="btn btns-radio" for="btnradio2">
                <i class="ti ti-th"></i>
                Плиткой
              </label>
            </div>
          </div>
          <div id="card" class="box-card d-grid">
            <div class="apartments-box">
              <div class="params d-flex justify-content-between">
                <div class="d-flex flex-column">
                  <span class="fw-bold">№78</span>
                  <span class="fw-bold" style="font-size: 0.8rem">93.72 м<sup>2</sup></span>
                </div>
                <div class="d-flex flex-column">
                  <span>3-комн.</span>
                </div>
                <div class="d-flex flex-column">
                  <span>ЖК “Millenium”</span>
                  <span>8 этаж</span>
                </div>
              </div>
              <div class="apart-img d-flex justify-content-center">
                <img src="<?= get_template_directory_uri() ?>/assets/dummy/5.jpg" alt="">
              </div>
              <div class="price fw-bold d-flex justify-content-between">
                <span  style="font-size: 1rem">954 680 грн.</span>
                <button class="btn btn-outline-danger">
                  <i class="ti ti-star"></i>
                  <span>В избранное</span>
                </button>
              </div>
              <button class="btn btn-outline-primary text-uppercase detail">Подробнее</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php

get_footer();
