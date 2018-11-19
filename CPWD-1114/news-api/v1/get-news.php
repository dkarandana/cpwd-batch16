<?php
header('Content-Type: application/json');
require './../data.php';
$jsonout = json_encode($newsFeed);

echo $jsonout;
 ?>