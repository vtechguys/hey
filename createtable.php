<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mydb1";

$conn=new mysqli($servername,$username,$password,$dbname);
// if ($conn->connect_error {

// 	//die ("connection not established:". $conn->connect_error);
// 	 die("Connection failed: " . $conn->connect_error);
// }
$sql="CREATE TABLE aniketuser(
email VARCHAR(25) NOT NULL PRIMARY KEY,
password VARCHAR(20) NOT NULL)";
if ($conn->query($sql)) {
	echo "New tabel created succesfully!";
}
else
{
	echo "Error in creating table".$conn->error;
}
$conn->close();

?>
