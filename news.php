<?php
/**
 * Template Name: News
 */
wp_enqueue_style( 'news', get_template_directory_uri() . '/assets/css/news.min.css' );

get_header();
?>

<div style="background-image:  url(<?= get_template_directory_uri() ?>/assets/dummy/background.jpg); background-repeat: no-repeat; background-position: bottom">
  <div class="container d-flex flex-column">
    <ul>
      <?php foreach ([1,2,3,4] as $value): ?>
      <li class="item d-flex flex-wrap">
        <div class="photo">
          <img src="<?= get_template_directory_uri() ?>/assets/dummy/Photo_16.jpg" alt="">
        </div>
        <div class="text">
          <span>18.11.1997</span><br>
          <span>Сдача ЖК "Европейский квартал" в г. Черновцы</span>
        </div>
      </li>
      <?php endforeach; ?>
    </ul>
    <button class="btn btn-danger mx-auto">+ ПОКАЗАТЬ ЕЩЕ 8 ИЗ 102</button>
  </div>
</div>

<?php
get_footer();
