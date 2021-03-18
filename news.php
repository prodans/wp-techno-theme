<?php
/**
 * Template Name: News
 */
wp_enqueue_style( 'fullpage', get_template_directory_uri() . '/assets/scss/news.scss' );

get_header();
?>

<div class="container" style="background-image: url("<?= get_template_directory_uri() ?>/assets/dummy/Dobrovolskiy.jpg")">

</div>

<?php
get_footer();
