<!DOCTYPE html>
<html lang="en">
<head>
	<title>assignment forms</title>
</head>
<body>
	<?php


$f_name=$_GET['f_name'];
$l_name=$_GET['l_name'];
$dob=$_GET['dob'];
$gender=$_GET['gender'];
$address_line1=$_GET['address_line1'];
$address_line2=$_GET['address_line2'];
$city=$_GET['city'];
$postal_code=$_GET['postal_code'];
$email=$_GET['email'];
$twitter=$_GET['twitter'];
$mobile=$_GET['mobile'];
$phone=$_GET['phone'];
$fax=$_GET['fax'];
$contact_preferences=$_GET['contact_preferences'];
$cpwd_id=$_GET['cpwd_id'];
$cpwd_batch=$_GET['cpwd_batch'];
$wiki_username=$_GET['wiki_username'];
$wiki_password=$_GET['wiki_password'];
$wiki_password_retype=$_GET['wiki_password_retype'];

echo "f_name is: $f_name";
echo "l_name is: $l_name";
echo "dob is: $dob";
echo "gender is: $gender";
echo "address_line1 is: $address_line1";
echo "address_line2 is: $address_line2";
echo "city is: $city";
echo "postal_code is: $postal_code";
echo "email is: $email";
echo "twitter is: $twitter";
echo "mobile is: $mobile";
echo "phone is: $phone";
echo "fax is: $fax";
echo "contact_preferences is: $contact_preferences";
echo "cpwd_id is: $cpwd_id";
echo "cpwd_batch is: $cpwd_batch";
echo "wiki_username is: $wiki_username";
echo "wiki_password is: $wiki_password";
echo "wiki_password_retype is: $wiki_password_retype";

?>


	<h1>Registration form</h1>
		<form method="get">
<!--	action="evaluate url">-->
		<fieldset>
			<legend>Personal data</legend>
			<label for="f_name">First name:</label><input type="text" name="f_name" id="f_name"/>
			<label for="l_name">Last name:</label><input type="text" name="l_name" id="l_name"/>
			<label for="dob">Date of Birth:</label><input type="datetime-local" name="dob" id="dob"/>
				<label>Gender:</label>
				<label for="m">Male:</label><input type="radio" name="gender" id="m" checked/>
				<label for="f">Female:</label><input type="radio" name="gender" id="f"/>
				<fieldset>
					<legend>Contacts</legend>
					<label for="add1">Street Line 1:</label><input type="text" name="address_line1" id="add1"/>
					<label for="add2">Street Line 2:</label><input type="text" name="address_line2" id="add2"/>
					<label for="city"> City :</label><input type="text" name="city" id="city"/>
					<label for="postal">Postal Code :</label><input type="text" name="postal_code" id="postal"/>
					<select name="country">
						<option value="selected">-select a country-</option>
						<option value="sl">Sri lanka</option>
						<option value="ind">India</option>
						<option value="aus">Austaliya</option>
						<option value="jap">Japan</option>
						<option value="ch">China</option>
					</select>

					<label for="email">Email Address : </label><input type="email" name="email" id="email"/>
					<label for="twitter">Twitter  : </label><input type="text" name="twitter" value="@" id="twitter"/>
						<fieldset>
							<legend> Phone</legend>
								<label for="mobi">Mobile:</label><input type="text" id="mobi" name="mobile"/>
								<label for="phone">Fixed Line:</label><input type="text"  id="phone" name="phone"/>
								<label for="fax">Fax: </label><input type="text" id="fax" name="fax"/>
							
						</fieldset>

					<label>Contact preferences </label>
					<label for="cmobi">Mobile</label><input type="checkbox" id="cmobi" value="Mobile" name="[contact_preferences]" checked />
					<label for="fix">Fixed Phone</label><input type="checkbox" id="fix" value="Fixed " name="[contact_preferences]"/>
					<label for="c-mail"></label>Email<input type="checkbox" id="c-mail" value="Email" name="[contact_preferences]"/>
					<label for="twit">Twitter</label><input type="checkbox" id="twit" value="Twitter" name="[contact_preferences]"/>
					
				</fieldset>	
				<fieldset>
					<legend>CPWD Account
					</legend>
					<label for="s-id">CPWD Student Id :</label><input type="text" id="s-id" name="cpwd_id" value="CPWD"/>
					<label>Batch: </label>
						<select name="cpwd_batch">
							<option value="select">-select batch-</option>
							<option value="b1">CPWD batch1</option>
							<option value="b2">CPWD batch2</option>
						</select>
					<fieldset>
						<legend>Wiki Account
						</legend>
						<label for="username">Wiki Username</label><input type="text" id="username" name="wiki_username"/>
						<label for="pass"></label>Wiki Password <input type="password" id="pass" name="wiki_password"/>
						<label for="pass-retype">Wiki Password (re-type) </label><input type="password" id="pass-retype" name="wiki_password_retype"/>

					</fieldset>

				</fieldset>
			
		<input type="reset" value="CLEAR"/>
		<input type="submit" value="SUBMIT" name="submit_data" />
		</fieldset>


	</form>
	


</body>
</html>