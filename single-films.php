<?php get_header();?>
<?php 
/*
Template Name: Portfolio (Films)
*/
wp_nav_menu();

?>


<?php
// Loop to get Film top content
	if ( have_posts()  ) {
		while ( have_posts() ) {
			the_post();
			the_title(); 
			the_excerpt();
		}
	}
?>  


<?php
// Loop to actually get custom taxonomy
query_posts( 'post_type=films' );
	if ( have_posts()  ) {
		while ( have_posts() ) {
			the_post();
			the_title(); 
			the_excerpt();
		}
	}
?>  


<?php get_footer();?>