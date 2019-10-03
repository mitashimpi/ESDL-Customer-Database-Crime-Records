<!DOCTYPE HTML>
<html>
	<head>
		<title>UID Project</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body background="per1.jpg">
		<br><br>
		<h1>personal information</h1>

		<br><br><br>

		<form method="post">
			<table>
			<tr>
			<td align="center"><label for="first">First Name: </label></td>
			<td align="center"><input type="text" name="first" id="first" reqiured></td>
			</tr>
			<tr>	
			<td align="center"><label for="middle">Middle Name: </label></td>
			<td align="center"><input type="text" name="middle" id="middle" reqiured></td>
			</tr>
			<tr>

			<td align="center"><label for="last">Last Name: </label></td>
			<td align="center"><input type="text" name="last" id="last" required></td>
			</tr>
			<tr>

			<td align="center"><label for="mother">Mother's Name: </label></td>
			<td align="center"><input type="text" name="mother" id="mother" reqiured></td>
			</tr>
			<tr>
			<td align="center"><label for="dob">D.O.B.: </label></td>
			<td align="center"><input type="date" name="dob" id="dob" required></td>
			</tr>
			<tr>
			<td align="center"><label for="city">City: </label></td>
			<td align="center"><input type="text" name="city" id="city" required></td>
			</tr>
			<tr>
			<td align="center"><label for="gender">Gender: </label></td>
			<ul>
				<li>
					<td align="right"><label for="male">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Male:</label><input name="gender" value="male" type="radio" id="male" required></td></tr><tr><td></td>

				</li>
				<li>
					<td align="right"><label for="female">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Female: </label><input name="gender" value="female" type="radio" id="female" required></td>
				</li>
			</ul>
			</tr>
			<tr>

			<td align="center"><label for="contact">Contact No: </label></td>
			<td align="center"><input type="text" name="contact" id="contact" minlength="10" maxlength="10" required></td>
			</tr>
			<tr>
			<td align="center"><label for="address">Address: </label></td>
			<td align="center"><input type="text" name="address" id="address" required></td>
			</tr>
			<tr>
			<td align="center"><label for="pin">Pin Code: </label></td>
			<td align="center"><input type="text" name="pin" id="pin" minlength="6" maxlength="6" required></td>
			</tr>
			<tr>
			<td align="center"><label for="religion">Religion: </label></td>
			<td align="center"><input type="text" name="religion" id="religion" required></td>
			</tr>
			<tr>
			<td align="center"><label for="caste">Caste: </label></td>
			<td align="center"><input type="text" name="caste" id="caste"></td>
			</tr>
			<tr>
			<td align="center"><label for="nationality">Nationality: </label></td>
			<td align="center"><input type="text" name="nationality" id="nationality" required></td>
			</tr>
			<tr>
			<td  colspan=2 align="center"><input type="submit" id="submit" name="submit" value="Submit"></td>
			</tr>
		</form>

		<?php 
			require "function.php";
			connect_to_db();

			$link = NULL;
			$link = check_in_c_info();

			if (isset($link)) 
			{
				if($link==1)
				{
					header('Location: criminal_record.php');
				}
				elseif ($link==2) 
				{
					header('Location: no_record.php');
				}
			}			
		?>

	</body>
</html>
