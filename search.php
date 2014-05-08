<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Apper Base Theme
 */

get_header(); ?>


    <?php get_template_part( 'content', 'main-slider' ); ?>

    <div class="container">

        <div class="row">

            <div class="col-md-8 site-main" id="main">

                <?php dynamic_sidebar( 'main-footer'); ?>

                <?php if ( have_posts() ) : ?>

                    <header class="page-header">
                        <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'apper' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                    </header><!-- .page-header -->

                    <?php /* Start the Loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part( 'content', 'search' ); ?>

                    <?php endwhile; ?>

                    <?php apper_paging_nav(); ?>

                <?php else : ?>

                    <?php get_template_part( 'content', 'none' ); ?>

                <?php endif; ?>

            </div>

            <div class="col-md-4" id="sidebar">

                <?php get_sidebar(); ?>

            </div>

        </div>

    </div>


<?php get_footer(); ?>
