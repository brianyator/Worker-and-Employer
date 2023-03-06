<?php session_start();
if(isset($_POST["Step6"])){
	$_SESSION['rate'] = $_POST["txtra"];
	echo "your rate per hour is ".$_SESSION['rate'];
}
else if (isset($_POST["Step4"])) {
	header('Location: regStepFour.php');
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
		
		<form method="post" action="regStepRegister.php">
			<h2>Registration</h2><br><br>
			<p>Enter Password</p><br>
			<input type="password" name="txtp" value=""><br><br>
			<input id="submit" type="submit" name="Step5" value="Step5">
			<br><br>
			<input id="submit" type="submit" name="register" value="register">
		</form>
		
		</div>
		<div class="bottom"></div>
</body>
</html>