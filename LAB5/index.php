<?php
    error_reporting(E_ALL^E_NOTICE^E_WARNING);

    $glowna = "./html/index.html";
    $apollo13 = "./html/apollo13.html";
    $KimJestesmy = "./html/KimJestesmy.html";
    $kolorzmien = "./html/kolorzmien.html";
    $Kontakt = "./html/Kontakt.html";
    $PierwszyLot = "./html/PierwszyLot.html";
    $Uksloneczny = "./html/Uksloneczny.html";
    $video = "./html/video.html";
    /*
    if (file_exists($historia)) {
        echo "The file $historia exists";
    } else {
        echo "The file $historia does not exists";
    }
    */

    if($_GET['idp']=='')$strona='html/index.html';
    if($_GET['idp']=='apollo13')$strona='html/apollo13.html';
    if($_GET['idp']=='PierwszyLot')$strona='html/PierwszyLot.html';
    if($_GET['idp']=='Uklad_sloneczny')$strona='html/Uksloneczny.html';
    if($_GET['idp']=='KimJestesmy')$strona='html/KimJestesmy.html';
    if($_GET['idp']=='Kontakt')$strona='html/Kontakt.html';
    if($_GET['idp']=='kolorzmien')$strona='html/kolorzmien.html';
    if($_GET['idp']=='video')$strona='html/video.html';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
	<meta http-equiv="Content-Language" content="pl" />
	<meta name="Author" content="Jakub Karcz" />
	<link rel= "stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/kolortlo.js" type="text/javascript"></script>
    <script src="js/timedate.js" type="text/javascript"></script>
	<title>Historia lotów kosmicznych</title>
</head>
<body>
	<div id="Tytul"> <h3 style="font-family: Verdana">Historia lotów kosmicznych </h3></div>
	<div id="Menu"><a href="index.php?idp=">Strona Główna</a></div>
	<div id="Menu"><a href="index.php?idp=apollo13">Apollo13</a></div>
	<div id="Menu"><a href="index.php?idp=PierwszyLot">Pierwszy Lot</a></div>
	<div id="Menu"><a href="index.php?idp=Uklad_sloneczny">Układ słoneczny</a></div>
	<div id="Menu"><a href="index.php?idp=KimJestesmy">Kim jestesmy</a></div>
	<div id="Menu"><a href="index.php?idp=Kontakt">Kontakt</a></div>
    <div id="Menu"><a href="index.php?idp=video">Filmy</a></div>
	<div id="Menu"><a href="index.php?idp=kolorzmien">ZmienKolor</a></div>
	
<?php	
include($strona);
?>

<div id="siemson">
<?php

 $nr_indeksu = '164397';
 $nr_grupy ='3';
 echo 'Autor: Jakub Karcz '.$nr_indeksu.' grupa '.$nr_grupy.' <br /><br />';
?>
</div>
</body>
</html>