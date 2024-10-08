<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blog-site-template-master
 */

?>
<div id="content-<?php the_ID() ?>" class="container-xxl section section--services-page container--page <?php echo (is_front_page()) ? 'section--bg' : '' ?>">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php if (is_page(16, 'Our Services', 'our-services') || is_front_page()) {
					get_template_part('template-parts/acf-custom-post/services', 'page');
				}
				?>
			</div>
		</div>
	</div>
</div>