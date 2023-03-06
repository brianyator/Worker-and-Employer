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
		
		<form method="post" action = workerLogInTwo.php>
			<h2>Log In</h2><br><br>
			<p>Enter ID</p><br>
			<input type="number" name="ID" value=""><br><br>
			<input type="submit" name="createAccount" value="create account">
			<br>
			<input type="submit" name="StepPassword" value="password">
		</form>

		</div>
		<div class="bottom"></div>
</body>
</html>