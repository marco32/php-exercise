<?php
$civi=$_POST['civi'];
$nom=$_POST['fnom'];
$prenom=$_POST['fprenom'];
$file= pathinfo($_POST['file']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>form</title>
</head>
<body>
<div>
	<h2>Get</h2>
		<form action="user.php" method="get">
	 <label for="name">Votre nom</label>
	 <input id="name" type="text" name="nom" />
	 <label for="Firstname">Votre prénom</label>
	 <input id="Firstname" type="text" name="prenom" />
	 <input type="submit" value="OK">
	</form>
</div>
<div>
	<h2>Post</h2>
		<form action="user.php" method="post">
	 <label for="name">Votre nom</label>
	 <input id="name" type="text" name="nom" />
	 <label for="Firstname">Votre prénom</label>
	 <input id="Firstname" type="text" name="prenom" />
	 <input type="submit" value="OK">
	</form>
</div>
<div>
<?php
	if($nom ===null || $civi=== null || $prenom ===null || $file['extension'] != "pdf"){

	echo '<h2>exo5</h2>
		<form action="index.php" method="post">
	<div>
			<select name="civi" >
			<option ="selected">Mr/Mme</option>
			<option value="Monsieur">Monsieur</option>
			<option value="Madame">Madame</option>
		</select>
	</div>
	<div>
		
		 <label for="Fname">Votre nom</label>
		 <input id="Fname" type="text" name="fnom" />
	</div>
	<div>
		 <label for="FFirstname">Votre prénom</label>
			 <input id="FFirstname" type="text" name="fprenom" />
			</div>
			<div>
			<label for="file">Upload file PDF</label>
			<input id="file" type="file" name="file">
			</div>
	 <input type="submit" value="OK">
	</form>';
	}else{

	echo $civi.$nom.$prenom;
	}
?>
</div>

</body>
</html>