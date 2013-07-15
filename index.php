<?php get_header();?>
<?php 
	wp_nav_menu();
	if ( have_posts()  ) {
		while ( have_posts() ) {
			the_post();
			the_title(); 
			the_excerpt();
		}
	}
?>

<?php get_footer();?>