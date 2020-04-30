<?php
    //Adding Css and Js file

    function og_setup(){
        wp_enqueue_style( "style", get_stylesheet_uri( ), null, microtime(), 'all');
        /**
         * first parameter is name of file
         * second for location, get_stylesheet_uri() function locate root of site, 
         * third is dependance of file if any
         * 4th stands for version number, for development purpose microtime() function is added to chaage dev version constanly
         * 5th is device support, all for all device
         */

         wp_enqueue_script( 'main', get_theme_file_uri( 'js/main.js' ) , null, microtime(), true );
    }

    add_action( 'wp_enqueue_scripts', 'og_setup' )
?>