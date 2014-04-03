<?php
ob_start();
session_start();

if(isset( $_GET['approve'])){
	$requestID = $_GET['approve'];
}

//MySQL Database Connect
$conn = mysql_connect('localhost', 'root', '');
mysql_select_db('matala_3', $conn);

$query = "UPDATE requesttable
SET status='Approved', approvedby='Chief Officer'
WHERE requestid='$requestID';";

mysql_query($query);

$query = "SELECT * FROM requesttable WHERE requestID = '$requestID';";
$result = mysql_query($query);

$row = mysql_fetch_array($result);
 	 
$RequestID = $row['requestID'];
$userID = $row['userID'];
$firstName = $row['firstName'];
$lastName = $row['lastName'];
$task = $row['task'];
$carNumber = $row['carNumber'];
$model = $row['model'];
$date = $row['date'];
$approvedBy = "Chief Officer";
$phoneNumber = $row['phoneNumber'];
$status = "Approved";


$query = "INSERT INTO approvedtable ( RequestID, userID,firstName , lastName,task,carNumber,model,date,approvedBy,phoneNumber,status)
VALUES (  '$RequestID', '$userID','$firstName' , '$lastName','$task','$carNumber','$model','$date','$approvedBy','$phoneNumber','$status');";
mysql_query($query);

mysql_close();;

echo "<h2>User has been approved.</h2>";
header('Location: chief.php');
?>
