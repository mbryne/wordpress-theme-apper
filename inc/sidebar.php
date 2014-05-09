<?php

#
#   SIDEBAR ACTIONS
#

add_action( 'widgets_init', 'apper_widgets_init' );

#
#   SIDEBAR FUNCTIONS
#

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function apper_widgets_init() {

    register_sidebar( array(
        'name'          => 'Default Sidebar',
        'id'            => 'main-sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );

    register_sidebar( array(
        'name'          => 'Default Footer',
        'id'            => 'main-footer',
        'before_widget' => '<span id="%1$s" class="widget %2$s">',
        'after_widget'  => '</span>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );

    register_sidebar( array(
        'name'          => 'Homepage Sidebar',
        'id'            => 'home-sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );

    register_sidebar( array(
        'name'          => 'Homepage Footer',
        'id'            => 'home-footer',
        'before_widget' => '',
        'after_widget'  => '',
        'before_widget' => '<span id="%1$s" class="widget %2$s">',
        'after_widget'  => '</span>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );

}