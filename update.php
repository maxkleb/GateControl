<?php
$userID = $_POST['userID'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$task = $_POST['task'];
$carNumber = $_POST['carNumber'];
$model = $_POST['model'];
$phoneNumber = $_POST['phoneNumber'];


$conn = mysql_connect('localhost', 'root', '');
mysql_select_db('matala_3', $conn);

$userID = mysql_real_escape_string($userID);
$query ="SELECT userID FROM approvedtable
WHERE userID = '$userID';";
$result = mysql_query($query);

echo "<tr>";
  echo "<td>" . $userID . "</td>";

  echo "</tr>";

if(mysql_num_rows($result) != 0) 
{
$query = "UPDATE approvedtable
SET firstName='$firstName',lastName='$lastName',task='$task',carNumber='$carNumber',model='$model',phoneNumber='$phoneNumber'
WHERE userID='$userID';";

mysql_query($query);

mysql_close();

header('Location: secretary_ok.html');
exit();
}
mysql_close();
header('Location: secretary_update.html');
?>

