<?php get_header();?>
	<div class="grid_12 nav">
		<?wp_nav_menu();?>
	</div>
</div>
<div class="grid_12">
	<h1></h1>
</div>
<?php 

	if ( have_posts()  ) {
		while ( have_posts() ) { ?>
		<div class="grid_8 prefix_2 suffix_2 blog">
		<?php		
			the_post();
			?>

			<?php the_title('<h2>','</h2>'); ?>
			<?php
			the_content();
		?>
		</div>
	<?php
		}
	}
?>

<?php get_footer();?>