<?php
	//Trump sees damage caused by deadly California fires
	require "./data.php";

	/*$alltitle=[];

	foreach ($newsFeed as $news ) {
		$alltitle[]= $news['title'];
		
	}

	print_r($alltitle);

	$student =array(
		"a",
		"b",
		"d",
	);
		
		print_r(array_search("a", $student)); */

/* FIND SERACH TERMS - ONLY ONE MATCHED ITEM */
		$ad = 'Trump sees damage caused by deadly California fires';

		$newsp = array_search($ad, array_column($newsFeed, 'title'));
		//print_r($newsp);

		if ($newsp) {
			//print_r($newsFeed[$newsp]);
		}

		//print_r(array_search("Trump sees damage caused by deadly California fires", $newsp));

/*FETCH UNIQUE VALUES */

		$uniqueCategories = array_unique(array_column($newsFeed, "category"));
		//print_r($uniqueCategories);

/*multiple matches */
	$sample = array(
		"A" => "aa",
		"B" => "ttt",
		"C" => "CCC",
		"D" => "ttt"

	);

	print_r(array_keys($sample, "ttt"));

?>