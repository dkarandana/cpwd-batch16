<?php
	$firstname = "ruwanya";
	$lastname = "sumin";
	//echo $firstname;
	//echo $lastname;
	//echo "My name is " . $firstname;

	echo 'My name is ru';
	echo " My name is ru";

	echo ' My name is $firstname';
	echo " My name is $firstname";

	echo ' My name is ' . $firstname;
	echo " My name is " . $firstname;
	echo "<h3> My Name Is $firstname $lastname</h3>";

	$something = <<<EOD
	<ul>
		<li>HI</li>
		<li>SRI LANKA</li>
	</ul>

EOD;
	echo $something;

	$class1 = "CPWD fundamental";
	$class2 = "CPWD advance";

	$rr = <<<EOD
		<ul>
		<li>{$class1}s</li>
		<li>$class2</li>
	</ul>
EOD;
echo $rr;

$
?>
