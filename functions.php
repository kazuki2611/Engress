<?php
function hoge_setup()
{
    add_theme_support('post-thumbnails');

    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support( "custom-header", );
    register_nav_menus(array(
        'global' => 'グローバルナビ',
    ));
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
}
add_action('after_setup_theme', 'hoge_setup');

function wpbeg_script()
{



    wp_enqueue_style('style', get_template_directory_uri() . '/css/styles.css?ver1_0_0', array(), '1.0.0', 'all');
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), '', true);
    wp_enqueue_script('faq', get_template_directory_uri() . '/js/faq.js', array('jquery'), '', true);
    
}
add_action('wp_enqueue_scripts', 'wpbeg_script');
function remove_jquery_migrate_notice()
{
    $m = $GLOBALS['wp_scripts']->registered['jquery-migrate'];
    $m->extra['before'][] = 'temp_jm_logconsole = window.console.log; window.console.log=null;';
    $m->extra['after'][] = 'window.console.log=temp_jm_logconsole;';
}


add_action('init', 'remove_jquery_migrate_notice', 5);
function wpbeg_widgets_init()
{
    register_sidebar(
        array(
            'name'          => 'アーカイブウィジェット ',
            'id'            => 'archive_widget',
            'description'   => 'アーカイブ用ウィジェットです',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2><i class="fa fa-folder-open" aria-hidden="true"></i>',
            'after_title'   => "</h2>\n",
        )
    );
    register_sidebar(
        array(
            'name'          => 'カテゴリーウィジェット',
            'id'            => 'category_widget',
            'description'   => 'カテゴリー用ウィジェットです',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2><i class="fa fa-folder-open" aria-hidden="true"></i>',
            'after_title'   => "</h2>\n",
        )
    );
}
add_action('widgets_init', 'wpbeg_widgets_init');

function change_posts_per_page($query)
{
    if (is_admin() || !$query->is_main_query())
        return;

    /* アーカイブページの時に表示件数を10件にセット */
    if ($query->is_archive('blog')) {
        $query->set('posts_per_page', '10');
    }
    if ($query->is_archive('news')) {
        $query->set('posts_per_page', '10');
    }
   
}
add_action('pre_get_posts', 'change_posts_per_page');



