
<!DOCTYPE html>
<html>
<body>

<div id="container" style="width:1000px;border:3px solid black;">

<div id="header" style="background-color:#53CF29;height:60px;width:920px;float:left;"><center>
<h1 style="margin-bottom:0;">System Admin</h1>
</center>
</div>

<div id="logout" style="background-color:#53CF29;height:60px;width:80px;float:left;"><FORM METHOD="logout" action="login.html">
<INPUT type="submit" value="LOG OUT">
</FORM></div>

<div id="menu" style="background-color:#C2FFAD;height:400px;width:200px;float:left;">
<b><center>options :</center></b>
<br>
<FORM METHOD="Register new user" action="admin_register.html">
<INPUT type="submit" value="Register new Users"> 
</FORM>

<br>
<FORM METHOD="remove" action="admin_remove.html">
<INPUT type="submit" value="Remove a user">
</FORM>

<br>
<FORM METHOD="statistics" action="login.html">
<INPUT type="submit" value="statistics">
</FORM>

</div>

<div id="content" style="background-color:#EEEEEE;height:394px;width:764px;float:left;border:3px solid black;">

<?php

$username = $_POST['username'];

//MySQL Database Connect
$conn = mysql_connect('localhost', 'root', '');
mysql_select_db('matala_3', $conn);

/*
* sanitize username
The important code here is the "mysql_real_escape_string".
This will escape all character use for sql injection. So, only valid character will be used.
*/

$username = mysql_real_escape_string($username);

$query = "SELECT * FROM users
WHERE username = '$username';";
$result = mysql_query($query);
if( mysql_num_rows($result) == 0 )
	{
	Print "THERE IS NO SUCH USER!!!";
	}
else{
$query2 = "DELETE FROM users
WHERE username='$username';";
mysql_query($query2);
Print "User was successfully removed!";
}
mysql_close();

?>

</div>

<div id="content1" style="background-color:#C2FFAD;height:400px;width:30px;float:left;">
</div>

<div id="footer" style="background-color:#53CF29;clear:both;text-align:center;">
Gate control system</div>

</div>
 
</body>
</html>
