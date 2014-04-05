<?php
ob_start();
session_start();

if(isset( $_GET['remove'])){
	$ID = $_GET['remove'];
}

//MySQL Database Connect
$conn = mysql_connect('localhost', 'root', '');
mysql_select_db('matala_3', $conn);


$query2 = "DELETE FROM approvedtable
WHERE userID='$ID';";

mysql_query($query2);
mysql_close();;

header('Location: chief_find.html');
?>
