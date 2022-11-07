<?php
/**
 * Template Name: Home
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */

get_header();
?>
<div class="home">
<div class="container">
 <?php while ( have_posts() ) : the_post(); ?>
 
            
            
             <?php the_content(); ?>
            
				<?php //get_template_part( 'content', 'page' ); ?>
				<?php //comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

</div>
</div>
<?php get_footer(); ?>
