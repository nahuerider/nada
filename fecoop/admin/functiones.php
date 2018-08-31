<?php

function cortar($a,$b){
	$cantletras=strlen($a);
	if($cantletras > $b){
		$new=substr($a,0,$b-3);
		$puntos="...";
		$volver=$new.$puntos;
		return $volver;
	}else{
		return $a;
	} 
}
function detectarURL($supuesta){
	if(filter_var($supuesta, FILTER_VALIDATE_URL)){
		return true;
	}else{
		return false;
	}	
}




?>