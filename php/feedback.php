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
?>