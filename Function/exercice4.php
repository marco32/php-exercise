<?php

function check($a, $z){
	if($a>$z){
		echo "Le premier nombre est le plus grand.";
	}
		else if($a<$z){
		echo "Le second nombre est le plus grand.";
	}
		else if($a=$z){
		echo "Les nombres sont identique.";
	}
}
check(5,5);
?>