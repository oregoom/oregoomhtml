<?php

if ( ! function_exists('oregoom_course_post_type') ) {

    // Register Custom Post Type
    function oregoom_course_post_type() {

        $labels = array(
            'name'                  => _x( 'Cursos', 'Post Type General Name', 'oregoom_course' ),
            'singular_name'         => _x( 'Curso', 'Post Type Singular Name', 'oregoom_course' ),
            'menu_name'             => __( 'Curso', 'oregoom_course' ),
            'name_admin_bar'        => __( 'Curso', 'oregoom_course' ),
            'archives'              => __( 'Item Archives', 'oregoom_course' ),
            'attributes'            => __( 'Item Attributes', 'oregoom_course' ),
            'parent_item_colon'     => __( 'Parent Curso:', 'oregoom_course' ),
            'all_items'             => __( 'Todos los cursos', 'oregoom_course' ),
            'add_new_item'          => __( 'Add New Curso', 'oregoom_course' ),
            'add_new'               => __( 'Añadir nuevo', 'oregoom_course' ),
            'new_item'              => __( 'New Curso', 'oregoom_course' ),
            'edit_item'             => __( 'Edit Curso', 'oregoom_course' ),
            'update_item'           => __( 'Update Curso', 'oregoom_course' ),
            'view_item'             => __( 'View Curso', 'oregoom_course' ),
            'view_items'            => __( 'View Cursos', 'oregoom_course' ),
            'search_items'          => __( 'Search Curso', 'oregoom_course' ),
            'not_found'             => __( 'Not found', 'oregoom_course' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'oregoom_course' ),
            'featured_image'        => __( 'Featured Image', 'oregoom_course' ),
            'set_featured_image'    => __( 'Set featured image', 'oregoom_course' ),
            'remove_featured_image' => __( 'Remove featured image', 'oregoom_course' ),
            'use_featured_image'    => __( 'Use as featured image', 'oregoom_course' ),
            'insert_into_item'      => __( 'Insert into item', 'oregoom_course' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'oregoom_course' ),
            'items_list'            => __( 'Items list', 'oregoom_course' ),
            'items_list_navigation' => __( 'Items list navigation', 'oregoom_course' ),
            'filter_items_list'     => __( 'Filter items list', 'oregoom_course' ),
        );
        $args = array(
            'label'                 => __( 'Curso', 'oregoom_course' ),
            'description'           => __( 'Cursos Publicados', 'oregoom_course' ),
            'labels'                => $labels,
            'show_in_rest'          => true, //Gutenberg = true
            'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'author' ),
            'hierarchical'          => true,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-welcome-learn-more',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'cursos', $args );

    }
    add_action( 'init', 'oregoom_course_post_type', 0 );

}



function namespace_share_category_with_pages() {
    register_taxonomy_for_object_type( 'book', 'cursos' );
}
 
add_action( 'init', 'namespace_share_category_with_pages' );


function wpdocs_codex_custom_init() {
    $args = array(
        'public' => true,
        'label'  => __( 'Books', 'textdomain' ),
    );
    register_post_type( 'book', $args );
}
add_action( 'init', 'wpdocs_codex_custom_init' );