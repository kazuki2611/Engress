<?php get_header(); ?>

<section class="p-price">
  <h1 class="c-price__title">料金体系</h1>
  <div class="p-price__inner">
    <div class="c-price___item">
      <p>入会金 39,800円</p>
    </div>
    <div class="c-price___item__plus">

    </div>
    <div class="c-price___item">
      月額費用
    </div>

  </div>
  <p class="c-price__text">
    Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。
  </p>
  <h1 class="c-price__title2">
    料金表
  </h1>
  <div class="p-price__wrap ">
    <div class="p-price__wrap__box">
      <h2>
        基礎プラン
      </h2>
      <p>
        <span><?php the_field('料金1'); ?></span>
      </p>
      <p>
        *月額（税抜価格）
      </p>
      <ul>
        <li>カリキュラム作成</li>
        <li>TOEFL学習サポート</li>
        <li>週一回のビデオMTG</li>
      </ul>
    </div>
    <div class="p-price__wrap__box">
      <h2>
        演習プラン
      </h2>
      <p>
        <span><?php the_field('料金２'); ?></span>
      </p>
      <p>
        *月額（税抜価格）
      </p>
      <ul>
        <li>カリキュラム作成</li>
        <li>TOEFL学習サポート</li>
        <li>週一回のビデオMTG</li>
        <li>月二回の模試<br>
          （解説
          付き）</li>
      </ul>
    </div>

    <div class="p-price__wrap__box u-price">
      <div>

        <h2>
          おすすめ<br>
          志望校対策プラン
      </div>
      </h2>
      <div>

        <p>
          <span><?php the_field('料金３'); ?></span>
        </p>
        <p>
          *月額（税抜価格）
        </p>
        <ul>
          <li>カリキュラム作成</li>
          <li>TOEFL学習サポート</li>
          <li>週一回のビデオMTG</li>
          <li>月二回の模試<br>（解説
          <li>週一の英語面接対策</li>
        </ul>
      </div>
    </div>
    <div class="p-price__wrap__box">
      <h2>
        フレックスプラン
      </h2>
      <p>
        <span><?php the_field('料金４'); ?></span>
      </p>
      <p>
        *月額（税抜価格）
      </p>
      <ul>
        ＊別途ご相談ください
      </ul>
    </div>

  </div>
</section>

<?php get_template_part('contact'); ?>






<?php get_footer(); ?>
