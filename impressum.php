<div class="container impressum">
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris et lacinia metus, in bibendum odio. Vestibulum aliquet turpis at mauris mattis porttitor et at magna. Integer eu metus imperdiet, porttitor orci quis, varius erat. Cras magna enim, ultrices sed dictum a, elementum nec dolor.<br /><a href="#" class="teilnahmeLink">Teilnahmebedingungen</a><br /><a href="#" target="_blank" class="impressumLink">Impressum</a></p>
</div>


<script type="text/javascript">

	$('.teilnahmeLink').click(function(e) {
		e.preventDefault();
	    	$('#teilnahmebox').show('clip');
		$('html,body').animate({
			scrollTop: 0
		}, 300);
	});

	$('.close').click(function() {
		$('#teilnahmebox').hide('clip');
		$('html,body').animate({
			scrollTop: 0
		}, 300);
	});

</script>
