<div class="contentWrapper fourteen columns offset-by-one win resultProfile">
	<img src="images/homeTitle.png" class="headerImg" alt="Schwarz oder Weiss - auf welcher Seite stehst du?" />
	<?php
	    $resultCharacters = array(
		"profile-1" => array(
			"Zuordnung 1" => "Lorem ipsum dolor sit amet",
			"Geburtscode 1" => "W1 / S0",
			"Besondere EigenSchaften 1" => "Duis vel ipsum luctus, tristique leo id, auctor purus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam velit elit, sollicitudin nec consequat volutpat, eleifend sit amet lorem.",
			"Auff&auml;lligkeiten 1" => "Proin tortor ipsum, pretium vel dui id, vehicula imperdiet nisl.",
			"Anmerkungen 1" => "Praesent sit amet est a elit mollis venenatis vitae sed metus."	
		),

		"profile-2" => array(
			"Zuordnung 2" => "Lorem ipsum dolor sit amet",
			"Geburtscode 2" => "W1 / S0",
			"Besondere EigenSchaften 2" => "Duis vel ipsum luctus, tristique leo id, auctor purus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam velit elit, sollicitudin nec consequat volutpat, eleifend sit amet lorem.",
			"Auff&auml;lligkeiten 2" => "Proin tortor ipsum, pretium vel dui id, vehicula imperdiet nisl.",
			"Anmerkungen 2" => "Praesent sit amet est a elit mollis venenatis vitae sed metus."	
		),

		"profile-3" => array(
			"Zuordnung 3" => "Lorem ipsum dolor sit amet",
			"Geburtscode 3" => "W1 / S0",
			"Besondere EigenSchaften 3" => "Duis vel ipsum luctus, tristique leo id, auctor purus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam velit elit, sollicitudin nec consequat volutpat, eleifend sit amet lorem.",
			"Auff&auml;lligkeiten 3" => "Proin tortor ipsum, pretium vel dui id, vehicula imperdiet nisl.",
			"Anmerkungen 3" => "Praesent sit amet est a elit mollis venenatis vitae sed metus."	
		),
	    )
	?>

	<h2 class="header">Deine Einsch&auml;tzung</h2>
	<dl class="profileDetails">
		<?php 

			foreach($resultCharacters[$_SESSION['gameResult']] as $property => $value) {
				echo "<dt>" . $property . "</dt>";
				echo "<dd>" . $value . "</dd>";
			}

		?>
	</dl>
	<form class="appNavigator" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	    <button name="currentPage" value="finalpage" class="button winbtn forward openContactForm eight columns"><span class="btnLabel">Gewinnspiel (D)</span></button>
	    <button name="currentPage" value="finalpage" class="button winbtn forward openMobileContact eight columns"><span class="btnLabel">Gewinnspiel (M)</span></button>
	    <button name="currentPage" value="book" class="button bookBtn forward eight columns"><span class="btnLabel">zum Buch</span></button>
	</form>
	<?php session_destroy() ?>
</div>
<div class="contactForm modalWindow">
	<div class="close closeContactForm">Fenster schließen</div>
	<?php 
		include "mailForm.php";
	?>	
	<div class="close closeContactForm">Fenster schließen</div>
</div>
<div class="mobileContact modalWindow">
	<div class="close closeMobileContact">Fenster schließen</div>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam in lorem neque. Morbi sed ullamcorper neque. Quisque consequat tempus lorem eget malesuada. Aliquam in dolor vel odio cursus consectetur id vitae dolor. Sed eget sem at sapien consequat consequat vel a odio. Nullam id porttitor purus.</p>
	<p><a href="mailto:someone@example.com?cc=someoneelse@example.com&bcc=andsomeoneelse@example.com&subject=Summer%20Party&body=You%20are%20invited%20to%20a%20big%20summer%20party!" target="_top">Send mail!</a></p>
	<div class="close closeMobileContact">Fenster schließen</div>
</div>
<script type="text/javascript">
	$('.openContactForm').click(function(e) {
		e.preventDefault();
		$('.contactForm').show('clip');
	});

	$('.closeContactForm').click(function() {
		$('.contactForm').hide('clip');
	});

	$('.openMobileContact').click(function(e) {
		e.preventDefault();
		$('.mobileContact').show('clip');
	});

	$('.closeMobileContact').click(function() {
		$('.mobileContact').hide('clip');
	});
</script>
