<?php
session_start();
$db=  mysqli_connect('localhost', 'root', '', 'kazi');
require_once("dbconnect.php");
$connecting = connection();

$query = "SELECT laundry.time AS laundryTime, laundry.location AS laundryLocation, location.time AS locationTime, location.location AS locationLocation, laundry.id AS laundryId, worker.id AS workerId,  worker.first_name AS workerFirstName, worker.rate_per_bucket AS workerRate, worker.phone_number AS workerPhoneNumber, location.name AS locationName
	FROM laundry, location, worker
	WHERE laundry.time = location.time AND laundry.location = location.location AND laundry.id = worker.id
	INSERT INTO orders(time, location, worker_first_name, employer_first_name, worker_phone_number, rate_per_bucket)
	VALUES(locationTime, laundryLocation, workerFirstName, locationName, workerPhoneNumber, workerRate)";

	
	$insert = mysqli_query($connecting, $query);
	if($insert){
		echo "Details entered successfully. Details entered into Order Table...";
	}
	else
	{
		echo "there was a minor problem with entering details";
	}

?>


<?php
session_start();
if(isset($_SESSION['name']))
$errors= array();
$db=  mysqli_connect('localhost', 'root', '', 'kazi');

require_once("dbconnect.php");
$connecting = connection();


if (isset($_POST['send'])) {
$location = $_POST['location'];
$time = $_POST['time'];
$name = $_SESSION['name'];
}

  	$query = "INSERT INTO location (name, location, time) 
  			  VALUES('$name', '$location','$time')";

	$insert = mysqli_query($connecting, $query);
	if($insert){
		echo "Details entered successfully. Please wait as we direct you to the nearest available worker...";
		$resultSet = $db -> query ("SELECT laundry.location AS laundryLocation, laundry.time AS laundryTime, worker.id AS workerId FROM laundry, worker WHERE laundry.location = '$location' AND laundry.time = '$time' AND laundry.id = worker.id");
		$result=mysqli_query($db ,$resultSet);

        if(mysqli_fetch_assoc($result))
            {
            	echo " there is a match!";
            	while ($rows = $resultSet -> fetch_assoc()) {
            		$worker_id = $rows['workerId'];
            	echo " between you and worker $worker_id" ;           	}
            }
		else
            {
            	echo "no match";
            }
	}
	else
	{
		echo "there was a minor problem with all the connection to various tables";
	}


?>