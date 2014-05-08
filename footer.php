<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Apper Base Theme
 */
?>

		</div>
		
	</div>
	
</div>

	<footer id="footer" class="site-footer" role="contentinfo">
	
	
			<div class="container">
					
				<div class="row">
				
					<div class="col-md-4 col-xs-12 hidden-xs">
					
						<a href="http://www.une.edu.au" class="une-logo">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/une.png" alt="University of New England" class="logo-img" width="80" />
						</a>
						
					</div>
					
					<div class="col-md-8 col-xs-12">

                        <div class="spacer-10 hidden-xs"></div>

						<div class="navigation footer-navigation">
							<?php wp_nav_menu( array( 'theme_location' => 'footer', 'after' => '<li class="menu-divider">|</li>') ); ?>

						</div>

					</div>
					
				</div>
				
			</div>
			
		</footer>
	
	
<!-- Javascript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>	
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>

</body>
</html>