<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>
<body <?php body_class('w3-light-grey'); ?>>
	<?php wp_body_open(); ?>
	<div id="wrapper" class="hfeed">

		<!-- <header id="header" class="w3-top"> -->
		<header id="header" class="<?php w3css_block_class('header', 'w3-white w3-card') ?>" role="banner">
		  <div class="w3-bar">

				<!-- Mobile Menu Button -->
		    <a id="mobiletoggle" class="<?php w3css_block_class('mobile_menu_button', 'w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right') ?>" href="javascript:void(0)" onclick="document.getElementById('mobilemenu').classList.toggle('w3-show')" title="Toggle Navigation Menu">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="mdi-menu" width="24" height="24" viewBox="0 0 24 24"><path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" /></svg>
				</a>

				<div id="branding" class="<?php w3css_block_class('branding', 'w3-bar-item') ?>">

					<!-- Custom logo -->
					<?php if ( has_custom_logo() ) : ?>
						<div class="site-logo"><?php the_custom_logo(); ?></div>
					<?php endif; ?>

					<!-- Lext logo -->
					<?php if ( get_theme_mod( 'display_title_and_tagline', true ) === true ) : ?>
						<div id="site-title">
							<h1 class="w3-xlarge w3-margin-0">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
							</h1>
						</div>
					<?php endif; ?>

				</div>

				<?php if ( has_nav_menu( 'primary' ) ) : ?>

					<!-- Large Screen Menu -->
					<nav id="menu" class="<?php w3css_block_class('primary_menu', 'w3-right w3-hide-small') ?>" role="navigation">
						<?php wp_nav_menu( array(
							'theme_location'  => 'primary',
							'items_wrap'      => '<ul id="%1$s" class="w3-bar w3-bar-item %2$s">%3$s</ul>',
							'add_items_class' => '',
							'container'       => false
						) ); ?>
					</nav>

					<!-- Mobile Menu -->
					<nav id="mobilemenu" class="<?php w3css_block_class('mobile_menu', 'w3-hide w3-hide-large w3-hide-medium') ?>" role="navigation">
						<?php wp_nav_menu( array(
							'theme_location'  => 'primary',
							'items_wrap'      => '<ul id="%1$s-mobile" class="w3-bar-block %2$s">%3$s</ul>',
							'container'       => false
						) ); ?>
					</nav>

				<?php endif; ?>

		  </div>
		</header>

		<div id="container" class="<?php w3css_block_class('container', 'w3-margin-top') ?>">
