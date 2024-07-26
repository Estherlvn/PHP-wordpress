<?php

function theme_enqueue_styles() {
    // Enqueue Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap', false);

    // Enqueue the main stylesheet
    wp_enqueue_style('style', get_stylesheet_uri());

    // Check if we are on the front page and enqueue front-page.css
    if ( is_front_page() ) {
        wp_enqueue_style('front-page', get_template_directory_uri() . '/front-page.css', array(), null);
    }

    // Check if we are on a single post page and enqueue single-post.css
    if ( is_single() ) {
        wp_enqueue_style('single-post', get_template_directory_uri() . '/single-post.css', array(), null);
    }
}

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

// WordPress title tag management
add_theme_support('title-tag');

// ########## MENUS ##########

// Enable menus feature
add_theme_support('menus');

// Define menus locations
register_nav_menus([
    'menu-principal'  => 'Navigation principale',
    'socialnetworks'  => 'Réseaux sociaux',
    'footerlegal'     => 'Informations légales (footer)'
]);

// PHP Code généré pour les champs ACF 

add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
	'key' => 'group_66869ad4689d4',
	'title' => 'Accueil',
	'fields' => array(
		array(
			'key' => 'field_66869ad51e9a6',
			'label' => 'Titre du header',
			'name' => 'home__header_title',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_66869ca33b036',
			'label' => 'Sous-titre du header',
			'name' => 'home__header_subtittle',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_66869cfb3b037',
			'label' => 'Image de fond',
			'name' => 'home__header_wallpaper',
			'aria-label' => '',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
			'preview_size' => 'medium',
		),
		array(
			'key' => 'field_6687a96613d58',
			'label' => 'Pour vos évènements',
			'name' => 'home__header_events',
			'aria-label' => '',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'table',
			'pagination' => 0,
			'min' => 0,
			'max' => 0,
			'collapsed' => '',
			'button_label' => 'Add Row',
			'rows_per_page' => 20,
			'sub_fields' => array(
				array(
					'key' => 'field_6687a99313d59',
					'label' => 'Celebration',
					'name' => 'name',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'parent_repeater' => 'field_6687a96613d58',
				),
				array(
					'key' => 'field_6687ab0013d5a',
					'label' => 'Picture',
					'name' => 'picture',
					'aria-label' => '',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
					'preview_size' => 'medium',
					'parent_repeater' => 'field_6687a96613d58',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_type',
				'operator' => '==',
				'value' => 'front_page',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'the_content',
	),
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );

	acf_add_local_field_group( array(
	'key' => 'group_6687f1ebccbe0',
	'title' => 'Artiste',
	'fields' => array(
		array(
			'key' => 'field_6687f1ecc5560',
			'label' => 'Illustration',
			'name' => 'illustration',
			'aria-label' => '',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
			'preview_size' => 'medium',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'taxonomy',
				'operator' => '==',
				'value' => 'artiste',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );

	acf_add_local_field_group( array(
	'key' => 'group_6687c8e67778f',
	'title' => 'Music Styles',
	'fields' => array(
		array(
			'key' => 'field_6687c8e6c25ba',
			'label' => 'Setlist',
			'name' => 'setlist',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'music-style',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );
} );

// Tous les types de publication Custom Post Type UI

function cptui_register_my_cpts() {

	/**
	 * Post Type: Music styles.
	 */

	$labels = [
		"name" => esc_html__( "Music styles", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Music style", "custom-post-type-ui" ),
		"menu_name" => esc_html__( "My Music styles", "custom-post-type-ui" ),
		"all_items" => esc_html__( "All Music styles", "custom-post-type-ui" ),
		"add_new" => esc_html__( "Add new", "custom-post-type-ui" ),
		"add_new_item" => esc_html__( "Add new Music style", "custom-post-type-ui" ),
		"edit_item" => esc_html__( "Edit Music style", "custom-post-type-ui" ),
		"new_item" => esc_html__( "New Music style", "custom-post-type-ui" ),
		"view_item" => esc_html__( "View Music style", "custom-post-type-ui" ),
		"view_items" => esc_html__( "View Music styles", "custom-post-type-ui" ),
		"search_items" => esc_html__( "Search Music styles", "custom-post-type-ui" ),
		"not_found" => esc_html__( "No Music styles found", "custom-post-type-ui" ),
		"not_found_in_trash" => esc_html__( "No Music styles found in trash", "custom-post-type-ui" ),
		"parent" => esc_html__( "Parent Music style:", "custom-post-type-ui" ),
		"featured_image" => esc_html__( "Featured image for this Music style", "custom-post-type-ui" ),
		"set_featured_image" => esc_html__( "Set featured image for this Music style", "custom-post-type-ui" ),
		"remove_featured_image" => esc_html__( "Remove featured image for this Music style", "custom-post-type-ui" ),
		"use_featured_image" => esc_html__( "Use as featured image for this Music style", "custom-post-type-ui" ),
		"archives" => esc_html__( "Music style archives", "custom-post-type-ui" ),
		"insert_into_item" => esc_html__( "Insert into Music style", "custom-post-type-ui" ),
		"uploaded_to_this_item" => esc_html__( "Upload to this Music style", "custom-post-type-ui" ),
		"filter_items_list" => esc_html__( "Filter Music styles list", "custom-post-type-ui" ),
		"items_list_navigation" => esc_html__( "Music styles list navigation", "custom-post-type-ui" ),
		"items_list" => esc_html__( "Music styles list", "custom-post-type-ui" ),
		"attributes" => esc_html__( "Music styles attributes", "custom-post-type-ui" ),
		"name_admin_bar" => esc_html__( "Music style", "custom-post-type-ui" ),
		"item_published" => esc_html__( "Music style published", "custom-post-type-ui" ),
		"item_published_privately" => esc_html__( "Music style published privately.", "custom-post-type-ui" ),
		"item_reverted_to_draft" => esc_html__( "Music style reverted to draft.", "custom-post-type-ui" ),
		"item_trashed" => esc_html__( "Music style trashed.", "custom-post-type-ui" ),
		"item_scheduled" => esc_html__( "Music style scheduled", "custom-post-type-ui" ),
		"item_updated" => esc_html__( "Music style updated.", "custom-post-type-ui" ),
		"parent_item_colon" => esc_html__( "Parent Music style:", "custom-post-type-ui" ),
	];

	$args = [
		"label" => esc_html__( "Music styles", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "music-style", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-format-audio",
		"supports" => [ "title" ],
		"show_in_graphql" => false,
	];

	register_post_type( "music-style", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );

// Music styles type de publication

function cptui_register_my_cpts_music_style() {

	/**
	 * Post Type: Music styles.
	 */

	$labels = [
		"name" => esc_html__( "Music styles", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Music style", "custom-post-type-ui" ),
		"menu_name" => esc_html__( "My Music styles", "custom-post-type-ui" ),
		"all_items" => esc_html__( "All Music styles", "custom-post-type-ui" ),
		"add_new" => esc_html__( "Add new", "custom-post-type-ui" ),
		"add_new_item" => esc_html__( "Add new Music style", "custom-post-type-ui" ),
		"edit_item" => esc_html__( "Edit Music style", "custom-post-type-ui" ),
		"new_item" => esc_html__( "New Music style", "custom-post-type-ui" ),
		"view_item" => esc_html__( "View Music style", "custom-post-type-ui" ),
		"view_items" => esc_html__( "View Music styles", "custom-post-type-ui" ),
		"search_items" => esc_html__( "Search Music styles", "custom-post-type-ui" ),
		"not_found" => esc_html__( "No Music styles found", "custom-post-type-ui" ),
		"not_found_in_trash" => esc_html__( "No Music styles found in trash", "custom-post-type-ui" ),
		"parent" => esc_html__( "Parent Music style:", "custom-post-type-ui" ),
		"featured_image" => esc_html__( "Featured image for this Music style", "custom-post-type-ui" ),
		"set_featured_image" => esc_html__( "Set featured image for this Music style", "custom-post-type-ui" ),
		"remove_featured_image" => esc_html__( "Remove featured image for this Music style", "custom-post-type-ui" ),
		"use_featured_image" => esc_html__( "Use as featured image for this Music style", "custom-post-type-ui" ),
		"archives" => esc_html__( "Music style archives", "custom-post-type-ui" ),
		"insert_into_item" => esc_html__( "Insert into Music style", "custom-post-type-ui" ),
		"uploaded_to_this_item" => esc_html__( "Upload to this Music style", "custom-post-type-ui" ),
		"filter_items_list" => esc_html__( "Filter Music styles list", "custom-post-type-ui" ),
		"items_list_navigation" => esc_html__( "Music styles list navigation", "custom-post-type-ui" ),
		"items_list" => esc_html__( "Music styles list", "custom-post-type-ui" ),
		"attributes" => esc_html__( "Music styles attributes", "custom-post-type-ui" ),
		"name_admin_bar" => esc_html__( "Music style", "custom-post-type-ui" ),
		"item_published" => esc_html__( "Music style published", "custom-post-type-ui" ),
		"item_published_privately" => esc_html__( "Music style published privately.", "custom-post-type-ui" ),
		"item_reverted_to_draft" => esc_html__( "Music style reverted to draft.", "custom-post-type-ui" ),
		"item_trashed" => esc_html__( "Music style trashed.", "custom-post-type-ui" ),
		"item_scheduled" => esc_html__( "Music style scheduled", "custom-post-type-ui" ),
		"item_updated" => esc_html__( "Music style updated.", "custom-post-type-ui" ),
		"parent_item_colon" => esc_html__( "Parent Music style:", "custom-post-type-ui" ),
	];

	$args = [
		"label" => esc_html__( "Music styles", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "music-style", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-format-audio",
		"supports" => [ "title" ],
		"show_in_graphql" => false,
	];

	register_post_type( "music-style", $args );
}

add_action( 'init', 'cptui_register_my_cpts_music_style' );

// Toutes les taxonomies de Custom Post Type UI

function cptui_register_my_taxes() {

	/**
	 * Taxonomy: artistes.
	 */

	$labels = [
		"name" => esc_html__( "artistes", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "artiste", "custom-post-type-ui" ),
	];

	
	$args = [
		"label" => esc_html__( "artistes", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'artiste', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "artiste",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "artiste", [ "music-style" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );

// Taxonomie artistes

function cptui_register_my_taxes_artiste() {

	/**
	 * Taxonomy: artistes.
	 */

	$labels = [
		"name" => esc_html__( "artistes", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "artiste", "custom-post-type-ui" ),
	];

	
	$args = [
		"label" => esc_html__( "artistes", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'artiste', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "artiste",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "artiste", [ "music-style" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_artiste' );



