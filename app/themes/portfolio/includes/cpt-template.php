<?php function register_cpt_NAME() {

   /**
    * Register a custom post type
    *
    * Supplied is a "reasonable" list of defaults
    * @see register_post_type for full list of options for register_post_type
    * @see add_post_type_support for full descriptions of 'supports' options
    * @see get_post_type_capabilities for full list of available fine grained capabilities that are supported
    */
    register_post_type( 'CPT_NAME', array(
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => '' ),
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'menu_icon' => "",
        'supports' => array( 'title', 'editor',  'thumbnail', 'page-attributes' ),
        'taxonomies' => array(''),
        'capability_type' => 'post',
        'capabilities' => array(),
        'labels' => array(
            'name' => __( 'CPT_NAME (plural)', 'akfn' ),
            'singular_name' => __( 'CPT_NAME (singular)', 'akfn' ),
            'add_new' => __( 'Add new', 'akfn' ),
            'add_new_item' => __( 'Add a new CPT_NAME (singular)', 'akfn' ),
            'edit_item' => __( 'Edit CPT_NAME (singular)', 'akfn' ),
            'new_item' => __( 'New CPT_NAME (singular)', 'akfn' ),
            'all_items' => __( 'All CPT_NAME (plural)', 'akfn' ),
            'view_item' => __( 'View CPT_NAME (singular)', 'akfn' ),
            'search_items' => __( 'Search CPT_NAME (plural)', 'akfn' ),
            'not_found' =>  __( 'No CPT_NAME (singular) found', 'akfn' ),
            'not_found_in_trash' => __( 'No CPT_NAME (singular) found in the trash', 'akfn' ),
            'parent_item_colon' => '',
            'menu_name' => 'CPT_NAME (plural)'
        )
    ) );
}
add_action( 'init', 'register_cpt_NAME' );
?>