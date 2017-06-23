<?php
$login=$_POST["login"];
$mdp=$_POST["mdp"];
setcookie('Cookie', $login." merci pour votre mot de passe ".$mdp);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cookie login</title>
</head>
<body>
	<form action="#" method="post">
		<label for="login" >Login</label>
		<input type="text" id="login" name="login" placeholder="Identifiant">
		<label for="psw">Password</label>
		<input type="password" id="psw" name="mdp" placeholder="Password">
		<input type="submit" value="Valider">
	</form>
	<div>
		
	<a href="exercice4.php">Ex4</a>
	</div>
</body>
</html>