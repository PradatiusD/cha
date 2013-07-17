<?php get_header();?>
<?php 
/*
Template Name: Portfolio (Films)
*/
?>

	<div class="grid_12 nav">
		<?php wp_nav_menu();?>
	</div>
</div>
<div class="grid_12">
	<?php
	// Loop to get Film top content
		if ( have_posts()  ) {
			while ( have_posts() ) {
				the_post();
				the_title('<h1>','</h1>');
				the_content();
			}
		}
	?>
</div>

<div class="videobionoheader" id="video">
	<?php
	query_posts( 'post_type=films' );
		if ( have_posts()  ) {
			while ( have_posts() ) {
			the_post(); ?>
	<div class="grid_5">
		
		<iframe  width="370" height="277" <?php echo "src='//www.youtube.com/embed/"; ?><?php the_field( 'youtube_link' );?><?php echo "'"; ?>  frameborder="0" allowfullscreen></iframe>
	</div>
				
	<div class="grid_7">
				<?php
					the_title('<h2>','</h2>');
					the_content();
					the_field( 'credit_to' ); ?>
	
	</div>
	<div class="clear"></div>
		<?php		}
			}
		?>  
</div>

<?php get_footer();?>