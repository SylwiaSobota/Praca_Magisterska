<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/x-icon" href="./rysunki/comp.ico">   
    <meta charset="utf-8">
    <title>Baza pytań egzaminu zawodowego teoretycznego</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style> @import url("./style/styl.css"); </style> 
<?php 
if(isset($_GET['nrPyt'])){
    $nrPyt = $_GET['nrPyt'];
}
$polacz = mysqli_connect('localhost', 'root', '', 'pytania');
mysqli_set_charset($polacz, "utf8");

    $pyt = $_POST['pyt'];
    $odpA = $_POST['odpA'];
    $odpB = $_POST['odpB'];
    $odpC = $_POST['odpC'];
    $odpD = $_POST['odpD'];
    $obraz = $_POST['obraz'];
    $poprawna = $_POST['poprawna'];
    $sqlUpdate = "UPDATE ee09 SET pyt = '$pyt', odpA = '$odpA', odpB='$odpB', odpC='$odpC', odpD='$odpD', obraz='$obraz', poprawna='$poprawna' WHERE nrPyt = $nrPyt";
    if ($polacz->query($sqlUpdate) === TRUE) {
        echo "Rekord zaktualizowano <br> <a href='przeglad_ee09.php'><button class='back'>Wróc do przeglądu pytań</button></a>";
      } else {
        echo "Błąd aktualizacji: " . $polacz->error."<a href='przeglad_ee09.php'><button class='back'>Wróc do przeglądu pytań</button></a>";
      }
    //echo "zaktualizowano dane na ".$pyt;


?>
</head>
</html>
