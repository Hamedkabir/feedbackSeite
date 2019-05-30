<?php
//Hier werden zuerst alle nötige Variablen definiert
$anrede=$_POST['anrede'];
$vorname=$_POST['vorname'];
$nachname=$_POST['nachname'];
$note_inhalt=$_POST['note_inhalt'];
$kreativitaet_note=$_POST['auswertung'];
$hamed_accept=$_POST['hamed_accept'];
$feedback_else=$_POST['feedback_else'];


//Hier werden paar Fälle definiert, welche Feedback etwas auswertet
if(isset($note_inhalt)){
    if($note_inhalt == "1"){

    }else if($note_inhalt == "2"){

    }else if($note_inhalt == "3"){

    }else if($note_inhalt == "4"){

    }else if($note_inhalt == "5"){

    }else if($note_inhalt == "6"){

    }
}

if(isset($kreativitaet_note)){
    if($kreativitaet_note<=30 && $kreativitaet_note>=0){

    }else if($kreativitaet_note<=60 && $kreativitaet_note>=31){

    }else if($kreativitaet_note<=100 && $kreativitaet_note>=61){

    }
}

if(isset($hamed_accept)){
    if($hamed_accept == "yes"){

    }else if($hamed_accept == "no"){

    }
}

if(isset($feedback_else)){

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
                        <?php echo $note_inhalt ?>
                    </div>
                </div>
                <div class="row feedbackPHP__table-rows">
                    <div class="col-6 col-md-5">
                        Kreativität Note:
                    </div>
                    <div class="col-6 feedbackPHP__col6">
                        <?php echo $kreativitaet_note ?>
                    </div>
                </div>
                <div class="row feedbackPHP__table-rows">
                    <div class="col-6 col-md-5">
                        Hamed Note:
                    </div>
                    <div class="col-6 feedbackPHP__col6">
                        <?php echo $hamed_accept ?>
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
                            <!-- <input name="bestaetigen" class="feedbackPHP__button-bestaetigen" type="button" value="Bestätigen"> -->
                            <a href="../erfolg.html" class="feedbackPHP__bestaetigen">Bestätigen</a>
                    </div>
                    <div class="col-6">
                            <!-- <input name="abbrechen" class="feedbackPHP__button-abbrechen" type="button" value="Abbrechen"> -->
                            <a href="../index.html" class="feedbackPHP__abbrechen">Abbrechen</a>
                    </div>
                </div>
            </div>


        </div>

    </div>
</body>

</html>