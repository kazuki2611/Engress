<?php get_header(); ?>


<main class="l-main__blog__archive">

  <div class="l-main__blog__archive__wrap">
    <h1>
      新着一覧
    </h1>
    <?php

    if (have_posts()) :
      while (have_posts()) :
        the_post(); ?>
        <div class="p-main__blog__box">
          <!-- サムネイル取得 -->
          <?php
          if (has_post_thumbnail('full')) :
            the_post_thumbnail();
          else :
          ?>
            <!-- ない場合 -->
            <img src="<?php echo get_template_directory_uri(); ?>/image/noimage.png" alt="" />
          <?php endif; ?>
          <p class="eyecatch-label">
            <!-- カテゴリー名を表示する（リンクなし）-->

            <?php $terms = get_the_terms($post->ID, 'blog__cate');
            foreach ($terms as $term) {
              $term_name = $term->name;
              echo $term_name;
              break;
            }; ?>
          </p>
          <div class="p-main__blog__text">
            <time>
              <?php the_time('Y.m.d'); ?>
            </time>
            <h2>
              <a href="<?php the_permalink(); ?>">
                <!-- 20文字で制限し、それを超えた場合は「……」を付ける -->
                <!--the_title -->
                <?php
                if (mb_strlen($post->post_title, 'UTF-8') > 20) {
                  $title = mb_substr($post->post_title, 0, 20, 'UTF-8');
                  echo $title . '…';
                } else {
                  echo $post->post_title;
                }
                ?>
              </a>
            </h2>
            <p>
              記事の冒頭文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </p>
          </div>


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