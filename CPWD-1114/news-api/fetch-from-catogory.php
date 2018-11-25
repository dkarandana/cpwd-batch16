<?php 
require './data.php';
#Trump sees damage caused by deadly California fires

/*$allnews=[];
foreach ($newsFeed as $news ) {
	$allnews[] = $news['title'];

}
print_r($allnews);*/
/*$student = array("yuresha", "buddhika", "ovini", "rathnayaka"
);

 print_r(array_search(ovini,$student ));


*/


// print_r(array_column($newsFeed, "title"));

//print_r(array_search("Trump sees damage caused by deadly California fires", $newsFeed));



//single maches
/*$find='Trump sees damage caused by deadly California fires';
$index = array_search( $find , array_column( $newsFeed, "title")  );

if($index){

	print_r( $newsFeed [$index]);
}
*/

/*fetch unique values*/
//print_r( array_keys($newsFeed ));

/*$uniqueCategories=array_unique(array_column($newsFeed, "category"));
print_r($uniqueCategories);

*/
/*multi maches*/

/*$sample=$arrayName = array(

	"A"=>"fgg",
	"B"=>"yy",
	"C"=>"bb",
	"C"=>"bb",
	"R"=>"ee",
	"W"=>"ett",
	"A"=>"try"

);


print_r(array_keys($sample, "bb"));
*/

$category=array_column($newsFeed, "category");
$maches= array_keys($category, "sports");

print_r($maches);

array_intersect_key($newsFeed, $maches);


 ?>
