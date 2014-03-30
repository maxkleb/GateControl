<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
<INPUT type="submit" value="Search by request ID"> 
</FORM>

<br>
<FORM METHOD="request" action="secretary_request.html">
<INPUT type="submit" value="Submition request">
</FORM>

<br>
<FORM METHOD="request" action="login.html">
<INPUT type="submit" value="Updating personal detalis">
</FORM>

<br>
<FORM METHOD="request" action="login.html">
<INPUT type="submit" value="Accsess to personal detalis">
</FORM>
<br>
<FORM METHOD="request" action="secretary_request.html">
<INPUT type="submit" value="Submition request">
</FORM>
</div>

<div id="content" style="background-color:#EEEEEE;height:394px;width:764px;float:left;border:3px solid black;">

 <table border="1">
  <thead>
   <tr>
   <th>requestID</th>
   <th>ID</th>
   <th>First Name</th>
   <th>Last Name</th>
   <th>Task</th>
   <th>Car Number</th>
   <th>Model</th>
   <th>Date</th>
   <th>Phone</th>
   <th>Approve/Reject</th>
   </tr>
   

<?php
ob_start();
session_start();

//MySQL Database Connect
$conn = mysql_connect('localhost', 'root', '');
mysql_select_db('matala_3', $conn);

$status = "wait";
$status = mysql_real_escape_string($status);
$query = "SELECT *
    FROM requesttable
    where status = '$status'";
    
$result = mysql_query($query);
 while($row = mysql_fetch_array($result)) {
            ?>
             
                <tr>
                <td><?php echo $row['requestID']?></td>
                <td><?php echo $row['userID']?></td>
                <td><?php echo $row['firstName']?></td>
                <td><?php echo $row['lastName']?></td>
                <td><?php echo $row['task']?></td>
                <td><?php echo $row['carNumber']?></td>
                <td><?php echo $row['model']?></td>
                <td><?php echo $row['date']?></td>
                <td><?php echo $row['phoneNumber']?></td>
            <td> <?php echo"  <a href = 'approve.php?approve=$row[requestID]'>Approve</a> <a href = 'reject.php?reject=$row[requestID]'>Reject </a>" ?></td>
                </tr><br>
<?php
 }
mysql_close();
?>
</thead>
   <tbody>
   </table>

</div>

<div id="content1" style="background-color:#C2FFAD;height:400px;width:30px;float:left;">
</div>

<div id="footer" style="background-color:#53CF29;clear:both;text-align:center;">
Gate control system</div>

</div>
 
</body>
</html>
