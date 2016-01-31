<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "db";

	
									// $servername = "localhost";
									// $username = "laughim_drcreep";
									// $password = "creep165";
									// $dbname = "laughim_123";


// Create connection
//($_POST);
//i shall need to insert name, device id, reciever id, ammount, time, location.. 



$uid=$_GET['uid'];
$did=$_GET['did'];
$name=$_GET['name'];



///insert.php?name=sarabpreet&did=45&rid=125&prc=150 

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// $sql = "INSERT INTO db(name, did,rid,amt,time
// VALUES ('$name', '$did','$rid',$prc,now()";
$sql = "INSERT INTO `signup`(`id`, `uid`, `did`, 'name,') VALUES (NULL, '$uid', '$did', '$name');";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
//echo $_GET['name'];
?> 


