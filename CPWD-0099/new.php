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

$languageOptions = "";

foreach( $languages as $lang ) {
		$languageOptions = $languageOptions . "<option>$lang</option>";
	   //$languageOptions .= "<option>$lang</option>";
	  }

//echo "<select>$languageOptions</option>";

echo <<<EOD

<select>
 $languageOptions
 </select>
 EOD;
 
 
?>