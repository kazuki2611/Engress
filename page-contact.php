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
    <div class="p-form">





      <h2 class="c-service__archive__title c-service__single__title">

      </h2>
      <?php the_content(); ?>







    <?php endwhile;
else :
    ?><p>表示する記事がありません</p><?php
                        endif;
                          ?>
    </div>
    <?php get_template_part('contact'); ?>


    <?php get_footer(); ?>
    