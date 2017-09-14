<?php // Register Custom Post Type
function medarbejdere() {

	$labels = array(
		'name'                  => _x( 'Medarbejdere', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Medarbejder', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Medarbejdere', 'text_domain' ),
		'name_admin_bar'        => __( 'Medarbejdere', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Medarbejder:', 'text_domain' ),
		'all_items'             => __( 'Alle Medarbejdere', 'text_domain' ),
		'add_new_item'          => __( 'Tilføj ny Medarbejder', 'text_domain' ),
		'add_new'               => __( 'Tilføj ny', 'text_domain' ),
		'new_item'              => __( 'Ny Medarbejder', 'text_domain' ),
		'edit_item'             => __( 'Rediger Medarbejder', 'text_domain' ),
		'update_item'           => __( 'Opdater Medarbejder', 'text_domain' ),
		'view_item'             => __( 'Se Medarbejder', 'text_domain' ),
		'search_items'          => __( 'Søg efter Medarbejder', 'text_domain' ),
		'not_found'             => __( 'Ikke fundet', 'text_domain' ),
		'not_found_in_trash'    => __( 'Ikke fundet i papirkurv', 'text_domain' ),
		'items_list'            => __( 'Medarbejder liste', 'text_domain' ),
		'items_list_navigation' => __( 'Medarbejder liste navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filtrer Medarbejder liste', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Medarbejder', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( ),
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
		'capability_type'       => 'page',
	);
	register_post_type( 'medarbejdere', $args );

}
add_action( 'init', 'medarbejdere', 0 ); ?>
