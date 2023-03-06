<?php 
session_start();
if(isset($_SESSION['User']))
echo 'you have logged in successfully user '.$_SESSION['User'].'<br />';

require_once("dbconnect.php");
$connecting = connection();

if(isset($_POST["Step1"])){
	displayStep1();
}
else if(isset($_POST["Step2"])){
	displayStep2();
}
else if (isset($_POST["get_client"])) {
	$location = $_POST["location"];
	if($location == 1){
		$area = "Makadara";
	}
	elseif ($location == 2) {
		$area = "Kamukunji";
	}
	elseif ($location == 3) {
		$area = "Starehe";
	}
	elseif ($location == 4) {
		$area = "Langata";
	}
	elseif ($location == 5) {
		$area = "Dagoretti";
	}
	elseif ($location == 6) {
		$area = "Westlands";
	}
	elseif ($location == 7) {
		$area = "Kasarani";
	}
	elseif ($location == 8) {
		$area = "Embakasi";
	}

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
	$id = $_SESSION['User'];
	$sql="INSERT INTO laundry (id, location, time)VALUES('$id','$area','$timex')";
	$insert = mysqli_query($connecting, $sql);
	if($insert){
		echo "Details entered successfully. Please wait as we direct you to the nearest available client...";
	}
	else
	{
		echo "there was a minor problem";
	}
}
else{
	displayStep1();
}

function setValue($fieldName)
{
	if(isset($_POST[$fieldName])){
		echo $_POST[$fieldName];
	}
}
 ?>

 <html>
<body>
	<?php
	function displayStep1()
	{?>
		<form method="post">
			<h1>You may proceed to enter details for client searching...</h1>
			<input type="hidden" name="time" value= "<?php setvalue("time")?>">
			Enter location:<br>
			<ol>
				<li>Makadara</li>
				<li>Kamukunji</li>
				<li>Starehe</li>
				<li>Langata</li>
				<li>Dagoretti</li>
				<li>Westlands</li>
				<li>Kasarani</li>
				<li>Embakasi</li>
			</ol>
			<input type="number" name="location" value="<?php setvalue("location")?>"><br>
			<input type="submit" name="Step2" value="Step2">
		</form>
	<?php  }

	function displayStep2()
	{?>
		<form method="post">
			<h1>This is Step2</h1>
			<input type="hidden" name="location" value= "<?php setvalue("location")?>">
			Enter time:<br>
			<ol>
				<li>8</li>
				<li>9</li>
				<li>10</li>
				<li>11</li>
				<li>12</li>
				<li>13</li>
				<li>14</li>
				<li>15</li>
				<li>16</li>
				<li>17</li>
			</ol>
			<input type="number" name="time" value="<?php setvalue("time")?>"><br>
			<input type="submit" name="Step1" value="Step1">
			<input type="submit" name="get_client" value="get client">
		</form>
	<?php  }?>

</body>
</html>
