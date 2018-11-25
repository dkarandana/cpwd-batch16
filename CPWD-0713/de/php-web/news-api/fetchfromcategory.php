<?php
require "./data.php";

//
/*
$allnews = [];

foreach ($newsFeed as $searchedfeed) {
	
	//print_r($searchedfeed['title']);
	$allnews[] = $searchedfeed['title'];

}

    print_r( $allNews );
    */

    $allTitles = array_column( $newsFeed, "title");
    //print_r( $allTitles );



print_r($newsFeed);
	$searchvalue = "Trump sees damage caused by deadly California fires";

	$allTitles = array_column ($newsFeed, "title");

	$search = array_search ($searchvalue, $allTitles);

	print_r ( $newsFeed[ $search ] );


?>