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
    <button class="back"><a href="./admin.php">Powrót do strony głównej</a></button>
    <button class="back"><a href="./dodajAdmina.html">Dodaj nowego administratora</a></button><br>
    <?php
    $polacz = mysqli_connect('localhost', 'root', '', 'admin');
    mysqli_set_charset($polacz, "utf8");
    $sql1 = "SELECT * FROM administratorzy;";
    $dane = mysqli_query($polacz, $sql1);
    echo "<table class='pytania' border='1'>";
    echo "<tr><td>Id</td><td>Imię</td><td>Nazwisko</td><td>Login</td><td>Hasło</td><td></td><td></td></tr>";
    while ($e = mysqli_fetch_array($dane))
    {
        echo "<tr><td>".$e['id']."</td><td>".$e['imie']."</td><td>".$e['nazwisko']."</td><td>".$e['login']."</td>";
        echo "<td>".$e['haslo']."</td><td><a href='edytujAdmina.php?id=".$e['id']."'>Edytuj</a></td><td>";
        echo "<a href='usunAdmina.php?id=".$e['id']."'>Usuń</a></td></tr>";
    }


?>
</body>
<?php mysqli_close($polacz); ?>
</html>