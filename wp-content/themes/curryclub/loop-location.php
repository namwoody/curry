<?php
/**
 * The loop that displays a page.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.2
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		      			

					   <div class="full-width content-area">
                <div class="row">	
                  <div class="large-4  columns left" id="sidebar">
               <?php get_sidebar(); ?>

                

                </div>
                 
                 
               <div class="large-8 columns right">
				<h5 class="base text-center">Location</h5>		
				<?php the_content(); ?>
						
			<footer>
				<?php edit_post_link( __( 'Edit', 'starkers' ), '', '' ); ?>
			</footer>
		
          </div>
<!--end content area -->

</div>
</div>
		

<?php endwhile; ?>