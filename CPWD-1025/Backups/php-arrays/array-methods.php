<?php

	$courses = [
		"CPWD"
	
	
	];

	
	
$newArray = [];
foreach ($courses["CPWD"]["module"] as $module) {
	
	array_push( $newArray, "Module Name:" . $module);
	
}
	
echo join("<br>", $newArray);
//echo $newArray();

?>