<?php
session_start();
if(isset($_SESSION['name']))
$errors= array();
$db=  mysqli_connect('localhost', 'root', '', 'kazi');

require_once("dbconnect.php");
$connecting = connection();



if (isset($_POST['send'])) {
$location = $_POST['location'];
$time = $_POST['time'];
$name = $_SESSION['name'];
if ($time== "8 - 9") {
    $time = 8;
}
else if ($time== "9 - 10") {
    $time = 9;
}
else if ($time== "10 - 11") {
    $time = 10;
}
else if ($time== "1 - 12") {
    $time = 11;
}
else if ($time== "12 - 13") {
    $time = 12;
}
else if ($time== "13 - 14") {
    $time = 13;
}
else if ($time== "14 - 15") {
    $time = 14;
}
else if ($time== "15 - 16") {
    $time = 15;
}
else if ($time== "16 - 17") {
    $time = 16;
}
else if ($time== "17 - 18") {
    $time = 17;
}
}

  	$query = "INSERT INTO location (name, location, time) 
  			  VALUES('$name', '$location','$time')";

	
		


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and professional web design">
      <meta name="keywords" content="web design, affordable web design, professional web design">
    <meta name="author" content="Brad Traversy">
    <title>Kazi Laundry| linking</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Kazi </span> Laundry Services</h1>
        </div>
        <nav>
          <ul>
            <li><a href="kaziindex.php">Home</a></li>
            <li><a href="kaziabout.php">About</a></li>
            <li class="current"><a href="kaziservices.php">Services</a></li>
            <li><a href="logoutEmployer.php">Logout</a></li>
          </ul>
        </nav>
      </div>
    </header>

    

    <section id="main">
      <div class="container">
        <article id="main-col">
            <br>
            <br>
            <br>
          <h1 class="page-title"><?php  $insert = mysqli_query($connecting, $query);
    if($insert){
        echo "Details entered successfully. Please wait as we direct you to the nearest available worker...";?></h1>
        <article id="main-col">
          
          </article>
          
        <br>
        
        </article>
        
      </div>
    </section>

    <ul id="services">
        <li>
      <p>
           <?php  
           $sql = "SELECT laundry.location AS laundryLocation, laundry.time AS laundryTime, worker.id AS workerId, worker.first_name AS workerFirstName, worker.last_name AS workerLastName, worker.phone_number AS workerPhoneNumber, worker.rate_per_bucket AS workerRate FROM laundry, worker WHERE laundry.location = '$location' AND laundry.time = '$time' AND laundry.id = worker.id";

        sleep(3);

        $result=mysqli_query($connecting,$sql);

        if($rows = mysqli_fetch_assoc($result))
            {
                echo " </br></br>Congratulations!</br>";
                $worker_id = $rows['workerId'];
                $worker_first_name = $rows['workerFirstName'];
                $worker_last_name = $rows['workerLastName'];
                $worker_phone_number = $rows['workerPhoneNumber'];
                $worker_rate = $rows['workerRate'];
                $worker_location = $rows['laundryLocation'];
                $worker_time = $rows['laundryTime'];
                echo "You have been matched with worker ".$worker_first_name." ".$worker_last_name." with phone number of 0".$worker_phone_number." and a rate of ".$worker_rate." Kenyan Shillings per hour </br>";
                header('Refresh: 15; URL= kaziservices.php');


                $sql_del = "DELETE FROM laundry WHERE laundry.location = '$worker_location' AND laundry.time = '$worker_time'";
                $res = mysqli_query($connecting,$sql_del);
                
            }
        else
            {
                echo "</br> Unfortunately there is no match at the moment";
                header('Refresh: 15; URL= kaziservices.php');
            }
    }
    else
    {
        echo "there was a minor problem with all the connection to various tables";
        header('Refresh: 15; URL= kaziservices.php');
    }
           ?>
          </p>
          </li>
    </ul>
  </body>
</html>
