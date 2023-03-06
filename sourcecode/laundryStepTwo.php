<?php 
session_start();
if(isset($_SESSION['username'])){

if(isset($_POST["Step2"])){
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
	$_SESSION['location'] = $area;
}
}
?>

<html>
<head>
	<title>Worker Interface</title>
	<link rel="stylesheet" type="text/css" href="styleussd.css">
</head>
<body>
	<div class="mobile">
		<div class="top"></div>
		<h1>4:20<span>PM</span><br><span>8th Nov, 2019</span></h1>
		<div id = "USSD" class="USSD">
		
		<form method="post" action = "laundryStepThree.php">
			<h2>Enter location and time for laundry</h2><br><br>
			<p>Time (hours):</p><br>
			<ol>
				<li>8 - 9</li>
				<li>9 - 10</li>
				<li>10 - 11</li>
				<li>11 - 12</li>
				<li>12 - 13</li>
				<li>13 - 14</li>
				<li>14 - 15</li>
				<li>15 - 16</li>
				<li>16 - 17</li>
				<li>17 - 18</li>
			</ol>
			<input type="number" name="time" value=""><br>
			<input type="submit" name="Step1" value="Step1">
			<br>
			<input type="submit" name="get_client" value="get client">
		</form>

		</div>
		<div class="bottom"></div>
</body>
</html>