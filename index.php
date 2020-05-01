<?php get_header(); ?>

<?php
// Getting content
while(have_posts( )){
     the_post();
}
?>

<?php get_footer(); ?>