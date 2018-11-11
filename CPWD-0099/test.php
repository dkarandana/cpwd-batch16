
<?php


$languages = [];

$languages[] = "HTML";
$languages[] = "HTML";
$languages[] = "JS";

$languages['Front End'] = "JS";
$languages[6] = "Node JS";
$languages[] = "Node DB";

$languages[3] = "c++";
$languages[0] = "Pascal";

//echo count( $languages );
//echo sizeof( $languages );

//echo $result;

//print_r( $languages );

$LanguageOptions = "";

foreach( $languages as $lang ) {
	
	   $LanguageOptions = "<option>$lang</option>";
	  }

each "<select>$LanguageOptions</option>";


/*$arrayKeyCast = [

	"Hello"=>"Dolly",
	"23" =>"23 String",
	true => "True",
	75.45 => "Fractional 75.45,
	100 => "Integer 100"
	
	];
	
	print_r( $arrayKeyCast );
	
	

$test = array("val1"=>"world", "val2");


var_dump( $test );

 $cpwd = "CPWD";
 $int = 2333;
 $float = 32.5;
 $bool = false;
 
 echo gettype ( $cpwd );
 echo gettype ( $int );
 echo gettype ( $float );
 echo gettype ( $bool );
 
 
 var_dump( (bool) "");
 
 
 echo php_uname('s');
 echo phpversion();
 phpinfo();
*/
 


?>















