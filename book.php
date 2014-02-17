<div class="contentWrapper sixteen columns">
	<div class="leftCol five columns offset-by-one">
		<img src="images/bookCover.png" alt="book cover" class="bookCover">	
		<p class="bookDetails">ISBN: xxx-x-xxx-xxxxx-x<br>
		€17,99 [D] | €18,50 [A] | CHF 25,90*<br>
		(* empf. VK-Preis)
		</p>
	</div>
	<div class="rightCol nine columns">
		<p>Pellentesque sodales ante eu arcu hendrerit fringilla. Nunc quis lorem id libero malesuada mattis sit amet a elit. Vestibulum lectus diam, vulputate ac erat vel, sodales sagittis tellus. Proin at enim leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id nibh eu ipsum placerat consequat. Fusce sollicitudin, lacus eu fermentum fringilla, orci sapien pellentesque risus, vel interdum enim tortor vitae justo. Cras placerat accumsan pretium. Mauris ligula dolor, malesuada sed mi id, egestas eleifend libero. Praesent non lectus ac quam pharetra auctor eget quis nunc. Morbi pretium ipsum lectus, et ultrices est vestibulum non. Mauris viverra laoreet turpis euismod tristique. Donec non volutpat sapien, quis lobortis erat.</p>
	</div>
	<form class="appNavigator" method="post" action="index.php">
		<?php if(isset($_POST['backTo'])) {
		    $backTo = $_POST['backTo'];
		} else {
		    $backTo = "home";
		}
		?>
		<a href="#" target="_blank" class="button zumTrailer seven columns forward"><span class="btnLabel">zum Trailer</span></a>
		<a href="#" target="_blank" class="button leseproben seven columns forward"><span class="btnLabel">Leseproben</span></a>
		<a href="#" target="_blank" class="button kaufen seven columns forward"><span class="btnLabel">Kaufen</span></a>
		<button class="button backToHome seven columns backward" name="currentPage" value="<?php echo $backTo?>"><span class="btnLabel">Zur&uuml;ck</span></button>
	</form>
</div>
