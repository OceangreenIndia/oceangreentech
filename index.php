<?php get_header(); ?>

<?php
// Getting content as per post Type
$args = array(
    'post_type'=>'faq',
    'posts_per_page'=>5
);

$blogpost = new WP_Query($args);

while($blogpost->have_posts( )){
    $blogpost->the_post();
?>
    <h3><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
    <p><?php the_excerpt( )?></p>
    <p><?php echo site_url( 'blog'); ?></p>
<?php
}
?>

<?php get_footer(); ?>