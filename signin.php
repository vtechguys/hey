 <?php
 $data=json_decode(file_get_contents("php://input"));
 $email=$data->email;
$password=$data->password;




 $servername="localhost";
$username="root";
$password="";
$dbNname="mydb1";
$conn=new mysqli($servername,$username,$password,$dbNname);
if ($conn->connect_error) 
	die("could not connect to database".$conn->connect_error);

	
	
				 $sql="INSERT INTO aniketuser(email,password) VALUES('mohansinghpanwala','sfjjdhjfhh')";
			    $conn->query($sql);              
				 
				