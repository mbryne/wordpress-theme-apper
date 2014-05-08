<?php


    $slider_id = 69; // default slider

    //  copy page slug and slider id beloe
    switch($post->post_name)
    {
        case "contact":
            $slider_id = 119;
            break;
        case "history-week":
            $slider_id = 121;
            break;
        case "events":
            $slider_id = 141;
            break;
    }

?>

<?php if ( function_exists( 'soliloquy_slider' ) && $slider_id !== null ): ?>

    <div class="container main-slider" id="slider">

        <div class="row">

            <div class="col-md-12 hidden-xs">

                <?php soliloquy_slider( $slider_id ); ?>

            </div>

        </div>

    </div>

<?php endif; ?>