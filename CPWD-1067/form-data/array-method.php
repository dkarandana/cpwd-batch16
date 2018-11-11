<!DOCTYPE html>
<html>
<head>
	<title>PHP basics</title>
	
</head>
<body>
	<h1>PHP</h1>

<?php


$courses=["CPWD"=>"web developping",
"JAVA"=>"programming",
"C++"=>"progamming"
];


$newArray=[];
foreach($courses["CPWD"]["modules"] as $module){
	array_push($newArray,"module name:". $module);
}

echo join("<br/>",$newArray);

?>
</body>
</html>