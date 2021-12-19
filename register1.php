<?php


$server="localhost";
$username="root";
$password="";
$dbname="project";
$con=mysqli_connect($server,$username,$password,$dbname);

$date=$_POST['date'];
$time=$_POST['time'];
$type=$_POST['type'];
$dosage=$_POST['dosage'];
   session_start();
    
    $userid=$_SESSION["userid"];
   
   $insert="insert into vaccine_registration (u_id,v_date,v_time,v_type,v_dosage) values 
   ('$userid','$date','$time','$type','$dosage')";

$result=mysqli_query($con,$insert);
 header('Location: main.php');
 exit;






?>