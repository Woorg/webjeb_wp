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

	<!-- <div class="content"> -->
		<?php
		while ( have_posts() ) : the_post(); ?>

		<div class="article">
			<?php // the_post_navigation(); ?>

			<h1 class="article__title"><?php the_title(); ?></h1>

			<?php the_post_navigation(); ?>

			<div class="article__img"><?php the_post_thumbnail(); ?></div>
			<div class="portfolio-single">
			<?php

				if(!empty(get_the_content())) : ?>

				<h2 class="portfolio-single__text-title">Описание проекта</h2>
				<div class="portfolio-single__text">
					<?php the_content(); ?>
				</div>
				<?php else : ?>

				<?php endif;
			?>

				<div class="portfolio-single__details">
					<!-- <h2 class="portfolio-single__title">Детали проекта:</h2> -->
					<?php $links = get_field('portfolio_links'); ?>
					<?php $tools = get_field('tools_used'); ?>

					<dl class="portfolio-single__list">

						<?php if ($tools) { ?>
						<div class="portfolio-single__item">
							<dt class="portfolio-single__term">Тип сайта</dt>
							<dd class="portfolio-single__desc">
								<?php the_terms($post->id, 'type_of_site'); ?>
							</dd>
						</div>
						<?php } ?>

						<?php if ($tools) { ?>
						<div class="portfolio-single__item">
							<dt class="portfolio-single__term">Используемые технологии</dt>
							<dd class="portfolio-single__desc">
								<?php the_terms($post->id, 'tools'); ?>
							</dd>
						</div>
						<?php } ?>


						<?php if ($links) { ?>

						<div class="portfolio-single__item">
							<dt class="portfolio-single__term">Ссылки</dt>
							<?php for ($i=0; $i < count($links); $i++) { ?>

							<dd class="portfolio-single__desc">
								<a href="<?php echo $links[$i]['portfolio_link']; ?>" target="_blank" rel="nofollow"><?php echo $links[$i]['portfolio_link']; ?></a>
							</dd>

							<?php } ?>
						</div>
						<?php } ?>

					</dl>
				</div>
			</div>
		</div>







		<?php
		the_post_navigation();

		endwhile; // End of the loop.
		?>
	<!-- </div> -->


</main>

<?php
get_footer();
