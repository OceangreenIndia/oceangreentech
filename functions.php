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
        add_theme_support( 'title-tag');
        add_theme_support( 'html5', 
            array(
                    'comment-list',
                    'comment-form',
                    'search-form'
                )
        );
    }

    add_action( 'after_setup_theme','og_init');

    //Projects Post Type

    function og_custom_post_type(){
        register_post_type( 'project',  
                array(
                    'rewrite'=>array('slug'=>'projects'),
                    'labels'=>array(
                        'name'=>'Projects',
                        'singular_name'=>'Project',
                        'add_new_item'=>'Add New Project',
                        'edit_item'=>'Edit Project'
                    ),
                    'menu-icon'=>'dashicons-clipboard',
                    'public'=>true,
                    'has_archive'=>true,
                    'supports'=>array(
                        'title', 'thumbnail', 'editor', 'excerpt', 'comments'
                    )
                )
        );
        //Registering new post type FAQ
        register_post_type( 'faq',  
                array(
                    'rewrite'=>array('slug'=>'faqs'),
                    'labels'=>array(
                        'name'=>'Faqs',
                        'singular_name'=>'Faq',
                        'add_new_item'=>'Add New Faq',
                        'edit_item'=>'Edit Faq'
                    ),
                    'menu-icon'=>'dashicons-clipboard',
                    'public'=>true,
                    'has_archive'=>true,
                    'supports'=>array(
                        'title', 'editor'
                    )
                )
        );
    }

    add_action( 'init','og_custom_post_type' );
?>