<?php

function custom_theme_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-background');
    add_theme_support('custom-header', array(
        'width'         => 1000,
        'height'        => 400
    ));
}

add_action('after_setup_theme', 'custom_theme_setup');

function rekisteroiMenu() {
    register_nav_menu('reuna', 'Paavalikko');
}

add_action('init', 'rekisteroiMenu');

function lisaaTyylit () {
    wp_enqueue_style('main_style', get_stylesheet_directory_uri().'/css/main.css');
}

add_action('wp_enqueue_styles', lisaaTyylit());