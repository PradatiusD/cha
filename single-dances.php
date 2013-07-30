<?php get_header();?>
<?php 
/*
Template Name: Portfolio (Dance)
*/
?>

	<div class="grid_12 nav">
		<?php wp_nav_menu();?>
	</div>
</div>
	<div class="grid_12">
		<?php
		// Loop to get Dances top content
			if ( have_posts()  ) {
				while ( have_posts() ) {
					the_post();
					the_title('<h1>','</h1>'); ?>
	</div>

	<?php
			}
		}
	if ( dynamic_sidebar('dance-widget-area') ) : else : endif; 
	?>


<div class="videobio" id="video">
	<?php
	// Loop for the custom post type for Dances
	query_posts( 'post_type=dances' );
		if ( have_posts()  ) {
			while ( have_posts() ) {
			the_post(); ?>
	<div class="grid_5">
		<a <?php
			$youtube_link = get_field('youtube_link');
			echo 'target="_blank" href="http://www.youtube.com/watch?v='.$youtube_link.'"' 
		?> >
		<?php the_post_thumbnail(array(370,277)); ?>
		</a>
	</div>
				
	<div class="grid_7">
				<?php
					the_title('<h2>','</h2>');
					$cha_excerpt = get_the_excerpt();
					echo '<h3>'.$cha_excerpt.'</h3>';
					the_content();
				?>
	
	</div>
	<div class="clear"></div>
		<?php		}
			}
		?>  
</div>

<?php get_footer();?>