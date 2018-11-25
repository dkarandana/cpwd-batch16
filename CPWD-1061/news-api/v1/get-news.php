<?php
    header('Content-Type: application/json');
    require "./../data.php";

    $errors = [];
    $apiOut = [];

    $lt = filter_input(INPUT_GET, 'lt', FILTER_SANITIZE_SPECIAL_CHARS);
    $st = filter_input(INPUT_GET, 'st', FILTER_SANITIZE_SPECIAL_CHARS); // $_GET['st'];

    $st = ( isset( $st ) ) ? trim( $st ) : 0;

    if( isset( $lt ) ){
        $lt = trim( $lt );

        if(  !is_numeric( $lt ) ){
            $errors[] = "lt should be a number";
        }

    }else{
        $lt = sizeof( $newsFeed );
    }

    if( is_numeric( $st ) && $lt ){

        $filteredData = array_slice( $newsFeed , $st , $lt );

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
