<!-- /**
* User: Teun van Helvoort
* Date: 5/2/2020
* Time: 2:53 PM
* File: opdracht 3.1.php
-->
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php print "opdracht 2.1.php"; ?></title>
    <link href="../template%20css/template.css" type="text/css" rel="stylesheet">
</head>
<body>
<div id="header">
    <h1><a href="../../index.php">Inlever Opdrachten PHP</a></h1>
</div>
<?php

    $evenement = "Elfstedentocht";
    $fries = "Alvestedetocht";
    $kilometers = 200;
    $actie = "schaatstocht";
    $ijs = "natuurijs";
    $vereniging = "Koninklijke Vereniging De Friesche Elf Steden.";
    $plaatsnaam = "Leeuwarden";
    $provincie = "Friesland";
    $jaar = 1909;
    $keer = 15;
    $aantal = 1;
    $verhaal = "<p> De ".$evenement." (Fries: ".$fries.") is een ".$kilometers." kilometer lange ".$actie." over ".$ijs." die wordt georganiseerd door de ".$vereniging.". ".$plaatsnaam.", de hoofdstad van ".$provincie.", is start- en aankomstplaats. De ".$evenement." is inmidels ".$keer." maal verreden en werd voor het eerst in ".$jaar." gereden en wordt maximaal ".$aantal." keer per winter gehouden.</p>";
    echo $verhaal;

?>

</body>
</html>