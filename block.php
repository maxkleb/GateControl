<?php
ob_start();
session_start();

if(isset( $_GET['block'])){
	$requestID = $_GET['block'];
}

//MySQL Database Connect
$conn = mysql_connect('localhost', 'root', '');
mysql_select_db('matala_3', $conn);

$query = "SELECT * from requesttable 
	where requestID = '$requestID';";
	
$result = mysql_query($query);
$row = mysql_fetch_array($result);
$userID = $row['userID'];
$firstName = $row['firstName'];
$lastName = $row['lastName'];

$query1 = "INSERT INTO blacklist ( userID, firstName,lastName )
VALUES ( '$userID', '$firstName','$lastName');";
mysql_query($query1);

$query2 = "UPDATE requesttable
SET status='Blocked', approvedby='Chief Officer'
WHERE requestid='$requestID';";

mysql_query($query2);
mysql_close();;

echo "<h2>User has been blocked.</h2>";
header('Location: chief.php');
?>
