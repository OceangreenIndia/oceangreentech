<?php get_header(); ?>

<?php
// Getting content
while(have_posts( )){
     the_post();
?>
    <h3><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
    <p><?php the_excerpt( )?></p>
<?php
}
?>

<?php get_footer(); ?>