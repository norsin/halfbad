<?php
    $resultCharacters = array(
        "profile-1" => array(
            "name" => "Du bist ein Taktiker!",
            "text" => "Wow, du weißt ganz genau, wie du an dein Ziel kommst! Bei Selbstwahrnehmung, Risiko-Kompensation oder Gruppenpolarisierung macht dir so schnell keiner mehr etwas vor. Falls du dein Handeln noch perfektionieren willst, hilft dir der aktuelle Titel „Warum uns das Denken nicht in den Kopf will“ auf jeden Fall weiter.
Am besten stürzt du dich zuerst auf das Kapitel „So treffen Sie im Zweifel immer die richtige  Entscheidung“."
        ),
        "profile-2" => array(
            "name" => "Du bist eher der spontane Typ!",
            "text" => "Du bist eher der Bauch- statt Kopftyp, denn deine Emotionen kommen dir beim Denken öfter in die Quere. Trotzdem schreckst du nicht davor zurück, Dinge anzupacken und selbst in die Hand zu nehmen.
Wenn du lernen willst, wie du manchmal entspannter an dein Ziel kommst, hilft  dir das aktuelle Buch „Warum uns das Denken nicht in den Kopf will“ von Dr. Volker Kitz und Dr. Manuel Tusch auf jeden Fall weiter.
Am besten stürzt du dich zuerst auf das Kapitel „Warum Sie das Gras öfter auch mal in der Wüste  wachsen hören sollten“."
        ),
        "profile-3" => array(
            "name" => "Du bist der Entschlossene!",
            "text" => "Was nicht passt, wird passend gemacht! Zur Not auch ohne Rücksicht auf das Umfeld. Vielleicht solltest du dir ein paar Tricks aus „Warum uns das Denken nicht in den Kopf will“ von Dr. Volker Kitz und Dr. Manuel Tusch abschauen. Damit kommst du nicht nur zu deinem Ziel, sondern vermeidest künftig vielleicht so manchen Konflikt. 
Am besten stürzt du dich zuerst auf das Kapitel  „Welche Pfeife Sie rauchen sollten, damit andere  danach tanzen“."
        )
    )
?>

<h2 class="pinkhead"><?php echo $resultCharacters[$_SESSION['gameResult']]['name'] ?></h2>
<p class="win"><?php echo $resultCharacters[$_SESSION['gameResult']]['text'] ?></p>
<form class="appNavigator" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <button id="goToGame" name="currentPage" value="finalpage" class="button winbtn">ZUM GEWINNSPIEL</button>
</form>
<a href="http://www.facebook.com/sharer/sharer.php?s=100&p[url]=http://f-bilandia.de/heyne/kitzntusch/weiche.php&p[images][0]=http://f-bilandia.de/heyne/kitzntusch/images/share.jpg&p[title]=Warum%20uns%20das%20Denken%20nicht%20in%20den%20Kopf%20will&p[summary]=Wer%20wei%C3%9F,%20wie%20andere%20ticken,%20gelangt%20schneller%20ans%20Ziel%20und%20bekommt%20genau%20das,%20was%20er%20will!%20Teste%20jetzt%20in%20unserem%20Quiz,%20ob%20du%20schon%20das%20Beste%20aus%20deinem%20Kopf%20herausholst%20und%20gewinne%20ein%20Exemplar%20von%20%22Warum%20uns%20das%20Denken%20nicht%20in%20den%20Kopf%20will%22%20der%20beiden%20Erfolgsautoren%20Dr.%20Volker%20Kitz%20und%20Dr.%20Manuel%20Tusch!" class="button sharebtn" target="_blank">TEILEN</a>
<?php session_destroy() ?>