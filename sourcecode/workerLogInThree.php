<?php session_start();

require_once('connection.php');


if(isset($_POST["logIn"])){

	$_SESSION['pass'] = $_POST["pass"];
	$username = $_SESSION['username'];
	$pass = $_SESSION['pass'];
    $pass = md5($pass);

	if(empty($username) || empty($pass))
    {
        header("location:workerLoginOne.php?Empty= Please Fill in the Blanks");
	}else 
    {
    	$query="SELECT * FROM worker WHERE id='$username' AND password='$pass'";
	    $result=mysqli_query($con,$query);

        if(mysqli_fetch_assoc($result))
            {
            	$_SESSION['User']=$_POST['ID'];
            	header("location:laundryStepOne.php");
            }
		else
            {
            	echo "wrong";
            }
	}
}
else if (isset($_POST["step1"])) {
	header('Location: workerLoginOne.php');
}