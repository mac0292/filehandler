<?php

$servername = "103.228.113.81:3306";
$username = "tantrabyte1";
$password = "tantrabyte#123#";
$dbname = "tantrabyte";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id1=$_GET['Name1'];
$id2=$_GET['Name2'];
//$id3=$_GET['Name3'];

		  
	
		  
          $sql = "SELECT * FROM `login`WHERE name = '$id1' and password = '$id2'";
			try {
 			 $result = mysqli_query($conn,$sql);
			}

		//catch exception
			catch(Exception $e) {
 		 echo 'Message: ' .$e->getMessage();
			}


if(!mysqli_num_rows($result)>0)
{
	// echo "you are not registered.";
	header('Location: https://tantrabyte.org/abhishek/register.html');
	//$Status = "first register";
	//print(json_encode(['response'=>$Status]));
	
}

else
{
	header('Location: https://tantrabyte.org/abhishek/pic2.php');
	//$Status = "ok";
	//print(json_encode(['response'=>$Status]));
	
	

	
}





$conn->close();

?> 