<?php get_header();?>
<?php 
/*
Template Name: Contact Page
*/
?>
<div class="grid_12 nav">
	<?php wp_nav_menu();?>
</div>

<div class="grid_5 contact" align="center">

	<form <?php echo "action='" . get_template_directory_uri() . "/contact-form.php" . "'" ?> class="form" method="post">
		<h2 align="center"> Contact</h2>
		<p>I'd love to hear from you, and I look forward to any and all creative collaboration!</p>
		<br>
		<p>Thanks,</p>
		<p>Cha</p>
		<input type="text" name="yourname" placeholder="Your Name"><br>
		<input type="text" name="email" placeholder="Your E-mail Address"><br>
		<input type="text" name="phonenumber" placeholder="Phone number"><br>
		<select name="how">
			<option value=""> "How did you find me?"</option>
			<option>Google</option>
			<option>Yahoo</option>
			<option>Link from a website</option>
			<option>Word of mouth</option>
			<option>Social Media</option>
			<option>Other</option>
		</select>
		<br>
		<textarea name="comments" rows="10" cols="40" placeholder="Your comments or suggestions"></textarea><p></p>

		<p><input class="btn" type="submit" value="Send it!"></p>

		<p> </p>
	</form>
</div>
<div class="grid_7" align="center" id="load" style="display:none">
	<img <?php echo "src='" . get_template_directory_uri(). '/images/Cha.jpg' . "'" ?> style="width:540px">
	<img <?php echo "src='" . get_template_directory_uri(). '/images/divider-top.png' . "'" ?> style="margin-top:30px">
	<div class="social">
		<img <?php echo "src='" . get_template_directory_uri(). '/images/social/facebook.png' . "'"  . 'width="30" height="30"' ?>>
		<img <?php echo "src='" . get_template_directory_uri(). '/images/social/google-plus.png' . "'"  . 'width="30" height="30"' ?>> 
		<img <?php echo "src='" . get_template_directory_uri(). '/images/social/linkedin.png' . "'"  . 'width="30" height="30"' ?>> 
		<img <?php echo "src='" . get_template_directory_uri(). '/images/social/twitter.png' . "'"  . 'width="30" height="30"' ?>>    
	</div>
	<img <?php echo "src='" . get_template_directory_uri(). '/images/divider.png' . "'" ?>>
</div>

<?php get_footer();?>