<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/x-icon" href="./rysunki/comp.ico">   
    <meta charset="utf-8">
    <title>Baza pytań egzaminu zawodowego teoretycznego</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style> @import url("./style/styl.css"); </style> 
</head>
<?php
$polacz = mysqli_connect('localhost', 'root', '', 'admin');
mysqli_set_charset($polacz, "utf8");

$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$login = $_POST['login'];
$haslo = $_POST['haslo'];

$sql = "INSERT INTO administratorzy(id, imie, nazwisko, login, haslo) VALUES (null, '$imie', '$nazwisko', '$login', '$haslo');";
if (mysqli_query($polacz, $sql)) {
    echo "Dodano nowego admina <br>";
    echo "<button class='back'><a href='./dodajAdmina.html'>Dodaj kolejnego admina</a></button>";
    echo "<button class='back'><a href='./administratorzy.php'>Zobacz wszystkich</a></button>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($polacz);
    echo "<button class='back'><a href='./dodajAdmina.html'>Powrót do dodawania admina</a></button>";
  } 


?>