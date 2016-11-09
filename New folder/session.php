<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = @mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("company", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select username from login where username='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}


//Get result set 
$sql="SELECT * FROM $login WHERE username=$username and password=$password";
$result=mysql_query($sql);

$r = mysql_fetch_array($result);
$_SESSION['role'] = $r['role'];  //set role to session - This will be needed to restricted pages pertaining to role.


if($r['role'] == 'admin')
{
  $link .= "?role=admin";
}
else if($r['role'] == 'korisnik')
{
  $link .= "?role=mod";
}
header("Location: ".$link."");
?>