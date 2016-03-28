<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...

// Register Custom Product Post Type
function register_product_post_type() {

	$labels = array(
		'name'                  => 'Products',
		'singular_name'         => 'Product',
		'menu_name'             => 'Product',
		'name_admin_bar'        => 'Product',
		'archives'              => 'Product Archives',
		'parent_item_colon'     => 'Parent Product:',
		'all_items'             => 'All Products',
		'add_new_item'          => 'Add New Product',
		'add_new'               => 'Add New',
		'new_item'              => 'New Product',
		'edit_item'             => 'Edit Product',
		'update_item'           => 'Update Product',
		'view_item'             => 'View Product',
		'search_items'          => 'Search Product',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into product',
		'uploaded_to_this_item' => 'Uploaded to this product',
		'items_list'            => 'Products list',
		'items_list_navigation' => 'Products list navigation',
		'filter_items_list'     => 'Filter products list',
	);
	$rewrite = array(
		'slug'                  => 'product',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => 'Product',
		'description'           => 'Products on the website',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-id',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'products',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
	);
	register_post_type( 'product', $args );

}
add_action( 'init', 'register_product_post_type', 0 );

// Register Custom Donation Post Type
function register_donation_post_type() {

	$labels = array(
		'name'                  => 'Donations',
		'singular_name'         => 'Donation',
		'menu_name'             => 'Donation',
		'name_admin_bar'        => 'Donation',
		'archives'              => 'Donation Archives',
		'parent_item_colon'     => 'Parent Donation:',
		'all_items'             => 'All Donations',
		'add_new_item'          => 'Add New Donation',
		'add_new'               => 'Add New',
		'new_item'              => 'New Donation',
		'edit_item'             => 'Edit Donation',
		'update_item'           => 'Update Donation',
		'view_item'             => 'View Donation',
		'search_items'          => 'Search Donation',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into donation',
		'uploaded_to_this_item' => 'Uploaded to this idonation',
		'items_list'            => 'Donations list',
		'items_list_navigation' => 'Donations list navigation',
		'filter_items_list'     => 'Filter donations list',
	);
	$rewrite = array(
		'slug'                  => 'donation',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => 'Donation',
		'description'           => 'Donations on the website.',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-id',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
	);
	register_post_type( 'donation', $args );

}
add_action( 'init', 'register_donation_post_type', 0 );
