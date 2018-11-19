<?php
/*
phpinfo;
echo phpversion();
echo php_username();

*/



$name = array('Hi' => "Babe" );
print_r($name);

$arrayKeyCast = [
	"HELLO" => "World" , 
	"23" => "23 String" ,
	true => "true" , 
	35.5 => "Fractional 35.5" , 
	55 => "Integer 55" 
	];
print_r($arrayKeyCast);

$languages = [];
$languages [] = "HTML";
$languages [] = "CSS";
$languages [] = "Java";
$languages [] = "jQuery";
$languages [] = "jSON";
$languages ["frontEnd"] = "JavaScript"; 
$languages [6] = "Node JS";
$languages [] = "MONGO DB";
$languages [3] = "C++";
$languages [0] = "Pascals";

print_r($languages);
echo count($languages);
echo sizeof($languages);

settype(languages, "string");
?>


