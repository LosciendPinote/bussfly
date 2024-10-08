<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blog-site-template-master
 */

?>

<div id="content-<?php the_ID() ?>" class="container section section--services-post container--post">
	<div class="container-xxl">
		<div class="row">
			<div class="col-md-12">

				<?php
				if ('services' === get_post_type()) {
					echo "Bahog Lubot!";
					get_template_part('template-parts/acf-custom-post/services', 'post');
				}
				?>
			</div>
		</div>
	</div>
</div>