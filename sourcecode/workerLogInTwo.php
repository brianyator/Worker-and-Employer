<?php session_start();
if(isset($_POST["StepPassword"])){
	$_SESSION['username'] = $_POST["ID"];
	echo "your username is ".$_SESSION['username'];
}
else if ($_POST["createAccount"]) {
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
		
		<form method="post" action = workerLogInThree.php>
			<h2>Log In</h2><br><br>
			<p>Enter Password</p><br>
			<input type="password" name="pass" value=""><br><br>
			<input type="submit" name="step1" value="step1">
			<br>
			<input type="submit" name="logIn" value="log In">
		</form>

		</div>
		<div class="bottom"></div>
</body>
</html>
