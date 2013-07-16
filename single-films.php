<?php get_header();?>
<?php 
/*
Template Name: Portfolio (Films)
*/
?>

<div class="grid_12 nav">
	<?wp_nav_menu();?>
</div>

<?php
// Loop to get Film top content
	if ( have_posts()  ) {
		while ( have_posts() ) {
			the_post();
			the_title(); 
			the_excerpt();
			the_meta();
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