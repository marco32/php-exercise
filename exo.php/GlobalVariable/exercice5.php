<?php
$newcookie= $_POST["ncok"];
setcookie('Cookie', $newcookie);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ex5</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">

</head>
<body class="container">
<form action="" method="post">
	<fieldset>Modification du Cookie
	<div>
		<label for="mdf">Veuillez definir votre nouveau cookie</label>
		<input type="text" id="mdf" name="ncok" placeholder="Nouveau cookie">
	</div>
	<input type="submit">
	</fieldset>
</form>
<div>
<a href="exercice4.php">Verifiez vos modification</a>
</div>
<div>
<a href="exercic3.php">Ex3</a>
</div>
</body>
</html>