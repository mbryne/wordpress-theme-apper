<?php
/**
 * The template used for displaying slider content in page.php
 *
 * @package Apper Base Theme
 */
?>

<?php if ( function_exists( 'soliloquy_slider' ) ): ?>

    <div class="container home-slider" id="slider">

        <div class="row">

            <div class="col-md-12 hidden-xs">

                <?php soliloquy_slider( '66' ); ?>

            </div>

        </div>

    </div>

<?php endif; ?>