<?php
	/*echo php_uname('s');
	phpversion();
	phpinfo();
*/
?>

<?php


/*
var_dump((bool) "");  
var_dump((bool) 56);
var_dump((bool) 25.23);
var_dump((bool) -55);
var_dump((bool) -0.22);
var_dump((bool) "adas");

echo is_nan("");

$cpwd = "CPWD";
$int = 22223;
$float = 33.2;
$bool = false;

echo gettype($cpwd);
echo gettype($int);
*/
/*
$test = array("val1","val2" );

print_r($test);	
*/


// ++++++++++++++++++++  Array casting   ++++++++++++++++++++++++


// Working on php 5.4 and above

$arrayKeyCast=[
"Hello"=>"Dolly",
"23"=>"23 String",
true => "TRUE",
34.45 => "Fractional 34.45",
54 => "Integer 54"
];

print_r($arrayKeyCast);


//Array index

$languages = [];

$languages[] = "HTML";  
$languages[] = "HTML";
$languages[] = "JS";

$languages['frontend'] = "JS";
$languages[6] = "Node JS";
$languages[] = "mongo";

$languages[3] = "c++";
$languages[0] = "Pascal";


/*Size of the array*/
//echo count($languages);
//echo sizeof($languages);
//$result = each($languages);	


$languageOptions = "";

foreach ($languages	as $language) {
		$languageOptions .= $languageOptions."<option>$language</option>";

}



?>



<?php

foreach ($languages	as $language){ ?>

	<option> <?php echo $language	?>	</option>

<?php}?>







<select>	
		<option> HTML	</option>
		<option> gn	</option>
</select>

