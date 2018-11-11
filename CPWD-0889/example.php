<?php
	

	$cars = array("Volvo", "BMW", "Toyota", "Mini", "Jeep", "Honda", "Bugatti", "Chevrolet", "Kia", "Lamborghini", "LandRover", "Mazda", "Audi", "Ferrari", "Dodge");
echo count($cars);



echo "<br>";
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}



?>