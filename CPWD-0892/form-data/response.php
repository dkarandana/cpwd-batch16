<?php

$first_name = $_POST['f_name'];
$last_name = $_POST['L_name'];
$Date_Of_Birth = $_POST['dob'];
$Gender = $_POST['gender'];

echo "Personal Data "."<br>";
echo "First Name : ".$first_name."<br>";
echo "Last Name : ".$last_name."<br>";
echo "Date Of Birth : ".$Date_Of_Birth."<br>";
echo "Gender : ".$Gender."<br>";

$Street_Line_1 = $_POST['address_line1'];
$Street_Line_2 = $_POST['address_line2'];
$city = $_POST['city'];
$postal_code = $_POST['postal_code'];
$Country = $_POST['country'];
$email = $_POST['email'];
$twitter = $_POST['twitter'];

echo "Contacts "."<br>";
echo "Street Line 1: ".$Street_Line_1."<br>";
echo "Street Line 2: ".$Street_Line_2."<br>";
echo "City : ".$city."<br>";
echo "Postal code : ".$postal_code."<br>";
echo "Country : ".$country."<br>";
echo "Email Adress: ".$email."<br>";
echo "Twitter: ".$twitter."<br>";

$Mobile = $_POST['mobile'];
$Fixed_Line = $_POST['phone'];
$Fax = $_POST['fax'];

echo "Phone "."<br>";
echo "Mobile: ".$Mobile."<br>";
echo "Fixed Line: ".$Fixed_Line."<br>";
echo "Fax: ".$Fax."<br>";

$ContactsP = $_POST['cp'];
echo "contact preferences : ".$ContactsP."<br>";

$Student_ID = $_POST['cpwd_id'];
$batch = $_POST['cpwd_batch'];

echo "CPWD Account "."<br>";
echo "Student ID : ".$Student_ID."<br>";
echo "batch : ".$batch."<br>";

$User_name = $_POST['wiki_username'];
$Password = $_POST['wiki_password'];
$password_Re_type = $_POST['wiki_password'];

echo "Wiki Account "."<br>";
echo "User name: ".$User_name."<br>";
echo "Password : ".$Password."<br>";
echo "Password (Re-type):".$password_Re_type."<br>";


?>