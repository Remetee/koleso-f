<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
     	<?php wp_head(); ?>

	</head>
	
	<body <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">
		
	<header>
			<div class="container">
			 <!-- Navigation -->
				<a href="" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/koleso-f.png"></a>
				
				<nav role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" class="navi">
					<div class="navcontainer">
						<?php wp_nav_menu ( array( 'container_class' => '', 'container' => '', 'menu' => 'main menu') ); ?>
					</div><!-- navcontainer -->
				</nav>

			</div>
			
         					
	</header>

