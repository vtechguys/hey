<?php
$servername="localhost";
$username="root";
$password="";
$dbNname="mydb1";
$conn=new mysqli($servername,$username,$password,$dbNname);
if ($conn->connect_error) 
	die("could not connect to database".$conn->connect_error);
?>
<!DOCTYPE html>
<html>
<head>
	<style >
		.grn{color: green;}
		.error{color: red;}
	</style>
	<title></title>
</head>
<body>

   <?php
	$email=$password="";
	$emailError= $passwordError="";
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		if (empty($_POST["email"])) {
			$emailError="enter email";
			
		}
		else{
			$email=$_POST["email"];
			if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
				$emailError="Inavalid Email";
			}
		}
		if (empty($_POST["password"])) {
			$passwordError="Enter password!";
		}
		else{
			$password=$_POST["password"];
			if (strlen($password)<6) {
				$passwordError="password too short";
				
			}
		}

		if(($emailError&&$passwordError)=="" ){
			$sql="SELECT * FROM aniketuser WHERE email='$email'";
			$result=$conn->query($sql);
			if($result->num_rows>0){
				echo "This user already exists.";		
			}
			else
			{  
				 $sql="INSERT INTO aniketuser(email,password) VALUES('$email','$password')";
			    if($conn->query($sql)){			   	 
			   

                
                //passing value of table to ither pages using session
               

                 
				 echo "Registered Successfully!";
				 header("Location:savedata.php");

			    }
			     else{
				 echo "Could not register.Try again.";
			    }




			  $usertable=explode("@", $email);
			   session_start();
                $_SESSION['tablename']=$usertable[0]; 
				 $sql="CREATE TABLE $usertable[0](
			     id INTEGER  AUTO_INCREMENT  NOT NULL PRIMARY KEY,
                 task VARCHAR(500) NOT NULL,
                 date DATE NOT NULL,
                 time TIME ,
                 tag VARCHAR(25) NOT NULL)";
                 $conn->query($sql);
            }
                 	
                 
               
			
		
		//  else{
		//  	echo "some erroer".$conn->error;
		// }

	}
}

	?>


	<h2 align="center"><marquee> Registration</marquee></h2>

	<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">		
		Email:<input type="text" name="email" value="<?php echo $email; ?>">
		<span> <?php echo $emailError; ?></span>
		<br><br>
		Password:<input type="password" name="password" value="<?php echo $password; ?>">
		<span class="grn">Minimum six characters</span>
		<br><span class="error"><?php echo $passwordError; ?></span><br>
		<input type="submit" name="register">
	</form>


	

</body>
</html>