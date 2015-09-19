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
                 <div class="large-4 small-12 columns left" id="sidebar" style="margin-top:60px;">
               <?php get_sidebar(); ?>

                

                </div>
               <div class="large-8 small-12 columns right">
				<script id="-locu-widget" type="text/javascript" src="https://widget.locu.com/widget2/locu.widget.v2.0.js?id=ab9a565fa47190a17f9b&medium=web"></script>
               

						
			<footer>
				<?php edit_post_link( __( 'Edit', 'starkers' ), '', '' ); ?>
			</footer>
		
          </div>
<!--end content area -->

</div>
</div>
		

<?php endwhile; ?>