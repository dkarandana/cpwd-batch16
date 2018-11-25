<?php

require "./data.php";
//print_r( $newsFeed );



/* Fine search terms - only first one matched item */
$searchitems = "Trump sees damage caused by deadly California fires";

$alltitles = array_column ( $newsFeed, "title");


$index = array_search( $searchitems, $alltitles);

//$print_r ($alltitles);

//print_r($newsFeed [ $index] );



/* fetch unic values */

$uniqeCategories = array_unique( array_column ($newsFeed, "category"));

//print_r( $uniqeCategories );



/* Multi Matches */

    $categories = array_column( $newsFeed, "category");

    $matches = array_keys( $categories,"sports",true );

    $matchesFlipped =  array_flip( $matches );

    echo "Matches " . count( $matches );

    $sportNews = array_intersect_key( $newsFeed, $matchesFlipped );

    foreach( $sportNews as $news ){
    echo <<<NEWS
        <h5>{$news['title']}</h5>
        <h5><img src="{$news['thumbnail']}" alt="Thumb"/></h5>
NEWS;
    }


/*
$sample = array(
		"A"=>"A",
		"B"=>"bb",
		"C"=>"Cc",
		"D"=>"bb"
	);

print_r( array_keys( $sample, "bb" ));
*/











?>