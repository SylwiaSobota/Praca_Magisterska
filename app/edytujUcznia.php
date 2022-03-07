<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
$polacz = mysqli_connect('localhost', 'root', '', 'admin');
mysqli_set_charset($polacz, "utf8");
$sql1 = "SELECT * FROM uczniowie WHERE id=$id;";
$dane = mysqli_query($polacz, $sql1);
$edyt = mysqli_fetch_array($dane);

?>
<html>
    <head>
        <link rel="icon" type="image/x-icon" href="./rysunki/comp.ico">   
        <meta charset="utf-8">
        <title>Baza pytań egzaminu zawodowego teoretycznego</title>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <style> @import url("./style/styl.css"); </style> 
    </head>
    <body>
        <div id="pytania">
        <form method="post" action="aktualizujUcznia.php?id=<?=$edyt['id']?>" accept-charset="utf-8">
            <table>
                <tr><td>Imie</td><td><input name="imie" value="<?=$edyt['imie']?>"></td></tr>
                <tr><td>Nazwisko</td><td><input name="nazwisko" value="<?=$edyt['nazwisko']?>"></td></tr>
                <tr><td>Zawód</td><td><input name="zawod" value="<?=$edyt['zawod']?>"></td></tr>
                <tr><td>Login</td><td><input name="login" value="<?=$edyt['login']?>"></td></tr>
                <tr><td>Hasło</td><td><input name="haslo" value="<?=$edyt['haslo']?>"></td></tr>
            </table>
            <input type="submit" value="Zaktualizuj" class="info">
        </form>
        </div>
        <button class="info"><a href="./uczniowie.php">Cofnij</a></button>
    </body>
    <?php mysqli_close($polacz); ?>
</html>