<?php
/*
Template Name: No Sidebar
*/

get_header(); ?>

	<div class="container">
	
		<div class="row">
		
			<div class="col-md-12 site-main" id="main">
							
				<?php while ( have_posts() ) : the_post(); ?>
	
					<?php get_template_part( 'content', 'page' ); ?>
	
					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() ) :
							comments_template();
						endif;
					?>
	
				<?php endwhile; // end of the loop. ?>

                <?php dynamic_sidebar( 'main-footer'); ?>

			</div>

		</div>
		
	</div>
	
	
			
<?php get_footer(); ?>
