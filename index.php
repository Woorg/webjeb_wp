<?php get_header(); ?>

		<!-- begin hero-->
		<section class="hero section">
			<div class="hero__in">
				<div class="hero__w">
					<h1 class="hero__title">Верстка psd, ai, sketch, xd, figma в html</h1>
					<div class="hero__text">
						<p> Здравствуйте, я частный вебмастер и я занимаюсь адаптивной html версткой и интеграцией верстки с CMS Wordpress и СМS 1С- Битрикс: Управление сайтом. Пишу чистый код используя методологию БЭМ.<br/>Думаю об отображении в разных браузерах и на разных устройствах. Забочусь о скорости <br/>загрузки и дальнейшем SEO-продвижении.</p>
					</div>
					<a href="mailto: gorlov35@gmail.com?subject=Заказать верстку" class="hero__button button">Заказать верстку</a>
				</div>
			</div>
		</section>
		<!-- end hero-->
		<!-- begin services-->
		<section id="section-1" class="services section">
			<div class="services__in">
				<h2 class="services__title">Услуги</h2>
				<ul class="services__list">
					<li class="services__item services__item_1">
						<svg class="services__item-icon services__item-icon_1"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/icon.svg#icon_resp-icon"></use></svg>
						<h3 class="services__item-title">Адаптивная верстка</h3>
						<div class="services__item-text">Делаю вертку адаптирующуюся под телефон, планшет или десктоп</div>
					</li>
					<li class="services__item services__item_2">
						<svg class="services__item-icon services__item-icon_2"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/icon.svg#icon_fix-icon"></use></svg>
						<h3 class="services__item-title">Фиксированная верстка</h3>
						<div class="services__item-text">Делаю вертку имеющую фиксированный размер</div>
					</li>
					<li class="services__item services__item_3">
						<svg class="services__item-icon services__item-icon_3"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/icon.svg#icon_temp-icon"></use></svg>
						<h3 class="services__item-title">Интеграция верстки в wordpress, битрикс</h3>
						<div class="services__item-text">Интегрирую сверстанный дизайн в cms wordpress или битрикс</div>
					</li>
					<li class="services__item services__item_4">
						<svg class="services__item-icon services__item-icon_3"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/icon.svg#icon_temp-icon"></use></svg>
						<h3 class="services__item-title">Доработка верстки</h3>
						<div class="services__item-text">Дорабатываю не доделанную верстку</div>
					</li>
				</ul>
			</div>
		</section>
		<!-- end services-->
		<!-- begin how-->
		<section id="section-2" class="how section">
			<div class="how__in">
				<h2 class="how__title">Как я работаю</h2>
				<ul class="how__list">
					<li data-number="1" class="how__item">
						<h3 class="how__item-title">Как верстаю</h3>
						<div class="how__text">
							<p>Кроссбраузерно, валидно, используя методологию БЭМ. В зависимости от требований делаю фиксированную, резиновую или
								адаптивную вёрстку</p>
						</div>
					</li>
					<li data-number="2" class="how__item">
						<h3 class="how__item-title">Используемые технологии</h3>
						<div class="how__text">
							<p>Html5, Css3, jQuery, Gulp, Pug, Jade, Stylus, Sass, Svg. Использую БЭМ</p>
						</div>
					</li>
					<li data-number="3" class="how__item">
						<h3 class="how__item-title">Как пойдёт работа</h3>
						<div class="how__text">
							<p>После согласования говорю точную цену, получаю предоплату и выполняю работу</p>
						</div>
					</li>
				</ul>
			</div>
		</section>
		<!-- end how-->
		<!-- begin recent-works-->
		<section class="recent-works section">
			<div class="recent-works__in">
				<h2 class="recent-works__title">Недавние работы</h2>
				<p class="recent-works__text">Несколько недавних работ</p>
				<ul class="recent-works__list">

				<?php
					$args = array(
						'post_type' => 'portfolio',
						'posts_per_page' => 4
					);

					$q = new WP_Query($args);;

				?>

				<?php while ( $q->have_posts()) : $q->the_post(); ?>

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


				</ul>
				<a href="/portfolio/" class="recent-works__button button">посмотреть еще</a>
			</div>
		</section>
		<!-- end recent-works-->
		<!-- begin call-to-action-->
		<section id="section-4" class="call-to-action section">
			<div class="call-to-action__in">
				<h2 class="call-to-action__title">Закажите верстку вашего дизайна</h2>
				<a href="mailto: gorlov35@gmail.com?subject=Заказать верстку" class="call-to-action__button button">напишите мне</a>
			</div>
		</section>
		<!-- end call-to-action-->


<?php get_footer(); ?>
