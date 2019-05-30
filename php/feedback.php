<?php
//Hier werden zuerst alle nötige Variablen definiert
$anrede=$_POST['anrede'];
$vorname=$_POST['vorname'];
$nachname=$_POST['nachname'];
$note_inhalt=$_POST['note_inhalt'];
$kreativitaet_note=$_POST['auswertung'];
$hamed_accept=$_POST['hamed_accept'];
$feedback_else=$_POST['feedback_else'];

$message_note_inhalt="";
$message_kreativitaet_note="";
$message_hamed_accept="";

//Hier werden paar Fälle definiert, welche Feedback etwas auswertet
if(isset($note_inhalt)){
    if($note_inhalt == "1"){
        $message_note_inhalt = "Note 1 ist eine super Note, das freut mich, dass es Ihnen den Inhalt gefallen hat";
    }else if($note_inhalt == "2"){
        $message_note_inhalt = "Note 2 ist wirklich auch gut, dankeschön :)";
    }else if($note_inhalt == "3"){
        $message_note_inhalt = "Note 3 ist Mittelwert, aber trotzdem vielen Danke ;)";
    }else if($note_inhalt == "4"){
        $message_note_inhalt = "Note 4 zeigt mir, anscheinend habe ich was nicht richtig gemacht, ich gibe mir mehr Mühe";
    }else if($note_inhalt == "5"){
        $message_note_inhalt = "Note 5 zeigt, dass es Ihnen nicht so besonders gefallen hat, ich muss mir mehr Mühe geben";
    }else if($note_inhalt == "6"){
        $message_note_inhalt = "Note 6 enttäuscht mich ein bisschen, ich werde mit meinem Fehlern kämpfen. Danke trotzdem :)";
    }
}else{
    $note_inhalt = "Es wurde keine Note gegeben! :(";
}

if(isset($kreativitaet_note)){
    if($kreativitaet_note<=30 && $kreativitaet_note>=0){
        $message_kreativitaet_note = "Das heißt, ich bin so schlechter Designer und nicht kreative :(";
    }else if($kreativitaet_note<=60 && $kreativitaet_note>=31){
        $message_kreativitaet_note = "Das ist nicht schlecht, ich bin zufrieden dankeschön :)";
    }else if($kreativitaet_note<=100 && $kreativitaet_note>=61){
        $message_kreativitaet_note = "das ist eine perfekte Note, das motiviert mich weiter so machen :D";
    }
}else {
    $kreativitaet_note = "Es wurde keine Note gegeben! :(";
}

if(isset($hamed_accept)){
    if($hamed_accept == "yes"){
        $message_hamed_accept = "YUPIIIIIIIII ich habe es endlich geschaft, danke für die Chance";
    }else if($hamed_accept == "no"){
        $message_hamed_accept = "kein Problem, ich werde nicht so leicht aufgeben, ich gibe mir mehr Mühe";
    }
}else {
    $hamed_accept = "War das nicht ausreichen, um mir zumindest Ja oder Nein sagen! :(";
}

if(empty($feedback_else)){
    $feedback_else = "Es gab keine weitere Kommentare!";
}

?>

<html>

<head>
    <title>Resultat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
        charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="../css/index.css">
</head>

<body class="feedbackPHP__body">
    <div class="container-fluid">
        <p class="feedback__first-text">Feedback Ergebnis:</p>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md feedbackPHP__col-img">
                        <img class="feedbackPHP__hamed-img"
                            src="../media/myPics/fertig_Bearbeitet_schwarz-weiß-min.png">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md feedbackPHP_col-text">
                        <span>
                            Ich bedanke mich bei Ihnen für Ihr wertvolles Feedback :)
                        </span>
                    </div>
                </div>


            </div>
            <div class="col-md-6">
                <div class="row feedbackPHP__table-rows">
                    <div class="col-6 col-md-5">
                        Anrede:
                    </div>
                    <div class="col-6 feedbackPHP__col6">
                        <?php echo $anrede ?>
                    </div>
                </div>
                <div class="row feedbackPHP__table-rows">
                    <div class="col-6 col-md-5">
                        Vorname:
                    </div>
                    <div class="col-6 feedbackPHP__col6">
                        <?php echo $vorname ?>
                    </div>
                </div>
                <div class="row feedbackPHP__table-rows">
                    <div class="col-6 col-md-5">
                        Nachname:
                    </div>
                    <div class="col-6 feedbackPHP__col6">
                        <?php echo $nachname ?>
                    </div>
                </div>
                <div class="row feedbackPHP__table-rows">
                    <div class="col-6 col-md-5">
                        Inhalt Note:
                    </div>
                    <div class="col-6 feedbackPHP__col6">
                        <?php 
                        echo '<p>' . $note_inhalt . '</p><br>' . $message_note_inhalt;   
                        ?>
                    </div>
                </div>
                <div class="row feedbackPHP__table-rows">
                    <div class="col-6 col-md-5">
                        Kreativität Note:
                    </div>
                    <div class="col-6 feedbackPHP__col6">
                        <?php 
                        echo '<p>' . $kreativitaet_note . '</p><br>' . $message_kreativitaet_note;
                        ?>
                    </div>
                </div>
                <div class="row feedbackPHP__table-rows">
                    <div class="col-6 col-md-5">
                        Hamed Note:
                    </div>
                    <div class="col-6 feedbackPHP__col6">
                        <?php 
                        echo '<p>' . $hamed_accept . '</p><br>' . $message_hamed_accept;
                         ?>
                    </div>
                </div>
                <div class="row feedbackPHP__table-rows">
                    <div class="col-6 col-md-5">
                        Weitere Kommentare:
                    </div>
                    <div class="col-6 feedbackPHP__col6">
                        <?php echo $feedback_else ?>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 20px">
                    <div class="col-6">
                            <a href="../erfolg.html" class="feedbackPHP__bestaetigen">Bestätigen</a>
                    </div>
                    <div class="col-6">
                            <a href="../index.html" class="feedbackPHP__abbrechen">Abbrechen</a>
                    </div>
                </div>
            </div>


        </div>

    </div>
</body>

</html>