<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
$polacz = mysqli_connect('localhost', 'root', '', 'admin');
mysqli_set_charset($polacz, "utf8");

$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$zawod = $_POST['zawod'];
$login = $_POST['login'];
$haslo = $_POST['haslo'];

$sql = "UPDATE uczniowie SET imie='$imie', nazwisko='$nazwisko', zawod='$zawod', login='$login', haslo='$haslo' WHERE id = $id;";
if ($polacz->query($sql === TRUE))
{
    echo "Rekord zaktualizowano<br> <a href='./uczniowie.php'><button>Wróc do listy uczniów</button></a>";
}
else 
{
    echo "Błąd aktualizacji: " . $polacz->error."<br><a href='./uczniowie.php'><button>Wróc do listy uczniów</button></a>";
}



  mysqli_close($polacz);