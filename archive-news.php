<?php get_header(); ?>


<main class="l-main ">
 
  <div class="p-hero__archive">
    <div class="p-hero__archive__wrap">
      <h1 class="c-hero__archive__title">
        お知らせ一覧
      </h1>








      <?php
      if (have_posts()) :
        while (have_posts()) :
          the_post(); ?>
          <div class="p-hero__archive__box u-border2">
            <time>
            <?php the_time('Y.m.d'); ?>
            </time>
            <p class="c-hero__archive__box__title ">
              <a href=" <?php the_permalink(); ?>">
              <?php the_title(); ?>

              </a>
            </p>
          </div>
        <?php endwhile;
      else :
        ?><p>表示する記事がありません</p><?php
                            endif;
                              ?>
    </div>
    <div class="p-page">


      <a class="c-page-button" href="#">1</a>
      <a class="c-page-button" href="#">2</a>
      <a class="c-page-button" href="#">3</a>
      <a class="c-page-button" href="#">4</a>
      <a class="c-page-button" href="#">5</a>
      <a class="c-page-button" href="#">6</a>
      <a class="c-page-button" href="#">7</a>
      <a class="c-page-button" href="#">8</a>
      <a class="c-page-button u-margin" title="Page 9" href="#">9</a>
      <a class="p-page__link" href="#">
    </div>

</main>
<section class="p-contact">
  <h3 class="c-contact__title">
    まずは無料で資料請求から
  </h3>
  <button class="c-service__plan__button c-button">
    料金を見てみる
  </button>

  <a href="./form.html">
    お問い合わせ
  </a>
</section>
<section class="p-number">
  <div class="p-contact__number">
    <p>お電話でのお問い合わせはこちら</p>
    <span>

      <p>0123-456-7890</p>
    </span>
    <p class="u-font">平日 08:00~20:00</p>
  </div>

</section>





<footer class="l-footer">
  <div class="l-footer__wrap ">
    <ul class="p-footer__menu">
      <li class="c-footer__menu__item">
        <a href="./index.html">
          ホーム
        </a>
      </li>
      <li class="c-footer__menu__item">
        <a href="./news.html">
          お知らせ
        </a>
      </li>
      <li class="c-footer__menu__item">
        <a href="./blog.html">
          ブログ
        </a>
      </li>
      <li class="c-footer__menu__item">
        <a href="./news.html">
          コース・料金
        </a>
      </li>
    </ul>
    <div class="p-footer__contact">
      <button class="c-footer__button">
        <a href="#">
          <img src="<?php echo get_template_directory_uri(); ?>/image/logo.png">
        </a>
      </button>
      <div class="c-footer__number">
        <img src="<?php echo get_template_directory_uri(); ?>/image/logo3.png">
        <p>
          0123-456-7890
        </p>
      </div>
      <time>
        平日08:00~20:00
      </time>
    </div>
  </div>
</footer>
<section class="p-copyright">
  <div class="p-copyright__wrap">
    <p class="c-copyright__wrap__text">
      © 2020 Engress.
    </p>
  </div>
</section>
<?php wp_footer(); ?>

</body>