<!DOCTYPE html>
<html>
<head>
	<title>PHP basics</title>
	
</head>
<body>
	<h1>PHP</h1>

<?php
 
 $car=array("toyata","volvo","BMW");
 $carlength=count($car);

?>

<?php
 for($x = 0; $x < $carlength; $x++) {
    echo $car[$x];
    echo "<br>";
}
echo count($car);

?>


</body>
</html>