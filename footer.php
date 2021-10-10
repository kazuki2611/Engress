<footer class="l-footer">
  <div class="l-footer__inner">

  
   <?php
      $defaults = array(
        'menu'            => 'フッターナビゲーション',
        'menu_class'      => 'p-footer__menu__list ',

        'container'       => 'div',
        'container_class' => 'p-footer__menu',
        'container_id'    => '',

        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'echo'            => true,
        'depth'           => 0,
        'walker'          => '',
        'theme_location'  => '',
        'items_wrap'      => '<ul  class="%2$s">%3$s</ul>',
      );
      wp_nav_menu($defaults); ?>
  <div class="l-footer__wrap ">
    <!-- <ul class="p-footer__menu">
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
        <a href="./price.html">
          コース・料金
        </a>
      </li>
    </ul> -->
    <div class="p-footer__contact">
      <button class="c-footer__button">
        <a href="#">
          <img src="<?php echo esc_url (get_template_directory_uri(). '/image/logo.png'); ?>" >
         
        </a>
      </button>
      <div class="c-footer__number">
        <img src="<?php echo esc_url (get_template_directory_uri(). '/image/logo3.png'); ?>" >
        <p>
          0123-456-7890
        </p>
      </div>
      <time>
        平日08:00~20:00
      </time>
    </div>
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
<script>
new ScrollHint('.js-scrollable' );
</script>

</body>