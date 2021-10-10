<?php get_header(); ?>


<!-- <main class="l-main ">
    <div class="p-hero__form">
      <h1 class="c-hero__form__title c-hero__price__title c-title">
        お問い合わせ・資料請求
      </h1>
    </div>
  </main> -->
<?php
if (have_posts()) :
  while (have_posts()) : the_post(); ?>
    <form class="p-form">





      <h2 class="c-service__archive__title c-service__single__title">
      
      </h2>
      <?php the_content(); ?>







    <?php endwhile;
    else :
    ?><p>表示する記事がありません</p><?php
                        endif;
                          ?>
    </form>
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


    <?php get_footer(); ?>
    