<?php
echo "Ex1"."</br>";
$nom = @$_REQUEST['nom'];
$prenom = @$_REQUEST['prenom'];
echo $prenom." ".$nom."<br/>";


echo "Ex2"."<br/>";
$age= @$_REQUEST['age'];
$info= array(
	"prenom"	=> $prenom,
	"nom"	=> $nom,
	"age"	=>$age);
foreach ($info as $key => $value) {
	if(! $value){
		echo "Veuillez indiquer votre ".$key."<br/>";
	}
	echo $value."<br/>";
}
echo "Ex3"."<br/>";
$dd=@$_REQUEST['dateDebut'];
$df=@$_REQUEST['dateFin'];
echo $dd."<br/>";
echo $df."<br/>";

echo "Ex4"."<br/>";
$langue=@$_REQUEST['language'];
$serveur=@$_REQUEST['serveur'];
echo $langue."<br/>";
echo $serveur."<br/>";

echo "Ex5"."<br/>";
$semaine=@$_REQUEST['semaine'];
echo $semaine."<br/>";

echo "Ex6"."<br/>";
$bat=@$_REQUEST['batiment'];
$salle=@$_REQUEST['salle'];
echo $bat."<br/>";
echo $salle."<br/>";

?>