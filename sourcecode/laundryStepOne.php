<?php 
session_start();
if(isset($_SESSION['username']))
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
		
		<form method="post" action = "laundryStepTwo.php">
			<h2>Enter location and time for laundry</h2><br><br>
			<p>Location:</p><br>
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
			<input type="number" name="location" value=""><br>
			<input type="submit" name="Step2" value="Step2">
		</form>

		</div>
		<div class="bottom"></div>
</body>
</html>