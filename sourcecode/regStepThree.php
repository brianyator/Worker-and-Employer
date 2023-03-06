<?php session_start();
if(isset($_POST["Step3"])){
	$_SESSION['lname'] = $_POST["txtla"];
	echo "your last name is ".$_SESSION['lname'];
}
else if (isset($_POST["Step1"])) {
	header('Location: regStepOne.php');
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
		
		<form method="post" action="regStepFour.php">
			<h2>Registration</h2><br><br>
			<p>Enter ID</p><br>
			<input type="number" name="txti" value=""><br><br>
			<input id="submit" type="submit" name="Step2" value="Step2">
			<br><br>
			<input id="submit" type="submit" name="Step4" value="Step4">
		</form>
		
		</div>
		<div class="bottom"></div>
</body>
</html>