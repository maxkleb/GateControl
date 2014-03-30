<?php
/*ob_start - This function will turn output buffering on.
 While output buffering is active no output is sent from the script (other than headers),
 instead the output is stored in an internal buffer.*/
ob_start();
/*session_start - Register the user's session with the PHP server.
This allow you to save store information per session and assign a UID (unique identification number) for that user's session.*/
session_start(); // start up your PHP session!
//retrieve our data from POST (login.html)
$username = $_POST['username'];
$password = $_POST['password'];



//MySQL Database Connect
$conn = mysql_connect('localhost', 'root', '');
mysql_select_db('matala_3', $conn);

/*
sanitize username
The important code here is the "mysql_real_escape_string".
This will escape all character use for sql injection. So, only valid character will be used.
*/

$username = mysql_real_escape_string($username);
$query = "SELECT username, password, type, salt
    FROM users
    WHERE username = '$username';";

$result = mysql_query($query);


if (mysql_num_rows($result) == 0) // User not found. So, redirect to login_form again.
{
    header('Location: login.html');
}

$userData = mysql_fetch_array($result, MYSQL_ASSOC);
/*
Secure password using salt. This is called password hashing using salt.
You can find more info about this at http://php.net/manual/en/faq.passwords.php
*/
$hash = hash('sha256', $userData['salt'] . hash('sha256', $password));

if ($hash != $userData['password']) // Incorrect password. So, redirect to login_form again.
{
    header('Location: login.html');
} else { // Redirect to home page after successful login.
    //generate a new UID for the home page
    session_regenerate_id();
    // store the needed session data for the home page session
    $_SESSION['sess_username'] = $userData['username'];
    $_SESSION['sess_type'] = $userData['type'];
    //$_SESSION['sess_request'] = $userData['requestTable'];
    //$_SESSION['sess_approval'] = $userData['approvalTable'];
    //$_SESSION['sess_black'] = $userData['blackList'];
    //End the current session and store session data.
    session_write_close();
    // header() is used to send a raw HTTP header to open execute home.php
    header('Location: home.php');
}
?>