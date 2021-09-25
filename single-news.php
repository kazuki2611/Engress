<?php get_header(); ?>


  <main class="l-main__news">
  <?php
    if (have_posts()) :
      while (have_posts()) :
        the_post(); ?>
    <div class="p-service__wrap__single">


      <div class="p-service__archive p-service__single">
        <h2 class="c-service__archive__title c-service__single__title">
        <?php the_title(); ?>
        </h2>
       <?php the_content(); ?>
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


  <?php endwhile;
    else :
      ?><p>表示する記事がありません</p><?php
                          endif;
                            ?>

  </main>
  <footer class="l-footer">
    <div class="l-footer__wrap ">
      <ul class="p-footer__menu">
        <li class="c-footer__menu__item">
          <a href="./front-page.html">
            ホーム
          </a>
        </li>
        <li class="c-footer__menu__item">
          <a href="./archive-news.html">
            お知らせ
          </a>
        </li>
        <li class="c-footer__menu__item">
          <a href="./blog.html">
            ブログ
          </a>
        </li>
        <li class="c-footer__menu__item">
          <a href="./price.html">
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