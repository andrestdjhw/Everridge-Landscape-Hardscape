<?php

function boilerplate_load_assets() {
  wp_enqueue_script('ourmainjs', get_theme_file_uri('/build/index.js'), array('wp-element', 'react-jsx-runtime'), '1.0', true);
  wp_enqueue_style('ourmaincss', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'boilerplate_load_assets');

function boilerplate_add_support() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'boilerplate_add_support');

add_action( 'wp_enqueue_scripts', 'everridge_fonts', 5 );
function everridge_fonts() {
 
    // ── Remove Google Fonts if loaded elsewhere ───────────────────────────────
    wp_dequeue_style( 'everridge-google-fonts' );
    wp_deregister_style( 'everridge-google-fonts' );
 
    // ── Enqueue self-hosted brand fonts ───────────────────────────────────────
    wp_enqueue_style(
        'everridge-fonts',
        get_template_directory_uri() . '/assets/css/fonts.css',
        [],
        '1.0.0'
    );

}    