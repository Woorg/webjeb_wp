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

	<!-- begin recent-works-->
	<section class="recent-works section">
		<h2 class="recent-works__title">Портфолио <span><?php single_term_title(); ?></span></h2>
		<!-- <p class="recent-works__text">Несколько слов о недавних работах</p> -->
		<?php wp_nav_menu( array(
			'theme_location' => 'menu-2',
			'menu_id' => '',
			'container' => '',
			'menu_class' => 'list-filter'

		) ); ?>

		<?php wp_nav_menu( array(
			'theme_location' => 'menu-4',
			'menu_id' => '',
			'container' => '',
			'menu_class' => 'list-filter list-filter_second'

		) ); ?>

		<ul class="recent-works__list">

			<?php if (have_posts()) : ?>

				<?php while (have_posts()) : the_post(); ?>

					<li class="recent-works__item">
						<a href="<?php the_permalink(); ?>" class="recent-works__image">
							<?php the_post_thumbnail('medium_large'); ?>
						</a>
						<div class="recent-works__item-title"><?php the_title(); ?></div>
						<div class="recent-works__cat">
							<?php the_category(); ?>
						</div>
					</li>

				<?php endwhile; ?>
				<?php wp_reset_query(); ?>


			<?php endif; ?>

		</ul>

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
		<!-- end pagination -->
	</section>



	<!-- end recent-works-->
	<div class="page__buffer"></div>


</main>



<?php
get_footer();
