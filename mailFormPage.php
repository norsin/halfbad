<?php
// OPTIONS - PLEASE CONFIGURE THESE BEFORE USE!

$yourEmail = "giovanni.canzio@gmail.com"; // the email address you wish to receive these mails through
$yourWebsite = "Half Bad"; // the name of your website
$thanksPage = ''; // URL to 'thanks for sending mail' page; leave empty to keep message on the same page 
$maxPoints = 4; // max points a person can hit before it refuses to submit - recommend 4
$requiredFields = "name,address,cityZip,email"; // names of the fields you'd like to be required as a minimum, separate each field with a comma
$excludeFromMessage = "regFormSubmit"; // names of the fields you want to exclude from the generated message

// texts and messages
// ------------------

// the subject for the generated email
$emailSubject = "Half Bad"; 

// the generated email will start with this text
$emailIntro = "Took part into Half Bad: \n\n"; 

// message to display if the user misses mandatory fields
$pleaseFill = "Bitte fülle alle Felder aus und sende das Formular erneut ab."; 

// message to display if the user inputs invalid values in the name field
$emptyNameField = "Das Namensfeld darf keine Sonderzeichen enthalten.\r\n"; 

// message to display after successful email sending
$thankyouMessage = 'Danke f&uuml;r deine Teilnahme an unserem Gewinnspiel!';

// message to display if user inputs invalid email
$invalidEmail = "Die Emailadrese ist ungültig.\r\n";

// message to display if age verification is not passed
$noAgeVerification = "Du musst bitte bestätigen, dass du 18 Jahre alt bist.";

// message to display if any problem occurs
$genericProblem = 'Ups, ein Fehler ist aufgetreten...';

// message to display if user is suspected to spam
$suspectSpam = 'Deine Mail steht unter Spamverdacht und konnte diesmal nicht gesendet werden. ['.$points.']';

// ### END OF OPTIONS ###

// DO NOT EDIT BELOW HERE
$error_msg = array();
$result = null;

$requiredFields = explode(",", $requiredFields);
$excludeFromMessage = explode(",", $excludeFromMessage);

function clean($data) {
	$data = trim(stripslashes(strip_tags($data)));
	return $data;
}
function isBot() {
	$bots = array("Indy", "Blaiz", "Java", "libwww-perl", "Python", "OutfoxBot", "User-Agent", "PycURL", "AlphaServer", "T8Abot", "Syntryx", "WinHttp", "WebBandit", "nicebot", "Teoma", "alexa", "froogle", "inktomi", "looksmart", "URL_Spider_SQL", "Firefly", "NationalDirectory", "Ask Jeeves", "TECNOSEEK", "InfoSeek", "WebFindBot", "girafabot", "crawler", "www.galaxy.com", "Googlebot", "Scooter", "Slurp", "appie", "FAST", "WebBug", "Spade", "ZyBorg", "rabaz");

	foreach ($bots as $bot)
		if (stripos($_SERVER['HTTP_USER_AGENT'], $bot) !== false)
			return true;

	if (empty($_SERVER['HTTP_USER_AGENT']) || $_SERVER['HTTP_USER_AGENT'] == " ")
		return true;
	
	return false;
}

