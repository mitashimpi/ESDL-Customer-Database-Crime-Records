<!DOCTYPE HTML>
<?php
session_start();
$first=$_SESSION['first_name'];
$middle=$_SESSION['middle_name'];
$last=$_SESSION['last_name'];
$dob=$_SESSION['dob'];
?>
<html>
	<head>
		<title></title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	</head>
	<body bgcolor="yellow" align="center">
		<br><br><br><br><br><br><br><br><br><br>
		<font color="blue" size="20">User Info!!!</font>
		<br><br>
		<?php 
			require "function.php";
			$con=mysqli_connect("localhost","root","","pers_infor");
		// Check connection
		if (mysqli_connect_errno()) {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}


		$out= mysqli_query($con,"SELECT * FROM p_info where first_name='$first'and middle_name='$middle' and last_name='$last' and dob='$dob'");
		echo "<table border='1' align='center'>
		<tr>
		<th>ID</th>
		<th>First Name</th>
		<th>Middle Name</th>
		<th>Last Name</th>
		<th>Mother's Name</th>
		<th>DOB</th>
		<th>Gender</th>
		<th>Contact</th>
		<th>Address.</th>
		<th>City</th>
		<th>PinCode</th>
		<th>Religion</th>
		<th>Caste</th>
		<th>Nationality</th>
		<th>Age</th>
		</tr>";
		while($row = mysqli_fetch_array($out)) 
		{
			 echo "<tr>";
			 echo "<td>" . $row['id'] . "</td>";
			 echo "<td>" . $row['first_name'] . "</td>";
			 echo "<td>" . $row['middle_name'] . "</td>";
			 echo "<td>" . $row['last_name'] . "</td>";
			 echo "<td>" . $row['mother_name'] . "</td>";
			 echo "<td>" . $row['dob'] . "</td>";
			 echo "<td>" . $row['gender'] . "</td>";			 
			 echo "<td>" . $row['contact'] . "</td>";
			 echo "<td>" . $row['address'] . "</td>";
			 echo "<td>" . $row['city'] . "</td>";
			 echo "<td>" . $row['pin'] . "</td>";
			 echo "<td>" . $row['religion'] . "</td>";
			 echo "<td>" . $row['caste'] . "</td>";
			 echo "<td>" . $row['nationality'] . "</td>";
			 echo "<td>" . $row['age'] . "</td>";
			 echo "</tr>";
		}
		echo "</table>";
		mysqli_close($con);
	?>
	<br><br><input type="button" name="Submit" value="Exit" onClick="window.location.href='login.php'">
	</body>
</html>