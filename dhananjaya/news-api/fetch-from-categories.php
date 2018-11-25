<?php
    require "./data.php";


    /* Find search Terms - Only one matched item */
    $searchTerm = "Trump sees damage caused by deadly California fires";
    $allTitles = array_column( $newsFeed, "title");

    $index = array_search( $searchTerm, $allTitles);

    if( $index ){
       // print_r( $newsFeed[ $index ] );
    }

/* Fetch Unique Values */
   
    $uniqueCategories = array_unique(  array_column( $newsFeed, "category") );
    
    //print_r(  $uniqueCategories ); 

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
   



    

    /* $sample =  array(
        "A"=>"a",
        "B"=>"bb",
        "V"=>"vvvv",
        "C"=>"ccccc",
        "C"=>"ccc",
        "R"=>"RrR",
        "D"=>"bb",
        "A"=>"A"
    );

    print_r( array_keys( $sample,"bb" ) );

    */
















   // print_r( array_keys(array("Dhananjaya","D","D","K","A","D"),"D", true ));
    
?>