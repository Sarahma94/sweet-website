<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "","sweet website");
// Selecting Database

session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['email'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($connection,"SELECT email FROM user WHERE email='".$user_check."' " );
$row = mysqlI_fetch_assoc($ses_sql);
$login_session =$row['email'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>
