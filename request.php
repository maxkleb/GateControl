

<?php

$userID = $_POST['userID'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$task = $_POST['task'];
$carNumber = $_POST['carNumber'];
$model = $_POST['model'];
$phoneNumber = $_POST['phoneNumber'];

//----------check insert-----------
//if(strlen($firstName) > 30 || )
//    header('Location: request.html');



//Insert the value into "member" table.


//MySQL Database Connect
$conn = mysql_connect('localhost', 'root', '');
mysql_select_db('matala_3', $conn);

$result = mysql_query("SELECT * FROM requesttable", $conn);
$num_rows = mysql_num_rows($result); 

/*
* sanitize username
The important code here is the "mysql_real_escape_string".
This will escape all character use for sql injection. So, only valid character will be used.
*/

$userID = mysql_real_escape_string($userID);
$status = "wait";


$query = "INSERT INTO requesttable (requestID, userID,firstName,lastName,task,carNumber,model,phoneNumber,status )
VALUES ('$num_rows','$userID','$firstName','$lastName','$task','$carNumber','$model','$phoneNumber','$status' );";
mysql_query($query);

mysql_close();

header('Location: secretary_ok.html');
?>