if (($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_REQUEST['regFormSubmit']))) {
	if (isBot() !== false)
		$error_msg[] = "No bots please! UA reported as: ".$_SERVER['HTTP_USER_AGENT'];
		
	// lets check a few things - not enough to trigger an error on their own, but worth assigning a spam score.. 
	// score quickly adds up therefore allowing genuine users with 'accidental' score through but cutting out real spam :)
	$points = (int)0;
	
	$badwords = array("adult", "beastial", "bestial", "blowjob", "clit", "cum", "cunilingus", "cunillingus", "cunnilingus", "cunt", "ejaculate", "fag", "felatio", "fellatio", "fuck", "fuk", "fuks", "gangbang", "gangbanged", "gangbangs", "hotsex", "hardcode", "jism", "jiz", "orgasim", "orgasims", "orgasm", "orgasms", "phonesex", "phuk", "phuq", "pussies", "pussy", "spunk", "xxx", "viagra", "phentermine", "tramadol", "adipex", "advai", "alprazolam", "ambien", "ambian", "amoxicillin", "antivert", "blackjack", "backgammon", "texas", "holdem", "poker", "carisoprodol", "ciara", "ciprofloxacin", "debt", "dating", "porn", "link=", "voyeur", "content-type", "bcc:", "cc:", "document.cookie", "onclick", "onload", "javascript");

	foreach ($badwords as $word)
		if (
			strpos(strtolower($_POST['name']), $word) !== false
		)
			$points += 2;
	
	if (isset($_POST['nojs']))
		$points += 1;
	if (strlen($_POST['name']) < 3)
		$points += 1;
	// end score assignments

	foreach($requiredFields as $field) {
		trim($_POST[$field]);
		
		if (!isset($_POST[$field]) || empty($_POST[$field]) && array_pop($error_msg) != $pleaseFill . "\r\n")
			$error_msg[] = $pleaseFill;
	}

	if (!empty($_POST['name']) && !preg_match("/^[a-zA-Z-'\s]*$/", stripslashes($_POST['name'])))
		$error_msg[] = $emptyNameField;
	if (!empty($_POST['email']) && !preg_match('/^([a-z0-9])(([-a-z0-9._])*([a-z0-9]))*\@([a-z0-9])(([a-z0-9-])*([a-z0-9]))+' . '(\.([a-z0-9])([-a-z0-9_-])?([a-z0-9])+)+$/i', strtolower($_POST['email'])))
		$error_msg[] = $invalidEmail;
	
	if ($error_msg == NULL && $points <= $maxPoints) {
		
		$message = $emailIntro;
		foreach ($_POST as $key => $val) {
                    foreach ($excludeFromMessage as $keyExc => $valExc) {
                        if ($key != $valExc) {
                            if (is_array($val)) {

                                    foreach ($val as $subval) {
                                            $message .= ucwords($key) . ": " . clean($subval) . "\r\n";
                                    }
                            } else {
                                    $message .= ucwords($key) . ": " . clean($val) . "\r\n";
                            }
                        }
                    }
		}

		if (strstr($_SERVER['SERVER_SOFTWARE'], "Win")) {
			$headers   = "From: $yourEmail\n";
			$headers  .= "Reply-To: {$_POST['email']}";
		} else {
			$headers   = "From: $yourWebsite <$yourEmail>\n";
			$headers  .= "Reply-To: {$_POST['email']}";
		}

		if (mail($yourEmail,$emailSubject,$message,$headers)) {
			if (!empty($thanksPage)) {
				header("Location: $thanksPage");
				exit;
			} else {
				$result = $thankyouMessage;
				$disable = true;
                                session_destroy();
			}
		} else {
			$error_msg[] = $genericProblem;
		}
	} else {
		if (empty($error_msg))
			$error_msg[] = $suspectSpam;
	}
}
function get_data($var) {
	if (isset($_POST[$var]))
		echo htmlspecialchars($_POST[$var]);
}
?>

<!--
	Free PHP Mail Form v2.4.3 - Secure single-page PHP mail form for your website
	Copyright (c) Jem Turner 2007, 2008, 2010, 2011, 2012
	http://jemsmailform.com/

	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	To read the GNU General Public License, see http://www.gnu.org/licenses/.
-->
<link rel="stylesheet" href="css/answer.css" />
<div class="gameResult win">

    <?php
    if (!empty($error_msg)) {
            echo '<p class="error">ERROR: '. implode("<br />", $error_msg) . "</p>";
    }
    if ($result != NULL) {
            echo '<p class="success">'. $result . "</p>";
    }
    ?>
    
    <form class="registerForm twelve columns offset-by-two" <?php if (isset($disable) && $disable === true) echo ' style="display: none;"'; ?> method="post" action="<?php echo $_SERVER['PHP_SELF'] ;?>">
        <div class="textBlock">
		<p>This is an introductory text to be eventually expanded...</p>
	</div>


        <noscript>
                        <p><input type="hidden" name="nojs" id="nojs" /></p>
        </noscript>
        <p>
                <label for="name">Vor- und Nachname: *</label> 
                        <input type="text" name="name" id="name" value="<?php get_data("name"); ?>" /><br />

                <label for="address">Straße und Hausnummer: *</label> 
                        <input type="text" name="address" id="address" value="<?php get_data("address"); ?>" /><br />

                <label for="cityZip">PLZ und Ort: *</label> 
                        <input type="text" name="cityZip" id="cityZip" value="<?php get_data("cityZip"); ?>" /><br />

                <label for="email">Mailadresse: *</label>
                        <input type="text" name="email" id="email" value="<?php get_data("email"); ?>" /><br />
               
                <span class="ageVerification" style="font-size:11px;">
                    <input type="checkbox" name="age_verification" value="verified" style="margin-top:8px; width: 15px;" <?php if(!empty($_POST['age_verification'])) { echo 'checked' ;} ?>/>
                    <span style="text-decoration: underline">Ich bin unter 18 Jahre alt.</span> Das Einverständnis meiner Eltern zur Teilnahme an dieser Gewinnspielaktion habe ich eingeholt
                </span>
        </p>
        <p>
                <input type="submit" name="regFormSubmit" id="regFormSubmit" value="Senden" <?php if (isset($disable) && $disable === true) echo ' disabled="disabled"'; ?> />
        </p>

    </form>
    
    <?php if (isset($disable) && $disable === true) { ?>
        
        <form class="appNavigator" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <button class="button backward eight columns" name="currentPage" value="home"><span class="btnLabel">homepage</span></span>
        </form>
    
    <?php }?>
    
</div>
