<html>
<head>
	<title>Welcome Admin</title>
</head>
<body align="center">
<br><br><br><br><br><br><br><br><br><br><br>
<?php
$myusername=$_POST['username']; 
$mypassword=$_POST['password']; 

if($myusername=="Admin" and $mypassword=="Mescoe")
{
	header('Location: admin.html');
}
else
{
	header("Location: login.php?value=1");
}
?>
</body>
</html>