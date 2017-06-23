<?php

$dep= array(
	"02"	=> 'Aisne',
	"59"	=> 'Nord',
	"60"	=> 'Oise',
	"62" 	=> "Pas-la-calais",
	"80"	=>"Somme",
	"51"	=> "Marne");
foreach ($dep as $key => $value) {
	echo "Le département $value a le numéro $key"."</br>";
}
?>