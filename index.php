<?php get_header(); ?>

<?php
// Getting content
while(have_posts( )){
     the_post();
?>
    <h3><?php the_title() ?></h3>
    <p><?php the_excerpt( )?></p>
<?php
}
?>

<?php get_footer(); ?>