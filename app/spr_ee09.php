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
<?php
$odp = array(null);
$pyt = array(null);
$punkty = 0;
$odp[0] = ($_POST['odp0']); $odp[1] = $_POST['odp1'];   $odp[2] = $_POST['odp2'];   $odp[3] = $_POST['odp3'];
$odp[4] = $_POST['odp4'];   $odp[5] = $_POST['odp5'];   $odp[6] = $_POST['odp6'];   $odp[7] = $_POST['odp7'];
$odp[8] = $_POST['odp8'];   $odp[9] = $_POST['odp9'];   $odp[10] = $_POST['odp10']; $odp[11] = $_POST['odp11'];
$odp[12] = $_POST['odp12']; $odp[13] = $_POST['odp13']; $odp[14] = $_POST['odp14']; $odp[15] = $_POST['odp15']; 
$odp[16] = $_POST['odp16']; $odp[17] = $_POST['odp17']; $odp[18] = $_POST['odp18']; $odp[19] = $_POST['odp19'];
$odp[20] = $_POST['odp20']; $odp[21] = $_POST['odp21']; $odp[22] = $_POST['odp22']; $odp[23] = $_POST['odp23']; 
$odp[24] = $_POST['odp24']; $odp[25] = $_POST['odp25']; $odp[26] = $_POST['odp26']; $odp[27] = $_POST['odp24']; 
$odp[28] = $_POST['odp28']; $odp[29] = $_POST['odp29']; $odp[30] = $_POST['odp30']; $odp[31] = $_POST['odp31']; 
$odp[32] = $_POST['odp32']; $odp[33] = $_POST['odp33']; $odp[34] = $_POST['odp34']; $odp[35] = $_POST['odp35']; 
$odp[36] = $_POST['odp36']; $odp[37] = $_POST['odp37']; $odp[38] = $_POST['odp38']; $odp[39] = $_POST['odp39'];

$pyt[0] = $_POST['pyt0'];   $pyt[1] = $_POST['pyt1'];   $pyt[2] = $_POST['pyt2'];   $pyt[3] = $_POST['pyt3'];
$pyt[4] = $_POST['pyt4'];   $pyt[5] = $_POST['pyt5'];   $pyt[6] = $_POST['pyt6'];   $pyt[7] = $_POST['pyt7'];
$pyt[8] = $_POST['pyt8'];   $pyt[9] = $_POST['pyt9'];   $pyt[10] = $_POST['pyt10']; $pyt[11] = $_POST['pyt11'];
$pyt[12] = $_POST['pyt12']; $pyt[13] = $_POST['pyt13']; $pyt[14] = $_POST['pyt14']; $pyt[15] = $_POST['pyt15']; 
$pyt[16] = $_POST['pyt16']; $pyt[17] = $_POST['pyt17']; $pyt[18] = $_POST['pyt18']; $pyt[19] = $_POST['pyt19'];
$pyt[20] = $_POST['pyt20']; $pyt[21] = $_POST['pyt21']; $pyt[22] = $_POST['pyt22']; $pyt[23] = $_POST['pyt23']; 
$pyt[24] = $_POST['pyt24']; $pyt[25] = $_POST['pyt25']; $pyt[26] = $_POST['pyt26']; $pyt[27] = $_POST['pyt24']; 
$pyt[28] = $_POST['pyt28']; $pyt[29] = $_POST['pyt29']; $pyt[30] = $_POST['pyt30']; $pyt[31] = $_POST['pyt31']; 
$pyt[32] = $_POST['pyt32']; $pyt[33] = $_POST['pyt33']; $pyt[34] = $_POST['pyt34']; $pyt[35] = $_POST['pyt35']; 
$pyt[36] = $_POST['pyt36']; $pyt[37] = $_POST['pyt37']; $pyt[38] = $_POST['pyt38']; $pyt[39] = $_POST['pyt39'];

