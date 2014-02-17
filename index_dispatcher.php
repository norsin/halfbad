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
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
        <title>Warum uns das Denken nicht in den Kopf will</title>
        <meta name="description" content="Wer weiß, wie andere ticken, gelangt schneller ans Ziel und bekommt genau das, was er will! Teste jetzt in unserem Quiz, ob du schon das Beste aus deinem Kopf herausholst und gewinne ein Exemplar von "Warum uns das Denken nicht in den Kopf will" der beiden Erfolgsautoren Dr. Volker Kitz und Dr. Manuel Tusch!" />
        <link rel="image_src" href="">
        <meta property="og:image" content="http://f-bilandia.de/heyne/kitzntusch/images/share.jpg"/>
        <meta property="og:image:secure_url" content="https://f-bilandia.de/heyne/kitzntusch/images/share.jpg">
        <meta property="og:image:type" content="image/jpg">
        <meta property="og:image:width" content="200">
        <meta property="og:image:height" content="200">
        <meta property="og:title" content="Warum uns das Denken nicht in den Kopf will"/>
        <meta property="og:description" content="Jetzt Fan werden und mehr aus deinem Kopf herausholen!" />
        <meta property="og:url" content="http://f-bilandia.de/heyne/kitzntusch/index.php"/>
        <link rel="stylesheet" href="css/frameset.css">
        <link rel="stylesheet" href="css/quiz.css">
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
                FB.init({appId: '1438987286314933', status: true, cookie: true, xfbml: true});
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
        <div class="wrapper">
            <div class="header fourCol">
                <h1>Warum uns das <span class="emphasis">Denken</span> nicht in den Kopf will</h1>
            </div>
            <div class="content fourCol">
                <?php if(isset($_SESSION['currentPage'])) {
                    include $_SESSION['currentPage'] . ".php";
                    if($_SESSION['currentPage'] == 'finalpage') {
                        session_destroy();
                    }
                } else {
                    include "home.php";
                }?>
            </div>
            <script type="text/javascript">
                window.onload = function() {
                    FB.Canvas.setAutoGrow();
                }
            </script>
        </div>

<p class="impressum">Veranstalter des Gewinnspiels ist allein der Heyne Verlag in der Verlagsgruppe Random House. Das Gewinnspiel steht in keiner Verbindung zu Facebook und wird in keiner Weise von Facebook gesponsert, unterstützt oder organisiert. – <a href="http://www.randomhouse.de/impressum.    jsp" target="_blank">Impressum</a></p>
    </body>
</html>
