<?php
$mois=array("janvier","fevrier","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","decembre");
$change= array(7=>"aoùt");
$mois= array_replace($mois, $change);
	foreach ($mois as $value) {
		echo $value.'<br/>';
	}
?>