<?php
ob_start();
session_start();

if(isset( $_GET['reject'])){
	$requestID = $_GET['reject'];
}

//MySQL Database Connect
$conn = mysql_connect('localhost', 'root', '');
mysql_select_db('matala_3', $conn);

$query = "UPDATE requesttable
SET status='Rejected', approvedby='Chief Officer'
WHERE requestid='$requestID';";

$result = mysql_query($query);
mysql_close();;

echo "<h2>User has been rejected.</h2>";
header('Location: chief.php');
?>
