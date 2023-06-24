<?php

add_theme_support('menus');

register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme'),
    )
);

add_theme_support('post-thumbnails');

function load_stylesheets()
{
    wp_register_style('Bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');

    wp_enqueue_style('Bootstrap');

    wp_register_style('stylesheet', get_template_directory_uri() . '/css/style.css', array(), false, 'all');

    wp_enqueue_style('stylesheet');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

function include_jquery()
{
    wp_deregister_script('jquery');

    wp_register_script('jquery-thema', get_template_directory_uri() . '/js/jquery.js', '', 1, true );

    wp_enqueue_script('jquery-thema');
}

add_action('wp_enqueue_scripts', 'include_jquery');

function load_js()
{
    wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true );

    wp_enqueue_script('customjs');

}

add_action('wp_enqueue_scripts', 'load_js');

add_image_size('thumbnail', 150, 150, true);
add_image_size('smallest', 300, 300, true);
add_image_size('medium', 600, 600, true);
add_image_size('large', 900, 900, true);
add_image_size('largest', 1200, 1200, true);