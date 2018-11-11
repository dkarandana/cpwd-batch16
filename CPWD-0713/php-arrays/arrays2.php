<?php

//Array index

$cars =[];

$cars=["Volvo","Nisan","Toyota"];
echo "$cars";
echo count($cars);
foreach ($carnames as $car) {
	$cars .= $cars."$car";
	
}


?>