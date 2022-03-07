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
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
$polacz = mysqli_connect('localhost', 'root', '', 'admin');
mysqli_set_charset($polacz, "utf8");
$sql = "DELETE FROM administratorzy WHERE id = $id";

if ($polacz -> query($sql) == TRUE)
{
    echo "Usunięto admina. <br><button class='back'><a href='./administratorzy.php'>Powrót do listy adminów</a></button>";
}
else {
    echo "Błąd usuwania: " . $polacz->error."<br><a href='./administratorzy.php'><button class='back'>Wróc do listy adminów</button></a>";
}
?>
</html>