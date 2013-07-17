		</div>
	<?php wp_footer(); ?>
	<script>
		window.jQuery || document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"><\/script>')
	</script>
	<script>
	$(function(){ 
		$('#load').fadeIn('slow');
		$('#learn').click(function(){
			$('#bio').slideDown('slow');
			return false;
		});
	});
	</script>
	</body>
</html>

