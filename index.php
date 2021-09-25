<?php get_header(); ?>
<main class="l-main">
  <section class="p-hero">
    <h1 class="c-hero__title c-title">
      TOEFL対策はEngress
    </h1>
    <p class="c-hero__text">
      日本人へのTOEFL指導歴豊かな講師陣の<br>
      コーチング型TOEFLスクール<br>

    </p>
    <button class="c-hero__button c-button">
      <a href="<?php bloginfo("url"); ?>/contact">

        資料請求
      </a>
    </button>
    <div class="c-hero__contact">
      <a href="./form.html">
        お問い合わせ
      </a>
    </div>
  </section>
  <section class="p-concept">
    <h2 class="c-concept__title c-title">
      TOEFL学習でこんな悩み<br>ありませんか？
    </h2>
    <div class="p-concept__inner">


      <div class="p-concept__box">
        <p class="c-concept__text">
          勉強の習慣が<br>身についていない
        </p>
      </div>
      <div class="p-concept__box">
        <p class="c-concept__text">
          勉強しているはず<br>なのに点数が伸びない
        </p>
      </div>
      <div class="p-concept__box">
        <p class="c-concept__text">
          正しい勉強方法が<br>わからない
        </p>
      </div>
    </div>
    <div class="p-concept__wrap">
      <div class="p-concept__wrap__inner">


        <h3 class="c-concept__wrap__title c-title">
          Engressは<br>
          TOEFLに特化したスクールです
        </h3>
        <p class="c-concept__wrap__text">
          完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で<br>
          TOEFLの苦手分野を克服します。
        </p>
      </div>
    </div>
  </section>
  <section class="p-service">
    <h1 class="c-service__title c-title">
      TOEFL対策に特化したEngress3つの強み
    </h1>

    <div class="p-service__box u-display">
      <img src="<?php echo get_template_directory_uri(); ?>/image/feature01.jpg"></img>
      <div class="p-service__box__wrap u-margin">


        <div class="c-service__box__point">
          <p>

            特長 1
          </p>
        </div>
        <h3 class="c-service__box__title c-title">
          TOEFLに最適化された<br>
          無駄のないカリキュラム
        </h3>
        <p class="c-service__box__text">
          TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。
        </p>

      </div>
    </div>
    <div class="p-service__box ">
      <img src="<?php echo get_template_directory_uri(); ?>/image/feature01.jpg"></img>
      <div class="p-service__box__wrap">


        <div class="c-service__box__point">
          <p>

            特長 2
          </p>
        </div>
        <h3 class="c-service__box__title c-title">
          日本人指導歴10年以上の<br>
          経験豊富な講師陣
        </h3>
        <p class="c-service__box__text">
          Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。
        </p>

      </div>
    </div>
    <div class="p-service__box u-display">
      <img src="<?php echo get_template_directory_uri(); ?>/image/feature03.jpg"></img>
      <div class="p-service__box__wrap u-margin">


        <div class="c-service__box__point">
          <p>

            特長 3
          </p>
        </div>
        <h3 class="c-service__box__title c-title">
          平均3ヶ月でTOEFL iBT20点アップ
        </h3>
        <p class="c-service__box__text">
          Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。
        </p>

      </div>
    </div>
    <div class="p-service__plan">
      <h3 class="c-service__plan__title c-title">
        Engressの料金プランはこちら
      </h3>
      <button class="c-service__plan__button c-button">
        料金を見てみる
      </button>
    </div>
  </section>
  <section class="p-model">
    <h1 class="c-model__title c-title">
      TOEFL成功事例
    </h1>
    <div class="p-model__wrap">
      <?php while (have_posts()) : ?>
        <div class="p-model__box">
          <p class="c-model__box__title c-title">

            <?php the_post(); ?>
            <?php the_title(); ?>
          </p>
          <img src="<?php the_field('画像'); ?>"> </img>
          <div class="p-model__inner">
            <div class="c-model__inner__work">
              <p>

                <?php the_field('職業'); ?>
              </p>
            </div>
            <div class="c-model__inner__name">
              <p>
                <?php the_field('名前'); ?>

              </p>
            </div>
          </div>
          <p class="c-model__box__text">


            <?php the_field('成果'); ?>

          </p>


        </div>
      <?php endwhile; ?>
      <!-- <div class="p-model__box">
        <p class="c-model__box__title c-title">
          半年でTOEFL 40点→100点を達成！コロンビア大学大学院に合格
        </p>
        <img src="./image/model02.png"> </img>
        <div class="p-model__inner">
          <div class="c-model__inner__work">
            <p>
              大学生



            </p>
          </div>
          <div class="c-model__inner__name">
            <p>
              Y.Takiyamaさん

            </p>
          </div>
        </div>
        <p class="c-model__box__text">

          6ヶ月でTOEFL40→100点


        </p>


      </div>
      <div class="p-model__box">
        <p class="c-model__box__title c-title">
          早稲田大学 国際教養学部AO入試合格！TOEFL iBT 109点
        </p>
        <img src="./image/model03.png"> </img>
        <div class="p-model__inner">
          <div class="c-model__inner__work">
            <p>

              高校生
            </p>
          </div>
          <div class="c-model__inner__name">
            <p>
              M.Yamadaさん

            </p>
          </div>
        </div>
        <p class="c-model__box__text">


          5ヶ月でTOEFL68→109点
        </p>


      </div> -->
  </section>
  <section class="p-flow">
    <h1 class="c-flow__title c-title">
      ご利用の流れ
    </h1>
    <div class="p-flow__wrap">
      <div class="c-flow__number">
        01
      </div>
      <div class="c-flow__title2">
        <h4>
          お問い合わせ
        </h4>
      </div>
      <div class="c-flow__border"></div>
      <div class="c-flow__text">
        <p>
          まずはフォームまたはお電話からお申し込みください。
        </p>
      </div>


    </div>
    <div class="p-flow__wrap">
      <div class="c-flow__number">
        02
      </div>
      <div class="c-flow__title2">
        <h4>
          ヒアリング
        </h4>
      </div>
      <div class="c-flow__border"></div>
      <div class="c-flow__text">
        <p>
          現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。
        </p>
      </div>


    </div>
    <div class="p-flow__wrap">
      <div class="c-flow__number">
        03
      </div>
      <div class="c-flow__title2">
        <h4>
          学習プランのご提供
        </h4>
      </div>
      <div class="c-flow__border"></div>
      <div class="c-flow__text">
        <p>
          目標達成のために最適な学習プランをご提案致します。
        </p>
      </div>


    </div>
    <div class="p-flow__wrap">
      <div class="c-flow__number">
        04
      </div>
      <div class="c-flow__title2">
        <h4>
          ご入会
        </h4>
      </div>
      <div class="c-flow__border"></div>
      <div class="c-flow__text">
        <p>
          お申込み完了後、レッスンがスタートします。
      </div>


    </div>
    <div class="p-flow__wrap">
      <div class="c-flow__number">
        01
      </div>
      <div class="c-flow__title2">
        <h4>
          お問い合わせ
        </h4>
      </div>
      <div class="c-flow__border"></div>
      <div class="c-flow__text">
        <p>
          まずはフォームまたはお電話からお申し込みください。
        </p>
      </div>


    </div>

  </section>
  <section>
    <div class="p-faq ">
      <h1 class="c-faq__title">
        よくある質問
      </h1>
      <div class="p-faq__wrap">
        <dl class="p-faq__wrap__list">
          <dt class="c-faq__wrap__title">
            Engressはサラリーマンでも学習を続けられるでしょうか？
            <!-- <div class="section">
  
                <i class="op_plus"></i>
  
              </div> -->
            <!-- </dt>
            <div class="section">

              <i class="op_plus"></i>

            </div> -->
          <dd class="c-faq__text u-display">
            Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。
          </dd>
        </dl>
        <dl class="p-faq__wrap__list">
          <dt class="c-faq__wrap__title">
            教材はオリジナルのものを使用しているのでしょうか？
            <!-- <div class="section">
  
                <i class="op_plus"></i>
  
              </div> -->
          </dt>
          <!-- <div class="section">

              <i class="op_plus"></i>

            </div> -->
          <dd class="c-faq__text">
            Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。

          </dd>
        </dl>
        <dl class="p-faq__wrap__list">
          <dt class="c-faq__wrap__title">
            講師に日本人はいますか？
            <!-- <div class="section">
  
                <i class="op_plus"></i>
  
              </div> -->
          </dt>
          <dd class="c-faq__text">
            Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。
            <!-- <div class="section">
    
                <i class="op_plus"></i>
    
              </div> -->
          </dd>
        </dl>
        <dl class="p-faq__wrap__list u-border">
          <dt class="c-faq__wrap__title is-border ">

            TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？

            <!-- <div class="section">
  
                <i class="op_plus"></i>
  
              </div> -->
          </dt>
          <dd class="c-faq__text ">
            Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。
          </dd>
        </dl>

      </div>
    </div>
  </section>
  <div class="p-wrapper">

    <section class="p-blog">
      <h2 class="c-blog__title c-title">
        ブログ
      </h2>
      <?php $args = array(
        'numberposts' => 3,    //表示する記事の数の指定
        'post_type' => 'blog'   //投稿タイプの指定
      );
      $the_query = new WP_query($args);
      if ($the_query->have_posts()) :
      ?>

        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <div class="p-blog__wrap">
            <?php the_post_thumbnail('full'); ?>
            <div class="c-blog__wrap__text">
              <p>
                <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a>

              </p>
              <time>
                <?php the_time('Y.m.d'); ?>
              </time>
            </div>
          </div>
        <?php endwhile;
      else :
        ?><p>表示する記事がありません</p><?php
                            endif;
                              ?>


    </section>
    <section class="p-news">
      <h2 class="c-news__title c-title">
        お知らせ
      </h2>
      <?php $args = array(
        'numberposts' => 3,    //表示する記事の数の指定
        'post_type' => 'news'   //投稿タイプの指定
      );
      $the_query = new WP_query($args);
      if ($the_query->have_posts()) :
      ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <div class="p-news__wrap">

            <div class="c-news__wrap__text">
              <time>
                <!-- 時間 -->
                <?php the_time('Y.m.d'); ?>
              </time>
              <p>
                <!-- リンク -->
                <a href="<?php the_permalink(); ?>">
                  タイトル
                  <?php the_title(); ?>

                </a>


              </p>
            </div>
          </div>
        <?php endwhile;
      else :
        ?><p>表示する記事がありません</p><?php
                            endif;
                              ?>




  </div>
  </section>
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




</main>
<?php get_footer(); ?>