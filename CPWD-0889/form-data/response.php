<?php

	print_r( $_GET );

	$email=$_GET['email'];
	$name=$_GET['name'];


	echo <<<EOD
	<p>My name is : {$name} </p>
	<p>Email : {$email} </p>

EOD;

?>