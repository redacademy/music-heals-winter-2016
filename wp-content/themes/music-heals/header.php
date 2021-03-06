<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link href='https://fonts.googleapis.com/css?family=Catamaran' rel='stylesheet' type='text/css'>

	<?php wp_head(); ?>



	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
			<div class="banner-wrapper">
				<div class="site-banner">
					<div class="menu-logo-wrapper">
						<div class="menu-button"><img src="<?php echo get_template_directory_uri();?>/assets/Hamburger_menu_01.svg" alt="Hamburger Menu"/></div>

						<a href="<?php home_url()?>/">
							<div class="logo"><img src="<?php echo get_template_directory_uri();?>/assets/musicheals.png" alt="Music Heals Logo"/></div>
						</a>
					</div>

						<div class="cart"><img src="<?php echo get_template_directory_uri();?>/assets/Icon_Shopping_Cart_empty.svg" alt="Empty Shopping Cart"/></div>
				</div><!-- .site-branding -->
			</div>

			</header><!-- #masthead -->
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php wp_nav_menu( array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
			</nav><!-- #site-navigation -->

			<div id="content" class="site-content">
