<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta name="description" content="日本人へのTOEFL指導歴豊かな講師陣の
  コーチング型TOEFLスクール">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Engress</title>
  </title>

  <link rel="stylesheet" href="/Sass/styles.scss">
  <meta name="robots" content="noindex">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


  <link rel="icon" href="http://mysite.local/wp-content/themes/Engress/image/logo02.png">




  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <header class="l-header">




    <!-- <div class="l-header__left"> -->



    <div class="l-header__inner">

      <div class="l-header__logo">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/image/logo.png'); ?>">

      </div>
      <button class="p-hamburger  is-hamburger ">
        <span></span>

      </button>


      <div class="p-black-bg" id="js-black-bg"></div>

    </div>


    <!-- </div> -->

    <div class="l-header__wrap">


      <!-- 
      <!-- <nav class="p-dropdown-menu">
        <div class="l-header__logo__nav">
          <img src="./image/logo.png">
        </div>
        <ul class="p-dropdown-menu__list">
          <li class="c-dropdown__menu__item">
            <a href="./index.html">
              ホーム
            </a>
          </li>
        </ul>
        <ul class="p-dropdown-menu__list">
          <li class="c-dropdown__menu__item">
            <a href="./news.html">
              お知らせ
            </a>
          </li>
        </ul>
        <ul class="p-dropdown-menu__list">
          <li class="c-dropdown__menu__item">
            <a href="./blog.html">
              ブログ
            </a>
          </li>
        </ul>
        <ul class="p-dropdown-menu__list">
          <li class="c-dropdown__menu__item">
            <a href="./price.html">
              コース・料金
            </a>
          </li>
        </ul>
      </nav> -->
      <?php
      $defaults = array(
        'menu'            => 'グローバルメニュー',
        'menu_class'      => 'p-dropdown-menu__list',

        'container'       => 'div',
        'container_class' => 'p-dropdown-menu',
        'container_id'    => '',

        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'echo'            => true,
        'depth'           => 0,
        'walker'          => '',
        'theme_location'  => '',
        'items_wrap'      => '<ul  class="%2$s">%3$s</ul>',
      );
      wp_nav_menu($defaults); ?>
      <div class="l-header__right">
        <div class="l-header__right__wrap">

          <div class="c-header__right__contact">
            <p>
              平日08:00〜20:00
            </p>
          </div>
          <div class="c-header__right__number">
           
            <img src="<?php echo esc_url(get_template_directory_uri() . '/image/logo3.png'); ?>">
            <p>
              0123-456-7890
            </p>
          </div>
        </div>
        <div class="l-header__right__wrapper">
          <button class="c-header__right__button c-button">
            <a href="<?php echo esc_url(home_url()); ?>/contact">

              資料請求
            </a>
          </button>
          <button class="c-header__right__button__blue c-button">
            <a href="<?php echo esc_url(home_url()); ?>/contact">
              お問い合わせ

            </a>
          </button>
        </div>

      </div>

    </div>


  </header>
  <!-- アーカイブページ のお知らせを持ってくる記述 -->
  <?php if (is_post_type_archive('news')) { ?>
    <div class="p-hero__child">
      <h1>
        お知らせ
      </h1>
      <img src="<?php bloginfo("template_url"); ?>/image/news.png">
    </div>
    <!-- それ以外のアーカイブページ -->
  <?php } else if (is_archive()) { ?>

    <div class="p-hero__child">
      <h1>
        ブログ
      </h1>
      <img src="<?php bloginfo("template_url"); ?>/image/blog.png">
    </div>
  <?php } else if (is_page("price")) { ?>
    <div class="p-hero__child">
      <h1>
        コース・料金
      </h1>
      <img src="<?php bloginfo("template_url"); ?>/image/price.png">
    </div>

  <?php } else if (is_page("contact")) { ?>

    <div class="p-hero__child">
      <h1>
        お問い合わせ・資料請求
      </h1>
      <img src="<?php bloginfo("template_url"); ?>/image/price.png">
    </div>

  <?php } else {
  } ?>

  <!-- トップページ以外でパンくずを表示する -->

  <?php if (!(is_home() || is_front_page())) : ?>

    <div class="breadcrumb-area">
      <div class="breadcrumb-area__inner">


        <?php
        if (function_exists('bcn_display')) {
          bcn_display();
        }
        ?>
      </div>
    </div>
  <?php endif; ?>
  <!-- <div class="p-hero__blog">
    <h1 class="c-hero__blog__title c-hero__price__title c-title">
      ブログ
    </h1>
  </div>
  <div class=" p-hero__single">
    <div class="c-header__title3">
      <h1>
        h1 チーズバーガー
      </h1>


    </div>


  </div> -->