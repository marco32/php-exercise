<?php
$dep= array(
	"02"	=> 'Aisne',
	"59"	=> 'Nord',
	"60"	=> 'Oise',
	"62" => "Pas-la-calais",
	"80"=>"Somme",);
$newdep= array(
	"51"	=> "Marne");
$dep= array_replace($dep, $newdep);
	foreach ($dep as $value) {
		echo $value;
		echo '<br/>';
	}
?>