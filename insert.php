<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "db";

// Create connection
//($_POST);
//i shall need to insert name, device id, reciever id, ammount, time, location.. 
									// $servername = "localhost";
									// $username = "laughim_drcreep";
									// $password = "creep165";
									// $dbname = "laughim_123";



// $name=$_GET['name'];
$did=$_GET['did'];
$rid=$_GET['rid'];
$prc=$_GET['prc'];


///insert.php?name=sarabpreet&did=45&rid=125&prc=150 

$conn = mysqli_connect($servername, $username, $password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// $sql = "INSERT INTO db(name, did,rid,amt,time
// VALUES ('$name', '$did','$rid',$prc,now()";
$sql = "INSERT INTO `db`(`id`, `did`, `rid`, `amt`, `time`) VALUES (NULL,'$did','$rid','$prc', NOW());";
if (mysqli_query($conn, $sql)) {
    

		$update='update table signup set amt=amt-$prc where id=$did';
		$update2='update table signup set amt=amt+$prc where id=$rid';
		mysqli_query($update, $sql);
		mysqli_query($update2,$sql);


} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);


?> 

<!-- <form action="insert.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form> -->

