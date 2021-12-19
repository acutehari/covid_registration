<?php

$server="localhost";
$username="root";
$password="";
$dbname="project";
$con=mysqli_connect($server,$username,$password,$dbname);

$useremail=$_POST['user_mail'];
$password=$_POST['Password'];

$value="select * from project where u_email='$useremail' AND u_password='$password'";
$val=mysqli_query($con,$value);

$count=mysqli_num_rows($val);

if($count==0)
{
	echo("invalid username and password");
}
else
{
	session_start();
	$co=mysqli_fetch_assoc($val);
    $_SESSION["userid"] = $co['u_id'];
   
	$_SESSION["username"] = $co['u_firstname'];

 header('Location: main.php');
  exit;
}



?>