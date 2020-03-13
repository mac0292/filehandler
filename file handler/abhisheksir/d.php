<!DOCTYPE html>
<html>
<title>Reverse String</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	
	
	a:link, a:visited {
  background-color: #b7918e;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  float:right;
}	
	
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
 
  <a href="https://tantrabyte.org/abhishek/temp1.html" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
 
 
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
    <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
<!-- Header/Home -->
 
	
<?php

// conn string
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

//$name=$_POST['Name1'];
 $name ="demo" ; 

echo"<tr><td></td></tr><br></br>"	;
echo "<tr><td><h2>your previous file</h2></td></tr>";	
	
$sql1 = "SELECT * FROM `abhisir` WHERE `name` = '$name' ORDER BY id DESC";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
// output data of each row
while($row = $result1->fetch_assoc()) {
	
echo "<tr><td></td></tr><br></br>";	
echo "&nbsp&nbsp&nbsp<tr><td>" . $row["inpfile"].  "</td></tr>";
//echo "<tr><td>" . $row["opfile"].  "</td></tr><br></br>";

$initial = '<tr><td><a href="https://tantrabyte.org/abhishek/abhidwnld/' ;
$mid = $row["opfile"].'"' ;
//echo $mid.":-";
$final = " download>Download</a></td></tr>  " ;

// Concatenation Of String 
$url =  $initial.$mid.$final;
  
// print Concatenate String 
echo " $url \n"; 

}


$conn->close();
	
}



?>

</body>
</html>