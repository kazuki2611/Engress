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

    register_nav_menus(array(
        'global' => 'グローバルナビ',
    ));
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
