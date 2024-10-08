<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package blog-site-template-master
 */

get_header();
?>

<?php if (have_posts()) : ?>

<?php while (have_posts()) : ?>

<?php the_post() ?>


	<?php endwhile ?>

	<?php endif ?>
<?php

get_footer();

