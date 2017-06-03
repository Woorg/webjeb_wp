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
	<?php if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb('<div class="breadcrumbs">','</div>');
		}
	?>

	<h1 class='title-h2 title-404'>К сожалению, страница, которую вы ищете, не существует.</h1>

	<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

</main>

<?php
get_footer();
