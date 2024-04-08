<?php

/**
 * Plugin Name: CTA Leads
 * Description: That plugin contains cta leads.
 */
// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Leads', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Lead', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Leads', 'text_domain' ),
		'name_admin_bar'        => __( 'Lead', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Lead', 'text_domain' ),
		'description'           => __( 'cta leads', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
        'menu_icon'             => 'dashicons-businessperson',
	);
	register_post_type('lead', $args );

}
add_action( 'init', 'custom_post_type', 0 );

// Add the custom columns to the book post type:
add_filter( 'manage_lead_posts_columns', 'set_custom_edit_lead_columns' );
function set_custom_edit_lead_columns($columns) {
	$columns['name'] = __('Name', 'your_text_domain');
    $columns['email'] = __('Email', 'your_text_domain');
    $columns['message'] = __('Message', 'your_text_domain');
    $columns['phone_number'] = __('Phone Number', 'your_text_domain');
    $columns['utm_source'] = __('UTM Source', 'your_text_domain');
    $columns['utm_medium'] = __('UTM Medium', 'your_text_domain');
    $columns['utm_campaign'] = __('UTM Campaign', 'your_text_domain');
    $columns['utm_keyword'] = __('UTM Keyword', 'your_text_domain');
    $columns['utm_content'] = __('UTM Content', 'your_text_domain');
    $columns['tracking-info'] = __('Tracking Info', 'your_text_domain');

    return $columns;
}

// Add the data to the custom columns for the book post type:
	function custom_lead_column( $column, $post_id ) {
		write_log("custom_lead_column email");
		write_log(print_r($post_id, 1));
		write_log(print_r(get_post_meta($post_id, 'email', true), 1));
		switch ( $column ) {
			case 'name' :
				$terms = get_post_meta($post_id , 'name', true );
				write_log("name");
		        write_log(print_r($terms, 1));
				echo $terms;
				break;
	
			case 'email' :
				$terms = get_post_meta( $post_id , 'email', true );
				echo $terms;
				break;
	
			case 'message' :
				$terms = get_post_meta( $post_id , 'message', true );
				echo $terms;
				break;
	
			case 'phone_number' :
				$terms = get_post_meta( $post_id , 'phone_number', true );
				echo $terms;
				break;
	
			case 'utm_source' :
				$terms = get_post_meta( $post_id , 'utm_source', true );
				echo $terms;
				break;
	
			case 'utm_medium' :
				$terms = get_post_meta( $post_id , 'utm_medium', true );
				echo $terms;
				break;
	
			case 'utm_campaign' :
				$terms = get_post_meta( $post_id , 'utm_campaign', true );
				echo $terms;
				break;
	
			case 'utm_keyword' :
				$terms = get_post_meta( $post_id , 'utm_keyword', true );
				echo $terms;
				break;
	
			case 'utm_content' :
				$terms = get_post_meta( $post_id , 'utm_content', true );
				echo $terms;
				break;
	
			case 'tracking-info' :
				$terms = get_post_meta( $post_id , 'tracking-info', true );
				echo $terms;
				break;
		}
	}
	add_action( 'manage_lead_posts_custom_column' , 'custom_lead_column', 10, 2 );
	