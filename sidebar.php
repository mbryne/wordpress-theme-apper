<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Apper Base Theme
 */
?>

	<div id="secondary" class="widget-area" role="complementary">
	
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'main-sidebar' ) ) : ?>

			<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside>

		<?php endif; ?>
	</div>
