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
<FORM METHOD="Find" action="chief_find.php">
<INPUT type="submit" value="Search by ID"> 
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
<form id="findForm" name="findForm" action="chief_find.php" method="post">
<?php /*
------------------Find User form Approval table by ID---------------- 

$userID = $_POST['userID'];
$userID = mysql_real_escape_string($userID);
$query = "SELECT *
    FROM requesttable
    where userID = '$userID'";
    
$result = mysql_query($query);
if(mysql_num_rows($result) == 0) 
{
    header('Location: chief_find.html');
    exit();
}
$row = mysql_fetch_array($result);
*/
?>


</div>

<div id="content1" style="background-color:#C2FFAD;height:400px;width:30px;float:left;">
</div>

<div id="footer" style="background-color:#53CF29;clear:both;text-align:center;">
Gate control system</div>

</div>

</body>
</html>
