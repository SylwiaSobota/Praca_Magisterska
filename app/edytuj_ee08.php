<?php
if(isset($_GET['nrPyt'])){
    $nrPyt = $_GET['nrPyt'];
}
$polacz = mysqli_connect('localhost', 'root', '', 'pytania');
mysqli_set_charset($polacz, "utf8");
$sql1 = "SELECT * FROM ee08 WHERE nrPyt=$nrPyt;";
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
        <form method="post" action="przeslij_ee08.php?nrPyt=<?=$edyt['nrPyt']?>" accept-charset="utf-8">
            <table id="edytuj">
                <tr >
                    <td>Pytanie</td><td><input type="text" name="pyt" value="<?=$edyt['pyt']?>" ></td>
                </tr>

                <tr>
                    <td>Odpowiedź A</td><td><input type="text" name="odpA" value="<?=$edyt['odpA']?>"></td>
                </tr>
                <tr>
                    <td>Odpowiedź B</td><td><input type="text" name="odpB" value="<?=$edyt['odpB']?>"></td>
                </tr>
                <tr>
                    <td>Odpowiedź C</td><td><input type="text" name="odpC" value="<?=$edyt['odpC']?>"></td>
                </tr>
                <tr>
                    <td>Odpowiedź D</td><td><input type="text" name="odpD" value="<?=$edyt['odpD']?>"></td>
                </tr>
                <tr>
                    <td>Ścieżka do obrazka</td><td><input type="text" name="obraz" value="<?=$edyt['obraz']?>"></td>
                </tr>
                <tr>
                    <td>Poprawna</td><td><input type="text" name="poprawna" value="<?=$edyt['poprawna']?>" maxlength="1"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="zapisz" value="Zapisz" class="info"></td>
                </tr>
            </table>
        </form>
        <a href="przeglad_ee08.php"><button class="back">Wróć do przeglądu pytań</button></a>
        <?php 
        mysqli_close($polacz);
        ?>
    </body>
</html>