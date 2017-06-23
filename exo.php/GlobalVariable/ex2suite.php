<?php
session_start();
$_SESSION["Nom"];
$_SESSION["Prenom"];
$_SESSION["Age"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ex2Suite</title>
</head>
<body>
	<h3>Session 2</h3>
	<?php
	echo $_SESSION["Nom"]."<br/>";
	echo $_SESSION["Prenom"]."<br/>";
	echo $_SESSION["Age"];

	?>
</body>
</html>