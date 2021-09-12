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
