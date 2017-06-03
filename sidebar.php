<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package webjeb
 */
?>

<div class="sidebar__w">

	<nav class="side-nav sidebar__block">
		<div class="sidebar__title">Категории</div>

		<?php wp_nav_menu( array(
			'theme_location' => 'menu-3',
			'menu_id' => '',
			'container' => '',
			'menu_class' => 'side-nav__list'


		) ); ?>


	</nav>

	<div class="sidebar__block">

	</div>


	<?php
		if ( ! is_active_sidebar( 'sidebar-1' ) ) {
			return;
		}
	?>


</div>
