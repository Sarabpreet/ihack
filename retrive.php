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
									$conn = new mysqli($servername, $username, $password, $dbname);
									// Check connection
									if ($conn->connect_error) {
									die("Connection failed: " . $conn->connect_error);
									}
								$sql = "SELECT * FROM signup";
								$result = mysqli_query($conn, $sql);
							
								if (mysqli_num_rows($result) > 0) {
								// output data of each row
								while($row = mysqli_fetch_assoc($result)) {
						
																	$emparray[] = $row;
															// echo $row['name'].$row['did'].$row['rid'].$row['amt'].$row['time'].$row['location'];
								}
								echo json_encode($emparray);
								
								} else {
								echo "0 results";
								}
							
								mysqli_close($conn);
?>