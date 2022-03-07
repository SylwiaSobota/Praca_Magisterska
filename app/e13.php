<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/x-icon" href="./rysunki/comp.ico">   
    <meta charset="utf-8">
    <title>Baza pytań egzaminu zawodowego teoretycznego</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style> @import url("./style/styl.css"); </style> 
    <script type="text/javascript">
var minuta = 60;
var sekunda = 1;
var koniecegzaminu = 0;
var koniecczasu = 0;

function odliczanie()
{
	if(minuta<=0&&sekunda<=0)
	{ 
		document.getElementById('zegar1').innerHTML='Koniec czasu - nastąpi przekierowanie do strony z wynikami';
		koniecczasu = 1;
		document.getElementById("formegzamin").submit();
	}

	sekunda=sekunda-1;
	if (sekunda<0) {sekunda=59; minuta=minuta-1;}
	if (minuta<0) {minuta=59;}

	if(minuta>=0&&sekunda>=0)
	{
		document.getElementById('zegar1').innerHTML='Czas do zakończenia egzaminu &rarr; '+minuta+' min '+sekunda+' sek' ;
		//document.getElementById('zegar2').innerHTML='Czas jaki pozostał do zakończenia egzaminu &rarr; '+minuta+' min '+sekunda+' sek' ;
		setTimeout("odliczanie()",1000);
	} 
}
</script>
    <script>window.onload = odliczanie;</script>
</head>
<a href="./podstawa2012.html"><button class="info">Powrót</button></a><br>
<!--<form>
  <button class="nastepne" type="submit" name="nastepne"> Następne pytanie </button>
</form>-->
<?php 
   $polaczenie = mysqli_connect('localhost', 'root', '', 'pytania');
  mysqli_set_charset($polaczenie, "utf8");

  $iloscPytan = mysqli_query($polaczenie, 'SELECT * FROM e13');
  $maxPyt = mysqli_num_rows($iloscPytan);
   
    $numer = rand(1,$maxPyt);
    $tab[5]= array(null, null, null, null, null);
  
    for ($j=0; $j<40; $j++)
    {
      $numer = rand(1,$maxPyt);
      $tab[$j] = $numer;
      for ($i = 10; $i<$j; $i++)
      {
        if($tab[$i]==$tab[$j])
        {
          $tab[$j] = rand(1,$maxPyt);
          $j=-1;
        }
      }
    }
    echo "<div class='zegar' id='zegar1'></div>";
    echo "<br>";
    echo "<div id='przyciski'>";
    for ($s=0; $s<40;$s++)
    {
      $b = $s+1;
      echo "<label id='kolejnePyt' class='kolejnePyt".$s."' value='".$s."' name='kolejne'>".$b."</label>";
    
    }
    echo "</div><br><br>";
       
for ($t=0;$t<40;$t++)
{  
  $pyt = $tab[$t];
       $sql = "SELECT * FROM e13 WHERE nrPyt ='$pyt'";
       $zapyt = mysqli_query($polaczenie,  $sql);
       $wynik = mysqli_fetch_array($zapyt);
    $poprawna[$t] = $wynik['poprawna'];
    $pyt = $t +1;
    echo "<div class='pytanie' id='".$t."'>";
     echo "<p class='pyt'>".$pyt.". ".$wynik['pyt']."</p><form id='formegzamin' method='post' action='./spr_e13.php'>"; 
     echo "<label id='odp".$t."A' class='odp' name='A' value='A'>A. ".$wynik['odpA']."</label>";
     echo "<label id='odp".$t."B' class='odp' name='B' value='B'>B. ".$wynik['odpB']."</label>";
     echo "<label id='odp".$t."C' class='odp' name='C' value='C'>C. ".$wynik['odpC']."</label>";
     echo "<label id='odp".$t."D' class='odp' name='D' value='D'>D. ".$wynik['odpD']."</label>";
     echo "<input type='hidden' id='odpZaz".$t."' name='odp".$t."'>";
     echo "<input type='hidden' id='pytanieBaza' name='pyt".$t."' value='".$tab[$t]."'><br>";
     
     
     if ($wynik['obraz'] != null)
     {
       echo "<img src='./rysunki/".$wynik['obraz']."' alt= 'Rysunek do zadania'>";
     }
     echo "</div>";
    }
    echo "<input type='submit' id='zakoncz' value='Zakończ egzamin' class='end'></form><br>";
?>
<script type="text/javascript">

