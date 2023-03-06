<?php session_start();
if(isset($_POST["Step4"])){
	$_SESSION['id'] = $_POST["txti"];
	echo "your id is ".$_SESSION['id'];
}
else if (isset($_POST["Step2"])) {
	header('Location: regStepTwo.php');
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
		
		<form method="post" action="regStepFive.php">
			<h2>Registration</h2><br><br>
			<p>Enter Phone Number</p><br>
			<input type="number" name="txtp" value=""><br><br>
			<input id="submit" type="submit" name="Step3" value="Step3">
			<br><br>
			<input id="submit" type="submit" name="Step5" value="Step5">
		</form>
		
		</div>
		<div class="bottom"></div>
</body>
</html>