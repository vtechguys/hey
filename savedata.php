<!-- <?php
$servername="localhost";
$username="root";
$password="";
$dbname="mydb1";
$conn=new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
	die("connection not established:".$conn->connect_error);
}

?> -->
<!DOCTYPE html>
<html>
<head>
	<style >
		.error{color: #FF0000;	}
	</style>
	<title></title>
</head>
<body>
   <?php
	$task=$date=$time=$tag="";
	$taskError=$dateError=$timeError=$tagError="";
	session_start();
	
	 $table=$_SESSION['tablename'];

   

	if ($_SERVER["REQUEST_METHOD"]=="POST") {
       
		
		if(empty($_POST["task"])){
			$taskError="Enter the TASK!";
		}
		else{
			$task=correct_format($_POST["task"]);
	    }

		if(empty($_POST["date"])){
			$dateError="Enter the date!";
		}
		else{
			$date=($_POST["date"]);
		}
		if (empty($_POST["time"])) {
			$timeError="";
		}
		else{
			$time=correct_format($_POST["time"]);
		}
		if(empty($_POST["tag"])){
			$tagError="";
		}
		else{
			$tag=correct_format($_POST["tag"]);
		}
		if(($tag&&$date)!=""){

			$sql="INSERT INTO $table(task,date,time,tag) VALUES ('$task','$date','$time','$tag')";
			if ($conn->query($sql) === TRUE) {
               echo "New record created successfully";

                 } 
            else {
              echo "Error: " . $sql . "<br>" . $conn->error;
               }
		}
    }


    
  
 
 
	 
	 	
	//} 
	  function correct_format($param){
	 	$param=trim($param);
	 	$param=stripcslashes($param);
	 	$param=htmlspecialchars($param);
	 	return $param;
	 }
	 if(isset($_GET["show"])){
	 	$sql="SELECT*FROM $table";
	 	$result=$conn->query($sql);
	 	 while($row = $result->fetch_assoc()) {
	 	 	echo "task :".$row["task"];
	 	 }
	 }
     ?>




	<h2>Enter Details......</h2>
	
	<p > <span class="error">*mandatory fields,must be filled! </span></p>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		TASK: <input type="text" name="task" value="<?php echo $task;?>">
		<span class="error">* <?php echo $taskError; ?></span>
		<br><br>
		DATE: <input type="DATE" name="date" value="<?php echo $date;?>">
		<span class="error">*<?php echo $dateError; ?></span>
		<br><br>
		TIME: <input type="TIME" name="time" value="<?php echo $time;?>">
		<br><br>
		TAG: <input type="text" name="tag" value="<?php echo $tag; ?>">
		<br><br>
		<input type="submit" name="save" value="save">
		<br><br>

	</form method="GET">
	<form>
		<input type="submit" name="show" value="show">
	</form>


</body>
</html> 