<?php
//Start session
session_start();

if($_SESSION['sess_type'] == "admin"){
header("location: admin.html");
 exit();
}

if($_SESSION['sess_type'] == "gate"){
header("location: gate.html");
 exit();
}

if($_SESSION['sess_type'] == "chief"){
header("location: chief.php");
 exit();
}

if($_SESSION['sess_type'] == "secretary"){
header("location: secretary.html");
 exit();
}

//header("location: login.html");
 //   exit();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Home Page</title>
</head>

<body>
<h1>Welcome, <?php echo $_SESSION["sess_username"] ?></h1>

</body>
</html>