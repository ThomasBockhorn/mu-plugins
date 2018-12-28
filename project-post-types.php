<?php
/*This function creates a custom post type of Projects */
function projects_post_type()
{
    register_post_type('project', array(
        'public' => true,
        'labels' => array(
            'name' => 'Projects',
            'add_new_item' => 'Add New Project',
            'edit_item' => 'Edit Project',
            'add_items' => 'All Projects',
            'singular_name' => 'Project'
        ),
        'menu_icon' => 'dashicons-format-aside',
        'supports' => array(
            'title',
            'thumbnail',
            'comments',
            'editor'
        )
    ));
}
add_action('init', 'projects_post_type');
?>