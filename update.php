<html>
<head>
	<title></title>
</head>

<script>

function uncheck(ch){
    document.getElementById(ch).checked = false;
}

 function showHide(chk, txt) {
    var ctrlchk = document.getElementById(chk);
    var ctrltxt = document.getElementById(txt);
    if (ctrlchk.checked) {
        ctrltxt.style.display = 'block';
    }
    else {
        ctrltxt.style.display = 'none';
    }
}

function hide(h) {
var div_ref = document.getElementById(h);
div_ref.style.visibility = "hidden";
}

function show(s) {
var div_ref = document.getElementById(s);
div_ref.style.visibility = "visible";
}


</script>

<body>
<h3>Updation.</h3><br>
<form name='form1' action='updation.php' method='post'>
Enter UID whose info is to be updated:<input type='text' name='uid'>
<input type='button' name='button' value='ok' onclick='show("id1")'><br>
<div id='id1' style='visibility:hidden;'>
				<input id='contact' type='checkbox' name='contact' onclick='showHide("contact", "update_contact")'>Change Contact No.
				<input id='update_contact' type='text' name='update_contact' value='Enter new contact' style='display:none' onclick='document.form1.update_contact.value=""'><br>
				<input id='address' type='checkbox' name='address' onclick='showHide("address", "update_address")'>Change Address
				<input id='update_address' type='text' name='update_address' value='Enter new address' style='display:none' onclick='document.form1.update_address.value=""'><br>
				<input id='religion' type='checkbox' name='religion' onclick='showHide("religion", "update_religion")'>Change Religion
				<input id='update_religion' type='text' name='update_religion' value='Enter religion' style='display:none' onclick='document.form1.update_religion.value=""'><br>
</div>

			<input type='submit' name='submit' value='Submit Query'>
			<input type='reset' name='reset' value='Reset' onclick='hide("id1");uncheck("contact");uncheck("address");uncheck("religion");showHide("contact", "update_contact"),showHide("address", "update_address"),showHide("religion", "update_religion")'>
</form>
</body>
</html>