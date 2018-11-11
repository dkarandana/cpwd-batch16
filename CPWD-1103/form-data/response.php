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
		/*$project_name = $_POST['project_name'];
		echo "Project name is $project_name";
?>

<form action="" method="POST">
	project name <input type="text" name="project_name">

	<input type="submit">
</form>
<?php*/
$languages =[];

		$languages[] ="HTML";
		$languages[] ="HTML";
		$languages[]="JS";

		$languages['frontend']="js";
		$languages[6]="node js";
		$languages[]="mongo db";

		$languages[3]="c++";
		$languages[0]="pascal";

		/*size of the array */
		echo count($languages);
		echo sizeof($languages);

		$languageoption ="";

		foreach($languages as $lang){
			$languageoption = $languageoption."<option>$lang</option>";
			//$languageoption .= "<option>$lang</option>";

		}
		echo "<select>$languageoption</select>";

?>

