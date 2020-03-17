<?php 
//$filename = '/path/to/foo.txt';

//$filename = '/abhi/dwnld/mac.txt';


$filename = 'C:\xampp\htdocs\abhi\dwnld\mac.txt';

$name='mac.txt';



if (file_exists($filename)) {
    echo "The file $name exists";
} else {
	
	
	
	//popupcode
		//echo "The file $filename does not exist";
		//echo '<script type="text/javascript">
		//window.open("http://google.com");
		//</script>';

	//popupcode
	
	//header('Location: http://www.google.com');

	//header("location:ur https://www.google.com/");
	sleep(5);
	header("Location: http://localhost/abhi/wheel2.php");
}
?>
