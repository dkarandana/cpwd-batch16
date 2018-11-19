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
	Project Form
<fieldset>
	<legend>Basic info</legend>
	<br>
	<label>First name :</label>
	<input type="text" name="" placeholder="Eric">
	<label>Last name :</label>
	<input type="text" placeholder="Watson">
	<label>Age</label>
	<input type="number" placeholder="18">
	<label>Emal :
	<input type="email" placeholder="exampl@email.com">	
	</label>
	<label>Gender</label>
	<label>MALE</label>
	<input type="radio" checked="male"value="male">
	<label>FEMALE</label>
	<input type="radio" name="Female" value="female">
	<input type ="submit" value="Confirm">
</fieldset>	
</form>









