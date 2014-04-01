
<?php
ob_start();
session_start();

$ID = $_POST['userID'];

if(strlen($ID) > 9){
    header('Location: gate.html');
	exit();
}
//MySQL Database Connect
$conn = mysql_connect('localhost', 'root', '');
mysql_select_db('matala_3', $conn);

$ID = mysql_real_escape_string($ID);
$query = "SELECT firstname , lastname
    FROM approvedtable
    WHERE 	userID = '$ID';";

$result = mysql_query($query);

	echo '
<!DOCTYPE html>
<html>
<body>

<div id="container" style="width:1000px;border:3px solid black;">

<div id="header" style="background-color:#53CF29;height:60px;width:920px;float:left;"><center>
<h1 style="margin-bottom:0;">Gate Gard</h1>
</center>
</div>

<div id="logout" style="background-color:#53CF29;height:60px;width:80px;float:left;"><FORM METHOD="logout" action="login.html">
<INPUT type="submit" value="LOG OUT">
</FORM></div>

<div id="menu" style="background-color:#C2FFAD;height:400px;width:200px;float:left;">
<b><center>options :</center></b>

<br>
<FORM METHOD="request" action="gate.html">
<INPUT type="submit" value="Accsess to personal detalis">
</FORM>
<br>
</FORM>
</div>

<div id="content" style="background-color:#EEEEEE;height:394px;width:764px;float:left;border:3px solid black;">
<form id="findForm" name="findForm" action="gate.php" method="post">
<table width="300" align="center">
<tr>
<td colspan="10" align="center"><h3>';

 if (mysql_num_rows($result) == 0) {
        Print "NO ACCESS";
} 
else
{
$row = mysql_fetch_array( $result ); 
Print "<b>Name:</b> ".$row['firstname'] . "   "; 
Print "<b></b> ".$row['lastname'] . " <br>";
echo '<tr>
<td colspan="10" align="center"><h3>ALLOW ACCESS</h3></td>
</tr>';
}
echo '</h3></td>
</tr>
</table>
</form></div>

<div id="content1" style="background-color:#C2FFAD;height:400px;width:30px;float:left;">
</div>

<div id="footer" style="background-color:#53CF29;clear:both;text-align:center;">
Gate control system</div>

</div>
 
</body>
</html>
';
	


  mysql_close() ;
?>

