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
            <p >
              <a href=" <?php the_permalink(); ?>">
                <!-- 20文字で制限し、それを超えた場合は「……」を付ける -->
                <!--the_title -->
                <?php
                if (mb_strlen($post->post_title, 'UTF-8') > 40) {
                  $title = mb_substr($post->post_title, 0, 40, 'UTF-8');
                  echo esc_html($title . '…');
                } else {
                  echo esc_html($post->post_title);
                }
                ?>

              </a>
            </p>
          </div>
        <?php endwhile;
      else :
        ?><p>表示する記事がありません</p><?php
                            endif;
                              ?>
    </div>
    <!-- <div class="p-page">


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
      
    </div> -->


    <?php wp_pagenavi(); ?>
  
</main>
<?php get_template_part('contact'); ?>

<?php get_footer(); ?>