<?php

session_start();
$server="localhost";
$username="root";
$password="";
$dbname="project";
$con=mysqli_connect($server,$username,$password,$dbname);

$date=$_POST['date'];
$time=$_POST['time'];
$type=$_POST['type'];
$userid=$_SESSION["userid"];
$select="select * from vaccine_registration where u_id='$userid'";
		
		$result=mysqli_query($con,$select);
		$count=mysqli_num_rows($result);
		
	if($count==0)
	{
		$dosage='1st dose';

	}

	else
	{
	
       $dosage='2nd dose';
	}


    
    $userid=$_SESSION["userid"];
   
   $insert="insert into vaccine_registration (u_id,v_date,v_time,v_type,v_dosage) values 
   ('$userid','$date','$time','$type','$dosage')";

$result=mysqli_query($con,$insert);
 header('Location: main.php');
 exit;






?>