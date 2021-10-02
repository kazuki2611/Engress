<?php get_header(); ?>
<div class="p-wrapper">


  <main class="l-main__news">
    <!-- <div class=" p-hero__single">
    <div class="c-header__title3">
      <h1>
        ハンバーガー

      </h1>


    </div>


  </div> -->
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post(); ?>
        <div class="p-service__wrap__single">


          <div class="p-service__archive p-service__single">
            <!-- カテゴリー表示 -->
            <?php
            if ($terms = get_the_terms($post->ID, 'blog__cate')) {
              foreach ($terms as $term) {
              // カテゴリー 取得　クラス付与
                echo ('<div class="s">') ;
                echo esc_html($term->name)  ;
                echo ('</div>') ;

              }
            }
            ?>
            <h2 class="c-service__archive__title c-service__single__title">
              <?php the_title(); ?>

            </h2>
            <div class="p-service__single__wrap">

              <!-- SNSリンク表示 -->
              <?php wp_social_bookmarking_light_output_e(null, get_permalink(), the_title("", "", false)); ?>
              <time>
                <?php the_time('Y.m.d'); ?>

              </time>
            </div>
            <?php the_content(); ?>


          <?php endwhile;
      else :
          ?><p>表示する記事がありません</p><?php
                              endif;
                                ?>
        <!-- おすすめ記事表示                   -->
        <?php
        global $post;
        $args = array(
          'numberposts' => 3, //８件表示(デフォルトは５件)
          'post_type' => 'blog', //カスタム投稿タイプ名
          'taxonomy' => 'blog_tag', //タクソノミー名 ←ここが追加
          'term' => 'pickup',
          'post__not_in' => array($post->ID) //表示中の記事を除外
        );
        ?>
        <h3>おすすめ記事</h3>
        <?php $myPosts = get_posts($args);
        if ($myPosts) : ?>
          <?php foreach ($myPosts as $post) : setup_postdata($post); ?>
            <div class="p-blog__wrap">
              <?php the_post_thumbnail(); ?>
              <p class="eyecatch-label">
                <!-- カテゴリー名を表示する（リンクなし,一つだけ）-->
                <?php
                $terms = get_the_terms($post->ID, 'blog__cate');
                echo esc_html($terms[0]->name);
                ?>

              </p>
              <div class="c-blog__wrap__text__single">
                <time>
                  <?php the_time('Y.m.d'); ?>
                </time>
                <p>
                  <a href="<?php the_permalink(); ?>">
                    <?php
                    // タイトル文字制限
                    if (mb_strlen($post->post_title) > 20) {
                      $title = mb_substr($post->post_title, 0, 20);
                      echo $title . '...';
                    } else {
                      echo $post->post_title;
                    }
                    ?>
                  </a>

                </p>

              </div>
            </div>
          <?php endforeach; ?>
        <?php else : ?>
          <p>関連アイテムはまだありません。</p>
        <?php endif;
        wp_reset_postdata(); ?>
  </main>
  <aside>

    <?php if (is_active_sidebar('archive_widget')) :
      dynamic_sidebar('archive_widget');

    else :
    ?>
      <div class="widget">
        <h2>No Widget</h2>
        <p>ウィジットは設定されていません。</p>
      </div>
    <?php endif; ?>
    <?php
    if (is_active_sidebar('category_widget')) :
      dynamic_sidebar('category_widget');
    else :
    ?>
      <div class="widget">
        <h2>No Widget</h2>
        <p>ウィジットは設定されていません。</p>
      </div>
    <?php endif; ?>
  </aside>
</div>








</main>
<?php get_template_part('contact'); ?>

<?php get_footer(); ?>