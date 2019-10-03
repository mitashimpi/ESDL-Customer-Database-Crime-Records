<?php 

	function validate_info($first,$middle,$last,$mother,$dob,$city,$gender,$contact,$address,$pin,$religion,$nationality)
	{
		$temp = '([a-zA-Z])';
		if (!preg_match($temp, $first)) {
			$alert = "<center>Invalid First Name</center>";
			echo "$alert";
			return false;
			exit(0);	
		}			

		if (!preg_match($temp, $middle)) {
			$alert = "<center>Invalid Middle Name</center>";
			echo "$alert";
			return false;
			exit(0);	
		}			

		if (!preg_match($temp, $last)) {
			$alert = "<center>Invalid Last Name</center>";
			echo "$alert";
			return false;
			exit(0);	
		}

		if (!preg_match($temp, $mother)) {
			$alert = "<center>Invalid Mother's Name</center>";
			echo "$alert";
			return false;
			exit(0);	
		}

		if (!preg_match($temp, $city)) {
			$alert = "<center>Invalid City Name</center>";
			echo "$alert";
			return false;
			exit(0);	
		}

		if (!preg_match($temp, $religion)) {
			$alert = "<center>Invalid Religion</center>";
			echo "$alert";
			return false;
			exit(0);	
		}

		if (!preg_match($temp, $nationality)) {
			$alert = "<center>Invalid Nationality</center>";
			echo "$alert";
			return false;
			exit(0);	
		}

		$temp = '([0-9])';
		
		if ( (!preg_match($temp, $contact)) or (strlen($contact)!=10) )  {
			$alert = "<center>Invalid Contact Number</center>";
			echo "$alert";
			return false;
			exit(0);	
		}

		if ( (!preg_match($temp, $pin)) or (strlen($pin)!=6) )  {
			$alert = "<center>Invalid PIN</center>";
			echo "$alert";
			return false;
			exit(0);	
		}

		return true;
	}

	function connect_to_db()
	{
		session_start();
		$conn = mysql_connect('localhost','root','');

		if($conn!=true)
		{
			die('Cannot Connect to Database');
		}

		$db = mysql_select_db('pers_infor');
		if($db!=true)
		{
			die('Cannot use the requested database');
		}
		
		if(isset($_POST['first']) && isset($_POST['middle']) && isset($_POST['last']) && isset($_POST['mother']) && isset($_POST['city']) && isset($_POST['gender']) && isset($_POST['contact']) && isset($_POST['address']) && isset($_POST['pin']) && isset($_POST['religion']) && isset($_POST['caste']) && isset($_POST['nationality']))
		{
			$first = $_POST['first'];
			$middle = $_POST['middle'];
			$last = $_POST['last'];
			$mother = $_POST['mother'];
			$dob = $_POST['dob'];
			$city = $_POST['city'];
			$gender = $_POST['gender'];
			$contact = $_POST['contact'];
			$address = $_POST['address'];
			$pin = $_POST['pin'];
			$religion = $_POST['religion'];
			$caste = $_POST['caste'];
			$nationality = $_POST['nationality'];

			$valid_bit = validate_info($first,$middle,$last,$mother,$dob,$city,$gender,$contact,$address,$pin,$religion,$nationality);

			if($valid_bit == true)
			{
				$inserted = mysql_query("INSERT INTO P_INFO(FIRST_NAME,MIDDLE_NAME,LAST_NAME,MOTHER_NAME, DOB,CITY,GENDER,CONTACT,ADDRESS,PIN,RELIGION,CASTE,NATIONALITY) VALUES('$first','$middle','$last','$mother','$dob','$city','$gender','$contact','$address','$pin','$religion','$caste','$nationality')");
				mysql_query("UPDATE P_INFO SET age=TIMESTAMPDIFF(YEAR,dob,CURDATE())");
				if($inserted!=true)
				{
					die('Could not add');
				}
				$result = mysql_query("SELECT first_name,middle_name,last_name,dob FROM C_INFO where first_name='$first' and middle_name='$middle' and last_name='$last' and dob='$dob'");
				while($row = mysql_fetch_object($result))
				{
					echo $row->first_name;
				}
			}
			else{
				die();
			}
		}
	}
	
	function check_in_c_info()
	{
		if(isset($_POST['first']) && isset($_POST['middle']) && isset($_POST['last']) && isset($_POST['dob']))
		{
			$first = $_POST['first'];
			$middle = $_POST['middle'];
			$last = $_POST['last'];
			$dob = $_POST['dob'];
			$counter = 0;
			Session_start();
			$_SESSION['first_name']=$_POST['first'];
			$_SESSION['middle_name']=$_POST['middle'];
			$_SESSION['last_name']=$_POST['last'];
			$_SESSION['dob']=$_POST['dob'];
			
			$result = mysql_query("SELECT first_name,middle_name,last_name,dob FROM C_INFO where first_name='$first' and middle_name='$middle' and 		last_name='$last' and dob='$dob'");
			while($row = mysql_fetch_object($result))
			{
				$fn = $row->first_name;
				$mn = $row->middle_name;
				$ln = $row->last_name;
				$birth = $row->dob;
				$counter++;
			}

			if ($counter==1) 
			{
				return 1;
			}
			elseif ($counter > 1) 
			{
				die('Multiple Conflicting Records Found');	
			}
			
			return 2;
		}
	}


function update_contact($id,$c){
	$conn = mysql_connect('localhost','root','');

		if($conn!=true)
		{
			die('Cannot Connect to Database');
		}

		$db = mysql_select_db('pers_infor');
		if($db!=true)
		{
			die('Cannot use the requested database');
		}
	$result=mysql_query("UPDATE p_info set contact='$c' where id='$id'");
	if($result){
		echo "Successfully Updated Contact!<br>";
		}
		else{
			echo "COULD NOT UPDATE CONTACT. <br>";
		}
}


function update_address($id,$a){
	$conn = mysql_connect('localhost','root','');

		if($conn!=true)
		{
			die('Cannot Connect to Database');
		}

		$db = mysql_select_db('pers_infor');
		if($db!=true)
		{
			die('Cannot use the requested database');
		}
	$result=mysql_query("UPDATE p_info set address='$a' where id='$id'");
	if($result){
		echo "Successfully Updated address!<br>";
		}
		else{
			echo "COULD NOT UPDATE address. <br>";
		}
}

function update_religion($id,$r){
	$conn = mysql_connect('localhost','root','');

		if($conn!=true)
		{
			die('Cannot Connect to Database');
		}

		$db = mysql_select_db('pers_infor');
		if($db!=true)
		{
			die('Cannot use the requested database');
		}
	$result=mysql_query("UPDATE p_info set religion='$r' where id='$id'");
	if($result){
		echo "Successfully Updated RELIGION!<br>";
		}
		else{
			echo "COULD NOT UPDATE RELIGION. <br>";
		}
}

 ?>


