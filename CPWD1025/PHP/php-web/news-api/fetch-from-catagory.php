<?php
/*Showing all News titles only*/


require "./data.php";
$allNews = [];
foreach ($newsFeed as $news => $allTitle) {
	$allNewa[] = $news ["title"];
	$allTitle= array_column($newsFeed, "title");
}
print_r($allNews);


/*One single Search for an array- olnly one item*/

$search = "Trump sees damage caused by deadly California fires";
$titles = array_column($newsFeed, "titles");
$index = array_search($search, $titles);

if( $index ){
       print_r( $newsFeed[ $index ] );
    }

/* Fetch Unique Values Single */
   
    $uniqueCategories = array_unique(  array_column( $newsFeed, "category") );
    
    print_r(  $uniqueCategories ); 

 /* Multi Matches Single Search*/
$sample = array(
"A" => "a" ,
"B"	=> "bb",
"V" => "vvvv",
"C" => "cccc",
"C"	=> "ccc",
"R" => "RrR",
"D" => "bb",
"A" => "A"
);
print_r(array_keys($sample,"RrR",true));
//print_r( array_keys(array("Dhananjaya","D","D","K","A","D"),"D", true ));
   

/*Cross Making Arrays which having multiple keys*/s

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



?>
