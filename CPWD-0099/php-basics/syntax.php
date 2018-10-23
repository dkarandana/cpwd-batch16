<?php
	
	$firstname = "chamara";
	$lastname = "mallawaarachchige";
	
	//echo $name;
	//echo $lastname
	
	echo 'My name is chamara';
	echo "My name is chamara";
	
	echo 'My name is ' . $firstname;
	echo "My name is " . $firstname;
	
	echo 'My name is $firstname';
	echo "<h3>My name is $firstname $lastname</h3>";

	
	$class1 = "CPWD Fundermental";
	$class2 = "CPWD Advanced";
	
	$something = <<<EOD
	<ul>
		<li>{$class1}</li>
		<li>$class2</li>
	</ul>
EOD;
?>
	
	<body>
	<h1>HTML SYNTAX</H1>
		<ul>
			<li>1</li>
			<li>2</li>
			<li>3</li>
			<li>4</li>
			<li>5</li>
		</ul>
	</body>
	
	
	print_r ($_SERVER );
	
	/*
print_r( $_GET );

$email = $_GET ['email'];


echo <<<EOD

	<P>My Name Is : {$_GET{'name'}} </p>
	<p>Email : {$email}</p>
	
EOD;

print_r{ $_GET['osp']};

*/
	


