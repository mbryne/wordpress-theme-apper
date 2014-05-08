<?php

class apper_spotlight_link_widget extends WP_Widget
{

    function __construct()
    {
        parent::__construct(
            'nucleo_sidebarnav_widget',
            __('Spotlight Link', 'apper_spotlight_link_widget_domain'),
            array('description' => __('Add a Spotlight Link to the Sidebar', 'apper_spotlight_link_widget_domain'),)
        );
    }

    public function widget($args, $instance)
    {

        $title = apply_filters('widget_title', $instance['title']);

        extract(shortcode_atts(array(
            'image' => 	'',
            'class' => 	'',
            'title' => 	'Read More',
            'icon'  => 	'arrow-right',
            'link'  => 	'',
            'new'  => false
        ), $instance));

        // before and after widget arguments are defined by themes
        echo $args['before_widget'];

        //  add col-md-6 to footer widgets
        if (strpos($args['id'], "footer"))
            $class .= "col-md-6";

        $values =
            'image="' . $image . '" ' .
            'class="' . $class . '" ' .
            'title="' . $title . '" ' .
            'icon="' . $icon . '" ' .
            'link="' . $link . '" ' .
            'new="' . $new . '" ';

        $shortcode = '[apper_spotlight_link ' . $values . ']';
        echo do_shortcode( $shortcode );

        echo $args['after_widget'];

    }

    public function form($instance)
    {

        extract(shortcode_atts(array(
            'image' => 	'',
            'class' => 	'',
            'title' => 	'Read More',
            'icon'  => 	'arrow-right',
            'link'  => 	'',
            'new'  => false
        ), $instance));

        ?>

        <p>
            Image:
        </p>

        <?php

            $images = new WP_Query( array( 'post_type' => 'attachment', 'post_status' => 'inherit', 'post_mime_type' => 'image' , 'posts_per_page' => -1 ) );
            if( $images->have_posts() ){
                $options = "";
                while( $images->have_posts() ) {
                    $images->the_post();
                    $img_src = wp_get_attachment_image_src(get_the_ID(), 'large');
                    $options .= '<option value="' . $img_src[0] . '" ' . selected( $image, $img_src[0], false ) . '>' . get_the_title() . '</option>';
                }
                echo '<select name="' . $this->get_field_name( 'image' ) . '">';
                echo '<option value="' . selected( $the_link, '', false ) . '">-- select -- </option>';
                echo $options;
                echo '</select>';
            }
            else
            {
                echo 'There are no images in the media library. Click <a href="' . admin_url('/media-new.php') . '" title="Add Images">here</a> to add some images';
            }

        ?>

        <p>
            Title:
            <input name="<?php echo $this->get_field_name('title'); ?>" type="input" value="<?php echo $title; ?>" class="widefat" />
        </p>


        <hr />

        <p>
            Link:
            <input name="<?php echo $this->get_field_name('link'); ?>" type="input" value="<?php echo $link; ?>"  class="widefat"/></p>
        </p>

        <p>
            <input type="checkbox" name="<?php echo $this->get_field_name('new'); ?>" value="1" <?php echo ($new == "1") ? "checked='checked'" : ""; ?>>
            <label for="<?php echo $this->get_field_name('new'); ?>">Open in New Window</label>

        </p>

        <hr />

        <p>
            Css Class:
            <input name="<?php echo $this->get_field_name('class'); ?>" type="input" value="<?php echo $class; ?>" class="widefat"/>
        </p>

    <?php
    }

// Updating widget replacing old instances with new
    public function update($new_instance, $old_instance)
    {
        $instance = $old_instance;

        $instance['image'] = (!empty($new_instance['image'])) ? strip_tags($new_instance['image']) : '';
        $instance['class'] = (!empty($new_instance['class'])) ? strip_tags($new_instance['class']) : '';
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        $instance['icon'] = (!empty($new_instance['icon'])) ? strip_tags($new_instance['icon']) : '';
        $instance['link'] = (!empty($new_instance['link'])) ? strip_tags($new_instance['link']) : '';
        $instance['new'] = (!empty($new_instance['new'])) ? strip_tags($new_instance['new']) : '';

        return $instance;
    }
}

function apper_spotlight_link_widget_load()
{
    register_widget('apper_spotlight_link_widget');
}

add_action('widgets_init', 'apper_spotlight_link_widget_load');
