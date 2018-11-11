<?php

//Array index

$cars =[];

$cars=["Volvo","Nisan","Toyota"];
echo "$cars";

$arrlength = count($cars);

/*echo count($cars);
foreach ($carnames as $car) {
	$cars .= $cars."$car";
	
}*/

for($x=1 ; $x<$arrlength ; $x++){

	echo"<br>";
	echo "$cars[$x]";


}



?>