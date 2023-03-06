<?php 
require_once('connection.php');
session_start();
if(isset($_POST["createAccount"])){
	header("location:multistep_registration.php");
}
else if(isset($_POST["StepPassword"])){
	displayStepPassword();
}
else if(isset($_POST["StepID"])){
	displayStepID();
}
else if(isset($_POST['Login']))
{
   if(empty($_POST['ID']) || empty($_POST['password']))
    {
        header("location:worker_login.php?Empty= Please Fill in the Blanks");
	}
    else 
    {
        $query="SELECT * FROM worker WHERE id='".$_POST['ID']."' AND password='".$_POST['password']."'";
	    $result=mysqli_query($con,$query);

        if(mysqli_fetch_assoc($result))
            {
            	$_SESSION['User']=$_POST['ID'];
            	header("location:laundry.php");
            }
		else
            {
            	echo "wrong";
            }
    }
}
  
    else{
	displayStepID();
}


function setValue($fieldName)
{
	if(isset($_POST[$fieldName])){
		echo $_POST[$fieldName];
	}
}
?>

<html>
<body>
	<?php
	function displayStepID()
	{?>
		<form method="post">
			<h1>This is Step1</h1>
			<input type="hidden" name="password" value= "<?php setvalue("password")?>">
			Enter ID<br>
			<input type="number" name="ID" value="<?php setvalue("ID")?>"><br>
			<input type="submit" name="createAccount" value="createAccount">
			<input type="submit" name="StepPassword" value="StepPassword">
		</form>
	<?php  }

	function displayStepPassword()
	{?>
		<form method="post">
			<h1>This is Step2</h1>
			<input type="hidden" name="ID" value="<?php setvalue("ID")?>">
			<p>Enter Password</p><br>
			<input type="password" name="password" value= "<?php setvalue("password")?>">
			<input type="submit" name="StepID" value="StepID">
			<input type="submit" name="Login" value="Login">
		</form>
	<?php  }?>

</body>
</html>