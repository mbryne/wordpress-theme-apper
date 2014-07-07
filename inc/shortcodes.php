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

    $target = ($new == "1") ? " target='_blank' " : '';

    if (!starts_with($link, "http"))
        $link = get_home_url() . esc_url( $link );

	?>

        <a href="<?php echo $link; ?>" <?php echo $target; ?>
           class="spotlight-link <?php echo $class; ?>">

           <img src="<?php echo $image; ?>" alt="<?php echo $link; ?>" />

           <b>
                <?php echo $title; ?>
                <?php if (!empty($icon)): ?>
                    <i class="fa fa-<?php echo $icon; ?>"></i>
                <?php endif; ?>
           </b>

        </a>

        <div class="spacer-20 visible-xs"></div>

	<?php
}