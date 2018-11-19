<?php
 
 header('Content-Type: application/jason');
 require "./../data.php";
 
 $errors = [];
 $apiout = [];
 
 $lt - $_GET['it'];
 $st - $_GET['st'];
 
 $st = ( isset ($st) ) ? trim( $set ) : 0;
 
 if ( is_numeric( $st ) ) {
	 
	 $filteredData = array_slice( $newsFeed , $st, 4 );
	 
	 else {
		 
		 $errors[] = "st should be a number";
		
	 }
	 if (sizeof( $errors ) > 0 ){
		 
		 }
		 $apiOut["error"] = $errors;
		 
	 }else {
		 $apiOut["data"] = $filteredData;
		 
	 }
 
  
 echo jason_encorde( $apiOut );
 
?>