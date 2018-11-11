<?php

	//$test = array("Hello"=>"World","FName"=>"Nishan");
	//var_dump( $test );

/*
	$arrayKeyCast = [
		"Hello" => "Nishan",
		"25" => "25 String",
		true => "TRUE",
		34.25 => "Fractional 34.25",
		54 => "Integer 54"
	
	];

	print_r( $arrayKeyCast);
*/



	$languages = [];
	
	$languages[] = "HTML";
	$languages[] = "HTML";
	$languages[] = "JS";
	
	$languages['frontend'] = "JS";
	
	$languages[6] = "Node JS";
	
	$languages[] = "MONGO DB";
	
	$languages [3] = "C++";
	
	$languages [0] = "Pascal";
	
	//$languageOptions ="";
	settype ($languageOptions, "string");
	
	
	//print_r ( $languages);
	
	//Size of the array
	// echo count ( $languages);
	// echo sizeof ( $languages);
	
	
	foreach( $languages as $lang ){
		//$languageOptions = $languageOptions . "<option>$lang</option>";
		$languageOptions .= "<Option>$lang</option>";
		
	}
	
	echo "<select>$languageOptions</select>"
	
/*	echo <<<EOD
	<select>
		$languageOptions
	</select>
	
EOD;

*/	

		
?>


