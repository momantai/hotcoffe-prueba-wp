<?php

function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );

function hotcoffe_scripts() {
  wp_enqueue_style( 'hotcoffe-style', get_template_directory_uri() . '/assets/css/normalize.css');
  wp_enqueue_style( 'hotcoffe-comments', get_template_directory_uri() . '/assets/css/comments.css');
  wp_enqueue_script( 'hotcoffe-scroll', get_theme_file_uri( 'assets/js/scroll.js' ), array(), '20201214', true );
}

function hotcoffe_script_footer(){
  wp_enqueue_script( 'hotcoffe-newsletter', get_theme_file_uri( 'assets/js/newsletter.js' ) );
}

add_action( 'wp_enqueue_scripts', 'hotcoffe_scripts' );
add_action( 'wp_footer', 'hotcoffe_script_footer' );


// Register a new navigation menu
function add_Main_Nav() {
    register_nav_menu( 'header-menu', __( 'Header Menu' ) );
}
  // Hook to the init action hook, run our navigation menu function
add_action( 'init', 'add_Main_Nav' );