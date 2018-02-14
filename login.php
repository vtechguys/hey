<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mydb1";
$conn=new mysqli($servername,$username,$password,$dbname);
?>
<!DOCTYPE html>
<html>
<head>
	<style >
		.red{color: red;}
	</style>
	<title></title>
</head>
<body>

<?php
$email=$password="";
$emailError=$passwordError="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
	if(empty($_POST["email"])){
		$emailError="enter email";

	}
	else{
		$email=$_POST["email"];
		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			$emailError="enter a valid email";

		}
	}
	if(empty($_POST["password"])){
		$passwordError="enter password";

	}
	else{
		$password=$_POST["password"];
	}


	if (($emailError&&$passwordError)=="") {
		$sql="SELECT * FROM aniketuser WHERE email= '$email' AND password='$password'";
		$result=$conn->query($sql);
	    if($result->num_rows>0){
	    	header("Location:savedata.php");


	    }
	    else{
	    	 echo "User does not exist.First Sign";
	    }
	}
}


?>

<h2>LogIn Here</h2>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
	Email:<input type="text" name="email" value="">
	<span class="red"><?php echo $emailError; ?></span>
	<br><br>
	Password:<input type="password" name="password" >
	<span class="red"><?php echo $passwordError; ?></span>
	<br><br>
	<input type="submit" name="login" value="Login">
</form>
</body>
</html>