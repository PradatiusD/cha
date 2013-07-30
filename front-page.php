<?php get_header();?>

	<div class="grid_12 nav">
		<?wp_nav_menu();?>
	</div>

	<!-- Start the WP loop -->
	<?php 
		if ( have_posts() ) {
			while ( have_posts() ) {
	?>

	<div id="load" style="display:none;">
		<div class="grid_12 front">
	        <img <?php echo "src='" . get_template_directory_uri(). '/images/Front-Page.png' . "'" ?>>
	        <?php the_post_thumbnail( array(391,487), array('class' => "homepage-Cha") ); ?>  
	    </div>
	    <div class="grid_12 social" align="center">
	        <a href="http://www.linkedin.com/pub/cristina-m-ramos/54/644/106"><img <?php echo "src='" . get_template_directory_uri(). '/images/social/social-02.png' . "'" ?> height="50"></a>
	        <img <?php echo "src='" . get_template_directory_uri(). '/images/social/social-01.png' . "'" ?> height="25">
	        <a href="https://twitter.com/twittterlesscha"><img <?php echo "src='" . get_template_directory_uri(). '/images/social/social-03.png' . "'" ?> height="50"></a>
	        <img <?php echo "src='" . get_template_directory_uri(). '/images/social/social-01.png' . "'" ?> height="25">
	        <a href="http://www.facebook.com/pages/Cristina-M-Ramos/507503719306857"><img <?php echo "src='" . get_template_directory_uri(). '/images/social/social-04.png' . "'" ?> height="50"></a>
	    </div>
    </div>
<div id="bio-outer">
		<div><h6><a href="#" id="learn" style="color: rgb(151, 11, 151);">Read more about me here</a></h6></div>
	<div id="bio">


	<!-- End WP loop -->
	<?php
				the_post(); 
				the_content();
			}
		} 
	?>
	</div>
</div>
<?php get_footer();?>