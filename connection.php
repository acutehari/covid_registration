


<?php


$server="localhost";
$username="root";
$password="";
$dbname="project";
$con=mysqli_connect($server,$username,$password,$dbname);



$first_name=$_POST['user_name'];
$last_name=$_POST['last_name'];
$address=$_POST['address'];
$male_or_female=$_POST['gender'];
$email=$_POST['email'];
$age=$_POST['age'];
$password=$_POST['password'];
$confirm_password=$_POST['confirm_password'];


if($password!=$confirm_password)
{
	echo("please enter the same password");
}
else
{
$result="select * from project where u_email='$email'";
$val=mysqli_query($con,$result);

$count=mysqli_num_rows($val);


if($count==1)
{
	echo('*****Email Already Exists*****');
	?><br><br>
	<a href="index.html" >Back To Registration Page</a><?php
}
else
{
	$insert="insert into project(u_firstname,u_lastname,u_address,u_sex,u_email,u_age,u_password) values 
   ('$first_name','$last_name','$address','$male_or_female','$email','$age','$password')";
   $value=mysqli_query($con,$insert);

    header('Location: login.html');
 exit;

}
}
?>
<br><br>

<html>
<body>
	<a href="index.html"><b>click here<b> to enter your correct password</a> 