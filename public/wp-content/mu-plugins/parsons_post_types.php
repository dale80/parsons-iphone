<?php
function parsons_post_types() {
        // Review post type
        register_post_type('review', array(
            'capability_type' => 'review',
            'map_meta_cap' => true,
            'supports' => array('title', 'excerpt', 'thumbnail'),
            'public' => true,
            'menu_icon' => 'dashicons-admin-comments',
            'rewrite' => array(
                'slug' => 'reviews'
            ),
            'has_archive' => true,
            'show_in_rest' => true,
            'labels' => array(
                'name' => 'Reviews',
                'add_new_item' => 'Add New Review',
                'edit_item' => 'Edit Review',
                'all_items' => 'All Reviews',
                'singular_name' => 'Review'
            )
            ));
        }

            add_action('init', 'parsons_post_types');

    ?>