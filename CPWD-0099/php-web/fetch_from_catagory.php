


<?php 

	require "./data.php";

	//$alltitles = array_column ( $newsFeed, "sports");
	//print_r( $allTitles );
	
	$allNews = [];
	
	foreach( $newsFeed as $news ){
		
		$allNews[] = $news['title'];
	}
		
	
	print_r( $allNews );
	
	
	
	$student = array ("chamara", "nimal", "kamal", "vimal", "vikum");
	
	print_r(array_search("chamara", $student )); 
	
	
	//"Trump sees damage caused by deadly California fires"
	
	$searchTerm = "Trump sees damage caused by deadly California fires";
	
	$allTitles = array_column($newsFeed, "title");
	$index = array_search( $searchTerm, $allTitles);
	
	if( $index ){
		
		//print_r( $newsFeed [ $index ]);
	}
	
	//fetch unique values
	
	$uniqueCategories = array_unique( array_column( $newsFeed, "category");
	
	print_r( $uniqueCategories );
	
	//multi matches */
	
	$categories = array_column( $newsFeed, "category");
	
	$maches = array_keys( $categories, "sports", true);
	
	$machesFlipped = array_flip( $maches );
	
	echo "Maches" . count( $maches );
	
	$sportNews = array_intersect_key( $newsFeed, $machesFlipped );
	
	foreach( $sportNews as $news ){
		
		echo <<<NEWS
		<h5>{$news['title']}</h5>
		<h5><img src="{$news['thumbnail]}" alt="Thumb"/></h5>
	NEWS;
	
	}
	
	/*$sample = array(
		"A"=>"a",
		"B"=>"b",
		"C"=>"vvvv",
		"C"=>"ccccc",
		"R"=>"ccc",
		"B"=>"RrR",
		"D"=>"bb",
		"A"=>"A",
		
	)
	
	print_r( array_keys( $sample,"bb"); */
	
	
	
	
	
	?>

