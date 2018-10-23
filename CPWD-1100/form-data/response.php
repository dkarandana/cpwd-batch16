

<?php
/*
	print_r($_GET);

	echo <<<EOD
	<p> My name is:$</P>
	<p> Email :__</P>

EOD;	
*/
	$projectNname=$_POST['project-name'];
	echo "project name is : $projectNname";

?>	

<form action ="" method="post">
	Project Name <input type="text" name= "project-name">

	<input type="submit">
</form>	