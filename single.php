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

		<article class="article article_table-content">
				<h1 class="article__title"><?php the_title(); ?></h1>
				<?php if ( function_exists('evc_buttons_code') ) { ?>
				<div class="article__social">
					<?php echo evc_buttons_code(); ?>
				</div>
				<?php } ?>
			<div class="article__w">
				<div class="article__w-w article__w-w_full">
					<?php if (has_post_thumbnail()) { ?>
					<div class="article__img">
						<?php the_post_thumbnail(); ?>
					</div>
					<?php } ?>

					<div class="article__text">
						<?php the_content(); ?>
					</div>

				</div>

				<?php $tableContent = get_field( "table_of_content" );
					if( $tableContent ) {
				?>
				<div class="article__table-contents">
					<?php echo $tableContent; ?>
				</div>
				<?php } ?>
			</div>

		</article>



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