$(document).ready(function(){
  $("div#0").show();
    $("div#1").hide(); $("div#2").hide(); $("div#3").hide(); $("div#4").hide(); $("div#5").hide();
    $("div#6").hide(); $("div#7").hide(); $("div#8").hide(); $("div#9").hide(); $("div#10").hide();
    $("div#11").hide(); $("div#12").hide(); $("div#13").hide(); $("div#14").hide(); $("div#15").hide();
    $("div#16").hide(); $("div#17").hide(); $("div#18").hide(); $("div#19").hide(); $("div#20").hide();
    $("div#21").hide(); $("div#22").hide(); $("div#23").hide(); $("div#24").hide(); $("div#25").hide();
    $("div#26").hide(); $("div#27").hide(); $("div#28").hide(); $("div#29").hide(); $("div#30").hide();
    $("div#31").hide(); $("div#32").hide(); $("div#33").hide(); $("div#34").hide(); $("div#35").hide();
    $("div#36").hide(); $("div#37").hide(); $("div#38").hide(); $("div#39").hide();
  $("label.kolejnePyt0").click(function(){
    if($('label.kolejnePyt0').attr("value") == 0){
    $("div#0").show();
    $("div#1").hide(); $("div#2").hide(); $("div#3").hide(); $("div#4").hide(); $("div#5").hide();
    $("div#6").hide(); $("div#7").hide(); $("div#8").hide(); $("div#9").hide(); $("div#10").hide();
    $("div#11").hide(); $("div#12").hide(); $("div#13").hide(); $("div#14").hide(); $("div#15").hide();
    $("div#16").hide(); $("div#17").hide(); $("div#18").hide(); $("div#19").hide(); $("div#20").hide();
    $("div#21").hide(); $("div#22").hide(); $("div#23").hide(); $("div#24").hide(); $("div#25").hide();
    $("div#26").hide(); $("div#27").hide(); $("div#28").hide(); $("div#29").hide(); $("div#30").hide();
    $("div#31").hide(); $("div#32").hide(); $("div#33").hide(); $("div#34").hide(); $("div#35").hide();
    $("div#36").hide(); $("div#37").hide(); $("div#38").hide(); $("div#39").hide();
  } }) 
  $("label.kolejnePyt1").click(function(){
    if ($('label.kolejnePyt1').attr("value") == 1){
    $("div#1").show(); 
    $("div#0").hide(); $("div#2").hide(); $("div#3").hide(); $("div#4").hide(); $("div#5").hide();
    $("div#6").hide(); $("div#7").hide(); $("div#8").hide(); $("div#9").hide(); $("div#10").hide();
    $("div#11").hide(); $("div#12").hide(); $("div#13").hide(); $("div#14").hide(); $("div#15").hide();
    $("div#16").hide(); $("div#17").hide(); $("div#18").hide(); $("div#19").hide(); $("div#20").hide();
    $("div#21").hide(); $("div#22").hide(); $("div#23").hide(); $("div#24").hide(); $("div#25").hide();
    $("div#26").hide(); $("div#27").hide(); $("div#28").hide(); $("div#29").hide(); $("div#30").hide();
    $("div#31").hide(); $("div#32").hide(); $("div#33").hide(); $("div#34").hide(); $("div#35").hide();
    $("div#36").hide(); $("div#37").hide(); $("div#38").hide(); $("div#39").hide();
  } })
  $("label.kolejnePyt2").click(function(){
    if ($('label.kolejnePyt2').attr("value") == 2){
    $("div#2").show(); 
    $("div#0").hide(); $("div#1").hide(); $("div#3").hide(); $("div#4").hide(); $("div#5").hide();
    $("div#6").hide(); $("div#7").hide(); $("div#8").hide(); $("div#9").hide(); $("div#10").hide();
    $("div#11").hide(); $("div#12").hide(); $("div#13").hide(); $("div#14").hide(); $("div#15").hide();
    $("div#16").hide(); $("div#17").hide(); $("div#18").hide(); $("div#19").hide(); $("div#20").hide();
    $("div#21").hide(); $("div#22").hide(); $("div#23").hide(); $("div#24").hide(); $("div#25").hide();
    $("div#26").hide(); $("div#27").hide(); $("div#28").hide(); $("div#29").hide(); $("div#30").hide();
    $("div#31").hide(); $("div#32").hide(); $("div#33").hide(); $("div#34").hide(); $("div#35").hide();
    $("div#36").hide(); $("div#37").hide(); $("div#38").hide(); $("div#39").hide();
  } })
  $("label.kolejnePyt3").click(function(){
    if ($('label.kolejnePyt3').attr("value") == 3){
    $("div#3").show(); 
    $("div#0").hide(); $("div#1").hide(); $("div#2").hide(); $("div#4").hide(); $("div#5").hide();
    $("div#6").hide(); $("div#7").hide(); $("div#8").hide(); $("div#9").hide(); $("div#10").hide();
    $("div#11").hide(); $("div#12").hide(); $("div#13").hide(); $("div#14").hide(); $("div#15").hide();
    $("div#16").hide(); $("div#17").hide(); $("div#18").hide(); $("div#19").hide(); $("div#20").hide();
    $("div#21").hide(); $("div#22").hide(); $("div#23").hide(); $("div#24").hide(); $("div#25").hide();
    $("div#26").hide(); $("div#27").hide(); $("div#28").hide(); $("div#29").hide(); $("div#30").hide();
    $("div#31").hide(); $("div#32").hide(); $("div#33").hide(); $("div#34").hide(); $("div#35").hide();
    $("div#36").hide(); $("div#37").hide(); $("div#38").hide(); $("div#39").hide();
  } })
  $("label.kolejnePyt4").click(function(){
    if ($('label.kolejnePyt4').attr("value") == 4){
    $("div#4").show(); 
    $("div#0").hide(); $("div#1").hide(); $("div#2").hide(); $("div#3").hide(); $("div#5").hide();
    $("div#6").hide(); $("div#7").hide(); $("div#8").hide(); $("div#9").hide(); $("div#10").hide();
    $("div#11").hide(); $("div#12").hide(); $("div#13").hide(); $("div#14").hide(); $("div#15").hide();
    $("div#16").hide(); $("div#17").hide(); $("div#18").hide(); $("div#19").hide(); $("div#20").hide();
    $("div#21").hide(); $("div#22").hide(); $("div#23").hide(); $("div#24").hide(); $("div#25").hide();
    $("div#26").hide(); $("div#27").hide(); $("div#28").hide(); $("div#29").hide(); $("div#30").hide();
    $("div#31").hide(); $("div#32").hide(); $("div#33").hide(); $("div#34").hide(); $("div#35").hide();
    $("div#36").hide(); $("div#37").hide(); $("div#38").hide(); $("div#39").hide();
  } })
  $("label.kolejnePyt5").click(function(){
    if ($('label.kolejnePyt5').attr("value") == 5){
    $("div#5").show(); 
    $("div#0").hide(); $("div#1").hide(); $("div#2").hide(); $("div#3").hide(); $("div#4").hide();
    $("div#6").hide(); $("div#7").hide(); $("div#8").hide(); $("div#9").hide(); $("div#10").hide();
    $("div#11").hide(); $("div#12").hide(); $("div#13").hide(); $("div#14").hide(); $("div#15").hide();
    $("div#16").hide(); $("div#17").hide(); $("div#18").hide(); $("div#19").hide(); $("div#20").hide();
    $("div#21").hide(); $("div#22").hide(); $("div#23").hide(); $("div#24").hide(); $("div#25").hide();
    $("div#26").hide(); $("div#27").hide(); $("div#28").hide(); $("div#29").hide(); $("div#30").hide();
    $("div#31").hide(); $("div#32").hide(); $("div#33").hide(); $("div#34").hide(); $("div#35").hide();
    $("div#36").hide(); $("div#37").hide(); $("div#38").hide(); $("div#39").hide();
  } })
  $("label.kolejnePyt6").click(function(){
    if ($('label.kolejnePyt6').attr("value") == 6){
    $("div#6").show(); 
    $("div#0").hide(); $("div#1").hide(); $("div#2").hide(); $("div#3").hide(); $("div#4").hide();
    $("div#5").hide(); $("div#7").hide(); $("div#8").hide(); $("div#9").hide(); $("div#10").hide();
    $("div#11").hide(); $("div#12").hide(); $("div#13").hide(); $("div#14").hide(); $("div#15").hide();
    $("div#16").hide(); $("div#17").hide(); $("div#18").hide(); $("div#19").hide(); $("div#20").hide();
    $("div#21").hide(); $("div#22").hide(); $("div#23").hide(); $("div#24").hide(); $("div#25").hide();
    $("div#26").hide(); $("div#27").hide(); $("div#28").hide(); $("div#29").hide(); $("div#30").hide();
    $("div#31").hide(); $("div#32").hide(); $("div#33").hide(); $("div#34").hide(); $("div#35").hide();
    $("div#36").hide(); $("div#37").hide(); $("div#38").hide(); $("div#39").hide();
  } })
  $("label.kolejnePyt7").click(function(){
    if ($('label.kolejnePyt7').attr("value") == 7){
    $("div#7").show(); 
    $("div#0").hide(); $("div#1").hide(); $("div#2").hide(); $("div#3").hide(); $("div#4").hide();
    $("div#5").hide(); $("div#6").hide(); $("div#8").hide(); $("div#9").hide(); $("div#10").hide();
    $("div#11").hide(); $("div#12").hide(); $("div#13").hide(); $("div#14").hide(); $("div#15").hide();
    $("div#16").hide(); $("div#17").hide(); $("div#18").hide(); $("div#19").hide(); $("div#20").hide();
    $("div#21").hide(); $("div#22").hide(); $("div#23").hide(); $("div#24").hide(); $("div#25").hide();
    $("div#26").hide(); $("div#27").hide(); $("div#28").hide(); $("div#29").hide(); $("div#30").hide();
    $("div#31").hide(); $("div#32").hide(); $("div#33").hide(); $("div#34").hide(); $("div#35").hide();
    $("div#36").hide(); $("div#37").hide(); $("div#38").hide(); $("div#39").hide();
  } })
  $("label.kolejnePyt8").click(function(){
    if ($('label.kolejnePyt8').attr("value") == 8){
    $("div#8").show(); 
    $("div#0").hide(); $("div#1").hide(); $("div#2").hide(); $("div#3").hide(); $("div#4").hide();
    $("div#5").hide(); $("div#6").hide(); $("div#7").hide(); $("div#9").hide(); $("div#10").hide();
    $("div#11").hide(); $("div#12").hide(); $("div#13").hide(); $("div#14").hide(); $("div#15").hide();
    $("div#16").hide(); $("div#17").hide(); $("div#18").hide(); $("div#19").hide(); $("div#20").hide();
    $("div#21").hide(); $("div#22").hide(); $("div#23").hide(); $("div#24").hide(); $("div#25").hide();
    $("div#26").hide(); $("div#27").hide(); $("div#28").hide(); $("div#29").hide(); $("div#30").hide();
    $("div#31").hide(); $("div#32").hide(); $("div#33").hide(); $("div#34").hide(); $("div#35").hide();
    $("div#36").hide(); $("div#37").hide(); $("div#38").hide(); $("div#39").hide();
  } })
  $("label.kolejnePyt9").click(function(){
    if ($('label.kolejnePyt9').attr("value") == 9){
    $("div#9").show(); 
    $("div#0").hide(); $("div#1").hide(); $("div#2").hide(); $("div#3").hide(); $("div#4").hide();
    $("div#5").hide(); $("div#6").hide(); $("div#7").hide(); $("div#8").hide(); $("div#10").hide();
    $("div#11").hide(); $("div#12").hide(); $("div#13").hide(); $("div#14").hide(); $("div#15").hide();
    $("div#16").hide(); $("div#17").hide(); $("div#18").hide(); $("div#19").hide(); $("div#20").hide();
    $("div#21").hide(); $("div#22").hide(); $("div#23").hide(); $("div#24").hide(); $("div#25").hide();
    $("div#26").hide(); $("div#27").hide(); $("div#28").hide(); $("div#29").hide(); $("div#30").hide();
    $("div#31").hide(); $("div#32").hide(); $("div#33").hide(); $("div#34").hide(); $("div#35").hide();
    $("div#36").hide(); $("div#37").hide(); $("div#38").hide(); $("div#39").hide();
  } })
  $("label.kolejnePyt10").click(function(){
    if ($('label.kolejnePyt10').attr("value") == 10){
    $("div#10").show(); 
    $("div#0").hide(); $("div#1").hide(); $("div#2").hide(); $("div#3").hide(); $("div#4").hide();
    $("div#5").hide(); $("div#6").hide(); $("div#7").hide(); $("div#8").hide(); $("div#9").hide();
    $("div#11").hide(); $("div#12").hide(); $("div#13").hide(); $("div#14").hide(); $("div#15").hide();
    $("div#16").hide(); $("div#17").hide(); $("div#18").hide(); $("div#19").hide(); $("div#20").hide();
    $("div#21").hide(); $("div#22").hide(); $("div#23").hide(); $("div#24").hide(); $("div#25").hide();
    $("div#26").hide(); $("div#27").hide(); $("div#28").hide(); $("div#29").hide(); $("div#30").hide();
    $("div#31").hide(); $("div#32").hide(); $("div#33").hide(); $("div#34").hide(); $("div#35").hide();
    $("div#36").hide(); $("div#37").hide(); $("div#38").hide(); $("div#39").hide();
  } })
  $("label.kolejnePyt11").click(function(){
    if ($('label.kolejnePyt11').attr("value") == 11){
    $("div#11").show(); 
    $("div#0").hide(); $("div#1").hide(); $("div#2").hide(); $("div#3").hide(); $("div#4").hide();
    $("div#5").hide(); $("div#6").hide(); $("div#7").hide(); $("div#10").hide(); $("div#9").hide();
    $("div#10").hide(); $("div#12").hide(); $("div#13").hide(); $("div#14").hide(); $("div#15").hide();
    $("div#16").hide(); $("div#17").hide(); $("div#18").hide(); $("div#19").hide(); $("div#20").hide();
    $("div#21").hide(); $("div#22").hide(); $("div#23").hide(); $("div#24").hide(); $("div#25").hide();
    $("div#26").hide(); $("div#27").hide(); $("div#28").hide(); $("div#29").hide(); $("div#30").hide();
    $("div#31").hide(); $("div#32").hide(); $("div#33").hide(); $("div#34").hide(); $("div#35").hide();
    $("div#36").hide(); $("div#37").hide(); $("div#38").hide(); $("div#39").hide();
  } })
  $("label.kolejnePyt12").click(function(){
    if ($('label.kolejnePyt12').attr("value") == 12){
    $("div#12").show(); 
    $("div#0").hide(); $("div#1").hide(); $("div#2").hide(); $("div#3").hide(); $("div#4").hide();
    $("div#5").hide(); $("div#6").hide(); $("div#7").hide(); $("div#10").hide(); $("div#9").hide();
    $("div#10").hide(); $("div#11").hide(); $("div#13").hide(); $("div#14").hide(); $("div#15").hide();
    $("div#16").hide(); $("div#17").hide(); $("div#18").hide(); $("div#19").hide(); $("div#20").hide();
    $("div#21").hide(); $("div#22").hide(); $("div#23").hide(); $("div#24").hide(); $("div#25").hide();
    $("div#26").hide(); $("div#27").hide(); $("div#28").hide(); $("div#29").hide(); $("div#30").hide();
    $("div#31").hide(); $("div#32").hide(); $("div#33").hide(); $("div#34").hide(); $("div#35").hide();
    $("div#36").hide(); $("div#37").hide(); $("div#38").hide(); $("div#39").hide();
  } })
  $("label.kolejnePyt13").click(function(){
    if ($('label.kolejnePyt13').attr("value") == 13){
    $("div#13").show(); 
    $("div#0").hide(); $("div#1").hide(); $("div#2").hide(); $("div#3").hide(); $("div#4").hide();
    $("div#5").hide(); $("div#6").hide(); $("div#7").hide(); $("div#10").hide(); $("div#9").hide();
    $("div#10").hide(); $("div#11").hide(); $("div#12").hide(); $("div#14").hide(); $("div#15").hide();
    $("div#16").hide(); $("div#17").hide(); $("div#18").hide(); $("div#19").hide(); $("div#20").hide();
    $("div#21").hide(); $("div#22").hide(); $("div#23").hide(); $("div#24").hide(); $("div#25").hide();
    $("div#26").hide(); $("div#27").hide(); $("div#28").hide(); $("div#29").hide(); $("div#30").hide();
    $("div#31").hide(); $("div#32").hide(); $("div#33").hide(); $("div#34").hide(); $("div#35").hide();
    $("div#36").hide(); $("div#37").hide(); $("div#38").hide(); $("div#39").hide();
  } })
  $("label.kolejnePyt14").click(function(){
    if ($('label.kolejnePyt14').attr("value") == 14){
    $("div#14").show(); 
    $("div#0").hide(); $("div#1").hide(); $("div#2").hide(); $("div#3").hide(); $("div#4").hide();
    $("div#5").hide(); $("div#6").hide(); $("div#7").hide(); $("div#10").hide(); $("div#9").hide();
    $("div#10").hide(); $("div#11").hide(); $("div#12").hide(); $("div#13").hide(); $("div#15").hide();
    $("div#16").hide(); $("div#17").hide(); $("div#18").hide(); $("div#19").hide(); $("div#20").hide();
    $("div#21").hide(); $("div#22").hide(); $("div#23").hide(); $("div#24").hide(); $("div#25").hide();
    $("div#26").hide(); $("div#27").hide(); $("div#28").hide(); $("div#29").hide(); $("div#30").hide();
    $("div#31").hide(); $("div#32").hide(); $("div#33").hide(); $("div#34").hide(); $("div#35").hide();
    $("div#36").hide(); $("div#37").hide(); $("div#38").hide(); $("div#39").hide();
  } })
  $("label.kolejnePyt15").click(function(){
    if ($('label.kolejnePyt15').attr("value") == 15){
    $("div#15").show(); 
    $("div#0").hide(); $("div#1").hide(); $("div#2").hide(); $("div#3").hide(); $("div#4").hide();
    $("div#5").hide(); $("div#6").hide(); $("div#7").hide(); $("div#10").hide(); $("div#9").hide();
    $("div#10").hide(); $("div#11").hide(); $("div#12").hide(); $("div#13").hide(); $("div#14").hide();
    $("div#16").hide(); $("div#17").hide(); $("div#18").hide(); $("div#19").hide(); $("div#20").hide();
    $("div#21").hide(); $("div#22").hide(); $("div#23").hide(); $("div#24").hide(); $("div#25").hide();
    $("div#26").hide(); $("div#27").hide(); $("div#28").hide(); $("div#29").hide(); $("div#30").hide();
    $("div#31").hide(); $("div#32").hide(); $("div#33").hide(); $("div#34").hide(); $("div#35").hide();
    $("div#36").hide(); $("div#37").hide(); $("div#38").hide(); $("div#39").hide();
  } })
  $("label.kolejnePyt16").click(function(){
    if ($('label.kolejnePyt16').attr("value") == 16){
    $("div#16").show(); 
    $("div#0").hide(); $("div#1").hide(); $("div#2").hide(); $("div#3").hide(); $("div#4").hide();
    $("div#5").hide(); $("div#6").hide(); $("div#7").hide(); $("div#10").hide(); $("div#9").hide();
    $("div#10").hide(); $("div#11").hide(); $("div#12").hide(); $("div#13").hide(); $("div#14").hide();
    $("div#15").hide(); $("div#17").hide(); $("div#18").hide(); $("div#19").hide(); $("div#20").hide();
    $("div#21").hide(); $("div#22").hide(); $("div#23").hide(); $("div#24").hide(); $("div#25").hide();
    $("div#26").hide(); $("div#27").hide(); $("div#28").hide(); $("div#29").hide(); $("div#30").hide();
    $("div#31").hide(); $("div#32").hide(); $("div#33").hide(); $("div#34").hide(); $("div#35").hide();
    $("div#36").hide(); $("div#37").hide(); $("div#38").hide(); $("div#39").hide();
  } })
  $("label.kolejnePyt17").click(function(){
    if ($('label.kolejnePyt17').attr("value") == 17){
    $("div#17").show(); 
    $("div#0").hide(); $("div#1").hide(); $("div#2").hide(); $("div#3").hide(); $("div#4").hide();
    $("div#5").hide(); $("div#6").hide(); $("div#7").hide(); $("div#10").hide(); $("div#9").hide();
    $("div#10").hide(); $("div#11").hide(); $("div#12").hide(); $("div#13").hide(); $("div#14").hide();
    $("div#15").hide(); $("div#16").hide(); $("div#18").hide(); $("div#19").hide(); $("div#20").hide();
    $("div#21").hide(); $("div#22").hide(); $("div#23").hide(); $("div#24").hide(); $("div#25").hide();
    $("div#26").hide(); $("div#27").hide(); $("div#28").hide(); $("div#29").hide(); $("div#30").hide();
    $("div#31").hide(); $("div#32").hide(); $("div#33").hide(); $("div#34").hide(); $("div#35").hide();
    $("div#36").hide(); $("div#37").hide(); $("div#38").hide(); $("div#39").hide();
  } })
  $("label.kolejnePyt18").click(function(){
    if ($('label.kolejnePyt18').attr("value") == 18){
    $("div#18").show(); 
    $("div#0").hide(); $("div#1").hide(); $("div#2").hide(); $("div#3").hide(); $("div#4").hide();
    $("div#5").hide(); $("div#6").hide(); $("div#7").hide(); $("div#10").hide(); $("div#9").hide();
    $("div#10").hide(); $("div#11").hide(); $("div#12").hide(); $("div#13").hide(); $("div#14").hide();
    $("div#15").hide(); $("div#16").hide(); $("div#17").hide(); $("div#19").hide(); $("div#20").hide();
    $("div#21").hide(); $("div#22").hide(); $("div#23").hide(); $("div#24").hide(); $("div#25").hide();
    $("div#26").hide(); $("div#27").hide(); $("div#28").hide(); $("div#29").hide(); $("div#30").hide();
    $("div#31").hide(); $("div#32").hide(); $("div#33").hide(); $("div#34").hide(); $("div#35").hide();
    $("div#36").hide(); $("div#37").hide(); $("div#38").hide(); $("div#39").hide();
  } })
  $("label.kolejnePyt19").click(function(){
    if ($('label.kolejnePyt19').attr("value") == 19){
    $("div#19").show(); 
    $("div#0").hide(); $("div#1").hide(); $("div#2").hide(); $("div#3").hide(); $("div#4").hide();
    $("div#5").hide(); $("div#6").hide(); $("div#7").hide(); $("div#10").hide(); $("div#9").hide();
    $("div#10").hide(); $("div#11").hide(); $("div#12").hide(); $("div#13").hide(); $("div#14").hide();
    $("div#15").hide(); $("div#16").hide(); $("div#17").hide(); $("div#18").hide(); $("div#20").hide();
    $("div#21").hide(); $("div#22").hide(); $("div#23").hide(); $("div#24").hide(); $("div#25").hide();
    $("div#26").hide(); $("div#27").hide(); $("div#28").hide(); $("div#29").hide(); $("div#30").hide();
    $("div#31").hide(); $("div#32").hide(); $("div#33").hide(); $("div#34").hide(); $("div#35").hide();
    $("div#36").hide(); $("div#37").hide(); $("div#38").hide(); $("div#39").hide();
  } })
  $("label.kolejnePyt20").click(function(){
    if ($('label.kolejnePyt20').attr("value") == 20){
    $("div#20").show(); 
    $("div#0").hide(); $("div#1").hide(); $("div#2").hide(); $("div#3").hide(); $("div#4").hide();
    $("div#5").hide(); $("div#6").hide(); $("div#7").hide(); $("div#10").hide(); $("div#9").hide();
    $("div#10").hide(); $("div#11").hide(); $("div#12").hide(); $("div#13").hide(); $("div#14").hide();
    $("div#15").hide(); $("div#16").hide(); $("div#17").hide(); $("div#18").hide(); $("div#19").hide();
    $("div#21").hide(); $("div#22").hide(); $("div#23").hide(); $("div#24").hide(); $("div#25").hide();
    $("div#26").hide(); $("div#27").hide(); $("div#28").hide(); $("div#29").hide(); $("div#30").hide();
    $("div#31").hide(); $("div#32").hide(); $("div#33").hide(); $("div#34").hide(); $("div#35").hide();
    $("div#36").hide(); $("div#37").hide(); $("div#38").hide(); $("div#39").hide();
  } })
  $("label.kolejnePyt21").click(function(){
    if ($('label.kolejnePyt21').attr("value") == 21){
    $("div#21").show(); 
    $("div#0").hide(); $("div#1").hide(); $("div#2").hide(); $("div#3").hide(); $("div#4").hide();
    $("div#5").hide(); $("div#6").hide(); $("div#7").hide(); $("div#10").hide(); $("div#9").hide();
    $("div#10").hide(); $("div#11").hide(); $("div#12").hide(); $("div#13").hide(); $("div#14").hide();
    $("div#15").hide(); $("div#16").hide(); $("div#17").hide(); $("div#18").hide(); $("div#19").hide();
    $("div#20").hide(); $("div#22").hide(); $("div#23").hide(); $("div#24").hide(); $("div#25").hide();
    $("div#26").hide(); $("div#27").hide(); $("div#28").hide(); $("div#29").hide(); $("div#30").hide();
    $("div#31").hide(); $("div#32").hide(); $("div#33").hide(); $("div#34").hide(); $("div#35").hide();
    $("div#36").hide(); $("div#37").hide(); $("div#38").hide(); $("div#39").hide();
  } })
  $("label.kolejnePyt22").click(function(){
    if ($('label.kolejnePyt22').attr("value") == 22){
    $("div#22").show(); 
    $("div#0").hide(); $("div#1").hide(); $("div#2").hide(); $("div#3").hide(); $("div#4").hide();
    $("div#5").hide(); $("div#6").hide(); $("div#7").hide(); $("div#10").hide(); $("div#9").hide();
    $("div#10").hide(); $("div#11").hide(); $("div#12").hide(); $("div#13").hide(); $("div#14").hide();
    $("div#15").hide(); $("div#16").hide(); $("div#17").hide(); $("div#18").hide(); $("div#19").hide();
    $("div#20").hide(); $("div#21").hide(); $("div#23").hide(); $("div#24").hide(); $("div#25").hide();
    $("div#26").hide(); $("div#27").hide(); $("div#28").hide(); $("div#29").hide(); $("div#30").hide();
    $("div#31").hide(); $("div#32").hide(); $("div#33").hide(); $("div#34").hide(); $("div#35").hide();
    $("div#36").hide(); $("div#37").hide(); $("div#38").hide(); $("div#39").hide();
  } })
  $("label.kolejnePyt23").click(function(){
    if ($('label.kolejnePyt23').attr("value") == 23){
    $("div#23").show(); 
    $("div#0").hide(); $("div#1").hide(); $("div#2").hide(); $("div#3").hide(); $("div#4").hide();
    $("div#5").hide(); $("div#6").hide(); $("div#7").hide(); $("div#10").hide(); $("div#9").hide();
    $("div#10").hide(); $("div#11").hide(); $("div#12").hide(); $("div#13").hide(); $("div#14").hide();
    $("div#15").hide(); $("div#16").hide(); $("div#17").hide(); $("div#18").hide(); $("div#19").hide();
    $("div#20").hide(); $("div#21").hide(); $("div#22").hide(); $("div#24").hide(); $("div#25").hide();
    $("div#26").hide(); $("div#27").hide(); $("div#28").hide(); $("div#29").hide(); $("div#30").hide();
    $("div#31").hide(); $("div#32").hide(); $("div#33").hide(); $("div#34").hide(); $("div#35").hide();
    $("div#36").hide(); $("div#37").hide(); $("div#38").hide(); $("div#39").hide();
  } })
  $("label.kolejnePyt24").click(function(){
    if ($('label.kolejnePyt24').attr("value") == 24){
    $("div#24").show(); 
    $("div#0").hide(); $("div#1").hide(); $("div#2").hide(); $("div#3").hide(); $("div#4").hide();
    $("div#5").hide(); $("div#6").hide(); $("div#7").hide(); $("div#10").hide(); $("div#9").hide();
    $("div#10").hide(); $("div#11").hide(); $("div#12").hide(); $("div#13").hide(); $("div#14").hide();
    $("div#15").hide(); $("div#16").hide(); $("div#17").hide(); $("div#18").hide(); $("div#19").hide();
    $("div#20").hide(); $("div#21").hide(); $("div#22").hide(); $("div#23").hide(); $("div#25").hide();
    $("div#26").hide(); $("div#27").hide(); $("div#28").hide(); $("div#29").hide(); $("div#30").hide();
    $("div#31").hide(); $("div#32").hide(); $("div#33").hide(); $("div#34").hide(); $("div#35").hide();
    $("div#36").hide(); $("div#37").hide(); $("div#38").hide(); $("div#39").hide();
  } })
  $("label.kolejnePyt25").click(function(){
    if ($('label.kolejnePyt25').attr("value") == 25){
    $("div#25").show(); 
    $("div#0").hide(); $("div#1").hide(); $("div#2").hide(); $("div#3").hide(); $("div#4").hide();
    $("div#5").hide(); $("div#6").hide(); $("div#7").hide(); $("div#10").hide(); $("div#9").hide();
    $("div#10").hide(); $("div#11").hide(); $("div#12").hide(); $("div#13").hide(); $("div#14").hide();
    $("div#15").hide(); $("div#16").hide(); $("div#17").hide(); $("div#18").hide(); $("div#19").hide();
    $("div#20").hide(); $("div#21").hide(); $("div#22").hide(); $("div#23").hide(); $("div#24").hide();
    $("div#26").hide(); $("div#27").hide(); $("div#28").hide(); $("div#29").hide(); $("div#30").hide();
    $("div#31").hide(); $("div#32").hide(); $("div#33").hide(); $("div#34").hide(); $("div#35").hide();
    $("div#36").hide(); $("div#37").hide(); $("div#38").hide(); $("div#39").hide();
  } })
  $("label.kolejnePyt26").click(function(){
    if ($('label.kolejnePyt26').attr("value") == 26){
    $("div#26").show(); 
    $("div#0").hide(); $("div#1").hide(); $("div#2").hide(); $("div#3").hide(); $("div#4").hide();
    $("div#5").hide(); $("div#6").hide(); $("div#7").hide(); $("div#10").hide(); $("div#9").hide();
    $("div#10").hide(); $("div#11").hide(); $("div#12").hide(); $("div#13").hide(); $("div#14").hide();
    $("div#15").hide(); $("div#16").hide(); $("div#17").hide(); $("div#18").hide(); $("div#19").hide();
    $("div#20").hide(); $("div#21").hide(); $("div#22").hide(); $("div#23").hide(); $("div#24").hide();
    $("div#25").hide(); $("div#27").hide(); $("div#28").hide(); $("div#29").hide(); $("div#30").hide();
    $("div#31").hide(); $("div#32").hide(); $("div#33").hide(); $("div#34").hide(); $("div#35").hide();
    $("div#36").hide(); $("div#37").hide(); $("div#38").hide(); $("div#39").hide();
  } })
  $("label.kolejnePyt27").click(function(){
    if ($('label.kolejnePyt27').attr("value") == 27){
    $("div#27").show(); 
    $("div#0").hide(); $("div#1").hide(); $("div#2").hide(); $("div#3").hide(); $("div#4").hide();
    $("div#5").hide(); $("div#6").hide(); $("div#7").hide(); $("div#10").hide(); $("div#9").hide();
    $("div#10").hide(); $("div#11").hide(); $("div#12").hide(); $("div#13").hide(); $("div#14").hide();
    $("div#15").hide(); $("div#16").hide(); $("div#17").hide(); $("div#18").hide(); $("div#19").hide();
    $("div#20").hide(); $("div#21").hide(); $("div#22").hide(); $("div#23").hide(); $("div#24").hide();
    $("div#25").hide(); $("div#26").hide(); $("div#28").hide(); $("div#29").hide(); $("div#30").hide();
    $("div#31").hide(); $("div#32").hide(); $("div#33").hide(); $("div#34").hide(); $("div#35").hide();
    $("div#36").hide(); $("div#37").hide(); $("div#38").hide(); $("div#39").hide();
  } })
  $("label.kolejnePyt28").click(function(){
    if ($('label.kolejnePyt28').attr("value") == 28){
    $("div#28").show(); 
    $("div#0").hide(); $("div#1").hide(); $("div#2").hide(); $("div#3").hide(); $("div#4").hide();
    $("div#5").hide(); $("div#6").hide(); $("div#7").hide(); $("div#10").hide(); $("div#9").hide();
    $("div#10").hide(); $("div#11").hide(); $("div#12").hide(); $("div#13").hide(); $("div#14").hide();
    $("div#15").hide(); $("div#16").hide(); $("div#17").hide(); $("div#18").hide(); $("div#19").hide();
    $("div#20").hide(); $("div#21").hide(); $("div#22").hide(); $("div#23").hide(); $("div#24").hide();
    $("div#25").hide(); $("div#26").hide(); $("div#27").hide(); $("div#29").hide(); $("div#30").hide();
    $("div#31").hide(); $("div#32").hide(); $("div#33").hide(); $("div#34").hide(); $("div#35").hide();
    $("div#36").hide(); $("div#37").hide(); $("div#38").hide(); $("div#39").hide();
  } })
  $("label.kolejnePyt29").click(function(){
    if ($('label.kolejnePyt29').attr("value") == 29){
    $("div#29").show(); 
    $("div#0").hide(); $("div#1").hide(); $("div#2").hide(); $("div#3").hide(); $("div#4").hide();
    $("div#5").hide(); $("div#6").hide(); $("div#7").hide(); $("div#10").hide(); $("div#9").hide();
    $("div#10").hide(); $("div#11").hide(); $("div#12").hide(); $("div#13").hide(); $("div#14").hide();
    $("div#15").hide(); $("div#16").hide(); $("div#17").hide(); $("div#18").hide(); $("div#19").hide();
    $("div#20").hide(); $("div#21").hide(); $("div#22").hide(); $("div#23").hide(); $("div#24").hide();
    $("div#25").hide(); $("div#26").hide(); $("div#27").hide(); $("div#28").hide(); $("div#30").hide();
    $("div#31").hide(); $("div#32").hide(); $("div#33").hide(); $("div#34").hide(); $("div#35").hide();
    $("div#36").hide(); $("div#37").hide(); $("div#38").hide(); $("div#39").hide();
  } })
  $("label.kolejnePyt30").click(function(){
    if ($('label.kolejnePyt30').attr("value") == 30){
    $("div#30").show(); 
    $("div#0").hide(); $("div#1").hide(); $("div#2").hide(); $("div#3").hide(); $("div#4").hide();
    $("div#5").hide(); $("div#6").hide(); $("div#7").hide(); $("div#10").hide(); $("div#9").hide();
    $("div#10").hide(); $("div#11").hide(); $("div#12").hide(); $("div#13").hide(); $("div#14").hide();
    $("div#15").hide(); $("div#16").hide(); $("div#17").hide(); $("div#18").hide(); $("div#19").hide();
    $("div#20").hide(); $("div#21").hide(); $("div#22").hide(); $("div#23").hide(); $("div#24").hide();
    $("div#25").hide(); $("div#26").hide(); $("div#27").hide(); $("div#28").hide(); $("div#29").hide();
    $("div#31").hide(); $("div#32").hide(); $("div#33").hide(); $("div#34").hide(); $("div#35").hide();
    $("div#36").hide(); $("div#37").hide(); $("div#38").hide(); $("div#39").hide();
  } })
  $("label.kolejnePyt31").click(function(){
    if ($('label.kolejnePyt31').attr("value") == 31){
    $("div#31").show(); 
    $("div#0").hide(); $("div#1").hide(); $("div#2").hide(); $("div#3").hide(); $("div#4").hide();
    $("div#5").hide(); $("div#6").hide(); $("div#7").hide(); $("div#10").hide(); $("div#9").hide();
    $("div#10").hide(); $("div#11").hide(); $("div#12").hide(); $("div#13").hide(); $("div#14").hide();
    $("div#15").hide(); $("div#16").hide(); $("div#17").hide(); $("div#18").hide(); $("div#19").hide();
    $("div#20").hide(); $("div#21").hide(); $("div#22").hide(); $("div#23").hide(); $("div#24").hide();
    $("div#25").hide(); $("div#26").hide(); $("div#27").hide(); $("div#28").hide(); $("div#29").hide();
    $("div#30").hide(); $("div#32").hide(); $("div#33").hide(); $("div#34").hide(); $("div#35").hide();
    $("div#36").hide(); $("div#37").hide(); $("div#38").hide(); $("div#39").hide();
  } })
  $("label.kolejnePyt32").click(function(){
    if ($('label.kolejnePyt32').attr("value") == 32){
    $("div#32").show(); 
    $("div#0").hide(); $("div#1").hide(); $("div#2").hide(); $("div#3").hide(); $("div#4").hide();
    $("div#5").hide(); $("div#6").hide(); $("div#7").hide(); $("div#10").hide(); $("div#9").hide();
    $("div#10").hide(); $("div#11").hide(); $("div#12").hide(); $("div#13").hide(); $("div#14").hide();
    $("div#15").hide(); $("div#16").hide(); $("div#17").hide(); $("div#18").hide(); $("div#19").hide();
    $("div#20").hide(); $("div#21").hide(); $("div#22").hide(); $("div#23").hide(); $("div#24").hide();
    $("div#25").hide(); $("div#26").hide(); $("div#27").hide(); $("div#28").hide(); $("div#29").hide();
    $("div#30").hide(); $("div#31").hide(); $("div#33").hide(); $("div#34").hide(); $("div#35").hide();
    $("div#36").hide(); $("div#37").hide(); $("div#38").hide(); $("div#39").hide();
  } })
  $("label.kolejnePyt33").click(function(){
    if ($('label.kolejnePyt33').attr("value") == 33){
    $("div#33").show(); 
    $("div#0").hide(); $("div#1").hide(); $("div#2").hide(); $("div#3").hide(); $("div#4").hide();
    $("div#5").hide(); $("div#6").hide(); $("div#7").hide(); $("div#10").hide(); $("div#9").hide();
    $("div#10").hide(); $("div#11").hide(); $("div#12").hide(); $("div#13").hide(); $("div#14").hide();
    $("div#15").hide(); $("div#16").hide(); $("div#17").hide(); $("div#18").hide(); $("div#19").hide();
    $("div#20").hide(); $("div#21").hide(); $("div#22").hide(); $("div#23").hide(); $("div#24").hide();
    $("div#25").hide(); $("div#26").hide(); $("div#27").hide(); $("div#28").hide(); $("div#29").hide();
    $("div#30").hide(); $("div#31").hide(); $("div#32").hide(); $("div#34").hide(); $("div#35").hide();
    $("div#36").hide(); $("div#37").hide(); $("div#38").hide(); $("div#39").hide();
  } })
  $("label.kolejnePyt34").click(function(){
    if ($('label.kolejnePyt34').attr("value") == 34){
    $("div#34").show(); 
    $("div#0").hide(); $("div#1").hide(); $("div#2").hide(); $("div#3").hide(); $("div#4").hide();
    $("div#5").hide(); $("div#6").hide(); $("div#7").hide(); $("div#10").hide(); $("div#9").hide();
    $("div#10").hide(); $("div#11").hide(); $("div#12").hide(); $("div#13").hide(); $("div#14").hide();
    $("div#15").hide(); $("div#16").hide(); $("div#17").hide(); $("div#18").hide(); $("div#19").hide();
    $("div#20").hide(); $("div#21").hide(); $("div#22").hide(); $("div#23").hide(); $("div#24").hide();
    $("div#25").hide(); $("div#26").hide(); $("div#27").hide(); $("div#28").hide(); $("div#29").hide();
    $("div#30").hide(); $("div#31").hide(); $("div#32").hide(); $("div#33").hide(); $("div#35").hide();
    $("div#36").hide(); $("div#37").hide(); $("div#38").hide(); $("div#39").hide();
  } }) 
  $("label.kolejnePyt35").click(function(){
    if ($('label.kolejnePyt35').attr("value") == 35){
    $("div#35").show(); 
    $("div#0").hide(); $("div#1").hide(); $("div#2").hide(); $("div#3").hide(); $("div#4").hide();
    $("div#5").hide(); $("div#6").hide(); $("div#7").hide(); $("div#10").hide(); $("div#9").hide();
    $("div#10").hide(); $("div#11").hide(); $("div#12").hide(); $("div#13").hide(); $("div#14").hide();
    $("div#15").hide(); $("div#16").hide(); $("div#17").hide(); $("div#18").hide(); $("div#19").hide();
    $("div#20").hide(); $("div#21").hide(); $("div#22").hide(); $("div#23").hide(); $("div#24").hide();
    $("div#25").hide(); $("div#26").hide(); $("div#27").hide(); $("div#28").hide(); $("div#29").hide();
    $("div#30").hide(); $("div#31").hide(); $("div#32").hide(); $("div#33").hide(); $("div#34").hide();
    $("div#36").hide(); $("div#37").hide(); $("div#38").hide(); $("div#39").hide();
  } }) 
  $("label.kolejnePyt36").click(function(){
    if ($('label.kolejnePyt36').attr("value") == 36){
    $("div#36").show(); 
    $("div#0").hide(); $("div#1").hide(); $("div#2").hide(); $("div#3").hide(); $("div#4").hide();
    $("div#5").hide(); $("div#6").hide(); $("div#7").hide(); $("div#10").hide(); $("div#9").hide();
    $("div#10").hide(); $("div#11").hide(); $("div#12").hide(); $("div#13").hide(); $("div#14").hide();
    $("div#15").hide(); $("div#16").hide(); $("div#17").hide(); $("div#18").hide(); $("div#19").hide();
    $("div#20").hide(); $("div#21").hide(); $("div#22").hide(); $("div#23").hide(); $("div#24").hide();
    $("div#25").hide(); $("div#26").hide(); $("div#27").hide(); $("div#28").hide(); $("div#29").hide();
    $("div#30").hide(); $("div#31").hide(); $("div#32").hide(); $("div#33").hide(); $("div#34").hide();
    $("div#35").hide(); $("div#37").hide(); $("div#38").hide(); $("div#39").hide();
  } }) 
  $("label.kolejnePyt37").click(function(){
    if ($('label.kolejnePyt37').attr("value") == 37){
    $("div#37").show(); 
    $("div#0").hide(); $("div#1").hide(); $("div#2").hide(); $("div#3").hide(); $("div#4").hide();
    $("div#5").hide(); $("div#6").hide(); $("div#7").hide(); $("div#10").hide(); $("div#9").hide();
    $("div#10").hide(); $("div#11").hide(); $("div#12").hide(); $("div#13").hide(); $("div#14").hide();
    $("div#15").hide(); $("div#16").hide(); $("div#17").hide(); $("div#18").hide(); $("div#19").hide();
    $("div#20").hide(); $("div#21").hide(); $("div#22").hide(); $("div#23").hide(); $("div#24").hide();
    $("div#25").hide(); $("div#26").hide(); $("div#27").hide(); $("div#28").hide(); $("div#29").hide();
    $("div#30").hide(); $("div#31").hide(); $("div#32").hide(); $("div#33").hide(); $("div#34").hide();
    $("div#35").hide(); $("div#36").hide(); $("div#38").hide(); $("div#39").hide();
  } })
  $("label.kolejnePyt38").click(function(){
    if ($('label.kolejnePyt38').attr("value") == 38){
    $("div#38").show(); 
    $("div#0").hide(); $("div#1").hide(); $("div#2").hide(); $("div#3").hide(); $("div#4").hide();
    $("div#5").hide(); $("div#6").hide(); $("div#7").hide(); $("div#10").hide(); $("div#9").hide();
    $("div#10").hide(); $("div#11").hide(); $("div#12").hide(); $("div#13").hide(); $("div#14").hide();
    $("div#15").hide(); $("div#16").hide(); $("div#17").hide(); $("div#18").hide(); $("div#19").hide();
    $("div#20").hide(); $("div#21").hide(); $("div#22").hide(); $("div#23").hide(); $("div#24").hide();
    $("div#25").hide(); $("div#26").hide(); $("div#27").hide(); $("div#28").hide(); $("div#29").hide();
    $("div#30").hide(); $("div#31").hide(); $("div#32").hide(); $("div#33").hide(); $("div#34").hide();
    $("div#35").hide(); $("div#36").hide(); $("div#37").hide(); $("div#39").hide();
  } })  
  $("label.kolejnePyt39").click(function(){
    if ($('label.kolejnePyt39').attr("value") == 39){
    $("div#39").show(); 
    $("div#0").hide(); $("div#1").hide(); $("div#2").hide(); $("div#3").hide(); $("div#4").hide();
    $("div#5").hide(); $("div#6").hide(); $("div#7").hide(); $("div#10").hide(); $("div#9").hide();
    $("div#10").hide(); $("div#11").hide(); $("div#12").hide(); $("div#13").hide(); $("div#14").hide();
    $("div#15").hide(); $("div#16").hide(); $("div#17").hide(); $("div#18").hide(); $("div#19").hide();
    $("div#20").hide(); $("div#21").hide(); $("div#22").hide(); $("div#23").hide(); $("div#24").hide();
    $("div#25").hide(); $("div#26").hide(); $("div#27").hide(); $("div#28").hide(); $("div#29").hide();
    $("div#30").hide(); $("div#31").hide(); $("div#32").hide(); $("div#33").hide(); $("div#34").hide();
    $("div#35").hide(); $("div#36").hide(); $("div#37").hide(); $("div#38").hide();
  } })

});
$(document).ready(function(){
$('label#odp0A').click(function(){
  if($('label#odp0A').attr('value') == 'A'){
    if($('label#odp0A').attr('class') == 'odp'){
      $('label#odp0A').removeClass('odp');
      $('label#odp0A').addClass('check');
      $('label#odp0B').removeClass('check');
      $('label#odp0C').removeClass('check');
      $('label#odp0D').removeClass('check');
      $('label#odp0B').addClass('odp');
      $('label#odp0C').addClass('odp');
      $('label#odp0D').addClass('odp');
      $('input#odpZaz0').attr('value',$('label#odp0A').attr('value'));
      $('label.kolejnePyt0').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp0A').removeClass('check');
      $('label#odp0A').addClass('odp');
      $('label.kolejnePyt0').css({"background-color":"wheat"});
      $('input#odpZaz0').attr('value',' ');
    }
  }
});
$('label#odp0B').click(function(){
  if($('label#odp0B').attr('value') == 'B'){
    if($('label#odp0B').attr('class') == 'odp'){
      $('label#odp0B').removeClass('odp');
      $('label#odp0B').addClass('check');
      $('label#odp0A').removeClass('check');
      $('label#odp0C').removeClass('check');
      $('label#odp0D').removeClass('check');
      $('label#odp0A').addClass('odp');
      $('label#odp0C').addClass('odp');
      $('label#odp0D').addClass('odp');
      $('input#odpZaz0').attr('value',$('label#odp0B').attr('value'));
      $('label.kolejnePyt0').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp0B').removeClass('check');
      $('label#odp0B').addClass('odp');
      $('label.kolejnePyt0').css({"background-color":"wheat"});
      $('input#odpZaz0').attr('value',' ');
    }
  }
})
$('label#odp0C').click(function(){
  if($('label#odp0C').attr('value') == 'C'){
    if($('label#odp0C').attr('class') == 'odp'){
      $('label#odp0C').removeClass('odp');
      $('label#odp0C').addClass('check');
      $('label#odp0A').removeClass('check');
      $('label#odp0B').removeClass('check');
      $('label#odp0D').removeClass('check');
      $('label#odp0A').addClass('odp');
      $('label#odp0B').addClass('odp');
      $('label#odp0D').addClass('odp');
      $('input#odpZaz0').attr('value',$('label#odp0C').attr('value'));
      $('label.kolejnePyt0').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp0C').removeClass('check');
      $('label#odp0C').addClass('odp');
      $('label.kolejnePyt0').css({"background-color":"wheat"});
      $('input#odpZaz0').attr('value',' ');
    }
  }
})
$('label#odp0D').click(function(){
  if($('label#odp0D').attr('value') == 'D'){
    if($('label#odp0D').attr('class') == 'odp'){
      $('label#odp0D').removeClass('odp');
      $('label#odp0D').addClass('check');
      $('label#odp0A').removeClass('check');
      $('label#odp0B').removeClass('check');
      $('label#odp0C').removeClass('check');
      $('label#odp0A').addClass('odp');
      $('label#odp0B').addClass('odp');
      $('label#odp0C').addClass('odp');
      $('input#odpZaz0').attr('value',$('label#odp0D').attr('value'));
      $('label.kolejnePyt0').css({"background-color":"rgb(255, 175, 26)"});
    }      
    else{
      $('label#odp0D').removeClass('check');
      $('label#odp0D').addClass('odp');
      $('label.kolejnePyt0').css({"background-color":"wheat"});
      $('input#odpZaz0').attr('value',' ');
    }
  }
})
$('label#odp1A').click(function(){
  if($('label#odp1A').attr('value') == 'A'){
    if($('label#odp1A').attr('class') == 'odp'){
      $('label#odp1A').removeClass('odp');
      $('label#odp1A').addClass('check');
      $('label#odp1B').removeClass('check');
      $('label#odp1C').removeClass('check');
      $('label#odp1D').removeClass('check');
      $('label#odp1B').addClass('odp');
      $('label#odp1C').addClass('odp');
      $('label#odp1D').addClass('odp');
      $('input#odpZaz1').attr('value',$('label#odp1A').attr('value'));
      $('label.kolejnePyt1').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp1A').removeClass('check');
      $('label#odp1A').addClass('odp');
      $('label.kolejnePyt1').css({"background-color":"wheat"});
      $('input#odpZaz1').attr('value',' ');
    }
  }
});
$('label#odp1B').click(function(){
  if($('label#odp1B').attr('value') == 'B'){
    if($('label#odp1B').attr('class') == 'odp'){
      $('label#odp1B').removeClass('odp');
      $('label#odp1B').addClass('check');
      $('label#odp1A').removeClass('check');
      $('label#odp1C').removeClass('check');
      $('label#odp1D').removeClass('check');
      $('label#odp1A').addClass('odp');
      $('label#odp1C').addClass('odp');
      $('label#odp1D').addClass('odp');
      $('input#odpZaz1').attr('value',$('label#odp1B').attr('value'));
      $('label.kolejnePyt1').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp1B').removeClass('check');
      $('label#odp1B').addClass('odp');
      $('label.kolejnePyt1').css({"background-color":"wheat"});
      $('input#odpZaz1').attr('value',' ');
    }
  }
})
$('label#odp1C').click(function(){
  if($('label#odp1C').attr('value') == 'C'){
    if($('label#odp1C').attr('class') == 'odp'){
      $('label#odp1C').removeClass('odp');
      $('label#odp1C').addClass('check');
      $('label#odp1A').removeClass('check');
      $('label#odp1B').removeClass('check');
      $('label#odp1D').removeClass('check');
      $('label#odp1A').addClass('odp');
      $('label#odp1B').addClass('odp');
      $('label#odp1D').addClass('odp');
      $('input#odpZaz1').attr('value',$('label#odp1C').attr('value'));
      $('label.kolejnePyt1').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp1C').removeClass('check');
      $('label#odp1C').addClass('odp');
      $('label.kolejnePyt1').css({"background-color":"wheat"});
      $('input#odpZaz1').attr('value',' ');
    }
  }
})
$('label#odp1D').click(function(){
  if($('label#odp1D').attr('value') == 'D'){
    if($('label#odp1D').attr('class') == 'odp'){
      $('label#odp1D').removeClass('odp');
      $('label#odp1D').addClass('check');
      $('label#odp1A').removeClass('check');
      $('label#odp1B').removeClass('check');
      $('label#odp1C').removeClass('check');
      $('label#odp1A').addClass('odp');
      $('label#odp1B').addClass('odp');
      $('label#odp1C').addClass('odp');
      $('input#odpZaz1').attr('value',$('label#odp1D').attr('value'));
      $('label.kolejnePyt1').css({"background-color":"rgb(255, 175, 26)"});
    }      
    else{
      $('label#odp1D').removeClass('check');
      $('label#odp1D').addClass('odp');
      $('label.kolejnePyt1').css({"background-color":"wheat"});
      $('input#odpZaz1').attr('value',' ');
    }
  }
})
$('label#odp2A').click(function(){
  if($('label#odp2A').attr('value') == 'A'){
    if($('label#odp2A').attr('class') == 'odp'){
      $('label#odp2A').removeClass('odp');
      $('label#odp2A').addClass('check');
      $('label#odp2B').removeClass('check');
      $('label#odp2C').removeClass('check');
      $('label#odp2D').removeClass('check');
      $('label#odp2B').addClass('odp');
      $('label#odp2C').addClass('odp');
      $('label#odp2D').addClass('odp');
      $('input#odpZaz2').attr('value',$('label#odp2A').attr('value'));
      $('label.kolejnePyt2').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp2A').removeClass('check');
      $('label#odp2A').addClass('odp');
      $('label.kolejnePyt2').css({"background-color":"wheat"});
      $('input#odpZaz2').attr('value',' ');
    }
  }
});
$('label#odp2B').click(function(){
  if($('label#odp2B').attr('value') == 'B'){
    if($('label#odp2B').attr('class') == 'odp'){
      $('label#odp2B').removeClass('odp');
      $('label#odp2B').addClass('check');
      $('label#odp2A').removeClass('check');
      $('label#odp2C').removeClass('check');
      $('label#odp2D').removeClass('check');
      $('label#odp2A').addClass('odp');
      $('label#odp2C').addClass('odp');
      $('label#odp2D').addClass('odp');
      $('input#odpZaz2').attr('value',$('label#odp2B').attr('value'));
      $('label.kolejnePyt2').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp2B').removeClass('check');
      $('label#odp2B').addClass('odp');
      $('label.kolejnePyt2').css({"background-color":"wheat"});
      $('input#odpZaz2').attr('value',' ');
    }
  }
})
$('label#odp2C').click(function(){
  if($('label#odp2C').attr('value') == 'C'){
    if($('label#odp2C').attr('class') == 'odp'){
      $('label#odp2C').removeClass('odp');
      $('label#odp2C').addClass('check');
      $('label#odp2A').removeClass('check');
      $('label#odp2B').removeClass('check');
      $('label#odp2D').removeClass('check');
      $('label#odp2A').addClass('odp');
      $('label#odp2B').addClass('odp');
      $('label#odp2D').addClass('odp');
      $('input#odpZaz2').attr('value',$('label#odp2C').attr('value'));
      $('label.kolejnePyt2').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp2C').removeClass('check');
      $('label#odp2C').addClass('odp');
      $('label.kolejnePyt2').css({"background-color":"wheat"});
      $('input#odpZaz2').attr('value',' ');
    }
  }
})
$('label#odp2D').click(function(){
  if($('label#odp2D').attr('value') == 'D'){
    if($('label#odp2D').attr('class') == 'odp'){
      $('label#odp2D').removeClass('odp');
      $('label#odp2D').addClass('check');
      $('label#odp2A').removeClass('check');
      $('label#odp2B').removeClass('check');
      $('label#odp2C').removeClass('check');
      $('label#odp2A').addClass('odp');
      $('label#odp2B').addClass('odp');
      $('label#odp2C').addClass('odp');
      $('input#odpZaz2').attr('value',$('label#odp2D').attr('value'));
      $('label.kolejnePyt2').css({"background-color":"rgb(255, 175, 26)"});
    }      
    else{
      $('label#odp2D').removeClass('check');
      $('label#odp2D').addClass('odp');
      $('label.kolejnePyt2').css({"background-color":"wheat"});
      $('input#odpZaz2').attr('value',' ');
    }
  }
})
$('label#odp3A').click(function(){
  if($('label#odp3A').attr('value') == 'A'){
    if($('label#odp3A').attr('class') == 'odp'){
      $('label#odp3A').removeClass('odp');
      $('label#odp3A').addClass('check');
      $('label#odp3B').removeClass('check');
      $('label#odp3C').removeClass('check');
      $('label#odp3D').removeClass('check');
      $('label#odp3B').addClass('odp');
      $('label#odp3C').addClass('odp');
      $('label#odp3D').addClass('odp');
      $('input#odpZaz3').attr('value',$('label#odp3A').attr('value'));
      $('label.kolejnePyt3').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp3A').removeClass('check');
      $('label#odp3A').addClass('odp');
      $('label.kolejnePyt3').css({"background-color":"wheat"});
      $('input#odpZaz3').attr('value',' ');
    }
  }
});
$('label#odp3B').click(function(){
  if($('label#odp3B').attr('value') == 'B'){
    if($('label#odp3B').attr('class') == 'odp'){
      $('label#odp3B').removeClass('odp');
      $('label#odp3B').addClass('check');
      $('label#odp3A').removeClass('check');
      $('label#odp3C').removeClass('check');
      $('label#odp3D').removeClass('check');
      $('label#odp3A').addClass('odp');
      $('label#odp3C').addClass('odp');
      $('label#odp3D').addClass('odp');
      $('input#odpZaz3').attr('value',$('label#odp3B').attr('value'));
      $('label.kolejnePyt3').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp3B').removeClass('check');
      $('label#odp3B').addClass('odp');
      $('label.kolejnePyt3').css({"background-color":"wheat"});
      $('input#odpZaz3').attr('value',' ');
    }
  }
})
$('label#odp3C').click(function(){
  if($('label#odp3C').attr('value') == 'C'){
    if($('label#odp3C').attr('class') == 'odp'){
      $('label#odp3C').removeClass('odp');
      $('label#odp3C').addClass('check');
      $('label#odp3A').removeClass('check');
      $('label#odp3B').removeClass('check');
      $('label#odp3D').removeClass('check');
      $('label#odp3A').addClass('odp');
      $('label#odp3B').addClass('odp');
      $('label#odp3D').addClass('odp');
      $('input#odpZaz3').attr('value',$('label#odp3C').attr('value'));
      $('label.kolejnePyt3').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp3C').removeClass('check');
      $('label#odp3C').addClass('odp');
      $('label.kolejnePyt3').css({"background-color":"wheat"});
      $('input#odpZaz3').attr('value',' ');
    }
  }
})
$('label#odp3D').click(function(){
  if($('label#odp3D').attr('value') == 'D'){
    if($('label#odp3D').attr('class') == 'odp'){
      $('label#odp3D').removeClass('odp');
      $('label#odp3D').addClass('check');
      $('label#odp3A').removeClass('check');
      $('label#odp3B').removeClass('check');
      $('label#odp3C').removeClass('check');
      $('label#odp3A').addClass('odp');
      $('label#odp3B').addClass('odp');
      $('label#odp3C').addClass('odp');
      $('input#odpZaz3').attr('value',$('label#odp3D').attr('value'));
      $('label.kolejnePyt3').css({"background-color":"rgb(255, 175, 26)"});
    }      
    else{
      $('label#odp3D').removeClass('check');
      $('label#odp3D').addClass('odp');
      $('label.kolejnePyt3').css({"background-color":"wheat"});
      $('input#odpZaz3').attr('value',' ');
    }
  }
})
$('label#odp4A').click(function(){
  if($('label#odp4A').attr('value') == 'A'){
    if($('label#odp4A').attr('class') == 'odp'){
      $('label#odp4A').removeClass('odp');
      $('label#odp4A').addClass('check');
      $('label#odp4B').removeClass('check');
      $('label#odp4C').removeClass('check');
      $('label#odp4D').removeClass('check');
      $('label#odp4B').addClass('odp');
      $('label#odp4C').addClass('odp');
      $('label#odp4D').addClass('odp');
      $('input#odpZaz4').attr('value',$('label#odp4A').attr('value'));
      $('label.kolejnePyt4').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp4A').removeClass('check');
      $('label#odp4A').addClass('odp');
      $('label.kolejnePyt4').css({"background-color":"wheat"});
      $('input#odpZaz4').attr('value',' ');
    }
  }
});
$('label#odp4B').click(function(){
  if($('label#odp4B').attr('value') == 'B'){
    if($('label#odp4B').attr('class') == 'odp'){
      $('label#odp4B').removeClass('odp');
      $('label#odp4B').addClass('check');
      $('label#odp4A').removeClass('check');
      $('label#odp4C').removeClass('check');
      $('label#odp4D').removeClass('check');
      $('label#odp4A').addClass('odp');
      $('label#odp4C').addClass('odp');
      $('label#odp4D').addClass('odp');
      $('input#odpZaz4').attr('value',$('label#odp4B').attr('value'));
      $('label.kolejnePyt4').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp4B').removeClass('check');
      $('label#odp4B').addClass('odp');
      $('label.kolejnePyt4').css({"background-color":"wheat"});
      $('input#odpZaz4').attr('value',' ');
    }
  }
})
$('label#odp4C').click(function(){
  if($('label#odp4C').attr('value') == 'C'){
    if($('label#odp4C').attr('class') == 'odp'){
      $('label#odp4C').removeClass('odp');
      $('label#odp4C').addClass('check');
      $('label#odp4A').removeClass('check');
      $('label#odp4B').removeClass('check');
      $('label#odp4D').removeClass('check');
      $('label#odp4A').addClass('odp');
      $('label#odp4B').addClass('odp');
      $('label#odp4D').addClass('odp');
      $('input#odpZaz4').attr('value',$('label#odp4C').attr('value'));
      $('label.kolejnePyt4').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp4C').removeClass('check');
      $('label#odp4C').addClass('odp');
      $('label.kolejnePyt4').css({"background-color":"wheat"});
      $('input#odpZaz4').attr('value',' ');
    }
  }
})
$('label#odp4D').click(function(){
  if($('label#odp4D').attr('value') == 'D'){
    if($('label#odp4D').attr('class') == 'odp'){
      $('label#odp4D').removeClass('odp');
      $('label#odp4D').addClass('check');
      $('label#odp4A').removeClass('check');
      $('label#odp4B').removeClass('check');
      $('label#odp4C').removeClass('check');
      $('label#odp4A').addClass('odp');
      $('label#odp4B').addClass('odp');
      $('label#odp4C').addClass('odp');
      $('input#odpZaz4').attr('value',$('label#odp4D').attr('value'));
      $('label.kolejnePyt4').css({"background-color":"rgb(255, 175, 26)"});
    }      
    else{
      $('label#odp4D').removeClass('check');
      $('label#odp4D').addClass('odp');
      $('label.kolejnePyt4').css({"background-color":"wheat"});
      $('input#odpZaz4').attr('value',' ');
    }
  }
})
$('label#odp5A').click(function(){
  if($('label#odp5A').attr('value') == 'A'){
    if($('label#odp5A').attr('class') == 'odp'){
      $('label#odp5A').removeClass('odp');
      $('label#odp5A').addClass('check');
      $('label#odp5B').removeClass('check');
      $('label#odp5C').removeClass('check');
      $('label#odp5D').removeClass('check');
      $('label#odp5B').addClass('odp');
      $('label#odp5C').addClass('odp');
      $('label#odp5D').addClass('odp');
      $('input#odpZaz5').attr('value',$('label#odp5A').attr('value'));
      $('label.kolejnePyt5').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp5A').removeClass('check');
      $('label#odp5A').addClass('odp');
      $('label.kolejnePyt5').css({"background-color":"wheat"});
      $('input#odpZaz5').attr('value',' ');
    }
  }
});
$('label#odp5B').click(function(){
  if($('label#odp5B').attr('value') == 'B'){
    if($('label#odp5B').attr('class') == 'odp'){
      $('label#odp5B').removeClass('odp');
      $('label#odp5B').addClass('check');
      $('label#odp5A').removeClass('check');
      $('label#odp5C').removeClass('check');
      $('label#odp5D').removeClass('check');
      $('label#odp5A').addClass('odp');
      $('label#odp5C').addClass('odp');
      $('label#odp5D').addClass('odp');
      $('input#odpZaz5').attr('value',$('label#odp5B').attr('value'));
      $('label.kolejnePyt5').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp5B').removeClass('check');
      $('label#odp5B').addClass('odp');
      $('label.kolejnePyt5').css({"background-color":"wheat"});
      $('input#odpZaz5').attr('value',' ');
    }
  }
})
$('label#odp5C').click(function(){
  if($('label#odp5C').attr('value') == 'C'){
    if($('label#odp5C').attr('class') == 'odp'){
      $('label#odp5C').removeClass('odp');
      $('label#odp5C').addClass('check');
      $('label#odp5A').removeClass('check');
      $('label#odp5B').removeClass('check');
      $('label#odp5D').removeClass('check');
      $('label#odp5A').addClass('odp');
      $('label#odp5B').addClass('odp');
      $('label#odp5D').addClass('odp');
      $('input#odpZaz5').attr('value',$('label#odp5C').attr('value'));
      $('label.kolejnePyt5').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp5C').removeClass('check');
      $('label#odp5C').addClass('odp');
      $('label.kolejnePyt5').css({"background-color":"wheat"});
      $('input#odpZaz5').attr('value',' ');
    }
  }
})
$('label#odp5D').click(function(){
  if($('label#odp5D').attr('value') == 'D'){
    if($('label#odp5D').attr('class') == 'odp'){
      $('label#odp5D').removeClass('odp');
      $('label#odp5D').addClass('check');
      $('label#odp5A').removeClass('check');
      $('label#odp5B').removeClass('check');
      $('label#odp5C').removeClass('check');
      $('label#odp5A').addClass('odp');
      $('label#odp5B').addClass('odp');
      $('label#odp5C').addClass('odp');
      $('input#odpZaz5').attr('value',$('label#odp5D').attr('value'));
      $('label.kolejnePyt5').css({"background-color":"rgb(255, 175, 26)"});
    }      
    else{
      $('label#odp5D').removeClass('check');
      $('label#odp5D').addClass('odp');
      $('label.kolejnePyt5').css({"background-color":"wheat"});
      $('input#odpZaz5').attr('value',' ');
    }
  }
})
$('label#odp6A').click(function(){
  if($('label#odp6A').attr('value') == 'A'){
    if($('label#odp6A').attr('class') == 'odp'){
      $('label#odp6A').removeClass('odp');
      $('label#odp6A').addClass('check');
      $('label#odp6B').removeClass('check');
      $('label#odp6C').removeClass('check');
      $('label#odp6D').removeClass('check');
      $('label#odp6B').addClass('odp');
      $('label#odp6C').addClass('odp');
      $('label#odp6D').addClass('odp');
      $('input#odpZaz6').attr('value',$('label#odp6A').attr('value'));
      $('label.kolejnePyt6').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp6A').removeClass('check');
      $('label#odp6A').addClass('odp');
      $('label.kolejnePyt6').css({"background-color":"wheat"});
      $('input#odpZaz6').attr('value',' ');
    }
  }
});
$('label#odp6B').click(function(){
  if($('label#odp6B').attr('value') == 'B'){
    if($('label#odp6B').attr('class') == 'odp'){
      $('label#odp6B').removeClass('odp');
      $('label#odp6B').addClass('check');
      $('label#odp6A').removeClass('check');
      $('label#odp6C').removeClass('check');
      $('label#odp6D').removeClass('check');
      $('label#odp6A').addClass('odp');
      $('label#odp6C').addClass('odp');
      $('label#odp6D').addClass('odp');
      $('input#odpZaz6').attr('value',$('label#odp6B').attr('value'));
      $('label.kolejnePyt6').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp6B').removeClass('check');
      $('label#odp6B').addClass('odp');
      $('label.kolejnePyt6').css({"background-color":"wheat"});
      $('input#odpZaz6').attr('value',' ');
    }
  }
})
$('label#odp6C').click(function(){
  if($('label#odp6C').attr('value') == 'C'){
    if($('label#odp6C').attr('class') == 'odp'){
      $('label#odp6C').removeClass('odp');
      $('label#odp6C').addClass('check');
      $('label#odp6A').removeClass('check');
      $('label#odp6B').removeClass('check');
      $('label#odp6D').removeClass('check');
      $('label#odp6A').addClass('odp');
      $('label#odp6B').addClass('odp');
      $('label#odp6D').addClass('odp');
      $('input#odpZaz6').attr('value',$('label#odp6C').attr('value'));
      $('label.kolejnePyt6').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp6C').removeClass('check');
      $('label#odp6C').addClass('odp');
      $('label.kolejnePyt6').css({"background-color":"wheat"});
      $('input#odpZaz6').attr('value',' ');
    }
  }
})
$('label#odp6D').click(function(){
  if($('label#odp6D').attr('value') == 'D'){
    if($('label#odp6D').attr('class') == 'odp'){
      $('label#odp6D').removeClass('odp');
      $('label#odp6D').addClass('check');
      $('label#odp6A').removeClass('check');
      $('label#odp6B').removeClass('check');
      $('label#odp6C').removeClass('check');
      $('label#odp6A').addClass('odp');
      $('label#odp6B').addClass('odp');
      $('label#odp6C').addClass('odp');
      $('input#odpZaz6').attr('value',$('label#odp6D').attr('value'));
      $('label.kolejnePyt6').css({"background-color":"rgb(255, 175, 26)"});
    }      
    else{
      $('label#odp6D').removeClass('check');
      $('label#odp6D').addClass('odp');
      $('label.kolejnePyt6').css({"background-color":"wheat"});
      $('input#odpZaz6').attr('value',' ');
    }
  }
})
$('label#odp7A').click(function(){
  if($('label#odp7A').attr('value') == 'A'){
    if($('label#odp7A').attr('class') == 'odp'){
      $('label#odp7A').removeClass('odp');
      $('label#odp7A').addClass('check');
      $('label#odp7B').removeClass('check');
      $('label#odp7C').removeClass('check');
      $('label#odp7D').removeClass('check');
      $('label#odp7B').addClass('odp');
      $('label#odp7C').addClass('odp');
      $('label#odp7D').addClass('odp');
      $('input#odpZaz7').attr('value',$('label#odp7A').attr('value'));
      $('label.kolejnePyt7').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp7A').removeClass('check');
      $('label#odp7A').addClass('odp');
      $('label.kolejnePyt7').css({"background-color":"wheat"});
      $('input#odpZaz7').attr('value',' ');
    }
  }
});
$('label#odp7B').click(function(){
  if($('label#odp7B').attr('value') == 'B'){
    if($('label#odp7B').attr('class') == 'odp'){
      $('label#odp7B').removeClass('odp');
      $('label#odp7B').addClass('check');
      $('label#odp7A').removeClass('check');
      $('label#odp7C').removeClass('check');
      $('label#odp7D').removeClass('check');
      $('label#odp7A').addClass('odp');
      $('label#odp7C').addClass('odp');
      $('label#odp7D').addClass('odp');
      $('input#odpZaz7').attr('value',$('label#odp7B').attr('value'));
      $('label.kolejnePyt7').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp7B').removeClass('check');
      $('label#odp7B').addClass('odp');
      $('label.kolejnePyt7').css({"background-color":"wheat"});
      $('input#odpZaz7').attr('value',' ');
    }
  }
})
$('label#odp7C').click(function(){
  if($('label#odp7C').attr('value') == 'C'){
    if($('label#odp7C').attr('class') == 'odp'){
      $('label#odp7C').removeClass('odp');
      $('label#odp7C').addClass('check');
      $('label#odp7A').removeClass('check');
      $('label#odp7B').removeClass('check');
      $('label#odp7D').removeClass('check');
      $('label#odp7A').addClass('odp');
      $('label#odp7B').addClass('odp');
      $('label#odp7D').addClass('odp');
      $('input#odpZaz7').attr('value',$('label#odp7C').attr('value'));
      $('label.kolejnePyt7').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp7C').removeClass('check');
      $('label#odp7C').addClass('odp');
      $('label.kolejnePyt7').css({"background-color":"wheat"});
      $('input#odpZaz7').attr('value',' ');
    }
  }
})
$('label#odp7D').click(function(){
  if($('label#odp7D').attr('value') == 'D'){
    if($('label#odp7D').attr('class') == 'odp'){
      $('label#odp7D').removeClass('odp');
      $('label#odp7D').addClass('check');
      $('label#odp7A').removeClass('check');
      $('label#odp7B').removeClass('check');
      $('label#odp7C').removeClass('check');
      $('label#odp7A').addClass('odp');
      $('label#odp7B').addClass('odp');
      $('label#odp7C').addClass('odp');
      $('input#odpZaz7').attr('value',$('label#odp7D').attr('value'));
      $('label.kolejnePyt7').css({"background-color":"rgb(255, 175, 26)"});
    }      
    else{
      $('label#odp7D').removeClass('check');
      $('label#odp7D').addClass('odp');
      $('label.kolejnePyt7').css({"background-color":"wheat"});
      $('input#odpZaz7').attr('value',' ');
    }
  }
})
$('label#odp8A').click(function(){
  if($('label#odp8A').attr('value') == 'A'){
    if($('label#odp8A').attr('class') == 'odp'){
      $('label#odp8A').removeClass('odp');
      $('label#odp8A').addClass('check');
      $('label#odp8B').removeClass('check');
      $('label#odp8C').removeClass('check');
      $('label#odp8D').removeClass('check');
      $('label#odp8B').addClass('odp');
      $('label#odp8C').addClass('odp');
      $('label#odp8D').addClass('odp');
      $('input#odpZaz8').attr('value',$('label#odp8A').attr('value'));
      $('label.kolejnePyt8').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp8A').removeClass('check');
      $('label#odp8A').addClass('odp');
      $('label.kolejnePyt8').css({"background-color":"wheat"});
      $('input#odpZaz8').attr('value',' ');
    }
  }
});
$('label#odp8B').click(function(){
  if($('label#odp8B').attr('value') == 'B'){
    if($('label#odp8B').attr('class') == 'odp'){
      $('label#odp8B').removeClass('odp');
      $('label#odp8B').addClass('check');
      $('label#odp8A').removeClass('check');
      $('label#odp8C').removeClass('check');
      $('label#odp8D').removeClass('check');
      $('label#odp8A').addClass('odp');
      $('label#odp8C').addClass('odp');
      $('label#odp8D').addClass('odp');
      $('input#odpZaz8').attr('value',$('label#odp8B').attr('value'));
      $('label.kolejnePyt8').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp8B').removeClass('check');
      $('label#odp8B').addClass('odp');
      $('label.kolejnePyt8').css({"background-color":"wheat"});
      $('input#odpZaz8').attr('value',' ');
    }
  }
})
$('label#odp8C').click(function(){
  if($('label#odp8C').attr('value') == 'C'){
    if($('label#odp8C').attr('class') == 'odp'){
      $('label#odp8C').removeClass('odp');
      $('label#odp8C').addClass('check');
      $('label#odp8A').removeClass('check');
      $('label#odp8B').removeClass('check');
      $('label#odp8D').removeClass('check');
      $('label#odp8A').addClass('odp');
      $('label#odp8B').addClass('odp');
      $('label#odp8D').addClass('odp');
      $('input#odpZaz8').attr('value',$('label#odp8C').attr('value'));
      $('label.kolejnePyt8').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp8C').removeClass('check');
      $('label#odp8C').addClass('odp');
      $('label.kolejnePyt8').css({"background-color":"wheat"});
      $('input#odpZaz8').attr('value',' ');
    }
  }
})
$('label#odp8D').click(function(){
  if($('label#odp8D').attr('value') == 'D'){
    if($('label#odp8D').attr('class') == 'odp'){
      $('label#odp8D').removeClass('odp');
      $('label#odp8D').addClass('check');
      $('label#odp8A').removeClass('check');
      $('label#odp8B').removeClass('check');
      $('label#odp8C').removeClass('check');
      $('label#odp8A').addClass('odp');
      $('label#odp8B').addClass('odp');
      $('label#odp8C').addClass('odp');
      $('input#odpZaz8').attr('value',$('label#odp8D').attr('value'));
      $('label.kolejnePyt8').css({"background-color":"rgb(255, 175, 26)"});
    }      
    else{
      $('label#odp8D').removeClass('check');
      $('label#odp8D').addClass('odp');
      $('label.kolejnePyt8').css({"background-color":"wheat"});
      $('input#odpZaz8').attr('value',' ');
    }
  }
})
$('label#odp9A').click(function(){
  if($('label#odp9A').attr('value') == 'A'){
    if($('label#odp9A').attr('class') == 'odp'){
      $('label#odp9A').removeClass('odp');
      $('label#odp9A').addClass('check');
      $('label#odp9B').removeClass('check');
      $('label#odp9C').removeClass('check');
      $('label#odp9D').removeClass('check');
      $('label#odp9B').addClass('odp');
      $('label#odp9C').addClass('odp');
      $('label#odp9D').addClass('odp');
      $('input#odpZaz9').attr('value',$('label#odp9A').attr('value'));
      $('label.kolejnePyt9').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp9A').removeClass('check');
      $('label#odp9A').addClass('odp');
      $('label.kolejnePyt9').css({"background-color":"wheat"});
      $('input#odpZaz9').attr('value',' ');
    }
  }
});
$('label#odp9B').click(function(){
  if($('label#odp9B').attr('value') == 'B'){
    if($('label#odp9B').attr('class') == 'odp'){
      $('label#odp9B').removeClass('odp');
      $('label#odp9B').addClass('check');
      $('label#odp9A').removeClass('check');
      $('label#odp9C').removeClass('check');
      $('label#odp9D').removeClass('check');
      $('label#odp9A').addClass('odp');
      $('label#odp9C').addClass('odp');
      $('label#odp9D').addClass('odp');
      $('input#odpZaz9').attr('value',$('label#odp9B').attr('value'));
      $('label.kolejnePyt9').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp9B').removeClass('check');
      $('label#odp9B').addClass('odp');
      $('label.kolejnePyt9').css({"background-color":"wheat"});
      $('input#odpZaz9').attr('value',' ');
    }
  }
})
$('label#odp9C').click(function(){
  if($('label#odp9C').attr('value') == 'C'){
    if($('label#odp9C').attr('class') == 'odp'){
      $('label#odp9C').removeClass('odp');
      $('label#odp9C').addClass('check');
      $('label#odp9A').removeClass('check');
      $('label#odp9B').removeClass('check');
      $('label#odp9D').removeClass('check');
      $('label#odp9A').addClass('odp');
      $('label#odp9B').addClass('odp');
      $('label#odp9D').addClass('odp');
      $('input#odpZaz9').attr('value',$('label#odp9C').attr('value'));
      $('label.kolejnePyt9').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp9C').removeClass('check');
      $('label#odp9C').addClass('odp');
      $('label.kolejnePyt9').css({"background-color":"wheat"});
      $('input#odpZaz9').attr('value',' ');
    }
  }
})
$('label#odp9D').click(function(){
  if($('label#odp9D').attr('value') == 'D'){
    if($('label#odp9D').attr('class') == 'odp'){
      $('label#odp9D').removeClass('odp');
      $('label#odp9D').addClass('check');
      $('label#odp9A').removeClass('check');
      $('label#odp9B').removeClass('check');
      $('label#odp9C').removeClass('check');
      $('label#odp9A').addClass('odp');
      $('label#odp9B').addClass('odp');
      $('label#odp9C').addClass('odp');
      $('input#odpZaz9').attr('value',$('label#odp9D').attr('value'));
      $('label.kolejnePyt9').css({"background-color":"rgb(255, 175, 26)"});
    }      
    else{
      $('label#odp9D').removeClass('check');
      $('label#odp9D').addClass('odp');
      $('label.kolejnePyt9').css({"background-color":"wheat"});
      $('input#odpZaz9').attr('value',' ');
    }
  }
})
$('label#odp10A').click(function(){
  if($('label#odp10A').attr('value') == 'A'){
    if($('label#odp10A').attr('class') == 'odp'){
      $('label#odp10A').removeClass('odp');
      $('label#odp10A').addClass('check');
      $('label#odp10B').removeClass('check');
      $('label#odp10C').removeClass('check');
      $('label#odp10D').removeClass('check');
      $('label#odp10B').addClass('odp');
      $('label#odp10C').addClass('odp');
      $('label#odp10D').addClass('odp');
      $('input#odpZaz10').attr('value',$('label#odp10A').attr('value'));
      $('label.kolejnePyt10').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp10A').removeClass('check');
      $('label#odp10A').addClass('odp');
      $('label.kolejnePyt10').css({"background-color":"wheat"});
      $('input#odpZaz10').attr('value',' ');
    }
  }
});
$('label#odp10B').click(function(){
  if($('label#odp10B').attr('value') == 'B'){
    if($('label#odp10B').attr('class') == 'odp'){
      $('label#odp10B').removeClass('odp');
      $('label#odp10B').addClass('check');
      $('label#odp10A').removeClass('check');
      $('label#odp10C').removeClass('check');
      $('label#odp10D').removeClass('check');
      $('label#odp10A').addClass('odp');
      $('label#odp10C').addClass('odp');
      $('label#odp10D').addClass('odp');
      $('input#odpZaz10').attr('value',$('label#odp10B').attr('value'));
      $('label.kolejnePyt10').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp10B').removeClass('check');
      $('label#odp10B').addClass('odp');
      $('label.kolejnePyt10').css({"background-color":"wheat"});
      $('input#odpZaz10').attr('value',' ');
    }
  }
})
$('label#odp10C').click(function(){
  if($('label#odp10C').attr('value') == 'C'){
    if($('label#odp10C').attr('class') == 'odp'){
      $('label#odp10C').removeClass('odp');
      $('label#odp10C').addClass('check');
      $('label#odp10A').removeClass('check');
      $('label#odp10B').removeClass('check');
      $('label#odp10D').removeClass('check');
      $('label#odp10A').addClass('odp');
      $('label#odp10B').addClass('odp');
      $('label#odp10D').addClass('odp');
      $('input#odpZaz10').attr('value',$('label#odp10C').attr('value'));
      $('label.kolejnePyt10').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp10C').removeClass('check');
      $('label#odp10C').addClass('odp');
      $('label.kolejnePyt10').css({"background-color":"wheat"});
      $('input#odpZaz10').attr('value',' ');
    }
  }
})
$('label#odp10D').click(function(){
  if($('label#odp10D').attr('value') == 'D'){
    if($('label#odp10D').attr('class') == 'odp'){
      $('label#odp10D').removeClass('odp');
      $('label#odp10D').addClass('check');
      $('label#odp10A').removeClass('check');
      $('label#odp10B').removeClass('check');
      $('label#odp10C').removeClass('check');
      $('label#odp10A').addClass('odp');
      $('label#odp10B').addClass('odp');
      $('label#odp10C').addClass('odp');
      $('input#odpZaz10').attr('value',$('label#odp10D').attr('value'));
      $('label.kolejnePyt10').css({"background-color":"rgb(255, 175, 26)"});
    }      
    else{
      $('label#odp10D').removeClass('check');
      $('label#odp10D').addClass('odp');
      $('label.kolejnePyt10').css({"background-color":"wheat"});
      $('input#odpZaz10').attr('value',' ');
    }
  }
})
$('label#odp11A').click(function(){
  if($('label#odp11A').attr('value') == 'A'){
    if($('label#odp11A').attr('class') == 'odp'){
      $('label#odp11A').removeClass('odp');
      $('label#odp11A').addClass('check');
      $('label#odp11B').removeClass('check');
      $('label#odp11C').removeClass('check');
      $('label#odp11D').removeClass('check');
      $('label#odp11B').addClass('odp');
      $('label#odp11C').addClass('odp');
      $('label#odp11D').addClass('odp');
      $('input#odpZaz11').attr('value',$('label#odp11A').attr('value'));
      $('label.kolejnePyt11').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp11A').removeClass('check');
      $('label#odp11A').addClass('odp');
      $('label.kolejnePyt11').css({"background-color":"wheat"});
      $('input#odpZaz11').attr('value',' ');
    }
  }
});
$('label#odp11B').click(function(){
  if($('label#odp11B').attr('value') == 'B'){
    if($('label#odp11B').attr('class') == 'odp'){
      $('label#odp11B').removeClass('odp');
      $('label#odp11B').addClass('check');
      $('label#odp11A').removeClass('check');
      $('label#odp11C').removeClass('check');
      $('label#odp11D').removeClass('check');
      $('label#odp11A').addClass('odp');
      $('label#odp11C').addClass('odp');
      $('label#odp11D').addClass('odp');
      $('input#odpZaz11').attr('value',$('label#odp11B').attr('value'));
      $('label.kolejnePyt11').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp11B').removeClass('check');
      $('label#odp11B').addClass('odp');
      $('label.kolejnePyt11').css({"background-color":"wheat"});
      $('input#odpZaz11').attr('value',' ');
    }
  }
})
$('label#odp11C').click(function(){
  if($('label#odp11C').attr('value') == 'C'){
    if($('label#odp11C').attr('class') == 'odp'){
      $('label#odp11C').removeClass('odp');
      $('label#odp11C').addClass('check');
      $('label#odp11A').removeClass('check');
      $('label#odp11B').removeClass('check');
      $('label#odp11D').removeClass('check');
      $('label#odp11A').addClass('odp');
      $('label#odp11B').addClass('odp');
      $('label#odp11D').addClass('odp');
      $('input#odpZaz11').attr('value',$('label#odp11C').attr('value'));
      $('label.kolejnePyt11').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp11C').removeClass('check');
      $('label#odp11C').addClass('odp');
      $('label.kolejnePyt11').css({"background-color":"wheat"});
      $('input#odpZaz11').attr('value',' ');
    }
  }
})
$('label#odp11D').click(function(){
  if($('label#odp11D').attr('value') == 'D'){
    if($('label#odp11D').attr('class') == 'odp'){
      $('label#odp11D').removeClass('odp');
      $('label#odp11D').addClass('check');
      $('label#odp11A').removeClass('check');
      $('label#odp11B').removeClass('check');
      $('label#odp11C').removeClass('check');
      $('label#odp11A').addClass('odp');
      $('label#odp11B').addClass('odp');
      $('label#odp11C').addClass('odp');
      $('input#odpZaz11').attr('value',$('label#odp11D').attr('value'));
      $('label.kolejnePyt11').css({"background-color":"rgb(255, 175, 26)"});
    }      
    else{
      $('label#odp11D').removeClass('check');
      $('label#odp11D').addClass('odp');
      $('label.kolejnePyt11').css({"background-color":"wheat"});
      $('input#odpZaz11').attr('value',' ');
    }
  }
})
$('label#odp12A').click(function(){
  if($('label#odp12A').attr('value') == 'A'){
    if($('label#odp12A').attr('class') == 'odp'){
      $('label#odp12A').removeClass('odp');
      $('label#odp12A').addClass('check');
      $('label#odp12B').removeClass('check');
      $('label#odp12C').removeClass('check');
      $('label#odp12D').removeClass('check');
      $('label#odp12B').addClass('odp');
      $('label#odp12C').addClass('odp');
      $('label#odp12D').addClass('odp');
      $('input#odpZaz12').attr('value',$('label#odp12A').attr('value'));
      $('label.kolejnePyt12').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp12A').removeClass('check');
      $('label#odp12A').addClass('odp');
      $('label.kolejnePyt12').css({"background-color":"wheat"});
      $('input#odpZaz12').attr('value',' ');
    }
  }
});
$('label#odp12B').click(function(){
  if($('label#odp12B').attr('value') == 'B'){
    if($('label#odp12B').attr('class') == 'odp'){
      $('label#odp12B').removeClass('odp');
      $('label#odp12B').addClass('check');
      $('label#odp12A').removeClass('check');
      $('label#odp12C').removeClass('check');
      $('label#odp12D').removeClass('check');
      $('label#odp12A').addClass('odp');
      $('label#odp12C').addClass('odp');
      $('label#odp12D').addClass('odp');
      $('input#odpZaz12').attr('value',$('label#odp12B').attr('value'));
      $('label.kolejnePyt12').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp12B').removeClass('check');
      $('label#odp12B').addClass('odp');
      $('label.kolejnePyt12').css({"background-color":"wheat"});
      $('input#odpZaz12').attr('value',' ');
    }
  }
})
$('label#odp12C').click(function(){
  if($('label#odp12C').attr('value') == 'C'){
    if($('label#odp12C').attr('class') == 'odp'){
      $('label#odp12C').removeClass('odp');
      $('label#odp12C').addClass('check');
      $('label#odp12A').removeClass('check');
      $('label#odp12B').removeClass('check');
      $('label#odp12D').removeClass('check');
      $('label#odp12A').addClass('odp');
      $('label#odp12B').addClass('odp');
      $('label#odp12D').addClass('odp');
      $('input#odpZaz12').attr('value',$('label#odp12C').attr('value'));
      $('label.kolejnePyt12').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp12C').removeClass('check');
      $('label#odp12C').addClass('odp');
      $('label.kolejnePyt12').css({"background-color":"wheat"});
      $('input#odpZaz12').attr('value',' ');
    }
  }
})
$('label#odp12D').click(function(){
  if($('label#odp12D').attr('value') == 'D'){
    if($('label#odp12D').attr('class') == 'odp'){
      $('label#odp12D').removeClass('odp');
      $('label#odp12D').addClass('check');
      $('label#odp12A').removeClass('check');
      $('label#odp12B').removeClass('check');
      $('label#odp12C').removeClass('check');
      $('label#odp12A').addClass('odp');
      $('label#odp12B').addClass('odp');
      $('label#odp12C').addClass('odp');
      $('input#odpZaz12').attr('value',$('label#odp12D').attr('value'));
      $('label.kolejnePyt12').css({"background-color":"rgb(255, 175, 26)"});
    }      
    else{
      $('label#odp12D').removeClass('check');
      $('label#odp12D').addClass('odp');
      $('label.kolejnePyt12').css({"background-color":"wheat"});
      $('input#odpZaz12').attr('value',' ');
    }
  }
})
$('label#odp13A').click(function(){
  if($('label#odp13A').attr('value') == 'A'){
    if($('label#odp13A').attr('class') == 'odp'){
      $('label#odp13A').removeClass('odp');
      $('label#odp13A').addClass('check');
      $('label#odp13B').removeClass('check');
      $('label#odp13C').removeClass('check');
      $('label#odp13D').removeClass('check');
      $('label#odp13B').addClass('odp');
      $('label#odp13C').addClass('odp');
      $('label#odp13D').addClass('odp');
      $('input#odpZaz13').attr('value',$('label#odp13A').attr('value'));
      $('label.kolejnePyt13').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp13A').removeClass('check');
      $('label#odp13A').addClass('odp');
      $('label.kolejnePyt13').css({"background-color":"wheat"});
      $('input#odpZaz13').attr('value',' ');
    }
  }
});
$('label#odp13B').click(function(){
  if($('label#odp13B').attr('value') == 'B'){
    if($('label#odp13B').attr('class') == 'odp'){
      $('label#odp13B').removeClass('odp');
      $('label#odp13B').addClass('check');
      $('label#odp13A').removeClass('check');
      $('label#odp13C').removeClass('check');
      $('label#odp13D').removeClass('check');
      $('label#odp13A').addClass('odp');
      $('label#odp13C').addClass('odp');
      $('label#odp13D').addClass('odp');
      $('input#odpZaz13').attr('value',$('label#odp13B').attr('value'));
      $('label.kolejnePyt13').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp13B').removeClass('check');
      $('label#odp13B').addClass('odp');
      $('label.kolejnePyt13').css({"background-color":"wheat"});
      $('input#odpZaz13').attr('value',' ');
    }
  }
})
$('label#odp13C').click(function(){
  if($('label#odp13C').attr('value') == 'C'){
    if($('label#odp13C').attr('class') == 'odp'){
      $('label#odp13C').removeClass('odp');
      $('label#odp13C').addClass('check');
      $('label#odp13A').removeClass('check');
      $('label#odp13B').removeClass('check');
      $('label#odp13D').removeClass('check');
      $('label#odp13A').addClass('odp');
      $('label#odp13B').addClass('odp');
      $('label#odp13D').addClass('odp');
      $('input#odpZaz13').attr('value',$('label#odp13C').attr('value'));
      $('label.kolejnePyt13').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp13C').removeClass('check');
      $('label#odp13C').addClass('odp');
      $('label.kolejnePyt13').css({"background-color":"wheat"});
      $('input#odpZaz13').attr('value',' ');
    }
  }
})
$('label#odp13D').click(function(){
  if($('label#odp13D').attr('value') == 'D'){
    if($('label#odp13D').attr('class') == 'odp'){
      $('label#odp13D').removeClass('odp');
      $('label#odp13D').addClass('check');
      $('label#odp13A').removeClass('check');
      $('label#odp13B').removeClass('check');
      $('label#odp13C').removeClass('check');
      $('label#odp13A').addClass('odp');
      $('label#odp13B').addClass('odp');
      $('label#odp13C').addClass('odp');
      $('input#odpZaz13').attr('value',$('label#odp13D').attr('value'));
      $('label.kolejnePyt13').css({"background-color":"rgb(255, 175, 26)"});
    }      
    else{
      $('label#odp13D').removeClass('check');
      $('label#odp13D').addClass('odp');
      $('label.kolejnePyt13').css({"background-color":"wheat"});
      $('input#odpZaz13').attr('value',' ');
    }
  }
})
$('label#odp14A').click(function(){
  if($('label#odp14A').attr('value') == 'A'){
    if($('label#odp14A').attr('class') == 'odp'){
      $('label#odp14A').removeClass('odp');
      $('label#odp14A').addClass('check');
      $('label#odp14B').removeClass('check');
      $('label#odp14C').removeClass('check');
      $('label#odp14D').removeClass('check');
      $('label#odp14B').addClass('odp');
      $('label#odp14C').addClass('odp');
      $('label#odp14D').addClass('odp');
      $('input#odpZaz14').attr('value',$('label#odp14A').attr('value'));
      $('label.kolejnePyt14').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp14A').removeClass('check');
      $('label#odp14A').addClass('odp');
      $('label.kolejnePyt14').css({"background-color":"wheat"});
      $('input#odpZaz14').attr('value',' ');
    }
  }
});
$('label#odp14B').click(function(){
  if($('label#odp14B').attr('value') == 'B'){
    if($('label#odp14B').attr('class') == 'odp'){
      $('label#odp14B').removeClass('odp');
      $('label#odp14B').addClass('check');
      $('label#odp14A').removeClass('check');
      $('label#odp14C').removeClass('check');
      $('label#odp14D').removeClass('check');
      $('label#odp14A').addClass('odp');
      $('label#odp14C').addClass('odp');
      $('label#odp14D').addClass('odp');
      $('input#odpZaz14').attr('value',$('label#odp14B').attr('value'));
      $('label.kolejnePyt14').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp14B').removeClass('check');
      $('label#odp14B').addClass('odp');
      $('label.kolejnePyt14').css({"background-color":"wheat"});
      $('input#odpZaz14').attr('value',' ');
    }
  }
})
$('label#odp14C').click(function(){
  if($('label#odp14C').attr('value') == 'C'){
    if($('label#odp14C').attr('class') == 'odp'){
      $('label#odp14C').removeClass('odp');
      $('label#odp14C').addClass('check');
      $('label#odp14A').removeClass('check');
      $('label#odp14B').removeClass('check');
      $('label#odp14D').removeClass('check');
      $('label#odp14A').addClass('odp');
      $('label#odp14B').addClass('odp');
      $('label#odp14D').addClass('odp');
      $('input#odpZaz14').attr('value',$('label#odp14C').attr('value'));
      $('label.kolejnePyt14').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp14C').removeClass('check');
      $('label#odp14C').addClass('odp');
      $('label.kolejnePyt14').css({"background-color":"wheat"});
      $('input#odpZaz14').attr('value',' ');
    }
  }
})
$('label#odp14D').click(function(){
  if($('label#odp14D').attr('value') == 'D'){
    if($('label#odp14D').attr('class') == 'odp'){
      $('label#odp14D').removeClass('odp');
      $('label#odp14D').addClass('check');
      $('label#odp14A').removeClass('check');
      $('label#odp14B').removeClass('check');
      $('label#odp14C').removeClass('check');
      $('label#odp14A').addClass('odp');
      $('label#odp14B').addClass('odp');
      $('label#odp14C').addClass('odp');
      $('input#odpZaz14').attr('value',$('label#odp14D').attr('value'));
      $('label.kolejnePyt14').css({"background-color":"rgb(255, 175, 26)"});
    }      
    else{
      $('label#odp14D').removeClass('check');
      $('label#odp14D').addClass('odp');
      $('label.kolejnePyt14').css({"background-color":"wheat"});
      $('input#odpZaz14').attr('value',' ');
    }
  }
})
$('label#odp15A').click(function(){
  if($('label#odp15A').attr('value') == 'A'){
    if($('label#odp15A').attr('class') == 'odp'){
      $('label#odp15A').removeClass('odp');
      $('label#odp15A').addClass('check');
      $('label#odp15B').removeClass('check');
      $('label#odp15C').removeClass('check');
      $('label#odp15D').removeClass('check');
      $('label#odp15B').addClass('odp');
      $('label#odp15C').addClass('odp');
      $('label#odp15D').addClass('odp');
      $('input#odpZaz15').attr('value',$('label#odp15A').attr('value'));
      $('label.kolejnePyt15').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp15A').removeClass('check');
      $('label#odp15A').addClass('odp');
      $('label.kolejnePyt15').css({"background-color":"wheat"});
      $('input#odpZaz15').attr('value',' ');
    }
  }
});
$('label#odp15B').click(function(){
  if($('label#odp15B').attr('value') == 'B'){
    if($('label#odp15B').attr('class') == 'odp'){
      $('label#odp15B').removeClass('odp');
      $('label#odp15B').addClass('check');
      $('label#odp15A').removeClass('check');
      $('label#odp15C').removeClass('check');
      $('label#odp15D').removeClass('check');
      $('label#odp15A').addClass('odp');
      $('label#odp15C').addClass('odp');
      $('label#odp15D').addClass('odp');
      $('input#odpZaz15').attr('value',$('label#odp15B').attr('value'));
      $('label.kolejnePyt15').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp15B').removeClass('check');
      $('label#odp15B').addClass('odp');
      $('label.kolejnePyt15').css({"background-color":"wheat"});
      $('input#odpZaz15').attr('value',' ');
    }
  }
})
$('label#odp15C').click(function(){
  if($('label#odp15C').attr('value') == 'C'){
    if($('label#odp15C').attr('class') == 'odp'){
      $('label#odp15C').removeClass('odp');
      $('label#odp15C').addClass('check');
      $('label#odp15A').removeClass('check');
      $('label#odp15B').removeClass('check');
      $('label#odp15D').removeClass('check');
      $('label#odp15A').addClass('odp');
      $('label#odp15B').addClass('odp');
      $('label#odp15D').addClass('odp');
      $('input#odpZaz15').attr('value',$('label#odp15C').attr('value'));
      $('label.kolejnePyt15').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp15C').removeClass('check');
      $('label#odp15C').addClass('odp');
      $('label.kolejnePyt15').css({"background-color":"wheat"});
      $('input#odpZaz15').attr('value',' ');
    }
  }
})
$('label#odp15D').click(function(){
  if($('label#odp15D').attr('value') == 'D'){
    if($('label#odp15D').attr('class') == 'odp'){
      $('label#odp15D').removeClass('odp');
      $('label#odp15D').addClass('check');
      $('label#odp15A').removeClass('check');
      $('label#odp15B').removeClass('check');
      $('label#odp15C').removeClass('check');
      $('label#odp15A').addClass('odp');
      $('label#odp15B').addClass('odp');
      $('label#odp15C').addClass('odp');
      $('input#odpZaz15').attr('value',$('label#odp15D').attr('value'));
      $('label.kolejnePyt15').css({"background-color":"rgb(255, 175, 26)"});
    }      
    else{
      $('label#odp15D').removeClass('check');
      $('label#odp15D').addClass('odp');
      $('label.kolejnePyt15').css({"background-color":"wheat"});
      $('input#odpZaz15').attr('value',' ');
    }
  }
})
$('label#odp16A').click(function(){
  if($('label#odp16A').attr('value') == 'A'){
    if($('label#odp16A').attr('class') == 'odp'){
      $('label#odp16A').removeClass('odp');
      $('label#odp16A').addClass('check');
      $('label#odp16B').removeClass('check');
      $('label#odp16C').removeClass('check');
      $('label#odp16D').removeClass('check');
      $('label#odp16B').addClass('odp');
      $('label#odp16C').addClass('odp');
      $('label#odp16D').addClass('odp');
      $('input#odpZaz16').attr('value',$('label#odp16A').attr('value'));
      $('label.kolejnePyt16').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp16A').removeClass('check');
      $('label#odp16A').addClass('odp');
      $('label.kolejnePyt16').css({"background-color":"wheat"});
      $('input#odpZaz16').attr('value',' ');
    }
  }
});
$('label#odp16B').click(function(){
  if($('label#odp16B').attr('value') == 'B'){
    if($('label#odp16B').attr('class') == 'odp'){
      $('label#odp16B').removeClass('odp');
      $('label#odp16B').addClass('check');
      $('label#odp16A').removeClass('check');
      $('label#odp16C').removeClass('check');
      $('label#odp16D').removeClass('check');
      $('label#odp16A').addClass('odp');
      $('label#odp16C').addClass('odp');
      $('label#odp16D').addClass('odp');
      $('input#odpZaz16').attr('value',$('label#odp16B').attr('value'));
      $('label.kolejnePyt16').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp16B').removeClass('check');
      $('label#odp16B').addClass('odp');
      $('label.kolejnePyt16').css({"background-color":"wheat"});
      $('input#odpZaz16').attr('value',' ');
    }
  }
})
$('label#odp16C').click(function(){
  if($('label#odp16C').attr('value') == 'C'){
    if($('label#odp16C').attr('class') == 'odp'){
      $('label#odp16C').removeClass('odp');
      $('label#odp16C').addClass('check');
      $('label#odp16A').removeClass('check');
      $('label#odp16B').removeClass('check');
      $('label#odp16D').removeClass('check');
      $('label#odp16A').addClass('odp');
      $('label#odp16B').addClass('odp');
      $('label#odp16D').addClass('odp');
      $('input#odpZaz16').attr('value',$('label#odp16C').attr('value'));
      $('label.kolejnePyt16').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp16C').removeClass('check');
      $('label#odp16C').addClass('odp');
      $('label.kolejnePyt16').css({"background-color":"wheat"});
      $('input#odpZaz16').attr('value',' ');
    }
  }
})
$('label#odp16D').click(function(){
  if($('label#odp16D').attr('value') == 'D'){
    if($('label#odp16D').attr('class') == 'odp'){
      $('label#odp16D').removeClass('odp');
      $('label#odp16D').addClass('check');
      $('label#odp16A').removeClass('check');
      $('label#odp16B').removeClass('check');
      $('label#odp16C').removeClass('check');
      $('label#odp16A').addClass('odp');
      $('label#odp16B').addClass('odp');
      $('label#odp16C').addClass('odp');
      $('input#odpZaz16').attr('value',$('label#odp16D').attr('value'));
      $('label.kolejnePyt16').css({"background-color":"rgb(255, 175, 26)"});
    }      
    else{
      $('label#odp16D').removeClass('check');
      $('label#odp16D').addClass('odp');
      $('label.kolejnePyt16').css({"background-color":"wheat"});
      $('input#odpZaz6').attr('value',' ');
    }
  }
})
$('label#odp17A').click(function(){
  if($('label#odp17A').attr('value') == 'A'){
    if($('label#odp17A').attr('class') == 'odp'){
      $('label#odp17A').removeClass('odp');
      $('label#odp17A').addClass('check');
      $('label#odp17B').removeClass('check');
      $('label#odp17C').removeClass('check');
      $('label#odp17D').removeClass('check');
      $('label#odp17B').addClass('odp');
      $('label#odp17C').addClass('odp');
      $('label#odp17D').addClass('odp');
      $('input#odpZaz17').attr('value',$('label#odp17A').attr('value'));
      $('label.kolejnePyt17').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp17A').removeClass('check');
      $('label#odp17A').addClass('odp');
      $('label.kolejnePyt17').css({"background-color":"wheat"});
      $('input#odpZaz17').attr('value',' ');
    }
  }
});
$('label#odp17B').click(function(){
  if($('label#odp17B').attr('value') == 'B'){
    if($('label#odp17B').attr('class') == 'odp'){
      $('label#odp17B').removeClass('odp');
      $('label#odp17B').addClass('check');
      $('label#odp17A').removeClass('check');
      $('label#odp17C').removeClass('check');
      $('label#odp17D').removeClass('check');
      $('label#odp17A').addClass('odp');
      $('label#odp17C').addClass('odp');
      $('label#odp17D').addClass('odp');
      $('input#odpZaz17').attr('value',$('label#odp17B').attr('value'));
      $('label.kolejnePyt17').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp17B').removeClass('check');
      $('label#odp17B').addClass('odp');
      $('label.kolejnePyt17').css({"background-color":"wheat"});
      $('input#odpZaz17').attr('value',' ');
    }
  }
})
$('label#odp17C').click(function(){
  if($('label#odp17C').attr('value') == 'C'){
    if($('label#odp17C').attr('class') == 'odp'){
      $('label#odp17C').removeClass('odp');
      $('label#odp17C').addClass('check');
      $('label#odp17A').removeClass('check');
      $('label#odp17B').removeClass('check');
      $('label#odp17D').removeClass('check');
      $('label#odp17A').addClass('odp');
      $('label#odp17B').addClass('odp');
      $('label#odp17D').addClass('odp');
      $('input#odpZaz17').attr('value',$('label#odp17C').attr('value'));
      $('label.kolejnePyt17').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp17C').removeClass('check');
      $('label#odp17C').addClass('odp');
      $('label.kolejnePyt17').css({"background-color":"wheat"});
      $('input#odpZaz17').attr('value',' ');
    }
  }
})
$('label#odp17D').click(function(){
  if($('label#odp17D').attr('value') == 'D'){
    if($('label#odp17D').attr('class') == 'odp'){
      $('label#odp17D').removeClass('odp');
      $('label#odp17D').addClass('check');
      $('label#odp17A').removeClass('check');
      $('label#odp17B').removeClass('check');
      $('label#odp17C').removeClass('check');
      $('label#odp17A').addClass('odp');
      $('label#odp17B').addClass('odp');
      $('label#odp17C').addClass('odp');
      $('input#odpZaz17').attr('value',$('label#odp17D').attr('value'));
      $('label.kolejnePyt17').css({"background-color":"rgb(255, 175, 26)"});
    }      
    else{
      $('label#odp17D').removeClass('check');
      $('label#odp17D').addClass('odp');
      $('label.kolejnePyt17').css({"background-color":"wheat"});
      $('input#odpZaz17').attr('value',' ');
    }
  }
})
$('label#odp18A').click(function(){
  if($('label#odp18A').attr('value') == 'A'){
    if($('label#odp18A').attr('class') == 'odp'){
      $('label#odp18A').removeClass('odp');
      $('label#odp18A').addClass('check');
      $('label#odp18B').removeClass('check');
      $('label#odp18C').removeClass('check');
      $('label#odp18D').removeClass('check');
      $('label#odp18B').addClass('odp');
      $('label#odp18C').addClass('odp');
      $('label#odp18D').addClass('odp');
      $('input#odpZaz18').attr('value',$('label#odp18A').attr('value'));
      $('label.kolejnePyt18').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp18A').removeClass('check');
      $('label#odp18A').addClass('odp');
      $('label.kolejnePyt18').css({"background-color":"wheat"});
      $('input#odpZaz18').attr('value',' ');
    }
  }
});
$('label#odp18B').click(function(){
  if($('label#odp18B').attr('value') == 'B'){
    if($('label#odp18B').attr('class') == 'odp'){
      $('label#odp18B').removeClass('odp');
      $('label#odp18B').addClass('check');
      $('label#odp18A').removeClass('check');
      $('label#odp18C').removeClass('check');
      $('label#odp18D').removeClass('check');
      $('label#odp18A').addClass('odp');
      $('label#odp18C').addClass('odp');
      $('label#odp18D').addClass('odp');
      $('input#odpZaz18').attr('value',$('label#odp18B').attr('value'));
      $('label.kolejnePyt18').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp18B').removeClass('check');
      $('label#odp18B').addClass('odp');
      $('label.kolejnePyt18').css({"background-color":"wheat"});
      $('input#odpZaz18').attr('value',' ');
    }
  }
})
$('label#odp18C').click(function(){
  if($('label#odp18C').attr('value') == 'C'){
    if($('label#odp18C').attr('class') == 'odp'){
      $('label#odp18C').removeClass('odp');
      $('label#odp18C').addClass('check');
      $('label#odp18A').removeClass('check');
      $('label#odp18B').removeClass('check');
      $('label#odp18D').removeClass('check');
      $('label#odp18A').addClass('odp');
      $('label#odp18B').addClass('odp');
      $('label#odp18D').addClass('odp');
      $('input#odpZaz18').attr('value',$('label#odp18C').attr('value'));
      $('label.kolejnePyt18').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp18C').removeClass('check');
      $('label#odp18C').addClass('odp');
      $('label.kolejnePyt18').css({"background-color":"wheat"});
      $('input#odpZaz18').attr('value',' ');
    }
  }
})
$('label#odp18D').click(function(){
  if($('label#odp18D').attr('value') == 'D'){
    if($('label#odp18D').attr('class') == 'odp'){
      $('label#odp18D').removeClass('odp');
      $('label#odp18D').addClass('check');
      $('label#odp18A').removeClass('check');
      $('label#odp18B').removeClass('check');
      $('label#odp18C').removeClass('check');
      $('label#odp18A').addClass('odp');
      $('label#odp18B').addClass('odp');
      $('label#odp18C').addClass('odp');
      $('input#odpZaz18').attr('value',$('label#odp18D').attr('value'));
      $('label.kolejnePyt18').css({"background-color":"rgb(255, 175, 26)"});
    }      
    else{
      $('label#odp18D').removeClass('check');
      $('label#odp18D').addClass('odp');
      $('label.kolejnePyt18').css({"background-color":"wheat"});
      $('input#odpZaz18').attr('value',' ');
    }
  }
})
$('label#odp19A').click(function(){
  if($('label#odp19A').attr('value') == 'A'){
    if($('label#odp19A').attr('class') == 'odp'){
      $('label#odp19A').removeClass('odp');
      $('label#odp19A').addClass('check');
      $('label#odp19B').removeClass('check');
      $('label#odp19C').removeClass('check');
      $('label#odp19D').removeClass('check');
      $('label#odp19B').addClass('odp');
      $('label#odp19C').addClass('odp');
      $('label#odp19D').addClass('odp');
      $('input#odpZaz19').attr('value',$('label#odp19A').attr('value'));
      $('label.kolejnePyt19').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp19A').removeClass('check');
      $('label#odp19A').addClass('odp');
      $('label.kolejnePyt19').css({"background-color":"wheat"});
      $('input#odpZaz19').attr('value',' ');
    }
  }
});
$('label#odp19B').click(function(){
  if($('label#odp19B').attr('value') == 'B'){
    if($('label#odp19B').attr('class') == 'odp'){
      $('label#odp19B').removeClass('odp');
      $('label#odp19B').addClass('check');
      $('label#odp19A').removeClass('check');
      $('label#odp19C').removeClass('check');
      $('label#odp19D').removeClass('check');
      $('label#odp19A').addClass('odp');
      $('label#odp19C').addClass('odp');
      $('label#odp19D').addClass('odp');
      $('input#odpZaz19').attr('value',$('label#odp19B').attr('value'));
      $('label.kolejnePyt19').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp19B').removeClass('check');
      $('label#odp19B').addClass('odp');
      $('label.kolejnePyt19').css({"background-color":"wheat"});
      $('input#odpZaz19').attr('value',' ');
    }
  }
})
$('label#odp19C').click(function(){
  if($('label#odp19C').attr('value') == 'C'){
    if($('label#odp19C').attr('class') == 'odp'){
      $('label#odp19C').removeClass('odp');
      $('label#odp19C').addClass('check');
      $('label#odp19A').removeClass('check');
      $('label#odp19B').removeClass('check');
      $('label#odp19D').removeClass('check');
      $('label#odp19A').addClass('odp');
      $('label#odp19B').addClass('odp');
      $('label#odp19D').addClass('odp');
      $('input#odpZaz19').attr('value',$('label#odp19C').attr('value'));
      $('label.kolejnePyt19').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp19C').removeClass('check');
      $('label#odp19C').addClass('odp');
      $('label.kolejnePyt19').css({"background-color":"wheat"});
      $('input#odpZaz19').attr('value',' ');
    }
  }
})
$('label#odp19D').click(function(){
  if($('label#odp19D').attr('value') == 'D'){
    if($('label#odp19D').attr('class') == 'odp'){
      $('label#odp19D').removeClass('odp');
      $('label#odp19D').addClass('check');
      $('label#odp19A').removeClass('check');
      $('label#odp19B').removeClass('check');
      $('label#odp19C').removeClass('check');
      $('label#odp19A').addClass('odp');
      $('label#odp19B').addClass('odp');
      $('label#odp19C').addClass('odp');
      $('input#odpZaz19').attr('value',$('label#odp19D').attr('value'));
      $('label.kolejnePyt19').css({"background-color":"rgb(255, 175, 26)"});
    }      
    else{
      $('label#odp19D').removeClass('check');
      $('label#odp19D').addClass('odp');
      $('label.kolejnePyt19').css({"background-color":"wheat"});
      $('input#odpZaz19').attr('value',' ');
    }
  }
})
$('label#odp20A').click(function(){
  if($('label#odp20A').attr('value') == 'A'){
    if($('label#odp20A').attr('class') == 'odp'){
      $('label#odp20A').removeClass('odp');
      $('label#odp20A').addClass('check');
      $('label#odp20B').removeClass('check');
      $('label#odp20C').removeClass('check');
      $('label#odp20D').removeClass('check');
      $('label#odp20B').addClass('odp');
      $('label#odp20C').addClass('odp');
      $('label#odp20D').addClass('odp');
      $('input#odpZaz20').attr('value',$('label#odp20A').attr('value'));
      $('label.kolejnePyt20').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp20A').removeClass('check');
      $('label#odp20A').addClass('odp');
      $('label.kolejnePyt20').css({"background-color":"wheat"});
      $('input#odpZaz20').attr('value',' ');
    }
  }
});
$('label#odp20B').click(function(){
  if($('label#odp20B').attr('value') == 'B'){
    if($('label#odp20B').attr('class') == 'odp'){
      $('label#odp20B').removeClass('odp');
      $('label#odp20B').addClass('check');
      $('label#odp20A').removeClass('check');
      $('label#odp20C').removeClass('check');
      $('label#odp20D').removeClass('check');
      $('label#odp20A').addClass('odp');
      $('label#odp20C').addClass('odp');
      $('label#odp20D').addClass('odp');
      $('input#odpZaz20').attr('value',$('label#odp20B').attr('value'));
      $('label.kolejnePyt20').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp20B').removeClass('check');
      $('label#odp20B').addClass('odp');
      $('label.kolejnePyt20').css({"background-color":"wheat"});
      $('input#odpZaz20').attr('value',' ');
    }
  }
})
$('label#odp20C').click(function(){
  if($('label#odp20C').attr('value') == 'C'){
    if($('label#odp20C').attr('class') == 'odp'){
      $('label#odp20C').removeClass('odp');
      $('label#odp20C').addClass('check');
      $('label#odp20A').removeClass('check');
      $('label#odp20B').removeClass('check');
      $('label#odp20D').removeClass('check');
      $('label#odp20A').addClass('odp');
      $('label#odp20B').addClass('odp');
      $('label#odp20D').addClass('odp');
      $('input#odpZaz20').attr('value',$('label#odp20C').attr('value'));
      $('label.kolejnePyt20').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp20C').removeClass('check');
      $('label#odp20C').addClass('odp');
      $('label.kolejnePyt20').css({"background-color":"wheat"});
      $('input#odpZaz20').attr('value',' ');
    }
  }
})
$('label#odp20D').click(function(){
  if($('label#odp20D').attr('value') == 'D'){
    if($('label#odp20D').attr('class') == 'odp'){
      $('label#odp20D').removeClass('odp');
      $('label#odp20D').addClass('check');
      $('label#odp20A').removeClass('check');
      $('label#odp20B').removeClass('check');
      $('label#odp20C').removeClass('check');
      $('label#odp20A').addClass('odp');
      $('label#odp20B').addClass('odp');
      $('label#odp20C').addClass('odp');
      $('input#odpZaz20').attr('value',$('label#odp20D').attr('value'));
      $('label.kolejnePyt20').css({"background-color":"rgb(255, 175, 26)"});
    }      
    else{
      $('label#odp20D').removeClass('check');
      $('label#odp20D').addClass('odp');
      $('label.kolejnePyt20').css({"background-color":"wheat"});
      $('input#odpZaz20').attr('value',' ');
    }
  }
})
$('label#odp21A').click(function(){
  if($('label#odp21A').attr('value') == 'A'){
    if($('label#odp21A').attr('class') == 'odp'){
      $('label#odp21A').removeClass('odp');
      $('label#odp21A').addClass('check');
      $('label#odp21B').removeClass('check');
      $('label#odp21C').removeClass('check');
      $('label#odp21D').removeClass('check');
      $('label#odp21B').addClass('odp');
      $('label#odp21C').addClass('odp');
      $('label#odp21D').addClass('odp');
      $('input#odpZaz21').attr('value',$('label#odp21A').attr('value'));
      $('label.kolejnePyt21').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp21A').removeClass('check');
      $('label#odp21A').addClass('odp');
      $('label.kolejnePyt21').css({"background-color":"wheat"});
      $('input#odpZaz21').attr('value',' ');
    }
  }
});
$('label#odp21B').click(function(){
  if($('label#odp21B').attr('value') == 'B'){
    if($('label#odp21B').attr('class') == 'odp'){
      $('label#odp21B').removeClass('odp');
      $('label#odp21B').addClass('check');
      $('label#odp21A').removeClass('check');
      $('label#odp21C').removeClass('check');
      $('label#odp21D').removeClass('check');
      $('label#odp21A').addClass('odp');
      $('label#odp21C').addClass('odp');
      $('label#odp21D').addClass('odp');
      $('input#odpZaz21').attr('value',$('label#odp21B').attr('value'));
      $('label.kolejnePyt21').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp21B').removeClass('check');
      $('label#odp21B').addClass('odp');
      $('label.kolejnePyt21').css({"background-color":"wheat"});
      $('input#odpZaz21').attr('value',' ');
    }
  }
})
$('label#odp21C').click(function(){
  if($('label#odp21C').attr('value') == 'C'){
    if($('label#odp21C').attr('class') == 'odp'){
      $('label#odp21C').removeClass('odp');
      $('label#odp21C').addClass('check');
      $('label#odp21A').removeClass('check');
      $('label#odp21B').removeClass('check');
      $('label#odp21D').removeClass('check');
      $('label#odp21A').addClass('odp');
      $('label#odp21B').addClass('odp');
      $('label#odp21D').addClass('odp');
      $('input#odpZaz21').attr('value',$('label#odp21C').attr('value'));
      $('label.kolejnePyt21').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp21C').removeClass('check');
      $('label#odp21C').addClass('odp');
      $('label.kolejnePyt21').css({"background-color":"wheat"});
      $('input#odpZaz21').attr('value',' ');
    }
  }
})
$('label#odp21D').click(function(){
  if($('label#odp21D').attr('value') == 'D'){
    if($('label#odp21D').attr('class') == 'odp'){
      $('label#odp21D').removeClass('odp');
      $('label#odp21D').addClass('check');
      $('label#odp21A').removeClass('check');
      $('label#odp21B').removeClass('check');
      $('label#odp21C').removeClass('check');
      $('label#odp21A').addClass('odp');
      $('label#odp21B').addClass('odp');
      $('label#odp21C').addClass('odp');
      $('input#odpZaz21').attr('value',$('label#odp21D').attr('value'));
      $('label.kolejnePyt21').css({"background-color":"rgb(255, 175, 26)"});
    }      
    else{
      $('label#odp21D').removeClass('check');
      $('label#odp21D').addClass('odp');
      $('label.kolejnePyt21').css({"background-color":"wheat"});
      $('input#odpZaz21').attr('value',' ');
    }
  }
})
$('label#odp22A').click(function(){
  if($('label#odp22A').attr('value') == 'A'){
    if($('label#odp22A').attr('class') == 'odp'){
      $('label#odp22A').removeClass('odp');
      $('label#odp22A').addClass('check');
      $('label#odp22B').removeClass('check');
      $('label#odp22C').removeClass('check');
      $('label#odp22D').removeClass('check');
      $('label#odp22B').addClass('odp');
      $('label#odp22C').addClass('odp');
      $('label#odp22D').addClass('odp');
      $('input#odpZaz22').attr('value',$('label#odp22A').attr('value'));
      $('label.kolejnePyt22').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp22A').removeClass('check');
      $('label#odp22A').addClass('odp');
      $('label.kolejnePyt22').css({"background-color":"wheat"});
      $('input#odpZaz22').attr('value',' ');
    }
  }
});
$('label#odp22B').click(function(){
  if($('label#odp22B').attr('value') == 'B'){
    if($('label#odp22B').attr('class') == 'odp'){
      $('label#odp22B').removeClass('odp');
      $('label#odp22B').addClass('check');
      $('label#odp22A').removeClass('check');
      $('label#odp22C').removeClass('check');
      $('label#odp22D').removeClass('check');
      $('label#odp22A').addClass('odp');
      $('label#odp22C').addClass('odp');
      $('label#odp22D').addClass('odp');
      $('input#odpZaz22').attr('value',$('label#odp22B').attr('value'));
      $('label.kolejnePyt22').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp22B').removeClass('check');
      $('label#odp22B').addClass('odp');
      $('label.kolejnePyt22').css({"background-color":"wheat"});
      $('input#odpZaz22').attr('value',' ');
    }
  }
})
$('label#odp22C').click(function(){
  if($('label#odp22C').attr('value') == 'C'){
    if($('label#odp22C').attr('class') == 'odp'){
      $('label#odp22C').removeClass('odp');
      $('label#odp22C').addClass('check');
      $('label#odp22A').removeClass('check');
      $('label#odp22B').removeClass('check');
      $('label#odp22D').removeClass('check');
      $('label#odp22A').addClass('odp');
      $('label#odp22B').addClass('odp');
      $('label#odp22D').addClass('odp');
      $('input#odpZaz22').attr('value',$('label#odp22C').attr('value'));
      $('label.kolejnePyt22').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp22C').removeClass('check');
      $('label#odp22C').addClass('odp');
      $('label.kolejnePyt22').css({"background-color":"wheat"});
      $('input#odpZaz22').attr('value',' ');
    }
  }
})
$('label#odp22D').click(function(){
  if($('label#odp22D').attr('value') == 'D'){
    if($('label#odp22D').attr('class') == 'odp'){
      $('label#odp22D').removeClass('odp');
      $('label#odp22D').addClass('check');
      $('label#odp22A').removeClass('check');
      $('label#odp22B').removeClass('check');
      $('label#odp22C').removeClass('check');
      $('label#odp22A').addClass('odp');
      $('label#odp22B').addClass('odp');
      $('label#odp22C').addClass('odp');
      $('input#odpZaz22').attr('value',$('label#odp22D').attr('value'));
      $('label.kolejnePyt22').css({"background-color":"rgb(255, 175, 26)"});
    }      
    else{
      $('label#odp22D').removeClass('check');
      $('label#odp22D').addClass('odp');
      $('label.kolejnePyt22').css({"background-color":"wheat"});
      $('input#odpZaz22').attr('value',' ');
    }
  }
})
$('label#odp23A').click(function(){
  if($('label#odp23A').attr('value') == 'A'){
    if($('label#odp23A').attr('class') == 'odp'){
      $('label#odp23A').removeClass('odp');
      $('label#odp23A').addClass('check');
      $('label#odp23B').removeClass('check');
      $('label#odp23C').removeClass('check');
      $('label#odp23D').removeClass('check');
      $('label#odp23B').addClass('odp');
      $('label#odp23C').addClass('odp');
      $('label#odp23D').addClass('odp');
      $('input#odpZaz23').attr('value',$('label#odp23A').attr('value'));
      $('label.kolejnePyt23').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp23A').removeClass('check');
      $('label#odp23A').addClass('odp');
      $('label.kolejnePyt23').css({"background-color":"wheat"});
      $('input#odpZaz23').attr('value',' ');
    }
  }
});
$('label#odp23B').click(function(){
  if($('label#odp23B').attr('value') == 'B'){
    if($('label#odp23B').attr('class') == 'odp'){
      $('label#odp23B').removeClass('odp');
      $('label#odp23B').addClass('check');
      $('label#odp23A').removeClass('check');
      $('label#odp23C').removeClass('check');
      $('label#odp23D').removeClass('check');
      $('label#odp23A').addClass('odp');
      $('label#odp23C').addClass('odp');
      $('label#odp23D').addClass('odp');
      $('input#odpZaz23').attr('value',$('label#odp23B').attr('value'));
      $('label.kolejnePyt23').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp23B').removeClass('check');
      $('label#odp23B').addClass('odp');
      $('label.kolejnePyt23').css({"background-color":"wheat"});
      $('input#odpZaz23').attr('value',' ');
    }
  }
})
$('label#odp23C').click(function(){
  if($('label#odp23C').attr('value') == 'C'){
    if($('label#odp23C').attr('class') == 'odp'){
      $('label#odp23C').removeClass('odp');
      $('label#odp23C').addClass('check');
      $('label#odp23A').removeClass('check');
      $('label#odp23B').removeClass('check');
      $('label#odp23D').removeClass('check');
      $('label#odp23A').addClass('odp');
      $('label#odp23B').addClass('odp');
      $('label#odp23D').addClass('odp');
      $('input#odpZaz23').attr('value',$('label#odp23C').attr('value'));
      $('label.kolejnePyt23').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp23C').removeClass('check');
      $('label#odp23C').addClass('odp');
      $('label.kolejnePyt23').css({"background-color":"wheat"});
      $('input#odpZaz23').attr('value',' ');
    }
  }
})
$('label#odp23D').click(function(){
  if($('label#odp23D').attr('value') == 'D'){
    if($('label#odp23D').attr('class') == 'odp'){
      $('label#odp23D').removeClass('odp');
      $('label#odp23D').addClass('check');
      $('label#odp23A').removeClass('check');
      $('label#odp23B').removeClass('check');
      $('label#odp23C').removeClass('check');
      $('label#odp23A').addClass('odp');
      $('label#odp23B').addClass('odp');
      $('label#odp23C').addClass('odp');
      $('input#odpZaz23').attr('value',$('label#odp23D').attr('value'));
      $('label.kolejnePyt23').css({"background-color":"rgb(255, 175, 26)"});
    }      
    else{
      $('label#odp23D').removeClass('check');
      $('label#odp23D').addClass('odp');
      $('label.kolejnePyt23').css({"background-color":"wheat"});
      $('input#odpZaz23').attr('value',' ');
    }
  }
})
$('label#odp24A').click(function(){
  if($('label#odp24A').attr('value') == 'A'){
    if($('label#odp24A').attr('class') == 'odp'){
      $('label#odp24A').removeClass('odp');
      $('label#odp24A').addClass('check');
      $('label#odp24B').removeClass('check');
      $('label#odp24C').removeClass('check');
      $('label#odp24D').removeClass('check');
      $('label#odp24B').addClass('odp');
      $('label#odp24C').addClass('odp');
      $('label#odp24D').addClass('odp');
      $('input#odpZaz24').attr('value',$('label#odp24A').attr('value'));
      $('label.kolejnePyt24').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp24A').removeClass('check');
      $('label#odp24A').addClass('odp');
      $('label.kolejnePyt24').css({"background-color":"wheat"});
      $('input#odpZaz24').attr('value',' ');
    }
  }
});
$('label#odp24B').click(function(){
  if($('label#odp24B').attr('value') == 'B'){
    if($('label#odp24B').attr('class') == 'odp'){
      $('label#odp24B').removeClass('odp');
      $('label#odp24B').addClass('check');
      $('label#odp24A').removeClass('check');
      $('label#odp24C').removeClass('check');
      $('label#odp24D').removeClass('check');
      $('label#odp24A').addClass('odp');
      $('label#odp24C').addClass('odp');
      $('label#odp24D').addClass('odp');
      $('input#odpZaz24').attr('value',$('label#odp24B').attr('value'));
      $('label.kolejnePyt24').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp24B').removeClass('check');
      $('label#odp24B').addClass('odp');
      $('label.kolejnePyt24').css({"background-color":"wheat"});
      $('input#odpZaz24').attr('value',' ');
    }
  }
})
$('label#odp24C').click(function(){
  if($('label#odp24C').attr('value') == 'C'){
    if($('label#odp24C').attr('class') == 'odp'){
      $('label#odp24C').removeClass('odp');
      $('label#odp24C').addClass('check');
      $('label#odp24A').removeClass('check');
      $('label#odp24B').removeClass('check');
      $('label#odp24D').removeClass('check');
      $('label#odp24A').addClass('odp');
      $('label#odp24B').addClass('odp');
      $('label#odp24D').addClass('odp');
      $('input#odpZaz24').attr('value',$('label#odp24C').attr('value'));
      $('label.kolejnePyt24').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp24C').removeClass('check');
      $('label#odp24C').addClass('odp');
      $('label.kolejnePyt24').css({"background-color":"wheat"});
      $('input#odpZaz24').attr('value',' ');
    }
  }
})
$('label#odp24D').click(function(){
  if($('label#odp24D').attr('value') == 'D'){
    if($('label#odp24D').attr('class') == 'odp'){
      $('label#odp24D').removeClass('odp');
      $('label#odp24D').addClass('check');
      $('label#odp24A').removeClass('check');
      $('label#odp24B').removeClass('check');
      $('label#odp24C').removeClass('check');
      $('label#odp24A').addClass('odp');
      $('label#odp24B').addClass('odp');
      $('label#odp24C').addClass('odp');
      $('input#odpZaz24').attr('value',$('label#odp24D').attr('value'));
      $('label.kolejnePyt24').css({"background-color":"rgb(255, 175, 26)"});
    }      
    else{
      $('label#odp24D').removeClass('check');
      $('label#odp24D').addClass('odp');
      $('label.kolejnePyt24').css({"background-color":"wheat"});
      $('input#odpZaz24').attr('value',' ');
    }
  }
})
$('label#odp25A').click(function(){
  if($('label#odp25A').attr('value') == 'A'){
    if($('label#odp25A').attr('class') == 'odp'){
      $('label#odp25A').removeClass('odp');
      $('label#odp25A').addClass('check');
      $('label#odp25B').removeClass('check');
      $('label#odp25C').removeClass('check');
      $('label#odp25D').removeClass('check');
      $('label#odp25B').addClass('odp');
      $('label#odp25C').addClass('odp');
      $('label#odp25D').addClass('odp');
      $('input#odpZaz25').attr('value',$('label#odp25A').attr('value'));
      $('label.kolejnePyt25').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp25A').removeClass('check');
      $('label#odp25A').addClass('odp');
      $('label.kolejnePyt25').css({"background-color":"wheat"});
      $('input#odpZaz25').attr('value',' ');
    }
  }
});
$('label#odp25B').click(function(){
  if($('label#odp25B').attr('value') == 'B'){
    if($('label#odp25B').attr('class') == 'odp'){
      $('label#odp25B').removeClass('odp');
      $('label#odp25B').addClass('check');
      $('label#odp25A').removeClass('check');
      $('label#odp25C').removeClass('check');
      $('label#odp25D').removeClass('check');
      $('label#odp25A').addClass('odp');
      $('label#odp25C').addClass('odp');
      $('label#odp25D').addClass('odp');
      $('input#odpZaz25').attr('value',$('label#odp25B').attr('value'));
      $('label.kolejnePyt25').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp25B').removeClass('check');
      $('label#odp25B').addClass('odp');
      $('label.kolejnePyt25').css({"background-color":"wheat"});
      $('input#odpZaz25').attr('value',' ');
    }
  }
})
$('label#odp25C').click(function(){
  if($('label#odp25C').attr('value') == 'C'){
    if($('label#odp25C').attr('class') == 'odp'){
      $('label#odp25C').removeClass('odp');
      $('label#odp25C').addClass('check');
      $('label#odp25A').removeClass('check');
      $('label#odp25B').removeClass('check');
      $('label#odp25D').removeClass('check');
      $('label#odp25A').addClass('odp');
      $('label#odp25B').addClass('odp');
      $('label#odp25D').addClass('odp');
      $('input#odpZaz25').attr('value',$('label#odp25C').attr('value'));
      $('label.kolejnePyt25').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp25C').removeClass('check');
      $('label#odp25C').addClass('odp');
      $('label.kolejnePyt25').css({"background-color":"wheat"});
      $('input#odpZaz25').attr('value',' ');
    }
  }
})
$('label#odp25D').click(function(){
  if($('label#odp25D').attr('value') == 'D'){
    if($('label#odp25D').attr('class') == 'odp'){
      $('label#odp25D').removeClass('odp');
      $('label#odp25D').addClass('check');
      $('label#odp25A').removeClass('check');
      $('label#odp25B').removeClass('check');
      $('label#odp25C').removeClass('check');
      $('label#odp25A').addClass('odp');
      $('label#odp25B').addClass('odp');
      $('label#odp25C').addClass('odp');
      $('input#odpZaz25').attr('value',$('label#odp25D').attr('value'));
      $('label.kolejnePyt25').css({"background-color":"rgb(255, 175, 26)"});
    }      
    else{
      $('label#odp25D').removeClass('check');
      $('label#odp25D').addClass('odp');
      $('label.kolejnePyt25').css({"background-color":"wheat"});
      $('input#odpZaz25').attr('value',' ');
    }
  }
})
$('label#odp26A').click(function(){
  if($('label#odp26A').attr('value') == 'A'){
    if($('label#odp26A').attr('class') == 'odp'){
      $('label#odp26A').removeClass('odp');
      $('label#odp26A').addClass('check');
      $('label#odp26B').removeClass('check');
      $('label#odp26C').removeClass('check');
      $('label#odp26D').removeClass('check');
      $('label#odp26B').addClass('odp');
      $('label#odp26C').addClass('odp');
      $('label#odp26D').addClass('odp');
      $('input#odpZaz26').attr('value',$('label#odp26A').attr('value'));
      $('label.kolejnePyt26').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp26A').removeClass('check');
      $('label#odp26A').addClass('odp');
      $('label.kolejnePyt26').css({"background-color":"wheat"});
      $('input#odpZaz26').attr('value',' ');
    }
  }
});
$('label#odp26B').click(function(){
  if($('label#odp26B').attr('value') == 'B'){
    if($('label#odp26B').attr('class') == 'odp'){
      $('label#odp26B').removeClass('odp');
      $('label#odp26B').addClass('check');
      $('label#odp26A').removeClass('check');
      $('label#odp26C').removeClass('check');
      $('label#odp26D').removeClass('check');
      $('label#odp26A').addClass('odp');
      $('label#odp26C').addClass('odp');
      $('label#odp26D').addClass('odp');
      $('input#odpZaz26').attr('value',$('label#odp26B').attr('value'));
      $('label.kolejnePyt26').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp26B').removeClass('check');
      $('label#odp26B').addClass('odp');
      $('label.kolejnePyt26').css({"background-color":"wheat"});
      $('input#odpZaz26').attr('value',' ');
    }
  }
})
$('label#odp26C').click(function(){
  if($('label#odp26C').attr('value') == 'C'){
    if($('label#odp26C').attr('class') == 'odp'){
      $('label#odp26C').removeClass('odp');
      $('label#odp26C').addClass('check');
      $('label#odp26A').removeClass('check');
      $('label#odp26B').removeClass('check');
      $('label#odp26D').removeClass('check');
      $('label#odp26A').addClass('odp');
      $('label#odp26B').addClass('odp');
      $('label#odp26D').addClass('odp');
      $('input#odpZaz26').attr('value',$('label#odp26C').attr('value'));
      $('label.kolejnePyt26').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp26C').removeClass('check');
      $('label#odp26C').addClass('odp');
      $('label.kolejnePyt26').css({"background-color":"wheat"});
      $('input#odpZaz26').attr('value',' ');
    }
  }
})
$('label#odp26D').click(function(){
  if($('label#odp26D').attr('value') == 'D'){
    if($('label#odp26D').attr('class') == 'odp'){
      $('label#odp26D').removeClass('odp');
      $('label#odp26D').addClass('check');
      $('label#odp26A').removeClass('check');
      $('label#odp26B').removeClass('check');
      $('label#odp26C').removeClass('check');
      $('label#odp26A').addClass('odp');
      $('label#odp26B').addClass('odp');
      $('label#odp26C').addClass('odp');
      $('input#odpZaz26').attr('value',$('label#odp26D').attr('value'));
      $('label.kolejnePyt26').css({"background-color":"rgb(255, 175, 26)"});
    }      
    else{
      $('label#odp26D').removeClass('check');
      $('label#odp26D').addClass('odp');
      $('label.kolejnePyt26').css({"background-color":"wheat"});
      $('input#odpZaz26').attr('value',' ');
    }
  }
})
$('label#odp27A').click(function(){
  if($('label#odp27A').attr('value') == 'A'){
    if($('label#odp27A').attr('class') == 'odp'){
      $('label#odp27A').removeClass('odp');
      $('label#odp27A').addClass('check');
      $('label#odp27B').removeClass('check');
      $('label#odp27C').removeClass('check');
      $('label#odp27D').removeClass('check');
      $('label#odp27B').addClass('odp');
      $('label#odp27C').addClass('odp');
      $('label#odp27D').addClass('odp');
      $('input#odpZaz27').attr('value',$('label#odp27A').attr('value'));
      $('label.kolejnePyt27').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp27A').removeClass('check');
      $('label#odp27A').addClass('odp');
      $('label.kolejnePyt27').css({"background-color":"wheat"});
      $('input#odpZaz27').attr('value',' ');
    }
  }
});
$('label#odp27B').click(function(){
  if($('label#odp27B').attr('value') == 'B'){
    if($('label#odp27B').attr('class') == 'odp'){
      $('label#odp27B').removeClass('odp');
      $('label#odp27B').addClass('check');
      $('label#odp27A').removeClass('check');
      $('label#odp27C').removeClass('check');
      $('label#odp27D').removeClass('check');
      $('label#odp27A').addClass('odp');
      $('label#odp27C').addClass('odp');
      $('label#odp27D').addClass('odp');
      $('input#odpZaz27').attr('value',$('label#odp27B').attr('value'));
      $('label.kolejnePyt27').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp27B').removeClass('check');
      $('label#odp27B').addClass('odp');
      $('label.kolejnePyt27').css({"background-color":"wheat"});
      $('input#odpZaz27').attr('value',' ');
    }
  }
})
$('label#odp27C').click(function(){
  if($('label#odp27C').attr('value') == 'C'){
    if($('label#odp27C').attr('class') == 'odp'){
      $('label#odp27C').removeClass('odp');
      $('label#odp27C').addClass('check');
      $('label#odp27A').removeClass('check');
      $('label#odp27B').removeClass('check');
      $('label#odp27D').removeClass('check');
      $('label#odp27A').addClass('odp');
      $('label#odp27B').addClass('odp');
      $('label#odp27D').addClass('odp');
      $('input#odpZaz27').attr('value',$('label#odp27C').attr('value'));
      $('label.kolejnePyt27').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp27C').removeClass('check');
      $('label#odp27C').addClass('odp');
      $('label.kolejnePyt27').css({"background-color":"wheat"});
      $('input#odpZaz27').attr('value',' ');
    }
  }
})
$('label#odp27D').click(function(){
  if($('label#odp27D').attr('value') == 'D'){
    if($('label#odp27D').attr('class') == 'odp'){
      $('label#odp27D').removeClass('odp');
      $('label#odp27D').addClass('check');
      $('label#odp27A').removeClass('check');
      $('label#odp27B').removeClass('check');
      $('label#odp27C').removeClass('check');
      $('label#odp27A').addClass('odp');
      $('label#odp27B').addClass('odp');
      $('label#odp27C').addClass('odp');
      $('input#odpZaz27').attr('value',$('label#odp27D').attr('value'));
      $('label.kolejnePyt27').css({"background-color":"rgb(255, 175, 26)"});
    }      
    else{
      $('label#odp27D').removeClass('check');
      $('label#odp27D').addClass('odp');
      $('label.kolejnePyt27').css({"background-color":"wheat"});
      $('input#odpZaz27').attr('value',' ');
    }
  }
})
$('label#odp28A').click(function(){
  if($('label#odp28A').attr('value') == 'A'){
    if($('label#odp28A').attr('class') == 'odp'){
      $('label#odp28A').removeClass('odp');
      $('label#odp28A').addClass('check');
      $('label#odp28B').removeClass('check');
      $('label#odp28C').removeClass('check');
      $('label#odp28D').removeClass('check');
      $('label#odp28B').addClass('odp');
      $('label#odp28C').addClass('odp');
      $('label#odp28D').addClass('odp');
      $('input#odpZaz28').attr('value',$('label#odp28A').attr('value'));
      $('label.kolejnePyt28').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp28A').removeClass('check');
      $('label#odp28A').addClass('odp');
      $('label.kolejnePyt28').css({"background-color":"wheat"});
      $('input#odpZaz28').attr('value',' ');
    }
  }
});
$('label#odp28B').click(function(){
  if($('label#odp28B').attr('value') == 'B'){
    if($('label#odp28B').attr('class') == 'odp'){
      $('label#odp28B').removeClass('odp');
      $('label#odp28B').addClass('check');
      $('label#odp28A').removeClass('check');
      $('label#odp28C').removeClass('check');
      $('label#odp28D').removeClass('check');
      $('label#odp28A').addClass('odp');
      $('label#odp28C').addClass('odp');
      $('label#odp28D').addClass('odp');
      $('input#odpZaz28').attr('value',$('label#odp28B').attr('value'));
      $('label.kolejnePyt28').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp28B').removeClass('check');
      $('label#odp28B').addClass('odp');
      $('label.kolejnePyt28').css({"background-color":"wheat"});
      $('input#odpZaz28').attr('value',' ');
    }
  }
})
$('label#odp28C').click(function(){
  if($('label#odp28C').attr('value') == 'C'){
    if($('label#odp28C').attr('class') == 'odp'){
      $('label#odp28C').removeClass('odp');
      $('label#odp28C').addClass('check');
      $('label#odp28A').removeClass('check');
      $('label#odp28B').removeClass('check');
      $('label#odp28D').removeClass('check');
      $('label#odp28A').addClass('odp');
      $('label#odp28B').addClass('odp');
      $('label#odp28D').addClass('odp');
      $('input#odpZaz28').attr('value',$('label#odp28C').attr('value'));
      $('label.kolejnePyt28').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp28C').removeClass('check');
      $('label#odp28C').addClass('odp');
      $('label.kolejnePyt28').css({"background-color":"wheat"});
      $('input#odpZaz28').attr('value',' ');
    }
  }
})
$('label#odp28D').click(function(){
  if($('label#odp28D').attr('value') == 'D'){
    if($('label#odp28D').attr('class') == 'odp'){
      $('label#odp28D').removeClass('odp');
      $('label#odp28D').addClass('check');
      $('label#odp28A').removeClass('check');
      $('label#odp28B').removeClass('check');
      $('label#odp28C').removeClass('check');
      $('label#odp28A').addClass('odp');
      $('label#odp28B').addClass('odp');
      $('label#odp28C').addClass('odp');
      $('input#odpZaz28').attr('value',$('label#odp28D').attr('value'));
      $('label.kolejnePyt28').css({"background-color":"rgb(255, 175, 26)"});
    }      
    else{
      $('label#odp28D').removeClass('check');
      $('label#odp28D').addClass('odp');
      $('label.kolejnePyt28').css({"background-color":"wheat"});
      $('input#odpZaz28').attr('value',' ');
    }
  }
})
$('label#odp29A').click(function(){
  if($('label#odp29A').attr('value') == 'A'){
    if($('label#odp29A').attr('class') == 'odp'){
      $('label#odp29A').removeClass('odp');
      $('label#odp29A').addClass('check');
      $('label#odp29B').removeClass('check');
      $('label#odp29C').removeClass('check');
      $('label#odp29D').removeClass('check');
      $('label#odp29B').addClass('odp');
      $('label#odp29C').addClass('odp');
      $('label#odp29D').addClass('odp');
      $('input#odpZaz29').attr('value',$('label#odp29A').attr('value'));
      $('label.kolejnePyt29').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp29A').removeClass('check');
      $('label#odp29A').addClass('odp');
      $('label.kolejnePyt29').css({"background-color":"wheat"});
      $('input#odpZaz29').attr('value',' ');
    }
  }
});
$('label#odp29B').click(function(){
  if($('label#odp29B').attr('value') == 'B'){
    if($('label#odp29B').attr('class') == 'odp'){
      $('label#odp29B').removeClass('odp');
      $('label#odp29B').addClass('check');
      $('label#odp29A').removeClass('check');
      $('label#odp29C').removeClass('check');
      $('label#odp29D').removeClass('check');
      $('label#odp29A').addClass('odp');
      $('label#odp29C').addClass('odp');
      $('label#odp29D').addClass('odp');
      $('input#odpZaz29').attr('value',$('label#odp29B').attr('value'));
      $('label.kolejnePyt29').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp29B').removeClass('check');
      $('label#odp29B').addClass('odp');
      $('label.kolejnePyt29').css({"background-color":"wheat"});
      $('input#odpZaz29').attr('value',' ');
    }
  }
})
$('label#odp29C').click(function(){
  if($('label#odp29C').attr('value') == 'C'){
    if($('label#odp29C').attr('class') == 'odp'){
      $('label#odp29C').removeClass('odp');
      $('label#odp29C').addClass('check');
      $('label#odp29A').removeClass('check');
      $('label#odp29B').removeClass('check');
      $('label#odp29D').removeClass('check');
      $('label#odp29A').addClass('odp');
      $('label#odp29B').addClass('odp');
      $('label#odp29D').addClass('odp');
      $('input#odpZaz29').attr('value',$('label#odp29C').attr('value'));
      $('label.kolejnePyt29').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp29C').removeClass('check');
      $('label#odp29C').addClass('odp');
      $('label.kolejnePyt29').css({"background-color":"wheat"});
      $('input#odpZaz29').attr('value',' ');
    }
  }
})
$('label#odp29D').click(function(){
  if($('label#odp29D').attr('value') == 'D'){
    if($('label#odp29D').attr('class') == 'odp'){
      $('label#odp29D').removeClass('odp');
      $('label#odp29D').addClass('check');
      $('label#odp29A').removeClass('check');
      $('label#odp29B').removeClass('check');
      $('label#odp29C').removeClass('check');
      $('label#odp29A').addClass('odp');
      $('label#odp29B').addClass('odp');
      $('label#odp29C').addClass('odp');
      $('input#odpZaz29').attr('value',$('label#odp29D').attr('value'));
      $('label.kolejnePyt29').css({"background-color":"rgb(255, 175, 26)"});
    }      
    else{
      $('label#odp29D').removeClass('check');
      $('label#odp29D').addClass('odp');
      $('label.kolejnePyt29').css({"background-color":"wheat"});
      $('input#odpZaz29').attr('value',' ');
    }
  }
})      
$('label#odp30A').click(function(){
  if($('label#odp30A').attr('value') == 'A'){
    if($('label#odp30A').attr('class') == 'odp'){
      $('label#odp30A').removeClass('odp');
      $('label#odp30A').addClass('check');
      $('label#odp30B').removeClass('check');
      $('label#odp30C').removeClass('check');
      $('label#odp30D').removeClass('check');
      $('label#odp30B').addClass('odp');
      $('label#odp30C').addClass('odp');
      $('label#odp30D').addClass('odp');
      $('input#odpZaz30').attr('value',$('label#odp30A').attr('value'));
      $('label.kolejnePyt30').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp30A').removeClass('check');
      $('label#odp30A').addClass('odp');
      $('label.kolejnePyt30').css({"background-color":"wheat"});
      $('input#odpZaz30').attr('value',' ');
    }
  }
});
$('label#odp30B').click(function(){
  if($('label#odp30B').attr('value') == 'B'){
    if($('label#odp30B').attr('class') == 'odp'){
      $('label#odp30B').removeClass('odp');
      $('label#odp30B').addClass('check');
      $('label#odp30A').removeClass('check');
      $('label#odp30C').removeClass('check');
      $('label#odp30D').removeClass('check');
      $('label#odp30A').addClass('odp');
      $('label#odp30C').addClass('odp');
      $('label#odp30D').addClass('odp');
      $('input#odpZaz30').attr('value',$('label#odp30B').attr('value'));
      $('label.kolejnePyt30').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp30B').removeClass('check');
      $('label#odp30B').addClass('odp');
      $('label.kolejnePyt30').css({"background-color":"wheat"});
      $('input#odpZaz30').attr('value',' ');
    }
  }
})
$('label#odp30C').click(function(){
  if($('label#odp30C').attr('value') == 'C'){
    if($('label#odp30C').attr('class') == 'odp'){
      $('label#odp30C').removeClass('odp');
      $('label#odp30C').addClass('check');
      $('label#odp30A').removeClass('check');
      $('label#odp30B').removeClass('check');
      $('label#odp30D').removeClass('check');
      $('label#odp30A').addClass('odp');
      $('label#odp30B').addClass('odp');
      $('label#odp30D').addClass('odp');
      $('input#odpZaz30').attr('value',$('label#odp30C').attr('value'));
      $('label.kolejnePyt30').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp30C').removeClass('check');
      $('label#odp30C').addClass('odp');
      $('label.kolejnePyt30').css({"background-color":"wheat"});
      $('input#odpZaz30').attr('value',' ');
    }
  }
})
$('label#odp30D').click(function(){
  if($('label#odp30D').attr('value') == 'D'){
    if($('label#odp30D').attr('class') == 'odp'){
      $('label#odp30D').removeClass('odp');
      $('label#odp30D').addClass('check');
      $('label#odp30A').removeClass('check');
      $('label#odp30B').removeClass('check');
      $('label#odp30C').removeClass('check');
      $('label#odp30A').addClass('odp');
      $('label#odp30B').addClass('odp');
      $('label#odp30C').addClass('odp');
      $('input#odpZaz30').attr('value',$('label#odp30D').attr('value'));
      $('label.kolejnePyt30').css({"background-color":"rgb(255, 175, 26)"});
    }      
    else{
      $('label#odp30D').removeClass('check');
      $('label#odp30D').addClass('odp');
      $('label.kolejnePyt30').css({"background-color":"wheat"});
      $('input#odpZaz30').attr('value',' ');
    }
  }
})
$('label#odp31A').click(function(){
  if($('label#odp31A').attr('value') == 'A'){
    if($('label#odp31A').attr('class') == 'odp'){
      $('label#odp31A').removeClass('odp');
      $('label#odp31A').addClass('check');
      $('label#odp31B').removeClass('check');
      $('label#odp31C').removeClass('check');
      $('label#odp31D').removeClass('check');
      $('label#odp31B').addClass('odp');
      $('label#odp31C').addClass('odp');
      $('label#odp31D').addClass('odp');
      $('input#odpZaz31').attr('value',$('label#odp31A').attr('value'));
      $('label.kolejnePyt31').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp31A').removeClass('check');
      $('label#odp31A').addClass('odp');
      $('label.kolejnePyt31').css({"background-color":"wheat"});
      $('input#odpZaz31').attr('value',' ');
    }
  }
});
$('label#odp31B').click(function(){
  if($('label#odp31B').attr('value') == 'B'){
    if($('label#odp31B').attr('class') == 'odp'){
      $('label#odp31B').removeClass('odp');
      $('label#odp31B').addClass('check');
      $('label#odp31A').removeClass('check');
      $('label#odp31C').removeClass('check');
      $('label#odp31D').removeClass('check');
      $('label#odp31A').addClass('odp');
      $('label#odp31C').addClass('odp');
      $('label#odp31D').addClass('odp');
      $('input#odpZaz31').attr('value',$('label#odp31B').attr('value'));
      $('label.kolejnePyt31').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp31B').removeClass('check');
      $('label#odp31B').addClass('odp');
      $('label.kolejnePyt31').css({"background-color":"wheat"});
      $('input#odpZaz31').attr('value',' ');
    }
  }
})
$('label#odp31C').click(function(){
  if($('label#odp31C').attr('value') == 'C'){
    if($('label#odp31C').attr('class') == 'odp'){
      $('label#odp31C').removeClass('odp');
      $('label#odp31C').addClass('check');
      $('label#odp31A').removeClass('check');
      $('label#odp31B').removeClass('check');
      $('label#odp31D').removeClass('check');
      $('label#odp31A').addClass('odp');
      $('label#odp31B').addClass('odp');
      $('label#odp31D').addClass('odp');
      $('input#odpZaz31').attr('value',$('label#odp31C').attr('value'));
      $('label.kolejnePyt31').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp31C').removeClass('check');
      $('label#odp31C').addClass('odp');
      $('label.kolejnePyt31').css({"background-color":"wheat"});
      $('input#odpZaz31').attr('value',' ');
    }
  }
})
$('label#odp31D').click(function(){
  if($('label#odp31D').attr('value') == 'D'){
    if($('label#odp31D').attr('class') == 'odp'){
      $('label#odp31D').removeClass('odp');
      $('label#odp31D').addClass('check');
      $('label#odp31A').removeClass('check');
      $('label#odp31B').removeClass('check');
      $('label#odp31C').removeClass('check');
      $('label#odp31A').addClass('odp');
      $('label#odp31B').addClass('odp');
      $('label#odp31C').addClass('odp');
      $('input#odpZaz31').attr('value',$('label#odp31D').attr('value'));
      $('label.kolejnePyt31').css({"background-color":"rgb(255, 175, 26)"});
    }      
    else{
      $('label#odp31D').removeClass('check');
      $('label#odp31D').addClass('odp');
      $('label.kolejnePyt31').css({"background-color":"wheat"});
      $('input#odpZaz31').attr('value',' ');
    }
  }
})
$('label#odp32A').click(function(){
  if($('label#odp32A').attr('value') == 'A'){
    if($('label#odp32A').attr('class') == 'odp'){
      $('label#odp32A').removeClass('odp');
      $('label#odp32A').addClass('check');
      $('label#odp32B').removeClass('check');
      $('label#odp32C').removeClass('check');
      $('label#odp32D').removeClass('check');
      $('label#odp32B').addClass('odp');
      $('label#odp32C').addClass('odp');
      $('label#odp32D').addClass('odp');
      $('input#odpZaz32').attr('value',$('label#odp32A').attr('value'));
      $('label.kolejnePyt32').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp32A').removeClass('check');
      $('label#odp32A').addClass('odp');
      $('label.kolejnePyt32').css({"background-color":"wheat"});
      $('input#odpZaz32').attr('value',' ');
    }
  }
});
$('label#odp32B').click(function(){
  if($('label#odp32B').attr('value') == 'B'){
    if($('label#odp32B').attr('class') == 'odp'){
      $('label#odp32B').removeClass('odp');
      $('label#odp32B').addClass('check');
      $('label#odp32A').removeClass('check');
      $('label#odp32C').removeClass('check');
      $('label#odp32D').removeClass('check');
      $('label#odp32A').addClass('odp');
      $('label#odp32C').addClass('odp');
      $('label#odp32D').addClass('odp');
      $('input#odpZaz32').attr('value',$('label#odp32B').attr('value'));
      $('label.kolejnePyt32').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp32B').removeClass('check');
      $('label#odp32B').addClass('odp');
      $('label.kolejnePyt32').css({"background-color":"wheat"});
      $('input#odpZaz32').attr('value',' ');
    }
  }
})
$('label#odp32C').click(function(){
  if($('label#odp32C').attr('value') == 'C'){
    if($('label#odp32C').attr('class') == 'odp'){
      $('label#odp32C').removeClass('odp');
      $('label#odp32C').addClass('check');
      $('label#odp32A').removeClass('check');
      $('label#odp32B').removeClass('check');
      $('label#odp32D').removeClass('check');
      $('label#odp32A').addClass('odp');
      $('label#odp32B').addClass('odp');
      $('label#odp32D').addClass('odp');
      $('input#odpZaz32').attr('value',$('label#odp32C').attr('value'));
      $('label.kolejnePyt32').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp32C').removeClass('check');
      $('label#odp32C').addClass('odp');
      $('label.kolejnePyt32').css({"background-color":"wheat"});
      $('input#odpZaz32').attr('value',' ');
    }
  }
})
$('label#odp32D').click(function(){
  if($('label#odp32D').attr('value') == 'D'){
    if($('label#odp32D').attr('class') == 'odp'){
      $('label#odp32D').removeClass('odp');
      $('label#odp32D').addClass('check');
      $('label#odp32A').removeClass('check');
      $('label#odp32B').removeClass('check');
      $('label#odp32C').removeClass('check');
      $('label#odp32A').addClass('odp');
      $('label#odp32B').addClass('odp');
      $('label#odp32C').addClass('odp');
      $('input#odpZaz32').attr('value',$('label#odp32D').attr('value'));
      $('label.kolejnePyt32').css({"background-color":"rgb(255, 175, 26)"});
    }      
    else{
      $('label#odp32D').removeClass('check');
      $('label#odp32D').addClass('odp');
      $('label.kolejnePyt32').css({"background-color":"wheat"});
      $('input#odpZaz32').attr('value',' ');
    }
  }
})
$('label#odp33A').click(function(){
  if($('label#odp33A').attr('value') == 'A'){
    if($('label#odp33A').attr('class') == 'odp'){
      $('label#odp33A').removeClass('odp');
      $('label#odp33A').addClass('check');
      $('label#odp33B').removeClass('check');
      $('label#odp33C').removeClass('check');
      $('label#odp33D').removeClass('check');
      $('label#odp33B').addClass('odp');
      $('label#odp33C').addClass('odp');
      $('label#odp33D').addClass('odp');
      $('input#odpZaz33').attr('value',$('label#odp33A').attr('value'));
      $('label.kolejnePyt33').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp33A').removeClass('check');
      $('label#odp33A').addClass('odp');
      $('label.kolejnePyt33').css({"background-color":"wheat"});
      $('input#odpZaz33').attr('value',' ');
    }
  }
});
$('label#odp33B').click(function(){
  if($('label#odp33B').attr('value') == 'B'){
    if($('label#odp33B').attr('class') == 'odp'){
      $('label#odp33B').removeClass('odp');
      $('label#odp33B').addClass('check');
      $('label#odp33A').removeClass('check');
      $('label#odp33C').removeClass('check');
      $('label#odp33D').removeClass('check');
      $('label#odp33A').addClass('odp');
      $('label#odp33C').addClass('odp');
      $('label#odp33D').addClass('odp');
      $('input#odpZaz33').attr('value',$('label#odp33B').attr('value'));
      $('label.kolejnePyt33').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp33B').removeClass('check');
      $('label#odp33B').addClass('odp');
      $('label.kolejnePyt33').css({"background-color":"wheat"});
      $('input#odpZaz33').attr('value',' ');
    }
  }
})
$('label#odp33C').click(function(){
  if($('label#odp33C').attr('value') == 'C'){
    if($('label#odp33C').attr('class') == 'odp'){
      $('label#odp33C').removeClass('odp');
      $('label#odp33C').addClass('check');
      $('label#odp33A').removeClass('check');
      $('label#odp33B').removeClass('check');
      $('label#odp33D').removeClass('check');
      $('label#odp33A').addClass('odp');
      $('label#odp33B').addClass('odp');
      $('label#odp33D').addClass('odp');
      $('input#odpZaz33').attr('value',$('label#odp33C').attr('value'));
      $('label.kolejnePyt33').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp33C').removeClass('check');
      $('label#odp33C').addClass('odp');
      $('label.kolejnePyt33').css({"background-color":"wheat"});
      $('input#odpZaz33').attr('value',' ');
    }
  }
})
$('label#odp33D').click(function(){
  if($('label#odp33D').attr('value') == 'D'){
    if($('label#odp33D').attr('class') == 'odp'){
      $('label#odp33D').removeClass('odp');
      $('label#odp33D').addClass('check');
      $('label#odp33A').removeClass('check');
      $('label#odp33B').removeClass('check');
      $('label#odp33C').removeClass('check');
      $('label#odp33A').addClass('odp');
      $('label#odp33B').addClass('odp');
      $('label#odp33C').addClass('odp');
      $('input#odpZaz33').attr('value',$('label#odp33D').attr('value'));
      $('label.kolejnePyt33').css({"background-color":"rgb(255, 175, 26)"});
    }      
    else{
      $('label#odp33D').removeClass('check');
      $('label#odp33D').addClass('odp');
      $('label.kolejnePyt33').css({"background-color":"wheat"});
      $('input#odpZaz33').attr('value',' ');
    }
  }
})
$('label#odp34A').click(function(){
  if($('label#odp34A').attr('value') == 'A'){
    if($('label#odp34A').attr('class') == 'odp'){
      $('label#odp34A').removeClass('odp');
      $('label#odp34A').addClass('check');
      $('label#odp34B').removeClass('check');
      $('label#odp34C').removeClass('check');
      $('label#odp34D').removeClass('check');
      $('label#odp34B').addClass('odp');
      $('label#odp34C').addClass('odp');
      $('label#odp34D').addClass('odp');
      $('input#odpZaz34').attr('value',$('label#odp34A').attr('value'));
      $('label.kolejnePyt34').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp34A').removeClass('check');
      $('label#odp34A').addClass('odp');
      $('label.kolejnePyt34').css({"background-color":"wheat"});
      $('input#odpZaz34').attr('value',' ');
    }
  }
});
$('label#odp34B').click(function(){
  if($('label#odp34B').attr('value') == 'B'){
    if($('label#odp34B').attr('class') == 'odp'){
      $('label#odp34B').removeClass('odp');
      $('label#odp34B').addClass('check');
      $('label#odp34A').removeClass('check');
      $('label#odp34C').removeClass('check');
      $('label#odp34D').removeClass('check');
      $('label#odp34A').addClass('odp');
      $('label#odp34C').addClass('odp');
      $('label#odp34D').addClass('odp');
      $('input#odpZaz34').attr('value',$('label#odp34B').attr('value'));
      $('label.kolejnePyt34').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp34B').removeClass('check');
      $('label#odp34B').addClass('odp');
      $('label.kolejnePyt34').css({"background-color":"wheat"});
      $('input#odpZaz34').attr('value',' ');
    }
  }
})
$('label#odp34C').click(function(){
  if($('label#odp34C').attr('value') == 'C'){
    if($('label#odp34C').attr('class') == 'odp'){
      $('label#odp34C').removeClass('odp');
      $('label#odp34C').addClass('check');
      $('label#odp34A').removeClass('check');
      $('label#odp34B').removeClass('check');
      $('label#odp34D').removeClass('check');
      $('label#odp34A').addClass('odp');
      $('label#odp34B').addClass('odp');
      $('label#odp34D').addClass('odp');
      $('input#odpZaz34').attr('value',$('label#odp34C').attr('value'));
      $('label.kolejnePyt34').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp34C').removeClass('check');
      $('label#odp34C').addClass('odp');
      $('label.kolejnePyt34').css({"background-color":"wheat"});
      $('input#odpZaz34').attr('value',' ');
    }
  }
})
$('label#odp34D').click(function(){
  if($('label#odp34D').attr('value') == 'D'){
    if($('label#odp34D').attr('class') == 'odp'){
      $('label#odp34D').removeClass('odp');
      $('label#odp34D').addClass('check');
      $('label#odp34A').removeClass('check');
      $('label#odp34B').removeClass('check');
      $('label#odp34C').removeClass('check');
      $('label#odp34A').addClass('odp');
      $('label#odp34B').addClass('odp');
      $('label#odp34C').addClass('odp');
      $('input#odpZaz34').attr('value',$('label#odp34D').attr('value'));
      $('label.kolejnePyt34').css({"background-color":"rgb(255, 175, 26)"});
    }      
    else{
      $('label#odp34D').removeClass('check');
      $('label#odp34D').addClass('odp');
      $('label.kolejnePyt34').css({"background-color":"wheat"});
      $('input#odpZaz34').attr('value',' ');
    }
  }
})
$('label#odp35A').click(function(){
  if($('label#odp35A').attr('value') == 'A'){
    if($('label#odp35A').attr('class') == 'odp'){
      $('label#odp35A').removeClass('odp');
      $('label#odp35A').addClass('check');
      $('label#odp35B').removeClass('check');
      $('label#odp35C').removeClass('check');
      $('label#odp35D').removeClass('check');
      $('label#odp35B').addClass('odp');
      $('label#odp35C').addClass('odp');
      $('label#odp35D').addClass('odp');
      $('input#odpZaz35').attr('value',$('label#odp35A').attr('value'));
      $('label.kolejnePyt35').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp35A').removeClass('check');
      $('label#odp35A').addClass('odp');
      $('label.kolejnePyt35').css({"background-color":"wheat"});
      $('input#odpZaz35').attr('value',' ');
    }
  }
});
$('label#odp35B').click(function(){
  if($('label#odp35B').attr('value') == 'B'){
    if($('label#odp35B').attr('class') == 'odp'){
      $('label#odp35B').removeClass('odp');
      $('label#odp35B').addClass('check');
      $('label#odp35A').removeClass('check');
      $('label#odp35C').removeClass('check');
      $('label#odp35D').removeClass('check');
      $('label#odp35A').addClass('odp');
      $('label#odp35C').addClass('odp');
      $('label#odp35D').addClass('odp');
      $('input#odpZaz35').attr('value',$('label#odp35B').attr('value'));
      $('label.kolejnePyt35').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp35B').removeClass('check');
      $('label#odp35B').addClass('odp');
      $('label.kolejnePyt35').css({"background-color":"wheat"});
      $('input#odpZaz35').attr('value',' ');
    }
  }
})
$('label#odp35C').click(function(){
  if($('label#odp35C').attr('value') == 'C'){
    if($('label#odp35C').attr('class') == 'odp'){
      $('label#odp35C').removeClass('odp');
      $('label#odp35C').addClass('check');
      $('label#odp35A').removeClass('check');
      $('label#odp35B').removeClass('check');
      $('label#odp35D').removeClass('check');
      $('label#odp35A').addClass('odp');
      $('label#odp35B').addClass('odp');
      $('label#odp35D').addClass('odp');
      $('input#odpZaz35').attr('value',$('label#odp35C').attr('value'));
      $('label.kolejnePyt35').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp35C').removeClass('check');
      $('label#odp35C').addClass('odp');
      $('label.kolejnePyt35').css({"background-color":"wheat"});
      $('input#odpZaz35').attr('value',' ');
    }
  }
})
$('label#odp35D').click(function(){
  if($('label#odp35D').attr('value') == 'D'){
    if($('label#odp35D').attr('class') == 'odp'){
      $('label#odp35D').removeClass('odp');
      $('label#odp35D').addClass('check');
      $('label#odp35A').removeClass('check');
      $('label#odp35B').removeClass('check');
      $('label#odp35C').removeClass('check');
      $('label#odp35A').addClass('odp');
      $('label#odp35B').addClass('odp');
      $('label#odp35C').addClass('odp');
      $('input#odpZaz35').attr('value',$('label#odp35D').attr('value'));
      $('label.kolejnePyt35').css({"background-color":"rgb(255, 175, 26)"});
    }      
    else{
      $('label#odp35D').removeClass('check');
      $('label#odp35D').addClass('odp');
      $('label.kolejnePyt35').css({"background-color":"wheat"});
      $('input#odpZaz35').attr('value',' ');
    }
  }
})
$('label#odp36A').click(function(){
  if($('label#odp36A').attr('value') == 'A'){
    if($('label#odp36A').attr('class') == 'odp'){
      $('label#odp36A').removeClass('odp');
      $('label#odp36A').addClass('check');
      $('label#odp36B').removeClass('check');
      $('label#odp36C').removeClass('check');
      $('label#odp36D').removeClass('check');
      $('label#odp36B').addClass('odp');
      $('label#odp36C').addClass('odp');
      $('label#odp36D').addClass('odp');
      $('input#odpZaz36').attr('value',$('label#odp36A').attr('value'));
      $('label.kolejnePyt36').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp36A').removeClass('check');
      $('label#odp36A').addClass('odp');
      $('label.kolejnePyt36').css({"background-color":"wheat"});
      $('input#odpZaz36').attr('value',' ');
    }
  }
});
$('label#odp36B').click(function(){
  if($('label#odp36B').attr('value') == 'B'){
    if($('label#odp36B').attr('class') == 'odp'){
      $('label#odp36B').removeClass('odp');
      $('label#odp36B').addClass('check');
      $('label#odp36A').removeClass('check');
      $('label#odp36C').removeClass('check');
      $('label#odp36D').removeClass('check');
      $('label#odp36A').addClass('odp');
      $('label#odp36C').addClass('odp');
      $('label#odp36D').addClass('odp');
      $('input#odpZaz36').attr('value',$('label#odp36B').attr('value'));
      $('label.kolejnePyt36').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp36B').removeClass('check');
      $('label#odp36B').addClass('odp');
      $('label.kolejnePyt36').css({"background-color":"wheat"});
      $('input#odpZaz36').attr('value',' ');
    }
  }
})
$('label#odp36C').click(function(){
  if($('label#odp36C').attr('value') == 'C'){
    if($('label#odp36C').attr('class') == 'odp'){
      $('label#odp36C').removeClass('odp');
      $('label#odp36C').addClass('check');
      $('label#odp36A').removeClass('check');
      $('label#odp36B').removeClass('check');
      $('label#odp36D').removeClass('check');
      $('label#odp36A').addClass('odp');
      $('label#odp36B').addClass('odp');
      $('label#odp36D').addClass('odp');
      $('input#odpZaz36').attr('value',$('label#odp36C').attr('value'));
      $('label.kolejnePyt36').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp36C').removeClass('check');
      $('label#odp36C').addClass('odp');
      $('label.kolejnePyt36').css({"background-color":"wheat"});
      $('input#odpZaz36').attr('value',' ');
    }
  }
})
$('label#odp36D').click(function(){
  if($('label#odp36D').attr('value') == 'D'){
    if($('label#odp36D').attr('class') == 'odp'){
      $('label#odp36D').removeClass('odp');
      $('label#odp36D').addClass('check');
      $('label#odp36A').removeClass('check');
      $('label#odp36B').removeClass('check');
      $('label#odp36C').removeClass('check');
      $('label#odp36A').addClass('odp');
      $('label#odp36B').addClass('odp');
      $('label#odp36C').addClass('odp');
      $('input#odpZaz36').attr('value',$('label#odp36D').attr('value'));
      $('label.kolejnePyt36').css({"background-color":"rgb(255, 175, 26)"});
    }      
    else{
      $('label#odp36D').removeClass('check');
      $('label#odp36D').addClass('odp');
      $('label.kolejnePyt36').css({"background-color":"wheat"});
      $('input#odpZaz36').attr('value',' ');
    }
  }
})
$('label#odp37A').click(function(){
  if($('label#odp37A').attr('value') == 'A'){
    if($('label#odp37A').attr('class') == 'odp'){
      $('label#odp37A').removeClass('odp');
      $('label#odp37A').addClass('check');
      $('label#odp37B').removeClass('check');
      $('label#odp37C').removeClass('check');
      $('label#odp37D').removeClass('check');
      $('label#odp37B').addClass('odp');
      $('label#odp37C').addClass('odp');
      $('label#odp37D').addClass('odp');
      $('input#odpZaz37').attr('value',$('label#odp37A').attr('value'));
      $('label.kolejnePyt37').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp37A').removeClass('check');
      $('label#odp37A').addClass('odp');
      $('label.kolejnePyt37').css({"background-color":"wheat"});
      $('input#odpZaz37').attr('value',' ');
    }
  }
});
$('label#odp37B').click(function(){
  if($('label#odp37B').attr('value') == 'B'){
    if($('label#odp37B').attr('class') == 'odp'){
      $('label#odp37B').removeClass('odp');
      $('label#odp37B').addClass('check');
      $('label#odp37A').removeClass('check');
      $('label#odp37C').removeClass('check');
      $('label#odp37D').removeClass('check');
      $('label#odp37A').addClass('odp');
      $('label#odp37C').addClass('odp');
      $('label#odp37D').addClass('odp');
      $('input#odpZaz37').attr('value',$('label#odp37B').attr('value'));
      $('label.kolejnePyt37').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp37B').removeClass('check');
      $('label#odp37B').addClass('odp');
      $('label.kolejnePyt37').css({"background-color":"wheat"});
      $('input#odpZaz37').attr('value',' ');
    }
  }
})
$('label#odp37C').click(function(){
  if($('label#odp37C').attr('value') == 'C'){
    if($('label#odp37C').attr('class') == 'odp'){
      $('label#odp37C').removeClass('odp');
      $('label#odp37C').addClass('check');
      $('label#odp37A').removeClass('check');
      $('label#odp37B').removeClass('check');
      $('label#odp37D').removeClass('check');
      $('label#odp37A').addClass('odp');
      $('label#odp37B').addClass('odp');
      $('label#odp37D').addClass('odp');
      $('input#odpZaz37').attr('value',$('label#odp37C').attr('value'));
      $('label.kolejnePyt37').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp37C').removeClass('check');
      $('label#odp37C').addClass('odp');
      $('label.kolejnePyt37').css({"background-color":"wheat"});
      $('input#odpZaz37').attr('value',' ');
    }
  }
})
$('label#odp37D').click(function(){
  if($('label#odp37D').attr('value') == 'D'){
    if($('label#odp37D').attr('class') == 'odp'){
      $('label#odp37D').removeClass('odp');
      $('label#odp37D').addClass('check');
      $('label#odp37A').removeClass('check');
      $('label#odp37B').removeClass('check');
      $('label#odp37C').removeClass('check');
      $('label#odp37A').addClass('odp');
      $('label#odp37B').addClass('odp');
      $('label#odp37C').addClass('odp');
      $('input#odpZaz37').attr('value',$('label#odp37D').attr('value'));
      $('label.kolejnePyt37').css({"background-color":"rgb(255, 175, 26)"});
    }      
    else{
      $('label#odp37D').removeClass('check');
      $('label#odp37D').addClass('odp');
      $('label.kolejnePyt37').css({"background-color":"wheat"});
      $('input#odpZaz37').attr('value',' ');
    }
  }
})
$('label#odp38A').click(function(){
  if($('label#odp38A').attr('value') == 'A'){
    if($('label#odp38A').attr('class') == 'odp'){
      $('label#odp38A').removeClass('odp');
      $('label#odp38A').addClass('check');
      $('label#odp38B').removeClass('check');
      $('label#odp38C').removeClass('check');
      $('label#odp38D').removeClass('check');
      $('label#odp38B').addClass('odp');
      $('label#odp38C').addClass('odp');
      $('label#odp38D').addClass('odp');
      $('input#odpZaz38').attr('value',$('label#odp38A').attr('value'));
      $('label.kolejnePyt38').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp38A').removeClass('check');
      $('label#odp38A').addClass('odp');
      $('label.kolejnePyt38').css({"background-color":"wheat"});
      $('input#odpZaz38').attr('value',' ');
    }
  }
});
$('label#odp38B').click(function(){
  if($('label#odp38B').attr('value') == 'B'){
    if($('label#odp38B').attr('class') == 'odp'){
      $('label#odp38B').removeClass('odp');
      $('label#odp38B').addClass('check');
      $('label#odp38A').removeClass('check');
      $('label#odp38C').removeClass('check');
      $('label#odp38D').removeClass('check');
      $('label#odp38A').addClass('odp');
      $('label#odp38C').addClass('odp');
      $('label#odp38D').addClass('odp');
      $('input#odpZaz38').attr('value',$('label#odp38B').attr('value'));
      $('label.kolejnePyt38').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp38B').removeClass('check');
      $('label#odp38B').addClass('odp');
      $('label.kolejnePyt38').css({"background-color":"wheat"});
      $('input#odpZaz38').attr('value',' ');
    }
  }
})
$('label#odp38C').click(function(){
  if($('label#odp38C').attr('value') == 'C'){
    if($('label#odp38C').attr('class') == 'odp'){
      $('label#odp38C').removeClass('odp');
      $('label#odp38C').addClass('check');
      $('label#odp38A').removeClass('check');
      $('label#odp38B').removeClass('check');
      $('label#odp38D').removeClass('check');
      $('label#odp38A').addClass('odp');
      $('label#odp38B').addClass('odp');
      $('label#odp38D').addClass('odp');
      $('input#odpZaz38').attr('value',$('label#odp38C').attr('value'));
      $('label.kolejnePyt38').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp38C').removeClass('check');
      $('label#odp38C').addClass('odp');
      $('label.kolejnePyt38').css({"background-color":"wheat"});
      $('input#odpZaz38').attr('value',' ');
    }
  }
})
$('label#odp38D').click(function(){
  if($('label#odp38D').attr('value') == 'D'){
    if($('label#odp38D').attr('class') == 'odp'){
      $('label#odp38D').removeClass('odp');
      $('label#odp38D').addClass('check');
      $('label#odp38A').removeClass('check');
      $('label#odp38B').removeClass('check');
      $('label#odp38C').removeClass('check');
      $('label#odp38A').addClass('odp');
      $('label#odp38B').addClass('odp');
      $('label#odp38C').addClass('odp');
      $('input#odpZaz38').attr('value',$('label#odp38D').attr('value'));
      $('label.kolejnePyt38').css({"background-color":"rgb(255, 175, 26)"});
    }      
    else{
      $('label#odp38D').removeClass('check');
      $('label#odp38D').addClass('odp');
      $('label.kolejnePyt38').css({"background-color":"wheat"});
      $('input#odpZaz38').attr('value',' ');
    }
  }
})
$('label#odp39A').click(function(){
  if($('label#odp39A').attr('value') == 'A'){
    if($('label#odp39A').attr('class') == 'odp'){
      $('label#odp39A').removeClass('odp');
      $('label#odp39A').addClass('check');
      $('label#odp39B').removeClass('check');
      $('label#odp39C').removeClass('check');
      $('label#odp39D').removeClass('check');
      $('label#odp39B').addClass('odp');
      $('label#odp39C').addClass('odp');
      $('label#odp39D').addClass('odp');
      $('input#odpZaz39').attr('value',$('label#odp39A').attr('value'));
      $('label.kolejnePyt39').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp39A').removeClass('check');
      $('label#odp39A').addClass('odp');
      $('label.kolejnePyt39').css({"background-color":"wheat"});
      $('input#odpZaz39').attr('value',' ');
    }
  }
});
$('label#odp39B').click(function(){
  if($('label#odp39B').attr('value') == 'B'){
    if($('label#odp39B').attr('class') == 'odp'){
      $('label#odp39B').removeClass('odp');
      $('label#odp39B').addClass('check');
      $('label#odp39A').removeClass('check');
      $('label#odp39C').removeClass('check');
      $('label#odp39D').removeClass('check');
      $('label#odp39A').addClass('odp');
      $('label#odp39C').addClass('odp');
      $('label#odp39D').addClass('odp');
      $('input#odpZaz39').attr('value',$('label#odp39B').attr('value'));
      $('label.kolejnePyt39').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp39B').removeClass('check');
      $('label#odp39B').addClass('odp');
      $('label.kolejnePyt39').css({"background-color":"wheat"});
      $('input#odpZaz39').attr('value',' ');
    }
  }
})
$('label#odp39C').click(function(){
  if($('label#odp39C').attr('value') == 'C'){
    if($('label#odp39C').attr('class') == 'odp'){
      $('label#odp39C').removeClass('odp');
      $('label#odp39C').addClass('check');
      $('label#odp39A').removeClass('check');
      $('label#odp39B').removeClass('check');
      $('label#odp39D').removeClass('check');
      $('label#odp39A').addClass('odp');
      $('label#odp39B').addClass('odp');
      $('label#odp39D').addClass('odp');
      $('input#odpZaz39').attr('value',$('label#odp39C').attr('value'));
      $('label.kolejnePyt39').css({"background-color":"rgb(255, 175, 26)"});
  }
    else{
      $('label#odp39C').removeClass('check');
      $('label#odp39C').addClass('odp');
      $('label.kolejnePyt39').css({"background-color":"wheat"});
      $('input#odpZaz39').attr('value',' ');
    }
  }
})
$('label#odp39D').click(function(){
  if($('label#odp39D').attr('value') == 'D'){
    if($('label#odp39D').attr('class') == 'odp'){
      $('label#odp39D').removeClass('odp');
      $('label#odp39D').addClass('check');
      $('label#odp39A').removeClass('check');
      $('label#odp39B').removeClass('check');
      $('label#odp39C').removeClass('check');
      $('label#odp39A').addClass('odp');
      $('label#odp39B').addClass('odp');
      $('label#odp39C').addClass('odp');
      $('input#odpZaz39').attr('value',$('label#odp39D').attr('value'));
      $('label.kolejnePyt39').css({"background-color":"rgb(255, 175, 26)"});
    }      
    else{
      $('label#odp39D').removeClass('check');
      $('label#odp39D').addClass('odp');
      $('label.kolejnePyt39').css({"background-color":"wheat"});
      $('input#odpZaz39').attr('value',' ');
    }
  }
})
});
</script>
<footer> &copy Sylwia Sobota </footer>
</body>
<?php
mysqli_close($polaczenie);
?>
</html> 