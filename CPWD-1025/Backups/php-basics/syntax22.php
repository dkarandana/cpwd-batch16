<?php
	$firstName = "Nishan";
	$lastName = "Perera";

	//echo $firstName
	
	//echo $lastName
	
	echo 'My First Name is Nishan';
	echo "My First Name is Nishan";
	
	echo 'My Name is ' . $firstName;
	echo "My Name is " . $firstName;
	
	echo 'My Name is $firstName';
	echo "<h3> My Name is $firstName $lastName</h3>";
	
	
	$class1 = "CPWD Fundemental";
	$class2 = "CPWD Advanced";
	
	$something = <<<EOD
	<ul>
		<li>{$class1}s</li>
		<li>$class2</li>
	<ul>
EOD;

	echo $something;
?>