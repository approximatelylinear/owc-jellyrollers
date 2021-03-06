<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package kelly
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<?php $style = '';

	if ( get_header_image() ) :
		$style = ' style="background-image: url( ' . get_header_image() . ' );"';
	endif; ?>
	<header id="masthead" class="site-header" role="banner"<?php echo $style; ?>>
		<div class="header-background"></div>
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_theme_file_uri( 'images/logo-cbcc.jpg' ); ?>" alt="Chicago Baseball Cancer Charity" /></a></h1>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<a class="menu-toggle">
				<img class="inactive-hamburger" src="<?php echo get_theme_file_uri( 'images/menu-button.svg' ); ?>" alt="Menu" />
				<img class="active-hamburger" src="<?php echo get_theme_file_uri( 'images/menu-button-active.svg' ); ?>" alt="Menu" />
			</a>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'kelly' ); ?></a>

			<?php
				wp_nav_menu( array(
					'theme_location'  => 'primary',
					'container_class' => 'menu',
					'menu_class'      => 'nav-menu',
				) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
