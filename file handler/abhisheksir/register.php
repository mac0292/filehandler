 <?php  
$servername = "103.228.113.81:3306";
$username = "tantrabyte1";
$password = "tantrabyte#123#";
$dbname = "tantrabyte";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$name=$_GET['Name1'];
$pass=$_GET['Name2'];
$sql = "INSERT INTO `login` (`id`, `name`, `password`) VALUES (NULL, '$name', '$pass');";
$result = $conn->query($sql);

$conn->close();
header('Location: https://tantrabyte.org/abhishek/temp1.html');
?> 