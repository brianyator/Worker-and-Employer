<?php 
if(isset($_POST['makeDecision'])){
	$choice = $_POST['choice'];
	if($choice == 1)
	{
		header('Location: regStepOne.php');
	}
	elseif($choice == 2)
	{
		header('Location: workerLogInOne.php');
	}
}
?>