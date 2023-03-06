<?php session_start();
if(isset($_POST["Step2"])){
	$_SESSION['fname'] = $_POST["txtf"];
	echo "your first name is ".$_SESSION['fname'];
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
		
		<form method="post" action="regStepThree.php">
			<h2>Registration</h2><br><br>
			<p>Enter Last Name</p><br>
			<input type="text" name="txtla" value=""><br><br>
			<input id="submit" type="submit" name="Step1" value="Step1">
			<br><br>
			<input id="submit" type="submit" name="Step3" value="Step3">
		</form>
		
		</div>
		<div class="bottom"></div>
</body>
</html>