<?php session_start(); ?>
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
            <input type="hidden" name="backTo" value="win" />
	    <button name="currentPage" value="mailFormPage" class="button forward openContactForm eight columns"><span class="btnLabel">Gewinnspiel (D)</span></button>
	    <button name="currentPage" value="contactPage" class="button forward openMobileContact eight columns"><span class="btnLabel">Gewinnspiel (M)</span></button>
	    <button name="currentPage" value="book" class="button bookBtn forward eight columns"><span class="btnLabel">zum Buch</span></button>
	</form>
</div>
