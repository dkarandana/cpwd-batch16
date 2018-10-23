<?php

print_r($_GET);

echo <<<EOD
<p>My Name is : Iheshan</p>
<p>Email : iheshan.musafer@gmail.com</p>

EOD;


print_r($_GET['osp']);

*/

$projectname = $_POST['project-name'];

echo "project name is $projectname";

?>

<form action=""method="get">
	Project Name <input type="text" name="project-name">
	
	<input type="submit">
	
	</form>