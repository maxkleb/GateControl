

<?php

$userID = $_POST['userID'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$carNumber = $_POST['carNumber'];
$model = $_POST['model'];
$approvedBy = $_POST['ApprovedBy'];
$reason = $_POST['reason'];

//----------check insert-----------
//if(strlen($firstName) > 30 || )
//    header('Location: request.html');



//Insert the value into "member" table.


//MySQL Database Connect
$conn = mysql_connect('localhost', 'root', '');
mysql_select_db('matala_3', $conn);



/*
* sanitize username
The important code here is the "mysql_real_escape_string".
This will escape all character use for sql injection. So, only valid character will be used.
*/

$userID = mysql_real_escape_string($userID);
$status = "wait";


$query = "INSERT INTO journal (userID,firstName,lastName,carNumber,model,approvedBy )
VALUES ('$userID','$firstName','$lastName','$carNumber','$model','$approvedBy' );";
mysql_query($query);

mysql_close();

header('Location: gate.html');
?>
