<?php

    $courses = [
        "CPWD"=> [
            "name" => "Certified Proffesional web Development",
            "duration" => "6 Months",
            "modules" => [
                "Module 01" => "Internet Fundementals",
                "Module 02",
                "Module 03",
                "Module 04",
                "Module 05",
                "Module 06",
                "Module 07",
                "Module 08"
            ]
        ],
        "REDHAT"=>"Red Hat inc",
        "DMI" => "Digital Marketting institute",
        "Soft SKILL"
    ];

    $newArray = [];
    foreach( $courses["CPWD"]["modules"] as $module ){

        array_push( $newArray,"Module Name: " . $module );
        
    }

    echo join("<br> ", $newArray);
    //echo $newArray.join("****") ;




?>