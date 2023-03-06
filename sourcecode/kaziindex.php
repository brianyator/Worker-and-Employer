<?php 
session_start();
if(isset($_SESSION['name']))
echo 'you have logged in successfully user '.$_SESSION['name'].'<br />';
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and professional laundering">
	  <meta name="keywords" content="web design, affordable web design, professional web design">
  	<meta name="author" content="KAZI ADMINS">
    <title>Kazi Laundry | Welcome</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Kazi</span> Laundry Services</h1>
        </div>
        <nav>
          <ul>
            <li class="current"><a href="kaziindex.php">Home</a></li>
            <li><a href="kaziabout.php">About</a></li>
            <li><a href="kaziservices.php">Services</a></li>
			<li><a href="logoutEmployer.php">Logout</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="showcase">
      <div class="container">
        <h1>Affordable Professional laundering</h1>
        <p>With Kazi, we make it easy to get your clothes clean and you on your way! With just a few clicks connect to professional workers</p>
      </div>
    </section>

    

    <section id="boxes">
      <div class="container">
        <div class="box">
          <img src="./img/location.jpg">
          <h3>Set Location</h3>
          <p>First step is to set your location to be linked with a worker near you .</p>
        </div>
        <div class="box">
          <img src="./img/licon.jpg">
          <h3>The Time</h3>
          <p>Specify time you would want your delicate needs met. </p>
        </div>
        <div class="box">
          <img src="./img/clock.png">
          <h3>Waiting</h3>
          <p>Patiently wait to be linked to a laundry worker close to you. This should not take long.</p>
        </div>
      </div>
    </section>

    <footer>
      <p>Kazi: For The Best Laundry Services &copy; 2019</p>
    </footer>
  </body>
</html>
