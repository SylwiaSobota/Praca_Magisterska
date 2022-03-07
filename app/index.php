<?php
session_start();
if (isset($_POST['zaloguj'])) {

	$pdo = new PDO('mysql:host=localhost;dbname=admin', 'root', '');
	
	$stmt = $pdo->prepare("SELECT * FROM uczniowie WHERE login = :login AND haslo = :haslo");	
	$stmt->execute(['login' => $_POST['login'], 'haslo' => $_POST['haslo']]);
	$wynik = $stmt->fetch();

    $stmt1 = $pdo->prepare("SELECT * FROM administratorzy WHERE login = :login AND haslo = :haslo");	
	$stmt1->execute(['login' => $_POST['login'], 'haslo' => $_POST['haslo']]);
	$wynik1 = $stmt1->fetch();
	
	if ($wynik) {
		$_SESSION['zalogowany'] = 'tak';
		$_SESSION['id'] = $wynik['id'];
		header("Location: uczen.html");
		exit();
	} 
    else if($wynik1) {
        $_SESSION['zalogowany'] = 'tak';
		$_SESSION['id'] = $wynik['id'];
		header("Location: admin.php");
		exit();
    } else {
		$komunikat = "Wprowadzono zły login lub hasło.";
	}		
} 
?>
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
        <h1>Witaj, zaloguj się do systemu</h1>
        
    <form method="post" action="">
            <table class="loguj">
                <tr><td>Login</td><td><input class="loguj" type="text" name="login" /></td></tr>
                <tr><td>Hasło</td><td><input class="loguj" type="password" name="haslo" /></td></tr>
                <tr><td><input type="submit" name="zaloguj" value="Zaloguj" /></td></tr>
            </table>
        </form>
		<?php if(!empty($komunikat)): ?>
			<p style="font-weight: bold; color: red;text-align:center;"><?=$komunikat ?></p>
		<?php endif; ?>
        <br><br>
        <p style="text-align:center;">Jeżeli nie posiadasz loginu i hasła, zgłoś się do nauczyciela przedmiotów zawodowych.<br> Obecnie system działa 
            dla zawodu technik informatyk. Trwają prace nad pozostałymi zawodami.</p>
			<footer> &copy Sylwia Sobota </footer>
    </body>
</html> 