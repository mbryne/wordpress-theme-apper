<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	<!-- /Bootstrap -->
	
	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600' rel='stylesheet' type='text/css'>
	<!-- /Fonts -->
	
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
	
<div id="wrap" class="hfeed site">
	
	<div id="container">
		
		<?php do_action( 'before' ); ?>
		
		<header id="header" class="site-header" role="banner">
			
			<div class="container">
			
				<div class="row">
				
					<div class="col-md-4 col-xs-12">
					
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" class="logo-img" width="305" />
						</a>
						
						<p class="tagline"><?php bloginfo( 'description' ); ?></p>
								
					</div>
					
					<div class="col-md-8 col-xs-12">
					
						<nav id="navigation" class="navigation" role="navigation">
						
							<div class="menu-links-spacer hidden-xs hidden-sm"></div>					
							
							<div class="hidden-xs menu-links-container">
								<?php wp_nav_menu( array( 'theme_location' => 'primary', 'after' => '<li class="menu-divider">/</li>') ); ?>
							</div>
							
							<div class="menu-select-container visible-xs">

							</div>
	
						</nav>
						
					</div>
					
				</div>
				
			</div>
	
		</header>
	
		<div id="content" class="site-content">
		
		

