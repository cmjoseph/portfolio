<?php function register_cpt_project() {

   /**
    * Register a custom post type
    *
    * Supplied is a "reasonable" list of defaults
    * @see register_post_type for full list of options for register_post_type
    * @see add_post_type_support for full descriptions of 'supports' options
    * @see get_post_type_capabilities for full list of available fine grained capabilities that are supported
    */
    register_post_type( 'project', array(
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => '' ),
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'menu_icon' => "dashicons-format-aside",
        'supports' => array( 'title', 'editor',  'thumbnail', 'page-attributes' ),
        'taxonomies' => array(''),
        'capability_type' => 'post',
        'capabilities' => array(),
        'labels' => array(
            'name' => __( 'Projects', 'cmj' ),
            'singular_name' => __( 'Project', 'cmj' ),
            'add_new' => __( 'Add new', 'cmj' ),
            'add_new_item' => __( 'Add a new Projects', 'cmj' ),
            'edit_item' => __( 'Edit Project', 'cmj' ),
            'new_item' => __( 'New Project', 'cmj' ),
            'all_items' => __( 'All Projects', 'cmj' ),
            'view_item' => __( 'View Project', 'cmj' ),
            'search_items' => __( 'Search Projects', 'cmj' ),
            'not_found' =>  __( 'No Project found', 'cmj' ),
            'not_found_in_trash' => __( 'No Project found in the trash', 'cmj' ),
            'parent_item_colon' => '',
            'menu_name' => 'Projects'
        )
    ) );
}
add_action( 'init', 'register_cpt_project' );
?>