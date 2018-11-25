<?php

    header('Content-Type: application/json');
    require "./../data.php";

    $jsonOut = json_encode( $newsFeed );

    echo $jsonOut;
?>
