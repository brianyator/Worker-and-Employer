<?php 
session_start();

require_once("dbconnect.php");
$connecting = connection();


if(isset($_SESSION['username'])){

if(isset($_POST["get_client"])){
	$time = $_POST["time"];
	if($time == 1){
		$timex = 8;
	}
	elseif ($time == 2) {
		$timex = 9;
	}
	elseif ($time == 3) {
		$timex = 10;
	}
	elseif ($time == 4) {
		$timex = 11;
	}
	elseif ($time == 5) {
		$timex = 12;
	}
	elseif ($time == 6) {
		$timex = 13;
	}
	elseif ($time == 7) {
		$timex = 14;
	}
	elseif ($time == 8) {
		$timex = 15;
	}
	elseif ($time == 9) {
		$timex = 16;
	}
	elseif ($time == 10) {
		$timex = 17;
	}
	$_SESSION['time'] = $timex;
	$id = $_SESSION['username'];
	$laundry_location = $_SESSION['location'];
	$laundry_time = $_SESSION['time'];
	$sql="INSERT INTO laundry (id, location, time)VALUES('$id','$laundry_location','$laundry_time')";
	$insert = mysqli_query($connecting, $sql);
	if($insert){
		echo "Please wait as we direct you to the nearest available client user ".$_SESSION['username']." ...";
		header('Refresh: 5; URL= laundryStepOne.php');
	}
	else
	{
		echo "there was a minor problem";
	}

}
else if (isset($_POST["Step1"])) {
	header('Location: laundryStepOne.php');
}
}
?>
