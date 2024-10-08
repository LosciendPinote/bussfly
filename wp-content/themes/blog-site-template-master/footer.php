<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blog-site-template-master
 */

?>

<footer class="main--footer container-xxl footer--section section--bg">
	<div class="container section">
		<div class="row">
			<div class="col-md-12">
				<div class="footer__inner">
					<div class="footer__wrap footer__wrap-1">
						<div class="main__logo footer__logo wow animate__animated animate__fadeInLeft">
							<img src="<?php echo esc_url(get_field('footer_logo', 'Options')['url']) ?>" alt="<?php echo get_field('footer_logo', 'Options')['alt'] ?>">
						</div>
					</div>
					<diav class="footer__wrap footer__wrap-2">
						<div class="footer__navigation wow animate__animated animate__fadeInUpBig">
							<?php
							if (!is_active_sidebar('footer_widget')) {
								return;
							} else {
								dynamic_sidebar('footer_widget');
							}
							?>


						</div>
					</diav>
					<div class="footer__wrap footer__wrap-3 wow animate__animated animate__fadeInRight">
						<div class="footer__title footer__email--title">
							<h5 class="footer__title-text"><?php echo get_field('footer_email_title', 'Options') ?></h5>
						</div>
						<?php dynamic_sidebar('footer_client_email_widget') ?>

					</div>
				</div>
			</div>
		</div>
	</div>




</footer>

</div>
<?php wp_footer(); ?>

</body>

</html>