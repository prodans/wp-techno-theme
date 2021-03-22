<?php
/**
 * Header file.
 *
 * @package Techno
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
  <nav class="navbar navbar-expand-xl navbar-dark bg-dark fixed-top">
    <button class="navbar-toggler" type="button" data-modal="#modalMenu"
            aria-controls="navbar-main" aria-expanded="false" aria-label="Toggle navigation">
      <i class="ti ti-bars"></i>
    </button>
    <a class="navbar-brand" href="<?= get_home_url(); ?>">
      <img src="<?= get_template_directory_uri() . '/assets/images/logo.png' ?>"
           alt="<?php bloginfo( 'name' ); ?>"
      />
    </a>
    <a class="location mx-auto" href="#" data-modal="#modalLocation">
      <i class="ti ti-location"></i>
      <span>Черновцы</span>
    </a>
    <?php wp_nav_menu( [
        'theme_location' => 'main',
        'depth' => 1,
        'menu_class' => 'navbar-nav',
        'container_id' => 'navbar-main',
        'container_class' => 'navbar-collapse collapse flex-grow-0',
        'fallback_cb' => 'BS5_Walker_Nav_menu::fallback',
        'walker' => new BS5_Walker_Nav_menu()
    ] ) ?>
    <div class="contacts d-flex flex-column text-center mx-auto">
      <span class="email">iiifo@telmobudseivis.com.ua</span>
      <span class="phone">+38 050 718 72 06</span>
    </div>
    <button class="btn btn-primary" data-modal="#modalContact"><i class="ti ti-phone"></i><span>Обратный звонок</span></button>
  </nav>
  <div id="modalMenu" class="modal">
    <div class="modal-header fade">
      <a class="location" href="#" data-modal="#modalLocation">
        <i class="ti ti-location"></i>
        <span>Черновцы</span>
      </a>
      <button class="btn ti ti-times modal-close ms-auto" aria-label="Close"></button>
    </div>
    <div class="modal-body fade d-flex flex-column">
      <?php wp_nav_menu( [
          'theme_location' => 'main',
          'depth' => 1,
          'menu_class' => 'navbar-nav',
          'container_id' => 'navbar-main-mobile',
          'fallback_cb' => 'BS5_Walker_Nav_menu::fallback',
          'walker' => new BS5_Walker_Nav_menu()
      ] ) ?>
      <div class="contacts d-flex flex-column text-center mt-auto p-1">
        <span class="email">iiifo@telmobudseivis.com.ua</span>
        <span class="phone">+38 050 718 72 06</span>
      </div>
    </div>
  </div>
  <div id="modalLocation" class="modal">
    <div class="modal-header fade">
      <button class="btn ti ti-times modal-close ms-auto" aria-label="Close"></button>
    </div>
    <div class="modal-body fade">
     TEST
    </div>
  </div>
  <div id="modalContact" class="modal from-right">
    <div class="modal-header fade">
      <button class="btn ti ti-times modal-close ms-auto" aria-label="Close"></button>
    </div>
    <div class="modal-body fade">
      TEST
    </div>
  </div>
</header>
