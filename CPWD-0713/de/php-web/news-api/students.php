<?php


$students = array(
		"pesantha",
		"kasun",
		"Nalin"

	);

print_r (array_search ( "kasun", $students));


/* to get search Fetch multiple Values */


$sample = array(
		"A" => "local",
		"B" => "sports",
		"V" => "international",
		"C" => "local",
		"R" => "international",
		"D" => "sports",
		"E" => "local"
	);

print_r(array_keys($sample,"sports"));



?>