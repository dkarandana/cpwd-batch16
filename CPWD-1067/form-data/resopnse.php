<!DOCTYPE html>
<html>
<head>
	<title>PHP basics</title>
	
</head>
<body>
	<h1>PHP</h1>

<?php
// print_r($_GET);


// $name= $_GET['name'];
// $email= $_GET['email'];
// echo<<<EOD
// <p>My Name:$name</p>
// <p>Email:{$email}</p>
// EOD;


$projectName=$_GET['project-name'];
echo "project name is: $projectName";


?>
<form action="" method="get">


project name<input type="text" name="project-name">
<input type="submit">	

// get

// post

<?php
$projectName=$_POST['project-name'];
echo "project name is 2: $projectName2";

?>

<form action="" method="post">


project name<input type="text" name="project-name2">
<input type="submit">	



</form>
</body>
</html>