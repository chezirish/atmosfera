<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
		<!-- Yandex.Metrika counter -->
		<script type="text/javascript" >
			(function (d, w, c) {
				(w[c] = w[c] || []).push(function() {
					try {
						w.yaCounter48012926 = new Ya.Metrika({
							id:48012926,
							clickmap:true,
							trackLinks:true,
							accurateTrackBounce:true,
							webvisor:true
						});
					} catch(e) { }
				});

				var n = d.getElementsByTagName("script")[0],
					s = d.createElement("script"),
					f = function () { n.parentNode.insertBefore(s, n); };
				s.type = "text/javascript";
				s.async = true;
				s.src = "https://mc.yandex.ru/metrika/watch.js";

				if (w.opera == "[object Opera]") {
					d.addEventListener("DOMContentLoaded", f, false);
				} else { f(); }
			})(document, window, "yandex_metrika_callbacks");
		</script>
		<noscript><div><img src="https://mc.yandex.ru/watch/48012926" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
		<!-- /Yandex.Metrika counter -->
	</head>
	<body <?php body_class(); ?>>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>


	<header class="site-header" role="banner">
		<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle(); ?>>
			<!-- <div class="title-bar-left"> -->
				<button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
				<span class="site-mobile-title title-bar-title">
					<p><a href="<?php  echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php  bloginfo( 'name' ); ?></a></p>
					<!-- <span>Атмосфера</span> -->
				</span>
			<!-- </div> -->
		</div>

		<nav class="site-navigation top-bar" role="navigation">

			<!-- <div class="top-bar-left">
				<div class="site-desktop-title top-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</div>
			</div> -->
			<div class="wr">
				<div class="top-bar-left" id="header-nav">
					<?php foundationpress_top_bar_r(); ?>

					
					<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
						<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
					<?php endif; ?>
					<a href="https://beauty.dikidi.ru/profile/studiya_krasoty_atmosfera_74086/#create-record-by-widget-3297" class="button top-bar-button-sign">Запись онлайн</a>
				</div>
			</div>
		</nav>

		<?php if( !is_front_page() ) : ?>

			<section class="contacts__title">
				<div class="contacts__title-wrapper clearfix">
					<a href="/atmosfera"><img class="float-left" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/logo.png" alt="logo"></a>
					<h2 class="float-right"> <?php wp_title('');  ?> </h2>
				</div>
			</section>


			<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>

			<!-- <nav aria-label="You are here:" role="navigation">
			<ul class="breadcrumbs">
				<li><a href="<?php// echo esc_url( home_url( '/' ) ); ?>">Главная</a></li>
				<li>
				<span class="show-for-sr">Current: </span><?php// wp_title('');  ?>
				</li>
			</ul>
			</nav> -->

		<?php endif; ?>

	</header>
