<?php

$arrayKeyCast = [
	"Hello"=>"Dolly",
	"23"=>"23 String",
	true => "TRUE",
	34.45 => "Fractional 34.45",
	54 => "integer 54"
];
	$languages = [];
	
	$languages [] = "HTML";
	$languages [] = "HTML";
	$languages [] = "JS";
	
	$languages ['frontend'] = "JS";
	$languages [6] = "Node JS";
	$languages [] = "MONGO DB";
	
	$languages [3] = "C++";
	$languages [0] = "pascal";

	print_r( $languages );

?>