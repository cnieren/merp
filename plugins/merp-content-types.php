<?php
    /*
    Plugin Name: MERP Custom Content Types
    Description: Adds the custom content types for the MERP setting
    Version: 0.1
    Author: Chad Nierenhausen
    Author URI: chadnierenhausen.com
    License: GPL2
    */

    function add_powers_content_type() {
        $labels = array(
            'name'                  => _x('Powers', 'post type general name'),
            'singular_name'         => _x('Power', 'post type singular name'),
            'add_new'               => _x('Add New', 'power'),
            'add_new_item'          => __('Add New Power'),
            'edit_item'             => __('Edit Power'),
            'new_item'              => __('New Power'),
            'all_items'             => __('All Powers'),
            'view_item'             => __('View Power'),
            'search_items'          => __('Search Powers'),
            'not_found'             => __('No powers found'),
            'not_found_in_trash'    => __('No powers found in the Trash'),
            'parent_item_colon'     => '',
            'menu_name'             => 'Powers'
        );
        $args = array(
            'labels'        => $labels,
            'description'   => 'Holds power specific data',
            'public'        => true,
            'menu_position' => 5,
            'supports'      => array('title', 'editor'),
            'has_archive'   => false
        );
        register_post_type('power', $args);
    }

    add_action('init', 'add_powers_content_type');
?>