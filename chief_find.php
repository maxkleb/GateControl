<!DOCTYPE html>
<html>
<body>

<div id="container" style="width:1000px;border:3px solid black;">

<div id="header" style="background-color:#53CF29;height:60px;width:920px;float:left;"><center>
<h1 style="margin-bottom:0;">Chief Security Officer</h1>
</center>
</div>

<div id="logout" style="background-color:#53CF29;height:60px;width:80px;float:left;"><FORM METHOD="logout" action="login.html">
<INPUT type="submit" value="LOG OUT">
</FORM></div>

<div id="menu" style="background-color:#C2FFAD;height:400px;width:200px;float:left;">
<b><center>options :</center></b>
<br>
<FORM METHOD="seeRequest" action="chief.php">
<INPUT type="submit" value="New Requests"> 
</FORM>

<br>
<FORM METHOD="Find" action="chief_find.html">
<INPUT type="submit" value="Search by ID"> 
</FORM>



</div>

<div id="content" style="background-color:#EEEEEE;height:394px;width:764px;float:left;border:3px solid black;">
<form id="findForm" name="findForm" action="chief_find.php" method="post">
<?php 

$userID = $_POST['userID'];

//MySQL Database Connect
$conn = mysql_connect('localhost', 'root', '');
mysql_select_db('matala_3', $conn);

//$userID = mysql_real_escape_string($userID);
$query = "SELECT *
    FROM approvedtable
    where userID='$userID';";
    
$result = mysql_query($query);

if(mysql_num_rows($result) == 0) 
{
    header('Location: chief_find.html');
    exit();
}
$row = mysql_fetch_array($result);
echo "<h3>Personal information:</h3>";
Print "<b>User ID:</b> ".$row['userID'] . " <br>"; 
Print "<b>First name:</b> ".$row['firstName'] . " <br>";
Print "<b>Last Name:</b> ".$row['lastName'] . " <br>"; 
Print "<b>Car number:</b> ".$row['carNumber'] . " <br>";
Print "<b>Model:</b> ".$row['model'] . " <br>"; 
Print "<b>Phone number:</b> ".$row['phoneNumber'] . " <br>";
echo"  <a href = 'chief_find_remove.php?remove=$row[userID]'>Remove from Approval List</a><br> <a href = 'chief_find_block.php?block=$row[userID]'>Remove and add to Black List </a>";
  mysql_close() ;
?>


</div>

<div id="content1" style="background-color:#C2FFAD;height:400px;width:30px;float:left;">
</div>

<div id="footer" style="background-color:#53CF29;clear:both;text-align:center;">
Gate control system</div>

</div>

</body>
</html>
