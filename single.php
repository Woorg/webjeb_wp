<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package webjeb
 */

get_header('inner'); ?>

<main class="main">

	<?php if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb('<div class="breadcrumbs">','</div>');
		}
	?>

	<div class="content">
		<?php
		while ( have_posts() ) : the_post(); ?>

		<div class="article">
			<h1 class="article__title"><?php the_title(); ?></h1>
			<!-- <div class="article__img"></div> -->

			<div class="article__text">
				<?php the_content(); ?>
			</div>
		</div>



		<?php	the_post_navigation();

		endwhile; // End of the loop.
		?>
	</div>

	<div class="sidebar">
		<?php get_sidebar(); ?>
	</div>
	<!-- end sidebar -->

	<div class="page__buffer"></div>
</main>

<?php
get_footer();
