<?php

	$fname = $_POST['f_name'];
	$lname = $_POST['l_name'];
	$dob = $_POST['dob'];
	$gen = $_POST['gender'];
	$address1 = $_POST['address_line1'];
	$address2 = $_POST['address_line2'];
	$city = $_POST['city'];
	$postalCode = $_POST['postal_code'];
	$country = $_POST['country'];
	$Email = $_POST['email'];
	$Twitter = $_POST['twitter'];
	$Mobile = $_POST['mobile'];
	$Phone = $_POST['phone'];
	$Fax = $_POST['fax'];
	$Mobile = $_POST['mobile'];
	$FixefPhone = $_POST['fixed_phone'];
	$Email = $_POST['email'];
	$Twitter = $_POST['twitter'];
	$CPWDid = $_POST['cpwd_id'];
	$CPWDbatch = $_POST['cpwd_batch'];
	$username = $_POST['wiki_username'];
	$password = $_POST['wiki_password'];
	$rePassword = $_POST['wiki_password_retype'];
	
	echo "Your First Name is $fname";
	echo "<br>";
	echo "Your Last Name is $lname";
	echo "<br>";
	echo "Your Date of Birth is $dob";
	echo "<br>";
	echo "Gender is $gen";
	echo "<br>";
	echo "Your Address is $address1 $address2 $city $postalCode $country";
	echo "<br>";
	echo "Your Email Address is $Email";
	echo "<br>";
	echo "Your twitter name is $Twitter";
	echo "<br>";
	echo "Your Mobile Number is $Mobile";
	echo "<br>";
	echo "Your Phone Number is $Phone";
	echo "<br>";
	echo "Your Fax Number is $Fax";
	echo "<br>";
	echo "Contact Preferences $Mobile $FixefPhone $Email $Twitter";
	echo "<br>";
	echo "Your CPWD Account is $CPWDid";
	echo "<br>";
	echo "Your CPWD Batch is $CPWDbatch";
	echo "<br>";
	echo "Your Username is $username <br>";
	echo "<br>";
	echo "Your Username is $password";
	echo "<br>";
	echo "your re type password is $rePassword";

?>