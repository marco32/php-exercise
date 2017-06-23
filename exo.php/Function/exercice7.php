<?php
function major($a, $z){
	if($a === "Homme" && $z>= 18){
		 echo "Vous êtes un homme et vous êtes majeur";
	} else if ($a === "Homme" && $z < 18){
		 echo "Vous êtes un homme et vous êtes mineur";
	} else if ($a === "Femme" && $z >= 18){
		echo "Vous êtes une femme et vous êtes majeur";
	}else {
		echo "Vous êtes une femme et vous êtes mineur";
	}
}
major("Homme", 28);
?>