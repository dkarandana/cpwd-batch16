<?php
/*
$test = array("Hello"=>"world",	"Fname"=>"Lakmal");

$arrayKeycast = [
	"hello"=>"Doly",
	"56"=>"56 String",
	true => "True",
	89.56=>"Fractional 89.56",
	86=>"Integer 86"

];

print_r($arrayKeycast);


$language=[];

$language[]="HTML";
$language[]="HTML";
$language[]="JS";
$language['frontend']="JS";
$language[6]="Node JS";
$language[]="MOMGO DB";
$language[3]="C++";
$language[0]="pascal";

echo count($language);

$languageOption="";

foreach($language as $lang){
	$languageOption .="<option>$lang</option>";
	
	
}

echo "<select>$languageOption</select>";
*/

$car=array("C1","C2","C3","C4","C5","C6","C7","C8","C9","C10","C11","C12","C13","C14","C15");

//echo count($car);


$arraylength=count($car);

for($x=0;$x<$arraylength;$x++){

	echo $car[$x];
echo  "<br>";

}

echo  "<br>";
echo count($car);



?>