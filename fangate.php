<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->

	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>CBT - Half Bad</title>
        <meta name="description" content="description text" />
        <meta property="og:image" content="http://f-bilandia.de/cbt/halfbad/images/share.png"/>
        <meta property="og:image:secure_url" content="https://f-bilandia.de/cbt/halfbad/images/share.png">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="200">
        <meta property="og:image:height" content="200">
        <meta property="og:title" content="title text"/>
        <meta property="og:description" content="description text" />
        <meta property="og:url" content="http://f-bilandia.de/cbt/halfbad/index.php"/>
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="stylesheets/base.css">
	<link rel="stylesheet" href="stylesheets/skeleton.css">
	<link rel="stylesheet" href="stylesheets/layout.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

	<!-- Scripts 
	================================================== -->
        <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" src="js/quiz.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
        <script type="text/javascript">
            if (top == self) 
            { 
                top.location = "https://www.facebook.com/pages/bilandia-Test/318672431558398?id=318672431558398&sk=app_533863763394990?ref=ts";
            }
        </script>
</head>
<body> 
<?php
	//Get PHP SDK
	require_once 'facebook.php';
	// Create our Application instance.
	$facebook = new Facebook( array('appId' => '533863763394990',
	'secret' => 'e5533a476c6aa4193ec3c9044f566ff0', 'cookie' => true, ));
	$signed_request = $facebook -> getSignedRequest();
	$like_status = $signed_request["page"]["liked"];
	if ($like_status == "1") {
	//If the page is liked then display full app.

        header("location: index.php");

	} else { ?>

        <div id="fb-root"></div>
        <script type="text/javascript">
            window.fbAsyncInit = function() {
                //Your app details here
                FB.init({appId: '533863763394990', status: true, cookie: true, xfbml: true});
                //Resize the iframe when needed
                FB.Canvas.setAutoResize();
            };
    
            //Load the SDK asynchronously
            (function() {
                var e = document.createElement('script'); e.async = true;
                e.src = document.location.protocol +
                  '//connect.facebook.net/en_US/all.js';
                document.getElementById('fb-root').appendChild(e);
            }());
        </script>

        <!-- Fangate-Bild bitte einsetzen -->
        <div class="fangate">
        </div>
	<script type="text/javascript">
		window.onload = function() {
			FB.Canvas.setAutoGrow();
		}
	</script>
<?php } ?>

<!-- End Document
================================================== -->
</body>
</html>
