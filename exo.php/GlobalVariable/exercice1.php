<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ex1</title>
</head>
<body>
	<div>
		<h3>User agent</h3>
		<div>
			<?php
			echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";
			?>
		</div>
	</div>
	<div>
		<h3>Adresse IP</h3>
		<div>
			<?php
			echo $_SERVER['REMOTE_ADDR'];
			?>
		</div>
	</div>
	<div>
		<h3>Nom du serveur</h3>
		<div>
			<?php
			echo $_SERVER['SERVER_NAME'];
			?>
		</div>
	</div>
</body>
</html>