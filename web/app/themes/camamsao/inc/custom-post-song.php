<?php

// Register Taxonomy Genre
// Taxonomy Key: genre
function create_genre_tax() {

	$labels = array(
		'name'              => _x( 'Genres', 'taxonomy general name', 'camamsao' ),
		'singular_name'     => _x( 'Genre', 'taxonomy singular name', 'camamsao' ),
		'search_items'      => __( 'Search genres', 'camamsao' ),
		'all_items'         => __( 'All genres', 'camamsao' ),
		'parent_item'       => __( 'Parent Genre', 'camamsao' ),
		'parent_item_colon' => __( 'Parent Genre:', 'camamsao' ),
		'edit_item'         => __( 'Edit Genre', 'camamsao' ),
		'update_item'       => __( 'Update Genre', 'camamsao' ),
		'add_new_item'      => __( 'Add New Genre', 'camamsao' ),
		'new_item_name'     => __( 'New Genre Name', 'camamsao' ),
		'menu_name'         => __( 'Genre', 'camamsao' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'The loai bai hat, ca khuc', 'camamsao' ),
		'hierarchical' => false,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_in_rest' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => true,
	);
	register_taxonomy( 'genre', array('song', ), $args );

}
add_action( 'init', 'create_genre_tax' );

// Register Custom Post Type Song
// Post Type Key: song
function create_song_cpt() {

	$labels = array(
		'name' => __( 'Songs', 'Post Type General Name', 'camamsao' ),
		'singular_name' => __( 'Song', 'Post Type Singular Name', 'camamsao' ),
		'menu_name' => __( 'Songs', 'camamsao' ),
		'name_admin_bar' => __( 'Song', 'camamsao' ),
		'archives' => __( 'Song Archives', 'camamsao' ),
		'attributes' => __( 'Song Attributes', 'camamsao' ),
		'parent_item_colon' => __( 'Parent Song:', 'camamsao' ),
		'all_items' => __( 'All Songs', 'camamsao' ),
		'add_new_item' => __( 'Add New Song', 'camamsao' ),
		'add_new' => __( 'Add New', 'camamsao' ),
		'new_item' => __( 'New Song', 'camamsao' ),
		'edit_item' => __( 'Edit Song', 'camamsao' ),
		'update_item' => __( 'Update Song', 'camamsao' ),
		'view_item' => __( 'View Song', 'camamsao' ),
		'view_items' => __( 'View Songs', 'camamsao' ),
		'search_items' => __( 'Search Song', 'camamsao' ),
		'not_found' => __( 'Not found', 'camamsao' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'camamsao' ),
		'featured_image' => __( 'Featured Image', 'camamsao' ),
		'set_featured_image' => __( 'Set featured image', 'camamsao' ),
		'remove_featured_image' => __( 'Remove featured image', 'camamsao' ),
		'use_featured_image' => __( 'Use as featured image', 'camamsao' ),
		'insert_into_item' => __( 'Insert into Song', 'camamsao' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Song', 'camamsao' ),
		'items_list' => __( 'Songs list', 'camamsao' ),
		'items_list_navigation' => __( 'Songs list navigation', 'camamsao' ),
		'filter_items_list' => __( 'Filter Songs list', 'camamsao' ),
	);
	$args = array(
		'label' => __( 'Song', 'camamsao' ),
		'description' => __( 'Bai hat, ca khuc', 'camamsao' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-portfolio',
		'supports' => array('title', ),
		'taxonomies' => array('genre', ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
        'capability_type' => 'post',
        'rewrite' => array('slug' => __('bai-hat', 'camamsao'))
	);
	register_post_type( 'song', $args );

}
add_action( 'init', 'create_song_cpt', 0 );