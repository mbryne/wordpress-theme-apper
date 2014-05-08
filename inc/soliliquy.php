<?php

add_filter( 'tgmsp_strings', 'tgm_custom_slider_strings' );
function tgm_custom_slider_strings( $strings ) {
 
	$strings['add_slider']		 = 'Add Slider';
	$strings['addon_intro']		 = 'The following Addons can be used to extend the functionality of your slider.';
	$strings['addons_page_title']	 = 'Slider Addons';
	$strings['advanced_help']	 = 'Slider Advanced';
	$strings['attachment_red']	 = 'Images with a red overlay cannot be inserted into this slider. This slider uses attachments to handle slider images, and because WordPress currently only allows you to attach an image to one post, images that have already been attached to another post cannot be used in this slider.';
	$strings['main_help']		 = 'Soliloquy utilizes custom post types in order to handle slider instances. Each slider instance has its own separate images, attributes and settings. You can get started by clicking the "Add New" button beside the page title.';
	$strings['meta_instructions']	 = 'Slider Instructions';
	$strings['meta_settings']	 = 'Slider Settings';
	$strings['no_updates']		 = 'All of your slider plugins are up to date. Update checks are performed automatically when you visit or reload this page.';
	$strings['page_title']		 = 'Slider Settings';
	$strings['slider_choose'] 	 = 'Choose Your Slider';
	$strings['slider_select'] 	 = 'Please select a slider.';
	$strings['slider_select_desc'] 	 = 'Select a slider below from the list of available sliders and then click \'Insert\' to place the slider into the editor.';
	$strings['slider_select_insert'] = 'Insert Slider';
	$strings['slider_select_cancel'] = 'Cancel Slider Insertion';
	$strings['updates_page_title']	 = 'Slider Updates';
	$strings['sidebar_help_support'] = 'Slider Support';
	$strings['sidebar_help_contact'] = 'Contact Slider Support';
 
	return $strings;
 
}
 
add_filter( 'tgmsp_post_type_labels', 'tgm_custom_slider_labels' );
function tgm_custom_slider_labels( $labels ) {
 
	$labels['name'] 		= __( 'Sliders' );
	$labels['singular_name']	= __( 'Slider' );
	$labels['add_new'] 		= __( 'Add New' );
	$labels['add_new_item'] 	= __( 'Add New Slider' );
	$labels['edit_item']		= __( 'Edit Slider' );
	$labels['new_item'] 		= __( 'New Slider' );
	$labels['view_item'] 		= __( 'View Slider' );
	$labels['search_items'] 	= __( 'Search Sliders' );
	$labels['not_found'] 		= __( 'No Sliders found' );
	$labels['not_found_in_trash'] 	= __( 'No Sliders found in trash' );
	$labels['menu_name'] 	        = __( 'Sliders' );
 
	return $labels;
 
}
 
add_filter( 'tgmsp_slider_messages', 'tgm_custom_slider_messages' );
function tgm_custom_slider_messages( $messages ) {
 
	$messages[1] = 'Slider updated.';
	$messages[2] = 'Slider custom field updated.';
	$messages[3] = 'Slider custom field deleted.';
	$messages[4] = 'Slider updated.';
	$messages[5] = isset( $_GET['revision'] ) ? sprintf( 'Slider restored to revision from %s', wp_post_revision_title( (int) $_GET['revision'], false ) ) : false;
	$messages[6] = 'Slider published.';
	$messages[7] = 'Slider saved.';
	$messages[8] = 'Slider submitted.';
	if (isset($post))
		$messages[9] = sprintf( 'Slider scheduled for: %1$s.', date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ) );
	$messages[10] = 'Slider draft updated.';
 
	return $messages;
 
}
 
add_filter( 'tgmsp_widget_ops', 'tgm_custom_widget_desc' );
function tgm_custom_widget_desc( $widget_ops ) {
 
        $widget_ops['description'] = __( 'Place a slider in your sidebar.' );
        return $widget_ops;
 
}
 
add_filter( 'tgmsp_widget_name', 'xmit_custom_widget_title' );
function xmit_custom_widget_title( $title ) {
 
        $title = __( 'Slider' );
        return $title;
 
}