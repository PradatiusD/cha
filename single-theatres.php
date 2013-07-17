<?php get_header();?>
<?php 
/*
Template Name: Portfolio (Theatre)
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
	        <div class="grid_4 " align="center">
	            <a 	<?php
					$pdflink = get_the_content();
					echo 'href="' . $pdflink. '" ';
				?> target="_blank"><img <?php echo "src='" . get_template_directory_uri(). '/images/doc.png' . "'" ?>><br>
	            <b>Download Resume</b></a>
	        </div>
	        <div class="grid_4 " align="center">
	            <a href="#video"><img <?php echo "src='" . get_template_directory_uri(). '/images/video.png' . "'" ?>><br>
	            <b>Watch Videos</b></a>
	        </div>
	        <div class="grid_4" align="center">
	            <a href="#photo"><img  <?php echo "src='" . get_template_directory_uri(). '/images/camera.png' . "'" ?>><br>
	            <b>View Pictures</b></a> 
	        </div>
	        <div class="grid_12 divider" align="center">
	            <img <?php echo "src='" . get_template_directory_uri(). '/images/gray-divider.png' . "'" ?>>
	        </div> 
	</div>
	<?php
			}
		}
	?>

<div class="videobio" id="video">
	<?php
	query_posts( 'post_type=theatres' );
		if ( have_posts()  ) {
			while ( have_posts() ) {
			the_post(); ?>
	<div class="grid_5">
		
		<iframe  width="370" height="277" <?php echo "src='//www.youtube.com/embed/"; ?><?php the_field( 'youtube_link' );?><?php echo "'"; ?>  frameborder="0" allowfullscreen></iframe>
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