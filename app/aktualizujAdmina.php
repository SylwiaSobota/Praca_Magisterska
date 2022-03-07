<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
$polacz = mysqli_connect('localhost', 'root', '', 'admin');
mysqli_set_charset($polacz, "utf8");

$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$login = $_POST['login'];
$haslo = $_POST['haslo'];

$sql = "UPDATE administratorzy SET imie='$imie', nazwisko='$nazwisko', login='$login', haslo='$haslo' WHERE id = $id;";
if ($polacz->query($sql) === TRUE) {
    echo "Rekord zaktualizowano <br> <a href='./administratorzy.php'><button>Wróc do listy adminów</button></a>";
  } else {
    echo "Błąd aktualizacji: " . $polacz->error."<br><a href='./administratorzy.php'><button>Wróc do listy adminów</button></a>";
  }



  mysqli_close($polacz);