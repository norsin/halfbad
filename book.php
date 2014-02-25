<?php session_start(); ?>
<div class="content sixteen columns">
	<div class="leftCol five columns offset-by-one">
		<img src="images/bookCover.png" alt="book cover" class="bookCover">	
		<p class="bookDetails">ISBN: 978-3-570-15842-5<br>
		&euro;17,99 [D] | &euro;18,50 [A] | CHF 25,90*<br>
		(* empf. VK-Preis)
		</p>
	</div>
	<div class="rightCol nine columns">
		<p>Seit seiner Kindheit wird Nathan von der Regierung beobachtet, verfolgt, eingesperrt. Seine Welt wird von Wei&szlig;en Hexen regiert, w&auml;hrend die Schwarzen Hexen im Untergrund leben. Nathan ist beides &ndash; denn seine Mutter war wei&szlig; und sein Vater Marcus ist der gef&uuml;rchtetste Schwarze Hexer aller Zeiten.</p>
		<p>Um an Marcus heranzukommen, stellt der Rat der Wei&szlig;en Hexen eine t&ouml;dliche Falle &ndash; mit Nathan als K&ouml;der. Nathan bricht aus, doch schon bald wird er von beiden Seiten gejagt. Er muss sich entscheiden, wof&uuml;r es sich zu k&auml;mpfen lohnt.</p>	
	</div>
	<form class="appNavigator" method="post" action="index.php">
		<?php if(isset($_POST['backTo'])) {
		    $backTo = $_POST['backTo'];
		} else {
		    $backTo = "home";
		}
		?>
		<a href="#" target="_blank" class="button zumTrailer"><span class="btnLabel">Zum Trailer</span></a>
		<a href="#" target="_blank" class="button leseproben"><span class="btnLabel">Leseproben</span></a>
		<a href="http://www.randomhouse.de/Buch/HALF-BAD-Das-Dunkle-in-mir-Band-1/Sally-Green/e448547.rhd" target="_blank" class="button kaufen"><span class="btnLabel">Kaufen</span></a>
		<button class="button backToHome" name="currentPage" value="<?php echo $backTo?>"><span class="btnLabel">Zur&uuml;ck</span></button>
	</form>
</div>
