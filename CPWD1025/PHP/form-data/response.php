<?php
	print_r( $_GET );

	$Name = $_GET["Name"];
	$email = $_GET["email"];

	echo <<<EOD
		<h1>First Name {$_GET ["name"]}</h1>
		<h1>Email {$_GET ["email"]}</h1>
EOD;

		print_r($_GET["osp"]);


$projectName = $_POST ['project-name'];


	echo "Project Name is $projectName";

	

?>

<form action="" method="post">
	Project Name <input type="text" name="project-name">
	
	
	<input type ="submit">
	
</form>









