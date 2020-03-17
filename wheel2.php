<?php 
//$filename = '/path/to/foo.txt';

//$filename = '/abhi/dwnld/mac.txt';

$filename = 'C:\xampp\htdocs\abhi\dwnld\mac.txt';

$name='mac.txt';

if (file_exists($filename)) {
    echo "The file $name exists";
} else {
    echo "The file $filename does not exist";
	echo'<img src="gola.gif" alt="gol-gol">';
	sleep(5);
	//header("location:ur https://www.google.com/");
	header("Location: http://localhost/abhi/wheel.php");
	//header("Location: http://localhost/abhi/wheel.php");
}
?>
