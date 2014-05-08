<?php

add_shortcode("apper_spotlight_link", "apper_spotlight_link");

function apper_spotlight_link ($atts) {

  extract(shortcode_atts(array(
      'image' => 	'',
      'class' => 	'',
      'title' => 	'Read More',
      'icon'  => 	'arrow-right',
      'link'  => 	'',
      'new'  => false
   ), $atts));

    if (empty($icon)) $icon = 'arrow-right';
    $target = ($new == "1") ? " target='_blank' " : '';

	?>

        <a href="<?php echo esc_url( $link ); ?>" <?php echo $target; ?>
           class="spotlight-link <?php echo $class; ?>">

           <img src="<?php echo $image; ?>" alt="<?php echo $link; ?>" />

           <b>
                <?php echo $title; ?>
                <i class="fa fa-<?php echo $icon; ?>"></i>
           </b>

        </a>

        <div class="spacer-20 visible-xs"></div>

	<?php
}