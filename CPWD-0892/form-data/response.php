
	
	<?php
		/*print_r($_GET);
		
		$name =$_GET['name']
		$email =$_GET['email']
		
		echo<<<EOD
		<p>My Name is :$name</p> 
		<p>Email : $email</p>
EOD;
	print_r( $_GET['osp']);
	
	
	echo "project name is {$_GET["project-name"]};*/
	
	$projectName = $_POST['project-name'];
	
	echo "project name is $projectName";
	
	?>
	
	<form action="" methord="get">
		Project Name <input type="text" name="project-name">
		
		<input type="submit">
	</form>