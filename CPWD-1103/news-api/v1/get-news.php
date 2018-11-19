<?php

header('Content-type:application.json');
require './../data.php';


$errors = [];
    $apiOut = [];

    $lt = $_GET['lt'];
    $st = $_GET['st'];

    $st = ( isset( $st ) ) ? trim( $st ) : 0;

    if( is_numeric( $st ) ){

        $filteredData = array_slice( $newsFeed , $st , 4 );

    }else{
        $errors[] = "st should be a number";
    }
    
    if( sizeof( $errors ) > 0 ){

        $apiOut["error"] = $errors;

    }else{
    
        $apiOut["data"] = $filteredData;

    }

    echo json_encode( $apiOut );

?>