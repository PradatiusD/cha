<?php get_header();?>
	<div class="grid_12 nav">
		<?wp_nav_menu();?>
	</div>
</div>
	<div class="grid_12">
		<h1>Cristina's Blog</h1>
	</div>




	<div class="grid_8 prefix_1 blog">
<?php 
	
	if ( have_posts()  ) {
		while ( have_posts() ) { ?>
		
		<?php		
			the_post();
			the_post_thumbnail( array(605,146));
			?>

			<a href="<?php the_permalink(); ?>" class="postlink" title="<?php the_title_attribute(); ?>"><?php the_title('<h2>','</h2>'); ?></a>
			<?php
			the_date('F j, Y','<p>Posted on: ','<p>');
			the_content();
		?>
		<div class="divider" align="center">
	        <img <?php echo "src='" . get_template_directory_uri(). '/images/gray-divider.png' . "'" ?>>
	    </div> 
	<?php
		}
	}
?>
	</div>

	
	<?php if ( dynamic_sidebar('blog-sidebar') ) : else : endif; ?>	
	
	
<?php get_footer();?>