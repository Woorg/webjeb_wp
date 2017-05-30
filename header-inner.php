<!DOCTYPE html>
<html lang="ru">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="imagetoolbar" content="no">
		<meta name="msthemecompatible" content="no">
		<meta name="cleartype" content="on">
		<meta name="HandheldFriendly" content="True">
		<meta name="format-detection" content="telephone=no">
		<meta name="format-detection" content="address=no">
		<script>
			document.getElementsByTagName('html')[0].className += ' js';

		</script>

		<?php wp_head(); ?>

	</head>

	<body <?php body_class('page page_inner'); ?>>

	<!-- begin header-->
	<header class="header is-inner">
		<div class="header__in">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header__logo logo" rel="home"><svg class="logo__icon"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/icon.svg#icon_logo-1"></use></svg>
			<?php bloginfo( 'name' ); ?></a>

			<nav class="header__nav nav ">
				<label for="nav-button" class="nav__button">
					<svg class="nav__icon"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/icon.svg#icon_menu-icon-8"></use></svg>
				</label>
				<input type="checkbox" id="nav-button" class="nav__trigger" />

				<?php wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id' => '',
						'container' => '',
						'menu_class' => 'nav__list'

				) ); ?>
			</nav>
			<div class="header__contacts h-contacts">
				<svg class="h-contacts__icon"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/icon.svg#icon_message-icon"></use></svg>
				<a href="skype:igor_gorlov" class="h-contacts__email">
					<span>skype:</span>igor_gorlov</a>
				<a href="mailto: gorlov35@gmail.com?subject=Заказать верстку" class="h-contacts__phone">
					<span>email:</span>gorlov35@gmail.com</a>
			</div>
		</div>
	</header>
	<!-- end header-->
