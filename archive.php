<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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
		if ( have_posts() ) : ?>
				<?php
					// the_archive_title( '<h1 class="title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>

			<div class="article">
				<h2 class="article__title">
					<a href="<?php the_permalink(); ?>" class="article__link"><?php the_title(); ?></a>
				</h2>
				<div class="article__img"><?php the_post_thumbnail(); ?></div>

				<div class="article__text">
					<?php the_content(); ?>
				</div>
			</div>


			<?php endwhile;

		else :


		endif; ?>


		<div class="pagination">
			<?php
				global $wp_query;

				$big = 999999999; // need an unlikely integer

				echo paginate_links( array(
					'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format' => '?paged=%#%',
					'current' => max( 1, get_query_var('paged') ),
					'total' => $wp_query->max_num_pages
				) );
			?>
		</div>

	</div>
	<!-- end content -->

	<div class="sidebar">
		<?php get_sidebar(); ?>
	</div>
	<!-- end sidebar -->

	<div class="page__buffer"></div>

</main>
<!-- end main -->



<?php
get_footer();
