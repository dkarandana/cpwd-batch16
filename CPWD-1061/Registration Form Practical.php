<html lang="en">
	<head>
		<title>Registration Form</title>
	</head>
	<body>
		<h1>Registration Form</h1>
		<form action = "links.php" method = "post">
			<fieldset>
				<legend><b>Personal Data</b></legend>
			
				First Name		:<input type="text" name="f_name"><br><br>
				Last Name		:<input type="text" name="l_name"><br><br>
				Date of Birth	:<input type="date" name="dob"><br>
				<br>
				Gender	:			male 	<input type="radio" value="male" name="gender">
									female	<input type="radio" value="female" name="gender">
									other	<input type="radio" value="other" name="gender">
				
				<fieldset>
					<legend><b>Contacts</b></legend>
					Street line 1  	:<input type="text" name="address_line1"><br><br>
					Street line 2	:<input type="text" name="address_line2"><br><br>
					City			:<input type="text" name="city"><br><br>
					Postal Code		:<input type="text" name="postal_code"><br><br>
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
										Fixed Phone	<input type="checkbox" name="fixed_phone" value="Fixed"><br>
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