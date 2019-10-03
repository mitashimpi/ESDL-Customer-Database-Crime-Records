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
		<title>Criminal Record</title>
		<link rel="stylesheet" type="text/css" href="style2.css">
	</head>
	<body background="images.jpg" align="center">
		<BR><font size=16 color="white">CRIME RECORD.</font><BR><BR><BR>
		<font size=5 color="white">	
		<?php 
			require "function.php";
			$con=mysqli_connect("localhost","root","","pers_infor");
		// Check connection
		if (mysqli_connect_errno()) {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		$output = mysqli_query($con,"SELECT * FROM c_info where first_name='$first'and middle_name='$middle' and last_name='$last' and dob='$dob'");
		echo "<table border='1' align='center'>
		<tr>
		<th>First Name</th>
		<th>Middle Name</th>
		<th>Last Name</th>
		<th>D.O.B.</th>
		<th>Gender</th>
		<th>Crime</th>
		<th>FIR Number</th>
		<th>Officer Name</th>
		<th>Address of Police Station</th>
		<th>Case Result</th>
		<th>Punishment</th>
		</tr>";

		while($row = mysqli_fetch_array($output)) 
		{
			 echo "<tr>";
			 echo "<td>" . $row['first_name'] . "</td>";
			 echo "<td>" . $row['middle_name'] . "</td>";
			 echo "<td>" . $row['last_name'] . "</td>";
			 echo "<td>" . $row['dob'] . "</td>";
			 echo "<td>" . $row['gender'] . "</td>";
			 echo "<td>" . $row['crime'] . "</td>";
			 echo "<td>" . $row['fir_no'] . "</td>";
			 echo "<td>" . $row['officer_name'] . "</td>";
			 echo "<td>" . $row['address_of_ps'] . "</td>";
			 echo "<td>" . $row['case_result'] . "</td>";
			 echo "<td>" . $row['punishment'] . "</td>";
			 echo "</tr>";
		}
		echo "</table>";
		mysqli_close($con);
	?>
</font>
<input type="button" name="database" value="Back" onClick="window.location.href='admin.html'">

	</body>
</html>