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
					the_title('<h1>','</h1>'); ?>
	</div>

	<div id="tabs">
	        <div class="grid_4 prefix_2" align="center">
	            <a 	<?php
		            $pdflink = get_field( 'pdf_link' );
					echo 'href="' .$pdflink. '"';
				?> target="_blank"><img <?php echo "src='" . get_template_directory_uri(). '/images/doc.png' . "'" ?>><br>
	            <b>Download Resume</b></a>
	        </div>
	        <div class="grid_4 suffix_2" align="center">
	            <a href="#video"><img <?php echo "src='" . get_template_directory_uri(). '/images/video.png' . "'" ?>><br>
	            <b>Watch Videos</b></a>
	        </div>
	        <?php if ( dynamic_sidebar('film-widget-area') ) : else : endif; ?>
	        <div class="grid_12 divider" align="center">
	            <img <?php echo "src='" . get_template_directory_uri(). '/images/gray-divider.png' . "'" ?>>
	        </div> 
	</div>
	<?php
			}
		}
	?>

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