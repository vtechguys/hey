<?php
$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="mydb1";
$conn=new mysqli($dbservername,$dbusername,$dbpassword,$dbname);
if ($conn->connect_error) {
	die("connection not established".$conn->connect_error);
}
else
echo "connection established";
$sql="DROP TABLE aniketuser";
if ($conn->query($sql)) {
	echo"table deleted successfully";
	# code...
}
?>S