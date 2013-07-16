<?php get_header();?>

<div class="grid_12 nav">
	<?wp_nav_menu();?>
</div>
<?php 

	if ( have_posts()  ) {
		while ( have_posts() ) {
			the_post();
			the_title(); 
			the_excerpt();
		}
	}
?>

<?php get_footer();?>