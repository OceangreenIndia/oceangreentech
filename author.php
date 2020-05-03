<?php  get_header(); ?>

<?php
    // while(have_posts()){
    //     the_post();
    //     get_template_part( 'content', get_post_format() );
?>
<ul><br />
<!-- The Loop --><br />
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><br />
<li><br />
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><br />
<?php the_title(); ?></a>, <br />
<?php the_time('d M Y'); ?> in <?php the_category('&');?><br />
  </li><br />
<br />
  <?php endwhile; else: ?><br />
     <p><?php _e('No posts by this author.'); ?></p><br />
<br />
    <?php endif; ?><br />
<!-- End Loop --><br />
</ul>
   

<?php
    // }
?>

<?php  get_footer(); ?>