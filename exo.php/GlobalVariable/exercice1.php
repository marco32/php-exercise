<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ex1</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">

</head>
<body>
	<div class="container">
		<div >
		<fieldset>
			
			<h3>User agent</h3>
			<div>
				<?php
				echo $_SERVER['HTTP_USER_AGENT'];
				?>
			</div>
		</fieldset>
		</div>
		<div></div>
			<div>
		<fieldset>
				<h3>Adresse IP</h3>
				<div>
					<?php
					echo $_SERVER['REMOTE_ADDR'];
					?>
				</div>
		</fieldset>
		</div>
		<div></div>
		<div>
		<fieldset>
				<h3>Nom du serveur</h3>
			<div>
				<?php
				echo $_SERVER['SERVER_NAME'];
				?>
			</div>
		</fieldset>
		</div>
	</div>
</body>
</html>