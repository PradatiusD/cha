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

// Enable widget area for Blog Sidebar

if (function_exists('register_sidebar')) {  
     register_sidebar(array(  
      'name' => 'Blog Sidebar',  
      'id'   => 'blog-sidebar',  
      'description'   => 'This widget area is on the right hand side of the Blog page',  
      'before_widget' => '<div class="grid_2 suffix_1">',  
      'after_widget'  => '</div>',  
      'before_title'  => '<h5>',  
      'after_title'   => '</h5>'  
     ));  
    }  


// Enable widget area for Theatre page

if (function_exists('register_sidebar')) {  
 register_sidebar(array(  
  'name' => 'Theatre Widget Area',  
  'id'   => 'theatre-widget-area',  
  'description'   => 'This widget area is right below the resume icons on the Theatre page',  
  'before_widget' => '<div class="grid_12 divider"><img src="'. get_template_directory_uri(). '/images/gray-divider.png"></div><div class="grid_8 prefix_2 suffix_2">',  
  'after_widget'  => '</div>',  
  'before_title'  => '<h5>',  
  'after_title'   => '</h5>'  
 ));  
} 

// Enable widget area for Film page

if (function_exists('register_sidebar')) {  
 register_sidebar(array(  
  'name' => 'Film Widget Area',  
  'id'   => 'film-widget-area',  
  'description'   => 'This widget area is right below the resume icons on the Film page',  
  'before_widget' => '<div class="grid_12 divider"><img src="'. get_template_directory_uri(). '/images/gray-divider.png"></div><div class="grid_8 prefix_2 suffix_2">',  
  'after_widget'  => '</div>',  
  'before_title'  => '<h5>',  
  'after_title'   => '</h5>'  
 ));  
} 

// Enable widget area for Dance page

if (function_exists('register_sidebar')) {  
 register_sidebar(array(  
  'name' => 'Dance Widget Area',  
  'id'   => 'dance-widget-area',  
  'description'   => 'This widget area is right below the title of the dance page',  
  'before_widget' => '<div class="grid_12 divider"><img src="'. get_template_directory_uri(). '/images/gray-divider.png"></div><div class="grid_8 prefix_2 suffix_2">',  
  'after_widget'  => '</div><div class="grid_12 divider"><img src="'. get_template_directory_uri(). '/images/gray-divider.png"></div>',  
  'before_title'  => '<h5>',  
  'after_title'   => '</h5>'  
 ));  
}  


// credit_to youtube_link
?>