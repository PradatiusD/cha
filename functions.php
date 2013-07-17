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
'editor',
'excerpt',
'trackbacks',
'custom-fields',
'comments',
'revisions',
'thumbnail',
'author',
'page-attributes',)
) );

?>

<?php show_admin_bar( true ); ?>