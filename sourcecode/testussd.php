<?php 
require_once("dbconnect.php");
$connecting = connection();

if(isset($_POST["Step1"])){
	displayStep1();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Worker Interface</title>
	<link rel="stylesheet" type="text/css" href="styleussd.css">
</head>
<body>
	<div class="mobile">
		<div class="top"></div>
		<h1>4:20<span>PM</span><br><span>8th Nov, 2019</span></h1>
		
		<div id = "USSD"class="USSD">
			<h2>Welcome to Kazi. Please select your option</h2>
			<?php
	function displayStep1()
	{?>
				<form action="desicion.php" method="POST" enctype=multipart/form-data>
								</br></br>
					<p>1. Register account</p></br>
					<p>2. Login to account</p></br>
					<input type="number" name="choice" id="choice" ></br></br>
					<input id="submit" type="submit" value="Save" name="makeDecision">
				</form>
		</div>
		<div class="bottom"></div>
	<?php  } ?>
	</div>
</body>
</html>