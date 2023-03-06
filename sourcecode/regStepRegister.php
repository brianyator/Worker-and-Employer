<?php session_start();

require_once("dbconnect.php");
$connecting = connection();


if(isset($_POST["register"])){
	$_SESSION['password'] = $_POST["txtp"];
	$fname = $_SESSION['fname'];
	$password = $_SESSION['password'];
	$lname = $_SESSION['lname'];
	$id = $_SESSION['id'];
	$phone_number = $_SESSION['phoneNumber'];
	$rate = $_SESSION['rate'];
	$password = md5($password);

	$sql="INSERT INTO worker (id, first_name, last_name, rate_per_bucket, phone_number, password)VALUES('$id','$fname','$lname', '$rate', '$phone_number', '$password')";
	$insert = mysqli_query($connecting, $sql);
	if($insert){
		echo "Details updated";
		header('Location: ussdsim.html');
	}
	else
	{
		echo "details for client not added to DB";
	}
}
else if (isset($_POST["Step5"])) {
	header('Location: regStepFive.php');
}
?>
