<?php
	$con=mysqli_connect("localhost","root","","pers_infor");
	// Check connection
	if (mysqli_connect_errno()) {
	 	 echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

	$res = mysqli_query($con,"SELECT * FROM p_info");
	echo "<table border='1' align='center'>
	<tr>
	<th>ID</th>
	<th>First Name</th>
	<th>Middle Name</th>
	<th>Last Name</th>
	<th>Mother Name</th>
	<th>D.O.B.</th>
	<th>Gender</th>
	<th>Contact</th>
	<th>Address</th>
	<th>City</th>
	<th>Pin</th>
	<th>Religion</th>
	<th>Caste</th>
	<th>Nationality</th>
	<th>Age</th>
	</tr>";

	while($row = mysqli_fetch_array($res)) 
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

	echo "</table><br><br>";
	$output = mysqli_query($con,"SELECT * FROM c_info");
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
	<th>Year of offence</th>
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
		 echo "<td>" . $row['year_of_offence'] . "</td>";
		 echo "</tr>";
	}
	echo "</table>";
	mysqli_close($con);


?>
<html>
<body align="center">
	<br><br><input type="button" name="database" value="Back" onClick="window.location.href='admin.html'">
</body>
</html>