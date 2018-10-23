<?php

	$firstname="Aungs";
	$lastname="karan";
	
	//echo $firstname;
	//echo $lastname;
	
	echo "my name is Aungaran";
	echo "my name is Aungaran";
	
	echo "my name is".$firstname;
	
	echo "<h3>my name is $firstname $lastname</h3>";
	
	$class1 ="cpwd fund";
	$class2 ="cpw adva";
	
	$somthing = <<<EOD
	<ul>
		<li>$class1</li>
		<li>$class2</li>
	</ul>
EOD;
	echo $somthing;
?> 

