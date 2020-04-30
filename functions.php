<?php
    //Adding Css and Js file

    function og_setup(){
        wp_enqueue_style( "bootstrap", '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' );
        wp_enqueue_style( "style", get_stylesheet_uri( ), null, microtime(), 'all');
         wp_enqueue_script( 'main', get_theme_file_uri( 'js/main.js' ) , null, microtime(), true );
    }

    add_action( 'wp_enqueue_scripts', 'og_setup' );

    //Adding Theme Support

    function og_init(){
        add_theme_support( 'post-thumbnails');
    }

    add_action( 'after_setup_theme','og_init');
?>