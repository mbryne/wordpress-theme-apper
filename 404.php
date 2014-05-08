<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Apper Base Theme
 */

get_header(); ?>


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
	

			</div>
			
			<div class="col-md-4" id="sidebar">
			
				<?php get_sidebar(); ?>

			</div>

		</div>
		
	</div>
	
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	

	<div class="container">
	
		<div class="row">
		
			<div class="col-md-8 site-main" id="main">

				<section class="error-404 not-found">
					
					<header class="entry-header">
						<h1 class="entry-title">Oops! That page can&rsquo;t be found.</h1>
					</header>
					
					<div class="page-content">
					
						<p>It looks like nothing was found at this location. Maybe try one of the links below or a search?</p>
	
						<?php get_search_form(); ?>
	
						<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
	
						<?php if ( apper_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
						<div class="widget widget_categories">
							<h2 class="widgettitle"><?php _e( 'Most Used Categories', 'apper' ); ?></h2>
							<ul>
							<?php
								wp_list_categories( array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								) );
							?>
							</ul>
						</div><!-- .widget -->
						<?php endif; ?>
	
						<?php
						/* translators: %1$s: smiley */
						$archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'apper' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
						?>
	
						<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>
	
					</div>
					
				</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>