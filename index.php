<?php
/**
 * The main template file
 *
 * @package Techno
 */

wp_enqueue_style('fullpage', get_template_directory_uri() . '/assets/css/fullpage.min.css', [], '1.0.0');

wp_enqueue_script('fullpage', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.min.js', ['jquery'], '2.9.7');
wp_enqueue_script('fullpage-init', get_template_directory_uri() . '/assets/js/fullpage-init.js', ['jquery', 'fullpage'], '1.0.0');

get_header();
?>

<div id="fullpage">
    <div class="section">Some section</div>
    <div class="section">Some section</div>
    <div id="news-and-promotions" class="section">
        <div class="container d-flex flex-column">
            <h1 class="fw-bold">Новости и акции</h1>
            <ul class="d-flex">
                <li class="item">
                    <img src="" alt="">
                    <span>19.09.2020</span>
                    <span>Сдача ЖК "Европейский квартал" в г. Черновцы</span>
                </li>
                <li class="item">
                    <img src="" alt="">
                    <span>19.09.2020</span>
                    <span>Сдача ЖК "Европейский квартал" в г. Черновцы</span>
                </li>
                <li class="item">
                    <img src="" alt="">
                    <span>19.09.2020</span>
                    <span>Сдача ЖК "Европейский квартал" в г. Черновцы</span>
                </li>
            </ul>
            <button class="btn btn-danger mx-auto">Все новости</button>
        </div>
    </div>
    <div class="section">Some section</div>
</div>

<?php
get_footer();
