



<?php

$server="localhost";
$username="root";
$password="";
$dbname="project";
$con=mysqli_connect($server,$username,$password,$dbname);

session_start();
$userid=$_SESSION["userid"];

$select="select * from vaccine_registration where u_id='$userid'";
$result=mysqli_query($con,$select);
$count=mysqli_num_rows($result);

if($count==0)
{
	
	echo("<b>enter the details for vaccine 1st dose</b>");
}

else
{
  
	echo("<b>enter the details for vaccine 2nd dose</b>");
}


?>



<!DOCTYPE html>
<html>
<head>
	<title>register page</title>
     <style type="text/css">

     body{
       background: url(img/back.jpg);
            background-repeat: no-repeat;
            background-size: 100%;
            background-height: 100%;
     }
  </style>
   }
</head>
<div class="form">
<body>
  
	<form action="register1.php" method="POST">
   enter date:<input type="date" name="date" required><br><br>
   enter time:<input type="time" name="time"  required><br><br>


   <?php
        $query="SELECT * FROM vaccine_type";
        $results = mysqli_query($con, $query);

        foreach ($results as $country){
         echo'<input type="radio" name = "type" value="'.$country["v_type"].'">'.           
         $country["v_type"];
         }
?>
   <!-- enter type:<input type="text" name="type" placeholder="covin/coshield" required><br><br> -->
  <!--  enter dosage:<input type="text" name="dosage" placeholder="type as 1st dose" required><br><br> -->
  <br><br>
   <input type="submit" >
   <!-- <a href="main.php">click here</a> -->
   </form>

</body>
</div>
</html>