
<html>
<head>
<title>Login</title>
<script language="JavaScript" type="text/JavaScript" src="login.js"></script>
</head>
    <body BACKGROUND='login.jpg' align='center'>
	<body bgcolor="white">

<form action="admin.php" method="post">
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<right>
	<table>
		<tr>
			<td>
<pre>                                                                                                  <font size="14" color="red"> Username: </font><b><font size="14"><input type="text" name="username" size="20" style="background:#ff0000;color:#212121;border-color:#212121;" onFocus="this.style.background = '#ffffff';" onBlur="this.style.background = '#bfbfbf' ;"required></b></font></pre>
<br></td></tr>
<tr><td>
<pre>                                                                                                  <font size="14" color="red"> Password: </font><b><font size="14"><input type="password" name="password" style="background:#ff0000;color:#212121;border-color:#212121;" onFocus="this.style.background = '#ffffff';" onBlur="this.style.background = '#bfbfbf';" required></b></font>
<br></td></tr>
<tr><td>
<p id='errMsg'></p></td></tr>
<tr><td>
<pre>                                                                                                	             <input type="submit" name="Submit" value="Login" class="search" />   <input type="button" name="Submit" value="Unregistered User." onClick="window.location.href='index.php'">
</td></tr>
</right>
</form>
</body>
<?php
	if(isset($_REQUEST['value']))
	{
			echo "<script > errMsg.innerHTML = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Invalid Username or Password.' </script>";
	}
?>
</html>