$polaczenie = mysqli_connect('localhost', 'root', '', 'pytania');
mysqli_set_charset($polaczenie, "utf8");
for($t =0; $t<40; $t++){
    $pytanie = $pyt[$t];
    $zapyt = mysqli_query($polaczenie, "SELECT * FROM ee09 WHERE nrPyt='$pytanie'");
    $wynik = mysqli_fetch_array($zapyt);
    if ($wynik['poprawna'] == $odp[$t])
        $punkty=$punkty+1;
}
$procent = ($punkty/40)*100;
echo "<div id='wynik'>";
if($punkty <20){
echo "<h1 style='color:red'>Egzamin nie zdany<br>Uzyskałeś ".$punkty."/40 punktów (".$procent."%).</h1>";}
else
echo "<h1 style='color:green'>Egzamin zdany. Gratulacje!<br>Uzyskałeś ".$punkty."/40 punktów (".$procent."%).</h1>";
echo "</div>";
echo "<div class='srodek2'><button id='pop' class='back'>Pokaż poprawne odpowiedzi</button>";
echo "<button class='back'><a href='./e12.php'>Wykonaj test jeszcze raz</a></button>";
echo "<button class='back'><a href='./uczen.html'>Powrót do strony głównej</a></button></div><div id='poprawne'>";
for($r =0; $r<40; $r++){
    $pytanie = $pyt[$r];
    $pytNr = $r + 1;
    $zapyt = mysqli_query($polaczenie, "SELECT * FROM ee09 WHERE nrPyt='$pytanie'");
    $wynik = mysqli_fetch_array($zapyt);
    /*if ($wynik['poprawna'] == $odp[$r])
        $punkty=$punkty+1;*/
    echo "<div class='pytanie'>";
     echo "<p class='pyt'>".$pytNr.". ".$wynik['pyt']."</p>"; 
     if($wynik['poprawna'] == 'A' && $odp[$r] == 'A')
     {
        echo "<label style='background-color: green' class='odp1' name='A' value='A'>A. ".$wynik['odpA']."</label>";
        echo "<label class='odp1' name='B' value='B'>B. ".$wynik['odpB']."</label>";
        echo "<label class='odp1' name='C' value='C'>C. ".$wynik['odpC']."</label>";
        echo "<label class='odp1' name='D' value='D'>D. ".$wynik['odpD']."</label>";
     }
     else if ($wynik['poprawna'] == 'A' && $odp[$r] == 'B')
     {
        echo "<label style='background-color:green' class='odp1' name='A' value='A'>A. ".$wynik['odpA']."</label>";
        echo "<label style='background-color:red' class='odp1' name='B' value='B'>B. ".$wynik['odpB']."</label>";
        echo "<label class='odp1' name='C' value='C'>C. ".$wynik['odpC']."</label>";
        echo "<label class='odp1' name='D' value='D'>D. ".$wynik['odpD']."</label>";
     }
     else if ($wynik['poprawna'] == 'A' && $odp[$r] == 'C')
     {
        echo "<label style='background-color:green'  class='odp1' name='A' value='A'>A. ".$wynik['odpA']."</label>";
        echo "<label class='odp1' name='B' value='B'>B. ".$wynik['odpB']."</label>";
        echo "<label style='background-color:red' class='odp1' name='C' value='C'>C. ".$wynik['odpC']."</label>";
        echo "<label class='odp1' name='D' value='D'>D. ".$wynik['odpD']."</label>";
     }
     else if ($wynik['poprawna'] == 'A' && $odp[$r] == 'D')
     {
        echo "<label style='background-color:green' class='odp1' name='A' value='A'>A. ".$wynik['odpA']."</label>";
        echo "<label class='odp1' name='B' value='B'>B. ".$wynik['odpB']."</label>";
        echo "<label class='odp1' name='C' value='C'>C. ".$wynik['odpC']."</label>";
        echo "<label style='background-color:red' class='odp1' name='D' value='D'>D. ".$wynik['odpD']."</label>";
     }
     else if ($wynik['poprawna'] == 'A' && $odp[$r] == null)
     {
        echo "<label style='background-color:green' class='odp1' name='A' value='A'>A. ".$wynik['odpA']."</label>";
        echo "<label class='odp1' name='B' value='B'>B. ".$wynik['odpB']."</label>";
        echo "<label class='odp1' name='C' value='C'>C. ".$wynik['odpC']."</label>";
        echo "<label class='odp1' name='D' value='D'>D. ".$wynik['odpD']."</label>";
     }
     else if($wynik['poprawna'] == 'B' && $odp[$r] == 'A')
     {
        echo "<label style='background-color: red' class='odp1' name='A' value='A'>A. ".$wynik['odpA']."</label>";
        echo "<label style='background-color: green' class='odp1' name='B' value='B'>B. ".$wynik['odpB']."</label>";
        echo "<label class='odp1' name='C' value='C'>C. ".$wynik['odpC']."</label>";
        echo "<label class='odp1' name='D' value='D'>D. ".$wynik['odpD']."</label>";
     }
     else if ($wynik['poprawna'] == 'B' && $odp[$r] == 'B')
     {
        echo "<label class='odp1' name='A' value='A'>A. ".$wynik['odpA']."</label>";
        echo "<label style='background-color:green' class='odp1' name='B' value='B'>B. ".$wynik['odpB']."</label>";
        echo "<label class='odp1' name='C' value='C'>C. ".$wynik['odpC']."</label>";
        echo "<label class='odp1' name='D' value='D'>D. ".$wynik['odpD']."</label>";
     }
     else if ($wynik['poprawna'] == 'B' && $odp[$r] == 'C')
     {
        echo "<label class='odp1' name='A' value='A'>A. ".$wynik['odpA']."</label>";
        echo "<label style='background-color:green' class='odp1' name='B' value='B'>B. ".$wynik['odpB']."</label>";
        echo "<label style='background-color:red' class='odp1' name='C' value='C'>C. ".$wynik['odpC']."</label>";
        echo "<label class='odp1' name='D' value='D'>D. ".$wynik['odpD']."</label>";
     }
     else if ($wynik['poprawna'] == 'B' && $odp[$r] == 'D')
     {
        echo "<label class='odp1' name='A' value='A'>A. ".$wynik['odpA']."</label>";
        echo "<label style='background-color:green' class='odp1' name='B' value='B'>B. ".$wynik['odpB']."</label>";
        echo "<label class='odp1' name='C' value='C'>C. ".$wynik['odpC']."</label>";
        echo "<label style='background-color:red' class='odp1' name='D' value='D'>D. ".$wynik['odpD']."</label>";
     }
     else if ($wynik['poprawna'] == 'B' && $odp[$r] == null)
     {
        echo "<label class='odp1' name='A' value='A'>A. ".$wynik['odpA']."</label>";
        echo "<label style='background-color:green' class='odp1' name='B' value='B'>B. ".$wynik['odpB']."</label>";
        echo "<label class='odp1' name='C' value='C'>C. ".$wynik['odpC']."</label>";
        echo "<label class='odp1' name='D' value='D'>D. ".$wynik['odpD']."</label>";
     }     
     else if($wynik['poprawna'] == 'C' && $odp[$r] == 'A')
     {
        echo "<label style='background-color: red' class='odp1' name='A' value='A'>A. ".$wynik['odpA']."</label>";
        echo "<label class='odp1' name='B' value='B'>B. ".$wynik['odpB']."</label>";
        echo "<label style='background-color: green' class='odp1' name='C' value='C'>C. ".$wynik['odpC']."</label>";
        echo "<label class='odp1' name='D' value='D'>D. ".$wynik['odpD']."</label>";
     }
     else if ($wynik['poprawna'] == 'C' && $odp[$r] == 'B')
     {
        echo "<label class='odp1' name='A' value='A'>A. ".$wynik['odpA']."</label>";
        echo "<label style='background-color:red' class='odp1' name='B' value='B'>B. ".$wynik['odpB']."</label>";
        echo "<label style='background-color: green' class='odp1' name='C' value='C'>C. ".$wynik['odpC']."</label>";
        echo "<label class='odp1' name='D' value='D'>D. ".$wynik['odpD']."</label>";
     }
     else if ($wynik['poprawna'] == 'C' && $odp[$r] == 'C')
     {
        echo "<label class='odp1' name='A' value='A'>A. ".$wynik['odpA']."</label>";
        echo "<label class='odp1' name='B' value='B'>B. ".$wynik['odpB']."</label>";
        echo "<label style='background-color:green' class='odp1' name='C' value='C'>C. ".$wynik['odpC']."</label>";
        echo "<label class='odp1' name='D' value='D'>D. ".$wynik['odpD']."</label>";
     }
     else if ($wynik['poprawna'] == 'C' && $odp[$r] == 'D')
     {
        echo "<label class='odp1' name='A' value='A'>A. ".$wynik['odpA']."</label>";
        echo "<label class='odp1' name='B' value='B'>B. ".$wynik['odpB']."</label>";
        echo "<label style='background-color:green' class='odp1' name='C' value='C'>C. ".$wynik['odpC']."</label>";
        echo "<label style='background-color:red' class='odp1' name='D' value='D'>D. ".$wynik['odpD']."</label>";
     }
     else if ($wynik['poprawna'] == 'C' && $odp[$r] == null)
     {
        echo "<label class='odp1' name='A' value='A'>A. ".$wynik['odpA']."</label>";
        echo "<label class='odp1' name='B' value='B'>B. ".$wynik['odpB']."</label>";
        echo "<label style='background-color:green' class='odp1' name='C' value='C'>C. ".$wynik['odpC']."</label>";
        echo "<label class='odp1' name='D' value='D'>D. ".$wynik['odpD']."</label>";
     }
     
     else if($wynik['poprawna'] == 'D' && $odp[$r] == 'A')
     {
        echo "<label style='background-color: red' class='odp1' name='A' value='A'>A. ".$wynik['odpA']."</label>";
        echo "<label class='odp1' name='B' value='B'>B. ".$wynik['odpB']."</label>";
        echo "<label class='odp1' name='C' value='C'>C. ".$wynik['odpC']."</label>";
        echo "<label style='background-color: green' class='odp1' name='D' value='D'>D. ".$wynik['odpD']."</label>";
     }
     else if ($wynik['poprawna'] == 'D' && $odp[$r] == 'B')
     {
        echo "<label class='odp1' name='A' value='A'>A. ".$wynik['odpA']."</label>";
        echo "<label style='background-color:red' class='odp1' name='B' value='B'>B. ".$wynik['odpB']."</label>";
        echo "<label class='odp1' name='C' value='C'>C. ".$wynik['odpC']."</label>";
        echo "<label style='background-color: green' class='odp1' name='D' value='D'>D. ".$wynik['odpD']."</label>";
     }
     else if ($wynik['poprawna'] == 'D' && $odp[$r] == 'C')
     {
        echo "<label class='odp1' name='A' value='A'>A. ".$wynik['odpA']."</label>";
        echo "<label class='odp1' name='B' value='B'>B. ".$wynik['odpB']."</label>";
        echo "<label style='background-color:red' class='odp1' name='C' value='C'>C. ".$wynik['odpC']."</label>";
        echo "<label style='background-color: green' class='odp1' name='D' value='D'>D. ".$wynik['odpD']."</label>";
     }
     else if ($wynik['poprawna'] == 'D' && $odp[$r] == 'D')
     {
        echo "<label class='odp1' name='A' value='A'>A. ".$wynik['odpA']."</label>";
        echo "<label class='odp1' name='B' value='B'>B. ".$wynik['odpB']."</label>";
        echo "<label class='odp1' name='C' value='C'>C. ".$wynik['odpC']."</label>";
        echo "<label style='background-color:green' class='odp1' name='D' value='D'>D. ".$wynik['odpD']."</label>";
     }
     else if ($wynik['poprawna'] == 'D' && $odp[$r] == null)
     {
        echo "<label class='odp1' name='A' value='A'>A. ".$wynik['odpA']."</label>";
        echo "<label class='odp1' name='B' value='B'>B. ".$wynik['odpB']."</label>";
        echo "<label class='odp1' name='C' value='C'>C. ".$wynik['odpC']."</label>";
        echo "<label style='background-color:green' class='odp1' name='D' value='D'>D. ".$wynik['odpD']."</label>";
     }
    if ($wynik['obraz'] != null)
    {
      echo "<img src='./rysunki/".$wynik['obraz']."' alt= 'Rysunek do zadania'>";
    }
}
echo "</div>";

?>
<script>
$(document).ready(function(){
    $("div#poprawne").hide();
    $("div#wynik").show();
})
$(document).ready(function(){
    $("button#pop").click(function(){
        $("div#poprawne").show();
    });
})
</script>
</body>
</html>