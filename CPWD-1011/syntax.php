<?php 

	$firstName = "ijilan";
	//echo $firstName;

	$lastName ="mohamed";

	//echo $lastName;

	//echo "My Name is" . $firstName . $lastName ;

	//echo 'My Name is \n ijilan';

	//echo "My Name is \n ijilan";
	//echo 'My name is $firstName';
	//echo "My name is $firstName"; 

	echo "<h3>My name is $lastName $firstName</h3>";

	$projectName = $_POST['project-name'];

	echo "my project is $projectName";
	
 ?>
	
	<form action="" method="post">
		project name : <input type="text" name="project-name">

		<input type="submit">

	</form>


