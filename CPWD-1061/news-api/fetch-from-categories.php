<?php
    require "./data.php";

   /* $allNews = [];

    foreach( $newsFeed as $news ){
        $allNews[] = $news['title'];
    }

    print_r( $allNews );

    */
    
	$searchTerm = "Trump sees damage caused by deadly California fires";
    $allTitles = array_column( $newsFeed, "title");
	$index = array_search($searchTerm,$allTitles);
    //print_r( $newsFeed[$index]);
	//fething unique values
	$uniquecategories = array_unique(array_column($newsFeed,"category","sports",true));
	
	print_r($uniquecategories);
	
	//multi choices
	
	$sample = array(
	"A"=>"a",
	"B"=>"bb",
	"V"=>"vvv",
	"C"=>"ccccc",
	"C"=>"ccc",
	"R"=>"rRrrr",
	"A"=>"A");
	
	print_r(array_keys($sample,"bb"));
?>