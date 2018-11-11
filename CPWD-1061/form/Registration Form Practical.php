
<?php

	$fName = $_POST['f_name'];
	$lName = $_POST['l_name'];
	$dob = $_POST['dob'];
	$male = $_POST['m'];
	$female = $_POST['f'];
	$other = $_POST['o'];
	$addressLine1 = $_POST['address_line1'];
	$addressLine2 = $_POST['address_line2'];
	$city = $_POST['city'];
	$postalCode = $_POST['postal_code'];
	$fName2 = $_POST['f_name2'];
	$country = $_POST['country'];
	$email = $_POST['email'];
	$twitter = $_POST['twitter'];
	$mobile = $_POST['mobile'];
	$phone = $_POST['phone'];
	$fax = $_POST['fax'];
	$cF1 = $_POST['mobile'];
	$cF2 = $_POST['fixed_phone'];
	$cf3 = $_POST['email'];
	$cf4 = $_POST['twitter'];
	$studentId = $_POST['cpwd_id'];
	$batchNo = $_POST['cpwd_batch'];
	$username = $_POST['wiki_username'];
	$password = $_POST['wiki_password'];
	$rePassword = $_POST['wiki_password_retype'];
	
	

    echo "Your First Name is $fName";
	echo '<br>';
	echo "Your Last Name is $lName";
	echo '<br>';
	echo "Your Date of Birth is $dob";
	echo '<br>';
	echo "Gender $male $female $other" ;
	echo '<br>';
	echo "Your Address is $fName2 $addressLine1 $addressLine2 $city";
	echo '<br>';
	echo "Your country is $country ";
	echo '<br>';
	echo "Your Email ID is $email ";
	echo '<br>';
	echo "Your Twitter ID is $twitter ";
	echo '<br>';
	echo "Your mobile no is $mobile ";
	echo '<br>';
	echo "Your landline no is $phone ";
	echo '<br>';
	echo "Your fax no is $fax ";
	echo '<br>';
	echo "Your Contact Preferences $cF1 $cF2 $cF3 $cF4 ";
	echo '<br>';
	echo "Your batch ID is $studentId ";
	echo '<br>';
	echo "Your Batch no is $batchNo ";
	
	echo '<br>';
	echo '<br>';
	echo '<br>';
	
	//var_dump((bool)"!@");//
	
	
	
	$arrayKeyCast = [
		"Hello"=>"Dolly",
		"23"=>"23String",
		true=>"True",
		34.45=>"fractional 34.45",
		54=>"Integer 54"
	
	];
	
	//print_r($arrayKeyCast);//
	
	$languages = [];
	
	$languages = "HTML";
	$languages = "HTML";
	$languages = "JS";
	
	$languages["frontend"] = "JS";
	$languages[6] = "Node JS";
	$languages[] ="MONGO DB" ;
	
	$languages[3] = "C++";
	
	$languages[0] = "Pascal";
	
	//print_r($languages);//
	
	//echo count($languages);//
	
	foreach($language as $lang){
		
		echo "$lang";
	
	}
		
?>






<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Registration Form</title>
	</head>
	<body>
		<h1>Registration Form</h1>
		<form action = "" method="POST">
			<fieldset>
				<legend><b>Personal Data</b></legend>
			
				First Name		:<input type="text" name="f_name"><br><br>
				Last Name		:<input type="text" name="l_name"><br><br>
				Date of Birth	:<input type="date" name="dob"><br>
				<br>
				Gender	:			male 	<input type="radio" value="male" name="m">
									female	<input type="radio" value="female" name="f">
									other	<input type="radio" value="other" name="o">
				
				<fieldset>
					<legend><b>Contacts</b></legend>
					Street line 1  	:<input type="text" name="address_line1"><br><br>
					Street line 2	:<input type="text" name="address_line2"><br><br>
					City			:<input type="text" name="city"><br><br>
					Postal Code		:<input type="text" name="postal_code"><br><br>
					First Name		:<input type="text" name="f_name2"><br><br>
					country			:<select name="country" >
									 <option value="sl" disabled="disabled" selected="selected">-select country-</option>
										<optgroup label="Asia">
											<option value="sl">Sri Lanka</option>
											<option value="ind">India</option>
											<option value="pak">Pakistan</option>
											<option value="ban">Bangladesh</option>
										</optgroup>
										<optgroup label="Europe">
											<option value="germany">Germany</option>
											<option value="austria">Austria</option>
											<option value="italy">Italy</option>
											<option value="sweden">Sweden</option>
										</optgroup>
										</select><br><br>
					Email Address	:<input type="text" name="email"><br><br>
					Twitter			:<input type="text" name="twitter"><br>
						<fieldset>
							<legend><b>Phone</b></legend>
							Mobile		:<input type="text" name="mobile"><br><br>
							Fixed Line 	:<input type="text" name="phone"><br><br>
							Fax			:<input type="text" name="fax"><br>
						
						</fieldset>
					Contact Preferences:Mobile		<input type="checkbox" name="mobile" value="Mobile"><br>
										Fixed Phone	<input type="checkbox" name="fixed_phone" value="Fixed Phone"><br>
										Email		<input type="checkbox" name="email" value="Email"><br>
										Twitter		<input type="checkbox" name="twitter" value="Twitter">
				</fieldset>
				<fieldset>
					<legend><b>CPWD Account</b></legend>
					Student ID	:<input type="text" name="cpwd_id" value="CPWD"><br><br>
					Batch		:<select name="cpwd_batch">
									<option value="batch10">batch 10</option>
									<option value="batch11">batch 11</option>
									<option value="batch12">batch 12</option>
									<option value="batch13">batch 13</option>
									<option value="batch14">batch 14</option>
									<option value="batch15">batch 15</option>
								</select>
					<fieldset>
						<legend><b>Wiki Account</b></legend>
						Username:<input type="text" name="wiki_username"><br><br>
						Password:<input type="password" name="wiki_password"><br><br>
						Password (re-type):<input type="password" name="wiki_password_retype"><br><br>
						
						<input type="submit">
						<input type="reset" value="clear">
					</fieldset>
				</fieldset>
			
			</fieldset>
		
		</form>
	
	</body>


</html>