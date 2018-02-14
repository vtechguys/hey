 <?php
$servername="localhost";
$username="root";
$password="";
$dbname="mydb1";
$conn=new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
	die("connection not established:".$conn->connect_error);
}


	$task=$date=$time=$tag="";
	$taskError=$dateError=$timeError=$tagError="";
	session_start();
	
	 $table=$_SESSION['tablename'];



	//if ($_SERVER["REQUEST_METHOD"]=="POST") {

		if(isset($POST['save'])){
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
	 elseif (isset($_POST['show'])) {
	 	# code...
	 }
	 	
	//} 
	  function correct_format($param){
	 	$param=trim($param);
	 	$param=stripcslashes($param);
	 	$param=htmlspecialchars($param);
	 	return $param;
	 }
     ?>




<