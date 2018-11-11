
<h1>PHP Syntax D2</h1>
<?php
	echo "Pesantha";
	/*print_r( $_SERVER );*/
	$firstName = "Pesantha";
	$lastName = "PEIRIS";

	echo $firstName;
	// \n new line 
	echo "My Name is " . $firstName; 
	//. is use to concatinate.

	echo 'My Name is $firstName';
	echo "My Name is $firstName";
	
	echo "My Name is $firstName $lastName";

	echo "<h3>My Name is $firstName $lastName</h3>";

	$class1 = "CPWD Fundermental";
	$class2 = "CPWD Advanced";

	$something = <<<EOD
	<ul>
		<li>{$class1}s</li>
		<li>$class2</li>
	</ul>
EOD;

	echo "$something";

	//now DOC
?>
