<?php
    
	$firstName = "Dhananjaya";
	$lastName = "Karandana";

	echo 'My Name is Dhananjaya';
	echo "My Name is Dhananjaya";

	echo 'My Name is ' . $firstName;
	echo "My Name is " . $firstName;

	echo 'My Name is $firstName';
	echo "<h3>My Name is $firstName $lastName</h3>";


	$class1 = "CPWD Fundemental";
	$class2 = "CPWD Advanced";

	$something  = <<<EOD
	<ul>
		<li>{$class1}s</li>
		<li>$class2</li>
	</ul>
EOD;

	echo $something;

	

?>
<?php
$courses = [
	"CPWD"
];

$newArray = [];
foreach ($courses ["WEB","AD"] as $module) {
	array_push($newArray, "Module Name : " $module);

}
echo join("<br>",$newArray);
?>
