<?php
/**
 * Template Name: About Us
 */
wp_enqueue_style( 'fullpage', get_template_directory_uri() . '/assets/scss/about-us.scss' );

get_header();
?>

    <div class="container d-flex">
        <nav id="navbar" class="">
            <ul class="nav flex-column sidebar">
                <li class="bg-light m-b">
                  <i class="ti ti-building text-primary"></i>
                  <span class="p-l">О КОМПАНИИ</span>
                </li>
                <li class="bg-light m-b">
                  <i class="ti ti-factory text-primary"></i>
                  <span class="p-l">ТЕХНО С</span>
                </li>
                <li class="bg-light m-b">
                  <i class="ti ti-wood text-primary"></i>
                  <span class="p-l">ТЕХНО ПЛЮС</span>
                </li>
                <li class="bg-light m-b">
                  <i class="ti ti-crane text-primary"></i>
                  <span class="p-l">ТЕХНО БУД</span>
                </li>
                <li class="bg-light m-b">
                  <i class="ti ti-truck text-primary"></i>
                  <span class="p-l">ЗАХІД ТЕХНО-БУД</span>
                </li>
                <li class="bg-light m-b">
                  <i class="ti ti-oil text-primary"></i>
                  <span class="p-l">ТЕХНО НАФТА ПЛЮС</span>
                </li>
            </ul>
        </nav>
        <div id="photo" class="div-photo">
            <img src="<?= get_template_directory_uri() ?>/assets/dummy/Dobrovolskiy.jpg" alt="" class="obj-fit">
        </div>
        <div id="container-text" class="container-text">
            <div id="text">
                <p>Имеем честь предложить Вам краткое знакомство с Группой Компании Техно, их руководителями, историеей и
                нинешней производственной деятельностью.</p>
                <p>Основателем с 1988 г и нынешним руководителем является Вячеслав Добровольский, заслуженый работник
                промышленности Украины.</p>
                <p>5 предприятий занимающиеся производством товаров, услуг, строительством.</p>
                <p>Своим 30-летним существованием компания довела свой профессионализм и успех на рынке Украины и Европы.</p>
            </div>
          <div class="d-flex">
            <i class="ti ti-quote ti-rotate-180 quote quote-l"></i>
            <div id="quotation" class="quotetion">
                <p class="quote-text">Только производство товаров которые пользуются спросом на современных рынках делает успешным коллектив
                собственника, компанию и государство в целом.</p>
                <p align="right">В. Добровольський</p>
            </div>
            <i class="ti ti-quote quote quote-r"></i>
          </div>
        </div>
    </div>

<?php
get_footer();
