<?php

    //POST-ARRAY UITLEZEN
    $voornaam = $_POST['voornaam'];
    $tussenvoelgsel = $_POST['tussenvoegsel'];
    $achternaam = $_POST['achternaam'];
    $mailadres = $_POST['mailadres'];

    //DATA IN DATABASE STOPPEN
    //1. VERBINDING MAKEN MET DE DATABASE
    $dbc = mysqli_connect('localhost','root','','25076_db') or die ('Error connecting.');
    //2. OPDRACHT (QUERY )SCHRIJVEN VOOR DE DATABASE
    $query = "INSERT INTO opdracht_nieuwsbrief VALUES(0,'$voornaam', '$tussenvoelgsel','$achternaam','$mailadres')";
    //QUERY UITVOEREN
    $result = mysqli_query($dbc,$query) or die('Error trying to setup query');
    //4. VERBINDING VERBREKEN
    mysqli_close($dbc);
    //BEVESTIGEN DAT DATA IN DATABASE STAAT
    if ($result){
        echo 'de volgende gegevens zijn aan de database toegevoegd:<br>';
        echo $voornaam . '<br>';
        echo $tussenvoelgsel . '<br>';
        echo $achternaam . '<br>';
        echo $mailadres . '<br>';
    }else{
        echo 'Sorry, er is iets misgegaan. Probeer het opnieuw.';
    }
