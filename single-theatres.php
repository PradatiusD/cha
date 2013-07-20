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
					the_title('<h1>','</h1>'); 
					ob_start();
					the_content();
					$cha_content = ob_get_clean();
				?>
	</div>

	<div id="tabs">
	        <div class="grid_4 " align="center">
	            <a 	<?php
					$pdflink = get_the_excerpt();
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
	<div class="grid_12 divider" align="center">
		<img <?php echo "src='" . get_template_directory_uri(). '/images/gray-divider.png' . "'" ?>>
	</div>
	<div class="prefix_2 grid_8 suffix_2" id="photo">
		<?php echo $cha_content; ?>
	</div>

	<div class="grid_12 divider" align="center">
		<img <?php echo "src='" . get_template_directory_uri(). '/images/gray-divider.png' . "'" ?>>
	</div>

</div>
<script  <?php echo "src='" . get_template_directory_uri(). '/jquery.prettyPhoto.js' . "'" ?>></script>
<script>
jQuery(document).ready(function($){
	var galleryHTML = [];
	$('.gallery-icon').each(function(){
		var itemHTML = $(this).html();
		galleryHTML.push(itemHTML);
	})
	$('.gallery').remove();
	for (var i = 0; i < galleryHTML.length; i++) {
		$('#photo').append(galleryHTML[i])
	};
	$('#photo a').attr('rel', 'prettyPhoto[gallery1]')

    $("a[rel^='prettyPhoto']").prettyPhoto({
	    theme: 'dark_rounded', /* light_rounded / dark_rounded / light_square / dark_square / facebook */
	    show_title: true, /* true/false */
	    overlay_gallery: false, /* If set to true, a gallery will overlay the fullscreen image on mouse over */
	    allow_resize: true, /* Resize the photos bigger than viewport. true/false */
	    keyboard_shortcuts: true, /* Set to false if you open forms inside prettyPhoto */
	    social_tools: false, /* html or false to disable */
    });

})	
</script>

<?php get_footer();?>