<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blog-site-template-master
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<div id="main--page">
		<header class="container main--header">
			<div class="container-xxl">
				<div class="row">
					<div class="col-md-12">
						<div class="header__inner">
							<div class="main__logo header__logo wow animate__animated animate__fadeInLeft">
								<?php
								if (function_exists('the_custom_logo')) {
									$theme_logo_id = get_theme_mod('custom_logo');
									$theme_logo_url = wp_get_attachment_url($theme_logo_id);
								}
								?>
								<a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo $theme_logo_url ?>"></a>
							</div>
							<div class="header--navigation">
								<?php
								wp_nav_menu(
									array(
										'menu' 				=> "Home-menu",
										'theme_location' 	=> 'home-menu',
										'menu_id'        	=> 'header-menu',
										'container_class' 	=> 'header__navitaion wow animate__animated animate__fadeInDownBig',
										'items_wrap' 		=>	'<ul class="header__menu">%3$s</ul>'
									)
								);

								?>
							</div>
							<button class="header__hamburger-menu">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
								</svg>

							</button>
						</div>
					</div>
				</div>
			</div>
		</header>