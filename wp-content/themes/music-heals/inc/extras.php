<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

function lrb_archive_title($title) {
	if (is_post_type_archive(array('product'))) {
		$title = 'Merch';
	} elseif (is_tax('product-type')) {
		$title = single_term_title('', false);
	}
	return $title;
}
add_filter('get_the_archive_title', 'lrb_archive_title');
