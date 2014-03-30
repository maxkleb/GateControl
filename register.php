

<?php

$username = $_POST['username'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$type = $_POST['type'];

$t1 = "admin";
$t2 = "gate";
$t3 = "chief";
$t4 = "secretary";

if($type!=$t1 && $type!=$t2 && $type!=$t3 && $type!=$t4){
	header('Location: admin_register.html');
	exit();}
  
if($password1 != $password2){
    header('Location: admin_register.html');
    exit();
}

if(strlen($username) > 30){
    header('Location: admin_register.html');
    exit();
}

/*
Secure password using salt. This is called password hashing using salt.
You can find more info about this at http://php.net/manual/en/faq.passwords.php
*/

$hash = hash('sha256', $password1);

function createSalt()
{
    $text = md5(uniqid(rand(), true));
    return substr($text, 0, 3);
}

$salt = createSalt();
$password = hash('sha256', $salt . $hash);



//Insert the value into "member" table.


//MySQL Database Connect
$conn = mysql_connect('localhost', 'root', '');
mysql_select_db('matala_3', $conn);

/*
* sanitize username
The important code here is the "mysql_real_escape_string".
This will escape all character use for sql injection. So, only valid character will be used.
*/

$username = mysql_real_escape_string($username);

$query = "INSERT INTO users ( username, password,type , salt )
VALUES ( '$username', '$password','$type', '$salt' );";
mysql_query($query);

mysql_close();

header('Location: admin_ok.html');
?>