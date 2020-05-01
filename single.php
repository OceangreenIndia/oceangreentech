<?php get_header(); ?>

<?php
    //Showing requested page
    while(have_posts()){
        the_post();
        // the_post_thumbnail();
        // the_content();
    ?>
    <div class="container">
    <h2><?php the_title(); ?></h2>
    <h5>Posted By<?php the_author(); ?></h5>
    </div>
    <div class="container-fluid">
    <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url( get_the_ID())?>"/>
        </div>
    <div class="container">
    <?php
    the_content();
    comment_form();
    }
?>
    </div>
<?php get_footer(); ?>