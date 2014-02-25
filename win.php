<?php session_start(); ?>
<div class="contentWrapper fourteen columns offset-by-one win resultProfile">
	<img src="images/homeTitle.png" class="headerImg" alt="Schwarz oder Weiss - auf welcher Seite stehst du?" />
	<?php
	    $resultCharacters = array(
		"profile-1" => array(
			"Zuordnung 1" => "Gemeinschaft der WEISSEN HEXEN",
			"Geburtscode 1" => "W1 / S0",
			"Besondere EigenSchaften 1" => "sensibel, geradlinig, offen, verl&auml;sslich, macht f&uuml;r gute Freunde selbst das Unm&ouml;gliche m&ouml;glich",
			"Auff&auml;lligkeiten 1" => "hat einen Hang zur &uuml;berheblichen Besserwisserei, bevormundet gerne die anderen",
			"Anmerkungen 1" => "Auch wenn Du es ja nur gut meinst &ndash; wei&szlig;t Du wirklich immer, was das Beste f&uuml;r andere ist?"	
		),

		"profile-2" => array(
			"Zuordnung 2" => "Gemeinschaft der SCHWARZEN HEXEN",
			"Geburtscode 2" => "W0 / S1",
			"Besondere EigenSchaften 2" => "intelligent, freiheitsliebend, willensstark, l&auml;sst sich in widrigen Situationen von nichts und niemandem unterkriegen",
			"Auff&auml;lligkeiten 2" => "verl&auml;sst sich am liebsten auf sich selbst, geht unbeirrbar den eigenen Weg, eher ein Einzelg&auml;nger",
			"Anmerkungen 2" => "Wem willst Du eigentlich etwas beweisen? Dir selbst? Schw&auml;chen einzugestehen k&ouml;nnte Dir neue Freundschaften einbringen."	
		),

		"profile-3" => array(
			"Zuordnung 3" => "HALBCODE",
			"Geburtscode 3" => "W0,5 / S0,5",
			"Besondere EigenSchaften 3" => "wacher Verstand, selbstkritisch, mitf&uuml;hlend, st&auml;ndig in Sorge, dass man sich einen falschen Eindruck von ihm verschafft",
			"Auff&auml;lligkeiten 3" => "&auml;ndert h&auml;ufig seinen Standpunkt, will sich nicht festlegen, wei&szlig; h&auml;ufig nicht genau, was richtig oder falsch ist",
			"Anmerkungen 3" => "Eigentlich bewunderst Du insgeheim alle, die unersch&uuml;tterlich an ihrer Meinung festhalten. Das musst Du wirklich nicht! Du bist v&ouml;llig okay, so wie Du bist. Du bist ein Halbcode und wirst Deinen eigenen Weg finden."	
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
	    <button name="currentPage" value="book" class="button bookBtn forward zumBuch"><span class="btnLabel">Zum Buch</span></button>
	    <button name="currentPage" value="mailFormPage" class="button forward openContactForm gewinnSpiel"><span class="btnLabel">Gewinnspiel</span></button>
	    <button name="currentPage" value="contactPage" class="button forward openMobileContact"><span class="btnLabel">Gewinnspiel</span></button>
	</form>
</div>
