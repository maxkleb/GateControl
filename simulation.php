
<!DOCTYPE html>
<html>
<body>

<div id="container" style="width:1000px;border:3px solid black;">

<div id="header" style="background-color:#53CF29;height:60px;width:920px;float:left;"><center>
<h1 style="margin-bottom:0;">Simulation System</h1>
</center>
</div>

<div id="logout" style="background-color:#53CF29;height:60px;width:80px;float:left;"><FORM METHOD="logout" action="login.html">
<INPUT type="submit" value="LOG OUT">
</FORM></div>

<div id="menu" style="background-color:#C2FFAD;height:400px;width:200px;float:left;">
<br>
<FORM METHOD="test" action="simulation.html">
<INPUT type="submit" value="Enter Car Number">
</FORM>
</div>

<div id="content" style="background-color:#EEEEEE;height:394px;width:764px;float:left;border:3px solid black;">

<?php

$carNumber = $_POST['carNumber'];

//MySQL Database Connect
$conn = mysql_connect('localhost', 'root', '');
mysql_select_db('matala_3', $conn);

/*
* sanitize username
The important code here is the "mysql_real_escape_string".
This will escape all character use for sql injection. So, only valid character will be used.
*/

$carNumber = mysql_real_escape_string($carNumber);

$query = "SELECT * FROM approvedtable
WHERE carNumber = '$carNumber';";
$result = mysql_query($query);
if( mysql_num_rows($result) == 0 )
	{
	Print "Stay Closed!";
	}
else{

$row = mysql_fetch_array($result);

$userID = $row['userID'];
Print "User ID - $userID<br>";
$firstName = $row['firstName'];
Print "First Name - $firstName<br>";
$lastName = $row['lastName'];
Print "Last Name - $lastName<br>";
$model = $row['model'];
Print "Model - $model<br>";
$approvedBy = "Chief";
Print "Approved By - $approvedBy<br>";

$query = "INSERT INTO journal ( userID,firstName,lastName,carNumber,model,approvedBy )
VALUES ( '$userID', '$firstName','$lastName','$carNumber','$model','$approvedBy' );";
mysql_query($query);
Print "OPEN!";
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
