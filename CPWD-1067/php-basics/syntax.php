<!DOCTYPE html>
<html>
<head>
	<title>PHP basics</title>
	
</head>
<body>
	<h1>PHP</h1>


	<ul>
		<li>Item 1</li>
		<li>Item 2</li>
		<li>Item 3</li>
		<li>Item 4</li>
	</ul>
<?php

$name="Duminda";
$lastname="Hettiarachchi";

echo ' my name is $name ' ;
echo " <h3> my name is $name </h3> ";

echo "<h2>My name is:" . $name ." " . $lastname . "</h2>";


//heardocs

//CPWD class1
$cl1="CPWD class1";
//CPWD class234
$cl2="CPWD class2";


$heardos=<<<EOD
<ul>
	<li>$cl1</li>
	<li>{$cl2}34</li>
</ul>
EOD;
echo $heardos;

// print_r($_SERVER);

// echo "hello world";

?>

</body>
</html>