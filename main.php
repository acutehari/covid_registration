
<!DOCTYPE html>
<html>
<head>
	<title>main page</title>
</head>
<body>
	hi  
   <?php
   session_start();
     echo $_SESSION["username"];
     ?>
     <br><br>
     <?php

      
        $server="localhost";
		$username="root";
		$password="";
		$dbname="project";
		$userid=$_SESSION["userid"];
		$con=mysqli_connect($server,$username,$password,$dbname);
		$select="select * from vaccine_registration where u_id='$userid'";
		
		$result=mysqli_query($con,$select);
		$count=mysqli_num_rows($result);
		if($count<2)
		{

			echo "<a href='register.php'>Click here to register for dose</a>";
			echo "<br>";

		}

        

   
     ?>

</body>
</html>


<?php
$server="localhost";
$username="root";
$password="";
$dbname="project";

$con=mysqli_connect($server,$username,$password,$dbname);
   
$userId = $_SESSION['userid'];
$query= "select * from vaccine_registration where u_id = '$userId' ";
$resul=mysqli_query($con,$query);
$count=mysqli_num_rows($resul);
// $resu=mysqli_fetch_assoc($resul);




 if($count!=0)
 {
 	echo " <tr>
 	<th>User ID</th>
 	<th>v_date</th>
 	<th>v_time</th>
 	<th>v_type</th>
 	<th>v_dosage</th>
  </tr> <br>
";
 	while($resu=mysqli_fetch_assoc($resul))
 	{
 		echo"
         <tr>
         <td>".$resu['u_id']."</td>
         <td>".$resu['v_date']."</td>
         <td>".$resu['v_time']."</td>
         <td>".$resu['v_type']."</td>
         <td>".$resu['v_dosage']."</td>
         </tr><br>
         ";

 	}

 }


?>
<br><br>
<a href="index.html">logout</a>