<?php
include get_template_directory() . '/inc/theme-setup.php';

function w3css_sanitize_checkbox ($checked = null) {
	return (bool) isset( $checked ) && true === $checked;
}
function w3css_customize_register ($wp_customize) {
	// Add "display_title_and_tagline" setting for displaying the site-title & tagline.
	$wp_customize->add_setting(
		'display_title_and_tagline',
		array(
			'capability'        => 'edit_theme_options',
			'default'           => true,
			'sanitize_callback' => 'w3css_sanitize_checkbox',
		)
	);

	// Add control for the "display_title_and_tagline" setting.
	$wp_customize->add_control(
		'display_title_and_tagline',
		array(
			'type'    => 'checkbox',
			'section' => 'title_tagline',
			'label'   => esc_html__( 'Display Site Title & Tagline', 'w3css-starter' ),
		)
	);

}
add_action( 'customize_register', 'w3css_customize_register' );

function w3css_load_scripts() {
	wp_enqueue_style( 'w3css-style', get_template_directory_uri() . '/css/w3.css' );
	wp_enqueue_style( 'site-style', get_stylesheet_uri() );
	wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'w3css_load_scripts' );

function w3css_document_title_separator( $sep ) {
	$sep = '|';
	return $sep;
}
add_filter( 'document_title_separator', 'w3css_document_title_separator' );

function w3css_title( $title ) {
	return $title === '' ?  '...' : $title;
}
add_filter( 'the_title', 'w3css_title' );

function w3css_read_more_link() {
	if ( ! is_admin() ) {
		return ' <a href="' . esc_url( get_permalink() ) . '" class="more-link">...</a>';
	}
}
add_filter( 'the_content_more_link', 'w3css_read_more_link' );

function w3css_excerpt_read_more_link( $more ) {
	if ( ! is_admin() ) {
		global $post;
		return ' <a href="' . esc_url( get_permalink( $post->ID ) ) . '" class="more-link">...</a>';
	}
}
add_filter( 'excerpt_more', 'w3css_excerpt_read_more_link' );

function w3css_image_insert_override( $sizes ) {
	unset( $sizes['medium_large'] );
	return $sizes;
}
add_filter( 'intermediate_image_sizes_advanced', 'w3css_image_insert_override' );

function w3css_widgets_init() {
	register_sidebar( array(
		'name' => esc_html__( 'Sidebar Widget Area', 'w3css-starter' ),
		'id' => 'primary-widget-area',
		'before_widget' => '<div id="%1$s" class="widget-container w3-padding-large w3-padding-16 w3-white w3-margin-bottom w3-card %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => esc_html__( 'Footer Widget Area', 'w3css-starter' ),
		'id' => 'footer-widget-area',
		'before_widget' => '<div id="%1$s" class="w3-col w3-padding widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title w3-medium"><b>',
		'after_title' => '</b></h3>',
	) );
}
add_action( 'widgets_init', 'w3css_widgets_init' );

function w3css_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s" />' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'w3css_pingback_header' );

function w3css_enqueue_comment_reply_script() {
	if ( get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'comment_form_before', 'w3css_enqueue_comment_reply_script' );
function w3css_custom_pings( $comment ) {
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
	<?php
}
function w3css_comment_count( $count ) {
	if ( ! is_admin() ) {
		global $id;
		$get_comments = get_comments( 'status=approve&post_id=' . $id );
		$comments_by_type = separate_comments( $get_comments );
		return count( $comments_by_type['comment'] );
	} else {
		return $count;
	}
}
add_filter( 'get_comments_number', 'w3css_comment_count', 0 );

function w3css_add_attachment_class ($attr) {
  $attr['class'] = 'w3-image ' . $attr['class'];
  return $attr;
}
add_filter('wp_get_attachment_image_attributes','w3css_add_attachment_class');

// TOP NAV MENU
function w3css_nav_menu_submenu_css_class_filter ($classes, $args) {
	if ($args->theme_location === 'primary') {
		$classes []= 'w3-dropdown-content w3-bar-block w3-card';
	}
	else {
		$classes []= 'w3-margin-left';
	}
	return $classes;
}
add_filter('nav_menu_submenu_css_class', 'w3css_nav_menu_submenu_css_class_filter', 10, 2);

function w3css_nav_menu_css_class_filter ($classes, $item, $args, $depth) {
	if ($args->theme_location === 'primary') {
		$classes []= 'w3-bar-item';
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'w3css_nav_menu_css_class_filter', 10, 4);

function w3css_nav_menu_link_attributes_filter ($atts, $item, $args) {
	if ($args->theme_location === 'primary') {
		$atts['class'] = 'w3-button';
	}
	return $atts;
}
add_filter('nav_menu_link_attributes', 'w3css_nav_menu_link_attributes_filter', 10, 3);

// From: https://stackoverflow.com/questions/8448978/wordpress-how-do-i-know-if-a-menu-item-has-children
function menu_set_dropdown( $sorted_menu_items, $args ) {
	if ($args->theme_location === 'primary') {
		$last_top = 0;
		foreach ( $sorted_menu_items as $key => $obj ) {
			// it is a top lv item?
			if ( 0 == $obj->menu_item_parent ) {
				// set the key of the parent
				$last_top = $key;
			} else {
				$sorted_menu_items[$last_top]->classes['w3-dropdown-hover'] = 'w3-dropdown-hover';
			}
		}
	}
	return $sorted_menu_items;
}
add_filter( 'wp_nav_menu_objects', 'menu_set_dropdown', 10, 2 );

add_action( 'wp_footer', 'w3css_footer_scripts' );
function w3css_footer_scripts() {
	?>
	<script>
	(function (agent) {
		var bodyClass = ''
		if (agent.match(/(iphone|ipod|ipad)/)) {
			bodyClass = 'ios mobile'
		}
		if (agent.search('msie') >= 0) {
			bodyClass = 'ie'
		}
		else if (agent.search('chrome') >= 0) {
			bodyClass = 'chrome'
		}
		else if (agent.search('firefox') >= 0) {
			bodyClass = 'firefox'
		}
		else if (agent.search('safari') >= 0 && agent.search('chrome') < 0) {
			bodyClass = 'safari'
		}
		else if (agent.search('opera') >= 0) {
			bodyClass = 'opera'
		}

		if (bodyClass !== '') {
			document.body.classList.add(bodyClass)
		}
	})(navigator.userAgent.toLowerCase())
	</script>
	<?php
}

// Shim for wp_body_open, ensuring backward compatibility with versions of WordPress older than 5.2.
if ( ! function_exists( 'wp_body_open' ) ) {
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}
