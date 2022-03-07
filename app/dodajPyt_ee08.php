<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/x-icon" href="./rysunki/comp.ico">   
    <meta charset="utf-8">
    <title>Baza pytań egzaminu zawodowego teoretycznego</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style> @import url("./style/styl.css"); </style> 
<?php

$pytanie = $_POST['pytanie'];
$odpA =$_POST['odpA'];
$odpB =$_POST['odpB'];
$odpC =$_POST['odpC'];
$odpD =$_POST['odpD'];
$obraz = $_POST['obrazek'];
$poprawna = $_POST['poprawna'];

//echo $pytanie."  ".$odpA."   ";
$polacz = mysqli_connect('localhost', 'root', '', 'pytania');
mysqli_set_charset($polacz, "utf8");

$sql = "INSERT INTO ee08 (nrPyt, pyt, odpA, odpB, odpC, odpD, obraz, poprawna) VALUES (null, '$pytanie', '$odpA', '$odpB', '$odpC','$odpD','$obraz','$poprawna')";
if (mysqli_query($polacz, $sql)) {
    echo "Dodano nowy rekord <br>";
    echo "<button class='back'><a href='./dodaj_ee08.html'>Dodaj kolejne pytanie</a></button>";
    echo "<button class='back'><a href='./przeglad_ee08.php'>Zobacz wszystkie pytania</a></button>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($polacz);
    echo "<button class='back'><a href='./dodaj_ee08.html'>Powrót do dodawania pytania</a></button>";
  }


?>
</head>
</html>