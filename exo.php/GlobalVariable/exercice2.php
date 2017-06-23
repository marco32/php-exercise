<?php
	session_start();
	$_SESSION['Nom']= "FROSI";
	$_SESSION['Prenom']= "Marco";
	$_SESSION['Age']= "28ans";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ex2</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">

</head>
<body class="container">
	<h3>Session</h3>
	<a href="ex2suite.php">Rendez-vous a la page suivante</a>
</body>
</html>