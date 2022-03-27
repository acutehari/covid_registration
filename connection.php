
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

$phone_number = $_POST['phone_number'];
if($password!=$confirm_password)
{
	echo("Ooops!!! ...Please enter the same password");

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
	$insert="insert into project(u_firstname,u_lastname,u_sex,u_email,u_age,u_password) values 
   ('$first_name','$last_name','$male_or_female','$email','$age','$password')";
   $value=mysqli_query($con,$insert);
   $result="select * from project where u_email='$email'";
   echo($result);
   $val=mysqli_query($con,$result);
   $resu=mysqli_fetch_assoc($val);
   $u_id = $resu['u_id'];
   $insert="insert into address(u_id,address) values  ('$u_id','$address')";
   $value=mysqli_query($con,$insert);
   $insert="insert into concat_info values  ('$u_id','$phone_number')";
   $value=mysqli_query($con,$insert);

   

    header('Location: index.html');
 exit;

}
}
?>
<br><br>

<html>
<body>
	<a href="login.html"><b>click here<b> to enter your correct password</a> 