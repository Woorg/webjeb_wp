<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package webjeb
 */

get_header('inner'); ?>

<main class="main">

	<?php get_search_form(); ?>
	<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

</main>

<?php
get_footer();
