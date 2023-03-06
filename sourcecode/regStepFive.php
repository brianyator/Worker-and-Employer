<?php session_start();
if(isset($_POST["Step5"])){
	$_SESSION['phoneNumber'] = $_POST["txtp"];
	echo "your phone number is ".$_SESSION['phoneNumber'];
}
else if (isset($_POST["Step3"])) {
	header('Location: regStepThree.php');
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
		
		<form method="post" action="regStepSix.php">
			<h2>Registration</h2><br><br>
			<p>Enter Rate Per Hour</p><br>
			<input type="number" name="txtra" value=""><br><br>
			<input id="submit" type="submit" name="Step4" value="Step4">
			<br><br>
			<input id="submit" type="submit" name="Step6" value="Step6">
		</form>
		
		</div>
		<div class="bottom"></div>
</body>
</html>