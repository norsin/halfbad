<?php session_start(); 
header('P3P: CP="NOI ADM DEV COM NAV OUR STP"');
//Get PHP SDK
require_once 'facebook.php';

if(isset($_REQUEST['currentPage'])) {
    $_SESSION['currentPage'] = $_REQUEST['currentPage'];
}

if(!isset($_SESSION['currentPage'])) {
    $_SESSION['currentPage'] = 'home';
    $bodyClass = "page-" . $_SESSION['currentPage'];
} else {
    $bodyClass = "page-" . $_SESSION['currentPage'];
}

?>
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
	<title>Your Page Title Here :)</title>
        <meta name="description" content="description text" />
        <meta property="og:image" content="http://f-bilandia.de/heyne/kitzntusch/images/share.jpg"/>
        <meta property="og:image:secure_url" content="https://f-bilandia.de/heyne/kitzntusch/images/share.jpg">
        <meta property="og:image:type" content="image/jpg">
        <meta property="og:image:width" content="200">
        <meta property="og:image:height" content="200">
        <meta property="og:title" content="title text"/>
        <meta property="og:description" content="description text" />
        <meta property="og:url" content="http://f-bilandia.de/heyne/kitzntusch/index.php"/>
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
                top.location = "https://www.facebook.com/heyne.verlag/app_524473197648879?ref=ts"; 
            }
        </script>
</head>
<body class="<?php echo $bodyClass ?>">

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


<!-- Primary Page Layout
================================================== -->

	<div class="container">
		<div class="heading eleven columns offset-by-four">
			<img src="images/homeTitle.png" class="headerImg" alt="Schwarz oder Weiss - auf welcher Seite stehst du?" />
			<h1 class="header">Schwarz oder Weiss</h1>
			<h2 class="header">auf welcher Seite stehst du?</h2>
		</div>
                <?php if(isset($_SESSION['currentPage'])) {
                    include $_SESSION['currentPage'] . ".php";
                    if($_SESSION['currentPage'] == 'finalpage') {
                        session_destroy();
                    }
                } else {
                    include "home.php";
                }?>
		<script type="text/javascript">
			window.onload = function() {
				FB.Canvas.setAutoGrow();
			}
		</script>
		<div class="footer sixteen columns">
		footer
		</div>
	</div>


<!-- End Document
================================================== -->
</body>
</html>
