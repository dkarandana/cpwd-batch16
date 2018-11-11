<?php
	$cpwd = "CPWD";
	$int ="23330";
	$float ="33.2";
	$bool ="false";

	echo gettype( $cpwd );
	echo gettype( $int );
	echo gettype( $float );
	echo gettype( $bool );

	/*$arrayKeyCast =[
		"hello" =>"Dolly",
		true => "TRUE",
		34.45 =>"Fractional 34.45",
		54 => "integer 54",
		 "23" => "23 string"
	];

	print_r( $arrayKeyCast );*/

	$lang[]="HTML";
	$lang[] = "HTML";
	$lang[] = "JS";
	$lang['frontend']= "JS";
	$lang[6] = "NodeJS";
	$lang[61] = "MongoDB";
	$lang[] = "c++";
	$lang[2] = "pascal";


	//echo count( $lang );
	//echo sizeof( $lang );

	print_r( $lang );


	$options= "";

	foreach( $lang as $key){
		$options = $options."<option>$key</option>";
	}

?>

	