<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Apper Base Theme
 */

get_header(); ?>

    <?php get_template_part( 'content', 'main-slider' ); ?>

	<div class="container">
	
		<div class="row">
		
			<div class="col-md-8 site-main" id="main">
							
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
			
			<div class="col-md-4" id="sidebar">
			
				<?php get_sidebar(); ?>

			</div>

		</div>
		
	</div>
	
	
			
<?php get_footer(); ?>
