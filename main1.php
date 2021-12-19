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
$dosage=$_POST['dosage'];

$select="select * from vaccine_registration";
$value=mysqli_query($con,$select);
echo($select);
// $count=mysqli_num_rows($value);
$co=mysqli_fetch_assoc($value);
$_SESSION["vaccine"] = $co['v_type'];
echo($_SESSION["vaccine"] );


// if($_SESSION["username"]!=$type)
// {
//   echo("please enter the same type of dose");
// }
  
//   else  
//     $userid=$_SESSION["userid"];
   
//    $insert="insert into vaccine_registration (u_id,v_date,v_time,v_type,v_dosage) values 
//    ('$userid','$date','$time','$type','$dosage')";

// $result=mysqli_query($con,$insert);
//  header('Location: main.php');
//  exit;






?>