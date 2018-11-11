<!DOCTYPE html>
<html>
<head>
	<title>PHP basics</title>
	
</head>
<body>
	<h1>PHP</h1>

<?php

/*$test=array("val 1", "cal2");
print_r($test);
print_r($test[0]);
var_dump($test);



$arrayKeyCast=[
	"hello"=>"dolly",
	"23"=>"23 string",
	true=>"true",
	54.555=>"integer 54",
];
print_r($arrayKeyCast);
*/


$Arraylanguahe=[];

$Arraylanguahe[]="HTML";
$Arraylanguahe[]="CSS";
$Arraylanguahe[]="JS";
$Arraylanguahe[]="sQl";
$Arraylanguahe[6]="DB";
$Arraylanguahe[]="ROOM";

/*foreach ($Arraylanguahe as $lan) {
	echo$lan;
}
*/
 ?>

<select>
<?php 
foreach ($Arraylanguahe as $lan) { ?>
<option><?php echo$lan; ?></option>
<?php } ?>
</select>


<?php

$lanproduct="";

foreach ($Arraylanguahe as $lan){
	$lanproduct=$lanproduct."<option>$lan</option>";
}

echo<<<EOD
<select>$lanproduct</select>
EOD;
?>


</body>
</html>