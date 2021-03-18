<?php
/**
 * Template Name: About Us
 */
wp_enqueue_style( 'about-us', get_template_directory_uri() . '/assets/css/about-us.min.css' );

get_header();

// TODO: zafixi sidebar, meow
?>

  <div class="container d-flex flex-wrap">
    <nav class="links">
      <ul class="nav flex-column sidebar">
        <li class="bg-light">
          <i class="ti ti-building text-primary"></i>
          <span>О КОМПАНИИ</span>
        </li>
        <li class="bg-light">
          <i class="ti ti-factory text-primary"></i>
          <span>ТЕХНО С</span>
        </li>
        <li class="bg-light">
          <i class="ti ti-wood text-primary"></i>
          <span>ТЕХНО ПЛЮС</span>
        </li>
        <li class="bg-light">
          <i class="ti ti-crane text-primary"></i>
          <span>ТЕХНО БУД</span>
        </li>
        <li class="bg-light">
          <i class="ti ti-truck text-primary"></i>
          <span>ЗАХІД ТЕХНО-БУД</span>
        </li>
        <li class="bg-light">
          <i class="ti ti-oil text-primary"></i>
          <span>ТЕХНО НАФТА ПЛЮС</span>
        </li>
      </ul>
    </nav>
    <div class="photo">
      <img src="<?= get_template_directory_uri() ?>/assets/dummy/Dobrovolskiy.jpg" alt="">
    </div>
    <div class="text">
      <div>
        <p>Имеем честь предложить Вам краткое знакомство с Группой Компании Техно, их руководителями, историеей и
          нинешней производственной деятельностью.</p>
        <p>Основателем с 1988 г и нынешним руководителем является Вячеслав Добровольский, заслуженый работник
          промышленности Украины.</p>
        <p>5 предприятий занимающиеся производством товаров, услуг, строительством.</p>
        <p>Своим 30-летним существованием компания довела свой профессионализм и успех на рынке Украины и Европы.</p>
      </div>
      <div class="d-flex quotation">
        <i class="ti ti-quote ti-rotate-180"></i>
        <p>
          Только производство товаров которые пользуются спросом на современных рынках делает
          успешным коллектив
          собственника, компанию и государство в целом.
        </p>
        <i class="ti ti-quote"></i>
      </div>
      <p class="author" align="right">В. Добровольський</p>
    </div>
  </div>

<?php
get_footer();
