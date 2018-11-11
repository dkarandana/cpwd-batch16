<html>

	<head>

	</head>

	<body>
		<h1>HTML SYNTAX</h1>
		
		<ul>
			<li>Item 1</li>
			<li>Item 2</li>
			<li>Item 3</li>
		</ul>
		
		<?php
		
			$firstName = "Eshan";
			$lastName = "Hasanka";
			//echo $firstName;
			//echo $lastName;
			
			echo "My Name is" . $firstName;	
			
			echo 'My Name is $firstName $lastName';
			echo "<h3>My Name is $firstName $lastName</h3>";
			
			$something = <<<EOD
			<ul>
				<li>{$firstName}s</li>
				<li>$lastName</li>
EOD;
		echo $something;
		
		?>
		
	</body>

</html>