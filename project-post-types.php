<?php
/*This function creates a custom post type of Projects */
function projects_post_type()
{
    register_post_type('project', array(
        'public' => true,
        'has_archive' => true,
        'hierarchical' => true,
        'labels' => array(
            'name' => 'Projects',
            'add_new_item' => 'Add New Project',
            'edit_item' => 'Edit Project',
            'add_items' => 'All Projects',
            'singular_name' => 'Project',
            'show_in_nav_menus' => true
        ),
        'menu_icon' => 'dashicons-format-aside',
        'supports' => array(
            'title',
            'thumbnail',
            'comments',
            'editor',
            'author',
            'excerpt',
            'page-attributes',
            'custom-fields',
            'post-formats',
            'revisions',
            'trackbacks'
        )
    ));
}
add_action('init', 'projects_post_type');
?>