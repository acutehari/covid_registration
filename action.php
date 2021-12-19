<head>
	<title>display records</title>
</head>

<body>

 <!-- <table border=2>
 
 <tr>
 	<th>c_id</th>
 	<th>name</th>
 	<th>email</th>
 	<th>password</th> -->




</body>






<?php

$server="localhost";
$username="root";
$password="";
$dbname="college";

$conn=mysqli_connect($server,$username,$password,$dbname);

$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];
$con_pass=$_POST['confirm_password'];


$query= "select * from college ";
$result=mysqli_query($conn,$query);
 $count=mysqli_num_rows($result);
 // echo($count);
$res=mysqli_fetch_assoc($result);
 	while($res=mysqli_fetch_assoc($result))
 	{

      echo $res['c_id']." ".$res['name']." ".$res['password'];
      echo "<br>";
     } 
 

//  if($count!=0)
//  {
//  	while($res=mysqli_fetch_assoc($result))
//  	{
//  		echo"
//          <tr>
//          <td>".$res['c_id']."</td>
//          <td>".$res['name']."</td>
//          <td>".$res['email']."</td>
//          <td>".$res['password']."</td>
//          </tr>
//          ";

//  	}
//  }

// else
// {
// 	echo("table has no records");
// }

// if($pass!=$con_pass)
// {
// 	echo('fail');
// }
// else
  
// {
// $query= "select * from college where email='$email'";
//  $result=mysqli_query($conn,$query);
//  $count=mysqli_num_rows($result);
//   echo($count);
//   if($count==0)
//   {
//     $insert="insert into college (name,email,password) values ('$name','$email','$pass')";
//     $res=mysqli_query($conn,$insert);
//     echo($insert);
//   }
//   else
//   {
//   	echo('exists');
//   }

// }

//$query ="select * from college";
// $result = mysqli_query($conn,$query);
// $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
// $count = mysqli_num_rows($result);
// print($count);


// while($row = mysqli_fetch_array($result)) {
//     // echo $row['column_name']; // Print a single column data
//     echo ('hello');
//     echo ($row['c_name']);       // Print the entire row data
// }


// $result = mysqli_query($conn,$query);
// $count = mysqli_num_rows($result);
// echo('count = ');
// echo($count);

?>