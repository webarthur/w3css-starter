<?php

function w3css_comment_form_field_author_filter ($field) {
	global $w3css_theme_options;
	return str_replace('<input ', '<input class="' . $w3css_theme_options['comment_form_input_class'] . '" placeholder="' . __('Name') . '"', $field);
}
function w3css_comment_form_field_email_filter ($field) {
	global $w3css_theme_options;
	return str_replace('<input ', '<input class="' . $w3css_theme_options['comment_form_input_class'] . '" placeholder="' . __('Email') . '"', $field);
}
function w3css_comment_form_field_website_filter ($field) {
	global $w3css_theme_options;
	return str_replace('<input ', '<input class="' . $w3css_theme_options['comment_form_input_class'] . '" placeholder="' . __('Website') . '"', $field);
}
function w3css_comment_form_comment_filter ($field) {
	global $w3css_theme_options;
	return str_replace('<textarea ', '<textarea class="' . $w3css_theme_options['comment_form_input_class'] . '" placeholder="' . _x( 'Comment', 'noun' ) . '"', $field);
}
function w3css_comment_form_submit_filter ($field) {
	global $w3css_theme_options;
	return str_replace('class="submit', 'class="' . $w3css_theme_options['comment_form_submit_class'] . ' submit"', $field);
}
add_filter( 'comment_form_field_author', 'w3css_comment_form_field_author_filter' );
add_filter( 'comment_form_field_email', 'w3css_comment_form_field_email_filter' );
add_filter( 'comment_form_field_url', 'w3css_comment_form_field_website_filter' );
add_filter( 'comment_form_field_comment', 'w3css_comment_form_comment_filter' );
add_filter( 'comment_form_submit_button', 'w3css_comment_form_submit_filter' );
