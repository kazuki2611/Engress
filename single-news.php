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


 

  <?php endwhile;
    else :
      ?><p>表示する記事がありません</p><?php
                          endif;
                            ?>

  </main>
  <?php get_template_part('contact'); ?>

  <?php get_footer(); ?>