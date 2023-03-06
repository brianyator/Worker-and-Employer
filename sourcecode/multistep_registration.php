<?php 
require_once("dbconnect.php");
$connecting = connection();

if(isset($_POST["Step1"])){
	displayStep1();
}
else if(isset($_POST["Step2"])){
	displayStep2();
}

else if (isset($_POST["Step3"])) {
	displayStep3();
}
else if (isset($_POST["Step4"])) {
	displayStep4();
}
else if (isset($_POST["Step5"])) {
	displayStep5();
}
else if (isset($_POST["Step6"])) {
	displayStep6();
}
else if(isset($_POST["register"])){
	displayThanks();
	$id = $_POST["txti"];
	$firstname = $_POST["txtf"];
	$lastname = $_POST["txtla"];
	$rate_per_bucket = $_POST["txtr"];
	$phone_number = $_POST["txtp"];
	$password = $_POST["txtpass"];
	$sql="INSERT INTO worker (id, first_name, last_name, rate_per_bucket, phone_number, password)VALUES('$id','$firstname','$lastname', '$rate_per_bucket', '$phone_number', '$password')";
	$insert = mysqli_query($connecting, $sql);
	if($insert){
		echo "Details updated";
		header('Location: redirect.html');
	}
	else
	{
		echo "details for client not added to DB";
	}
}
else{
	displayStep1();
}

function setValue($fieldName)
{
	if(isset($_POST[$fieldName])){
		echo $_POST[$fieldName];
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
	<?php
	function displayStep1()
	{?>
		<form method="post" enctype=multipart/form-data>
			<h2>This is Step1</h2>
			<input type="hidden" name="txtla" value= "<?php setvalue("txtla")?>">
			<input type="hidden" name="txti" value= "<?php setvalue("txti")?>">
			<input type="hidden" name="txtr" value= "<?php setvalue("txtr")?>">
			<input type="hidden" name="txtp" value= "<?php setvalue("txtp")?>">
			<input type="hidden" name="txtpass" value= "<?php setvalue("txtpass")?>">
			<p>Enter First Name</p><br>
			<input type="text" name="txtf" value="<?php setvalue("txtf")?>"><br>
			<input id="submit" type="submit" name="Step2" value="Step2">
		</form>
	<?php  }

	function displayStep2()
	{?>
		<form method="post" enctype=multipart/form-data>
			<h2>This is Step2</h2>
			<input type="hidden" name="txtf" value= "<?php setvalue("txtf")?>">
			<input type="hidden" name="txti" value= "<?php setvalue("txti")?>">
			<input type="hidden" name="txtr" value= "<?php setvalue("txtr")?>">
			<input type="hidden" name="txtp" value= "<?php setvalue("txtp")?>">
			<input type="hidden" name="txtpass" value= "<?php setvalue("txtpass")?>">
			<p>Enter Last Name</p><br>
			<input type="text" name="txtla" value="<?php setvalue("txtla")?>"><br>
			<input id="submit" type="submit" name="Step1" value="Step1">
			<input id="submit" type="submit" name="Step3" value="Step3">
		</form>
	<?php  }

	function displayStep3()
	{?>
		<form method="post" enctype=multipart/form-data>
			<h2>This is Step3</h2>
			<input type="hidden" name="txtf" value= "<?php setvalue("txtf")?>">
			<input type="hidden" name="txtla" value= "<?php setvalue("txtla")?>">
			<input type="hidden" name="txtr" value= "<?php setvalue("txtr")?>">
			<input type="hidden" name="txtp" value= "<?php setvalue("txtp")?>">
			<input type="hidden" name="txtpass" value= "<?php setvalue("txtpass")?>">
			<p>Enter ID</p><br>
			<input type="number" name="txti" value="<?php setvalue("txti")?>"><br>
			<input id="submit" type="submit" name="Step2" value="Step2">
			<input id="submit" type="submit" name="Step4" value="Step4">
		</form>
	<?php  }

	function displayStep4()
	{?>
		<form method="post" enctype=multipart/form-data>
			<h2>This is Step4</h2>
			<input type="hidden" name="txtf" value= "<?php setvalue("txtf")?>">
			<input type="hidden" name="txtla" value= "<?php setvalue("txtla")?>">
			<input type="hidden" name="txti" value= "<?php setvalue("txti")?>">
			<input type="hidden" name="txtp" value= "<?php setvalue("txtp")?>">
			<input type="hidden" name="txtpass" value= "<?php setvalue("txtpass")?>">
			<p>Enter Rate per bucket</p><br>
			<input type="number" name="txtr" value="<?php setvalue("txtr")?>"><br>
			<input id="submit" type="submit" name="Step3" value="Step3">
			<input id="submit" type="submit" name="Step5" value="Step5">
		</form>
	<?php  }

	function displayStep5()
	{?>
		<form method="post" enctype=multipart/form-data>
			<h2>This is Step5</h2>
			<input type="hidden" name="txtf" value= "<?php setvalue("txtf")?>">
			<input type="hidden" name="txtla" value= "<?php setvalue("txtla")?>">
			<input type="hidden" name="txti" value= "<?php setvalue("txti")?>">
			<input type="hidden" name="txtr" value= "<?php setvalue("txtr")?>">
			<input type="hidden" name="txtpass" value= "<?php setvalue("txtpass")?>">
			<p>Enter Phone Number</p><br>
			<input type="number" name="txtp" value="<?php setvalue("txtp")?>"><br>
			<input id="submit" type="submit" name="Step4" value="Step4">
			<input id="submit" type="submit" name="Step6" value="Step6">
		</form>
	<?php  }

	function displayStep6()
	{?>
		<form method="post" enctype=multipart/form-data>
			<h2>This is Step6</h2>
			<input type="hidden" name="txtf" value= "<?php setvalue("txtf")?>">
			<input type="hidden" name="txtla" value= "<?php setvalue("txtla")?>">
			<input type="hidden" name="txti" value= "<?php setvalue("txti")?>">
			<input type="hidden" name="txtr" value= "<?php setvalue("txtr")?>">
			<input type="hidden" name="txtp" value= "<?php setvalue("txtp")?>">
			<p>Enter Password</p><br>
			<input type="Password" name="txtpass" value="<?php setvalue("txtpass")?>"><br>
			<input id="submit" type="submit" name="Step5" value="Step5">
			<input id="submit" type="submit" name="register" value="register">
		</form>
	<?php  }

	function displayThanks()
	{?>
		<h1>Thanks for submitting information</h1>
	<?php 
	}?>
	</div>
	<div class="bottom"></div>
	</div>
</body>
</html>