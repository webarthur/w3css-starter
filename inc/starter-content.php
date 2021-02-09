<?php
// Function to return the array of starter content for the theme
function w3css_get_starter_content() {

	// Define and register starter content to showcase the theme on new sites.
	$starter_content = array(

		// Specify the core-defined pages to create and add custom thumbnails to some of them.
		'posts'     => array(
			'front' => array(
				'post_type'    => 'page',
				'post_title'   => esc_html_x( 'Just an example page!', 'Theme starter content', 'w3css-starter' ),
				'post_content' => '
					<!-- wp:paragraph -->
					<p>Lorem ipsum <i>dolor sit amet</i>, consectetur adipiscing elit. Fusce eu tortor elit. Vestibulum ut felis ac justo tempor elementum at id magna. Aenean sed ex vel dolor dapibus rutrum ac condimentum erat. Nunc interdum ac quam nec mattis. Sed molestie ante sed augue ultricies placerat quis et magna. Curabitur et accumsan eros. In finibus in tellus at maximus.</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>Fusce ut justo id orci molestie <b>egestas</b>. Vestibulum tristique varius erat, ac commodo ligula porttitor non. Pellentesque sem arcu, bibendum eget vestibulum a, molestie sit amet quam. Etiam ultricies congue purus id malesuada. Nulla sodales ipsum in dictum ultricies.</p>
					<!-- /wp:paragraph -->

					<!-- wp:heading {"align":"wide"} -->
					<h2 class="alignwide has-text-align-wide has-gigantic-font-size" style="line-height:1.1">Lorem ipsum dolor sit amet</h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p>Lorem ipsum <i>dolor sit amet</i>, consectetur adipiscing elit. Fusce eu tortor elit. Vestibulum ut felis ac justo tempor elementum at id magna. Aenean sed ex vel dolor dapibus rutrum ac condimentum erat. Nunc interdum ac quam nec mattis. Sed molestie ante sed augue ultricies placerat quis et magna. Curabitur et accumsan eros. In finibus in tellus at maximus.</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>Fusce ut justo id orci molestie <b>egestas</b>. Vestibulum tristique varius erat, ac commodo ligula porttitor non. Pellentesque sem arcu, bibendum eget vestibulum a, molestie sit amet quam. Etiam ultricies congue purus id malesuada. Nulla sodales ipsum in dictum ultricies.</p>
					<!-- /wp:paragraph -->',
			),
			'about',
			'contact',
			'blog',
		),

		// Default to a static front page and assign the front and posts pages.
		'options'   => array(
			'show_on_front'  => 'page',
			'page_on_front'  => '{{front}}',
			'page_for_posts' => '{{blog}}',
		),

		// Set up nav menus for each of the two areas registered in the theme.
		'nav_menus' => array(
			// Assign a menu to the "primary" location.
			'primary' => array(
				'name'  => esc_html__( 'Primary Menu', 'w3css-starter' ),
				'items' => array(
					'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
					'page_about',
					'page_blog',
					'page_contact',
				),
			),

		),

		'widgets' => array(
			'primary-widget-area' => array(
				'search',
				'recent-posts',
				'recent-comments',
			),
			'footer-widget-area' => array(
				'archives',
				'categories',
				'meta',
			),
		),

	);

	return apply_filters( 'w3css_starter_content', $starter_content );
}
