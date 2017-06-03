<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package webjeb
 */

?>

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
		<style type="text/css">
			.visuallyhidden{border:0;clip:rect(0 0 0 0);-webkit-clip-path:inset(50%);clip-path:inset(50%);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap} *{margin:0;padding:0;font:inherit;box-sizing:border-box}article,aside,details,figcaption,figure,footer,header,hgroup,main,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;-webkit-tap-highlight-color:rgba(0,0,0,0);-webkit-focus-ring-color:hsla(0,0%,100%,0);cursor:default}body{font-size:100%;line-height:1;-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased}a{background:transparent}:active,:focus,:hover{outline:none}hr{box-sizing:content-box;height:0}ol,ul{list-style:none}pre{-moz-tab-size:4;-o-tab-size:4;tab-size:4;white-space:pre-wrap}q{quotes:"\201C" "\201D" "\2018" "\2019"}img{border:none}svg:not(:root){overflow:hidden}button,input{line-height:normal}button,select{text-transform:none}button{overflow:visible}button,html input[type=button],input[type=reset],input[type=submit]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}input[type=checkbox],input[type=radio]{box-sizing:border-box}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-appearance:textfield;box-sizing:content-box}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}button::-moz-focus-inner,input::-moz-focus-inner{border:none;padding:0}textarea{overflow:auto;vertical-align:top}button,input,select[multiple],textarea{background-image:none}input,select,textarea{border-radius:0;box-shadow:none}input,textarea{resize:none;-webkit-user-select:text;-moz-user-select:text;-ms-user-select:text;user-select:text}[placeholder]:focus::-webkit-input-placeholder{color:transparent}[placeholder]:focus:-ms-input-placeholder{color:transparent}[placeholder]:focus::placeholder{color:transparent}table{border-collapse:collapse;border-spacing:0}.page{font-family:AvenirNextCyr-Thin,arial,sans-serif;font-size:16px;color:#212121;transition:font-size .3s ease}.page_inner{padding-top:62px}.header__in,.in{margin:auto;padding-left:15px;padding-right:15px;max-width:1170px;min-width:320px}body,html{height:100%}.main{min-height:100%}* html .main{height:100%}.page__buffer{clear:both}a:link{text-decoration:none}.title-h1{font-family:AvenirNextCyr-Thin,arial,sans-serif;font-size:62px;line-height:72px;transition:all .2s ease}.title-h2{font-family:AvenirNextCyr-Thin,arial,sans-serif;font-size:42px;line-height:52px;transition:all .2s ease}.title-h3{text-transform:uppercase;letter-spacing:.15em}.title-h3,.title-h4{font-family:AvenirNextCyr-Light,arial,sans-serif;font-size:16px;line-height:32px;transition:all .2s ease}.title-h4{text-transform:lowercase}.title-404{margin-bottom:30px}.button{border:1px solid #fff;display:inline-block;vertical-align:top;background:transparent;color:#fff;font-size:12px;line-height:1;text-decoration:none;text-transform:uppercase;letter-spacing:.15em;border-radius:3px;transition:all .2s ease;opacity:1;will-change:all}.button:hover{opacity:.95}.button_mid,.header__button{padding:16px 20px;font-family:AvenirNextCyr-Light,arial,sans-serif}.button_big{padding:26px 35px;font-family:AvenirNextCyr-Bold,arial,sans-serif}.button_black{padding:20px 50px;font-family:AvenirNextCyr-Light,arial,sans-serif;color:#fff;background:#212121}.button_white{padding:25px 50px;font-family:AvenirNextCyr-Light,arial,sans-serif}.button_invert,.button_white{background:#fff;color:#212121}.button_white-invert{border:1px solid #212121;background:#212121;color:#fff}.button_small{padding:13px 20px 15px;font-family:AvenirNextCyr-Light,arial,sans-serif;color:#212121;background:#fff;border-radius:3px;transition:all .2s ease}.button_small:hover{color:#fff;background:#212121}.header__nav,.transition{transition:all .2s ease}.header__button,.header__logo,.header__nav,.ib{display:inline-block;vertical-align:top}.underline{position:relative}.underline:after{position:absolute;top:100%;left:50%;right:50%;height:1px;background:#fff;content:"";transition:all .2s ease}.underline:hover:after{left:0;right:0}.selector{border:1px solid #dededf;padding:11px 18px 9px;display:block;color:#222328;font-family:AvenirNextCyr-Light,arial,sans-serif;font-size:11px;text-transform:uppercase;text-decoration:none;border-radius:20px;letter-spacing:.15em}.selector:hover{border-color:#141414;background:#141414;color:#fff}.selector-clean{padding:11px 18px 9px;display:block;color:#222328;font-family:AvenirNextCyr-Light,arial,sans-serif;font-size:11px;text-transform:uppercase;text-decoration:none;border-radius:20px;letter-spacing:.15em}.selector-clean:hover{background:#141414;color:#fff}section.section.fade-in{opacity:1;visibility:visible;transition:all .3s linear}.wysiwyg h1,.wysiwyg h2,.wysiwyg h3,.wysiwyg h4,.wysiwyg h5,.wysiwyg h6{margin-bottom:40px;font-family:AvenirNextCyr-Thin,arial,sans-serif;line-height:1.4;letter-spacing:.15em}.wysiwyg h1{font-size:42px}.wysiwyg h2{position:relative;margin-bottom:30px;font-size:35px;letter-spacing:0}.wysiwyg h3{font-size:28px;letter-spacing:0}.wysiwyg h4{font-size:23px;letter-spacing:0}.wysiwyg h5{font-size:19px;letter-spacing:0}.wysiwyg p{margin-bottom:25px;font-family:AvenirNextCyr-Light,arial,sans-serif;font-size:18px;font-weight:200;line-height:1.56;text-align:left;color:#212121}.wysiwyg pre{margin-bottom:40px;padding-bottom:25px}.wysiwyg em{font-family:AvenirNextCyr-Medium,arial,sans-serif}.wysiwyg a{border-bottom:1px solid #b6deff;color:#01579b;line-height:1.56;transition:all .2s ease}.wysiwyg a:hover{border-bottom:1px solid transparent}.wysiwyg ol,.wysiwyg ul{margin-bottom:40px}.wysiwyg li{margin-bottom:15px}.header{position:fixed;z-index:2;top:0;left:0;width:100%;background:#0f0f11;will-change:transform}.header__in{position:relative;padding-top:10px;padding-bottom:20px;font-size:0;zoom:1}.header__in:after,.header__in:before{content:"";display:table}.header__in:after{clear:both}.is-inner{background:#212121}.is-fixed{position:fixed;-webkit-animation:.4s a .3s ease both;animation:.4s a .3s ease both}.is-static{-webkit-animation:.2s b .3s ease both;animation:.2s b .3s ease both}.is-inverted{border-bottom:1px solid rgba(0,0,0,.1);background:hsla(0,0%,100%,.97)}.is-inverted .h-contacts__icon,.is-inverted .nav__icon{fill:#212121}.is-inverted .h-contacts__email,.is-inverted .h-contacts__phone,.is-inverted .nav__item a{color:#212121}.is-inverted .h-contacts__email:after,.is-inverted .h-contacts__phone:after,.is-inverted .nav__item a:after{background:#212121}.is-inverted .logo{color:#212121} .is-hide{display:none}.is-show{display:block}.header__logo{margin-top:14px}.header__nav{margin-left:218px;margin-left:19.12280701754386%;margin-top:14px}.header__button{float:right}.header__contacts{position:absolute;top:14px;right:15px}@-webkit-keyframes a{0%{-webkit-transform:translateY(-100px);transform:translateY(-100px)}90%{-webkit-transform:translateY(1px);transform:translateY(1px)}to{-webkit-transform:translateY(0);transform:translateY(0)}}@keyframes a{0%{-webkit-transform:translateY(-100px);transform:translateY(-100px)}90%{-webkit-transform:translateY(1px);transform:translateY(1px)}to{-webkit-transform:translateY(0);transform:translateY(0)}}@-webkit-keyframes b{0%{-webkit-transform:translateY(-40px);transform:translateY(-40px)}90%{-webkit-transform:translateY(1px);transform:translateY(1px)}to{-webkit-transform:translate(0);transform:translate(0)}}@keyframes b{0%{-webkit-transform:translateY(-40px);transform:translateY(-40px)}90%{-webkit-transform:translateY(1px);transform:translateY(1px)}to{-webkit-transform:translate(0);transform:translate(0)}}@media only screen and (max-width:48rem){.title-h1{font-size:42px;line-height:60px}.title-h2{font-size:35px}.header__in{padding-top:10px;padding-bottom:20px}.is-inverted .nav__item a:after{background:#fff}.header__logo{margin-right:10px}.header__nav{margin-left:0}}@media only screen and (max-width:442px){.title-h1{font-size:32px;line-height:50px}.header__contacts{position:relative;top:0;right:auto;margin-top:20px}}@media (-webkit-min-device-pixel-ratio:2),(min-resolution:192dpi){}}

		</style>
		<script>
			// document.getElementsByTagName('html')[0].className += ' js';
		</script>

		<?php wp_head(); ?>
	</head>

	<body <?php body_class('page'); ?>>
		<!-- begin header-->
		<header class="header">
			<div class="header__in">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header__logo logo" rel="home"><svg class="logo__icon"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/icon.svg#icon_logo-1"></use></svg>
				<?php bloginfo( 'name' ); ?></a>


				<nav class="header__nav nav">
					<label for="nav-button" class="nav__button">
						<svg class="nav__icon nav__icon_open nav__icon_show"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/icon.svg#icon_menu-icon-8"></use></svg>
						<svg class="nav__icon nav__icon_close "><use xlink:href="<?php  echo get_template_directory_uri(); ?>/assets/images/icon.svg#icon_close-icon-1"></use></svg>
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

