
<?php
/*
	print_r( $_GET );
	
	
	$Name = "Nishan";
	$email = "Perera";
	
	echo <<<EOD
	<p>My Name is : {$_GET ['name']} </P>
	<p>My Email is : {$_GET ['email']} </P>
	
EOD;


	print_r( $_GET ['ops']);
*/
	
	
	$projectName = $_POST ['project-name'];
	echo "Project Name is $projectName";

	
	
?>

<form action="" method="post">
	Project Name <input type="text" name="project-name">
	
	
	<input type ="submit">
	
</form>