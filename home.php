<?php get_header();?>
	<div class="grid_12 nav">
		<?wp_nav_menu();?>
	</div>
</div>
	<div class="grid_12">
		<h1>Cha's Blog</h1>
	</div>
<?php 

	if ( have_posts()  ) {
		while ( have_posts() ) { ?>
		<div class="grid_8 prefix_2 suffix_2 blog">
		<?php		
			the_post();
			?>

			<a href="<?php the_permalink(); ?>" class="postlink" title="<?php the_title_attribute(); ?>"><?php the_title('<h2>','</h2>'); ?></a>
			<?php
			the_date('F j, Y','<p>Posted on: ','<p>');
			the_content();
		?>
		</div>
		<div class="grid_12 divider" align="center">
	        <img <?php echo "src='" . get_template_directory_uri(). '/images/gray-divider.png' . "'" ?>>
	    </div> 
	<?php
		}
	}
?>

<?php get_footer();?>