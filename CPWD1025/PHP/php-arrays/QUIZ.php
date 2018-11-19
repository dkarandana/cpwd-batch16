/*CAR sale with cars
  
15 cars at the sale



using COUNT as button funtion
use a for loop to get {Name of the vehical}, 
*/







<?php
	$cars = [
        "CAR"=> [
            "Name" => "Audi",
            "Model" => "A8",
            "Classes" => [
                "Model 01" => "Car Name",
                "Model 02",
                "Model 03",
                "Model 04",
                "Model 05",
                "Model 06",
                "Model 07",
                "Model 08"
            ]
        ],
        "carName"=>"Name",
        "carModel" => "Model",
        "Classes"
    ];

    foreach( $cars["CAR"]["Name"] as $carName ){

        ( $carArray,"Car Name:  ". $carName );
        
    }
	$carArray = [];
    
    echo("Car Name : <br> ", $carArray);
    count(Classes);	

?>

