<?php
function w3css_setup() {
	load_theme_textdomain( 'w3css', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Enable support for Post Thumbnails on posts and pages. Default: 150x150
	add_theme_support( 'post-thumbnails' );
	// set_post_thumbnail_size( 150, 150 );

	// Switch default core markup for search form, comment form, and comments
	add_theme_support(
		'html5',
		array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
			'navigation-widgets',
		)
	);

	// Add support for core custom logo
	$logo_width  = 300;
	$logo_height = 100;

	add_theme_support(
		'custom-logo',
		array(
			'height'               => $logo_height,
			'width'                => $logo_width,
			'flex-width'           => true,
			'flex-height'          => true,
			'unlink-homepage-logo' => true,
		)
	);

	// T21
	// Add post-formats support
	add_theme_support(
		'post-formats',
		array(
			'link',
			'aside',
			'gallery',
			'image',
			'quote',
			'status',
			'video',
			'audio',
			'chat',
		)
	);

	global $content_width;
	if ( ! isset( $content_width ) ) { $content_width = 1920; }

	// T21
	register_nav_menus(
		array(
			// 'main-menu' => esc_html__( 'Main Menu', 'w3css' ),
			'primary' => esc_html__( 'Primary Menu', 'w3css' ),
			'footer'  => __( 'Secondary Menu', 'w3css' ),
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );

	// Add support for custom line height controls.
	add_theme_support( 'custom-line-height' );

	// Add support for experimental link color control.
	add_theme_support( 'experimental-link-color' );

	// Add support for experimental cover block spacing.
	add_theme_support( 'custom-spacing' );

	// Add support for custom units.
	// This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
	add_theme_support( 'custom-units' );

	if ( is_customize_preview() ) {
		require get_template_directory() . '/inc/starter-content.php';
		add_theme_support( 'starter-content', w3css_get_starter_content() );
	}

	// Custom background color.
	// add_theme_support(
	// 	'custom-background',
	// 	array(
	// 		'default-color' => 'd1e4dd',
	// 	)
	// );


	// Add support for editor styles.
	// add_theme_support( 'editor-styles' );

	// add_editor_style( $editor_stylesheet_path );

	// Add custom editor font sizes.
	// add_theme_support(
	// 	'editor-font-sizes',
	// 	array(
	// 		array(
	// 			'name'      => esc_html__( 'Extra small', 'w3css' ),
	// 			'shortName' => esc_html_x( 'XS', 'Font size', 'w3css' ),
	// 			'size'      => 16,
	// 			'slug'      => 'extra-small',
	// 		)
	// 	)
	// );

	// Custom background color.
	// add_theme_support(
	// 	'custom-background',
	// 	array(
	// 		'default-color' => 'd1e4dd',
	// 	)
	// );

	// Add editor color palette
	// $green     = '#D1E4DD';
	// $blue      = '#D1DFE4';
	// add_theme_support(
	// 	'editor-color-palette',
	// 	array(
	// 		array(
	// 			'name'  => esc_html__( 'Blue', 'w3css' ),
	// 			'slug'  => 'blue',
	// 			'color' => $blue,
	// 		)
	// 	)
	// );

	// Add editor gradients
	// add_theme_support(
	// 	'editor-gradient-presets',
	// 	array(
	// 		array(
	// 			'name'     => esc_html__( 'Purple to yellow', 'w3css' ),
	// 			'gradient' => 'linear-gradient(160deg, ' . $green . ' 0%, ' . $blue . ' 100%)',
	// 			'slug'     => 'purple-to-yellow',
	// 		)
	// 	)
	// );

}
add_action( 'after_setup_theme', 'w3css_setup' );

?>
