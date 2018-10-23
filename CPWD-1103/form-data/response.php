<?php
/*
	print_r($_GET);

	$email = $_GET['email'];
	$name = $_GET['name'];

	echo <<<EOD

	<P> my name is: {$name} </p>

	<p> Email: {email} </p>

EOD;
	print_r($_GET['osp']);
	*/
		$project_name = $_POST['project_name'];
		echo "Project name is $project_name";
?>

<form action="" method="POST">
	project name <input type="text" name="project_name">

	<input type="submit">
</form>

