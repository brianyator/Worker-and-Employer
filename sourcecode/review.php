<?php
session_start();
if(isset($_SESSION['name']))
$errors= array();
$db=  mysqli_connect('localhost', 'root', '', 'kazi');

require_once("dbconnect.php");
$connecting = connection();
$name = $_SESSION['name'];
if (isset($_POST['review'])) {
    $text1 = $_POST['message'];
    $queryReview = "INSERT INTO review (Name, Message) 
              VALUES('$name', '$text1')";
    $insertReview = mysqli_query($connecting, $queryReview);
    if($insertReview){
    	echo "your review has successfully been published ".$name."";
    	header('Refresh: 5; URL= kaziabout.php');
    }
    else{
    	echo "slight problem while submitting review";
    }
}
else{
echo "error writing review ".$name."";
}

?>