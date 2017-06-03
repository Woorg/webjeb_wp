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


	<div class="content ">

		<?php while ( have_posts() ) : the_post(); ?>

		<article class="article article_table-content">
			<h1 class="article__title"><?php the_title(); ?></h1>
			<div class="article__social">
				<?php echo evc_buttons_code(); ?>
			</div>

			<div class="article__img article__img_testimonials">
				<?php the_post_thumbnail(); ?>
			</div>

			<div class="article__text">
				<?php the_content(); ?>
			</div>
		</article>
		<?php the_post_navigation(); ?>

		<?php endwhile; ?>
	</div>


<!-- <div class="page__buffer"></div> -->
</main>

<?php
get_footer();
