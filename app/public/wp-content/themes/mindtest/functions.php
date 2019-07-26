<?php

function mind_files() {
    wp_enqueue_script('dropdown_arrows', get_theme_file_uri('/js/arrows.js'), NULL, '1.0', true);
    wp_enqueue_style('custom_font', '//fonts.googleapis.com/css?family=Montserrat:400,500,600');
    wp_enqueue_style('custom_font', '//fonts.googleapis.com/css?family=Amaranth&display=swap');
    wp_enqueue_style('custom_font', '//fonts.googleapis.com/css?family=Dancing+Script&display=swap');
    wp_enqueue_style('font_awesome', '//use.fontawesome.com/releases/v5.0.7/css/all.css');
    wp_enqueue_style('bootstrap_one', '//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css');
    wp_enqueue_style('bootstrap_two', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_style('mind_main', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'mind_files');

function mind_features() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'mind_features');

?>