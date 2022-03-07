<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/x-icon" href="./rysunki/comp.ico">   
    <meta charset="utf-8">
    <title>Baza pytań egzaminu zawodowego teoretycznego</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style> @import url("./style/styl.css"); </style> 
</head>
<body>
    <button class="info"><a href="./admin.php">Powrót</a></button>
<p>Tabela pokazuje jakie pytania posiadasz w bazie. <br>
Jeżeli przy obrazku brakuje tekstu nie należy się martwić. Dane pytanie nie posiada obrazka (jest sam tekst).<br>
Pamiętaj o tym w trakcie edycji. Nie ma opcji usuwania pytania. Istnieje 20% szans, że dane pytanie pojawi się ponownie na egzaminie</p>

<?php
$polacz = mysqli_connect('localhost', 'root', '', 'pytania');
mysqli_set_charset($polacz, "utf8");
$sql1 = "SELECT * FROM ee09;";
$dane = mysqli_query($polacz, $sql1);
//$edytowane = mysqli_fetch_array($dane);
//$ile = mysqli_num_rows($dane);

echo "<table class='pytania' border='1'>";
echo "<tr><td>Numer pytania</td><td>Pytanie</td><td>Odpowiedź A</td><td>Odpowiedź B</td><td>Odpowiedź C</td><td>Odpowiedź D</td>";
echo "<td>Ścieżka do obrazka</td><td>Poprawna</td></tr>";
while ($e = mysqli_fetch_array($dane)){
    echo "<form method='POST' action=''>";
    echo "<tr><td>".$e['nrPyt']."</td><td>".$e['pyt']."</td><td>".$e['odpA']."</td><td>".$e['odpB']."</td><td>".$e['odpC']."</td>";
    echo "<td>".$e['odpD']."</td><td><a href='./rysunki/".$e['obraz']."' target='_blank'>".$e['obraz']."</a></td><td>".$e['poprawna']."</td>";
    echo "<td><a href='edytuj_ee09.php?nrPyt=".$e['nrPyt']."'>edytuj</a></tr>";
}
echo "</form></table>";
?>
</body>
</html>