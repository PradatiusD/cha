<?php
// Creates Films post type
register_post_type('films', array(
'label' => 'Films',
'public' => true,
'show_ui' => true,
'capability_type' => 'post',
'hierarchical' => false,
'rewrite' => array('slug' => 'film'),
'query_var' => true,
'supports' => array(
'title',
'thumbnail',
'custom-fields',
'editor',
'excerpt')
) );

// Creates Dances post type

register_post_type('dances', array(
'label' => 'Dances',
'public' => true,
'show_ui' => true,
'capability_type' => 'post',
'hierarchical' => false,
'rewrite' => array('slug' => 'film'),
'query_var' => true,
'supports' => array(
'title',
'thumbnail',
'custom-fields',
'editor',
'excerpt')
) );

// Create Theatre post type

register_post_type('theatres', array(
'label' => 'Theatre',
'public' => true,
'show_ui' => true,
'capability_type' => 'post',
'hierarchical' => false,
'rewrite' => array('slug' => 'film'),
'query_var' => true,
'supports' => array(
'title',
'thumbnail',
'custom-fields',
'editor',
'excerpt')
) );

// Enable post thumbnails
add_theme_support( 'post-thumbnails' ); 
// credit_to youtube_link
?>