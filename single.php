<?php get_header(); ?>

<?php
    //Showing requested page
    while(have_posts()){
        the_post();
        the_post_thumbnail();
        the_content();
    }
?>

<?php get_footer(); ?>