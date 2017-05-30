<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package webjeb
 */
?>

<nav class="side-nav sidebar__block">
	<div class="sidebar__title">Категории</div>

	<?php wp_nav_menu( array(
		'theme_location' => 'menu-3',
		'menu_id' => '',
		'container' => '',
		'menu_class' => 'side-nav__list'


	) ); ?>


	<!-- <ul class="side-nav__list">
		<li class="side-nav__item">
			<a href="#link" class="side-nav__link">Html верстка</a>
		</li>
		<li class="side-nav__item">
			<a href="#link" class="side-nav__link">Cms Wordpress</a>
		</li>
		<li class="side-nav__item">
			<a href="#link" class="side-nav__link">СМS "1С- Битрикс: Управление сайтом"</a>
		</li>
	</ul> -->
</nav>


<?php
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		return;
	}
?>




<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
