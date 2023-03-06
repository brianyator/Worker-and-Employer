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
    <meta name="description" content="Affordable and professional laundry services">
	  <meta name="keywords" content="web design, affordable web design, professional web design">
  	<meta name="author" content="Brad Traversy">
    <title>Kazi Laundry| About</title>
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
            <li class="current"><a href="kaziabout.php">About</a></li>
            <li><a href="kaziservices.php">Services</a></li>
			<li><a href="logoutEmployer.php">Logout</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="main">
      <div class="container">
        <article id="main-col">
          <h1 class="page-title">About Us</h1>
          <p>
           Our mission is to change the face and feel of doing laundry, and the future is bright!  Kazi application will link you as fast as possible to a laundry worker. The application will make it easier for both the worker and employer to find each other without any time wastage whatsoever. Do not miss out on the chance to be part of the Kazi Group!
          </p>
          <p class="dark">
With the appliaction finding someone to do all your laundry work from washing clothes to washing shoes and even ironing will be made easier and faster. The prices of the services vary according to the  amount of laundry and definitely the location of the worker as well as the employer. Subscribe to make your wash days easier !
          </p>
            <h3>What We Do</h3>
            <p>Get your laundry done in a short time and definitely make your wash day less stressful.We link a worker to anyone who would like their laundry done. It is a fast and simple way to ensure you get all your laundry done.Top quality laundering services will be provided</p>
        </article>

          
        <aside id="sidebar">
          <div class="dark">
            <h3>Write a review <?php echo ''.$_SESSION['name'].'<br />';?></h3>
            <form class="quote" action="review.php" method="post">
              <div>
                <label>Message</label><br>
                <input type="text" name="message" placeholder="leave some feedback here">
              </div>
              <br>
              <button class="button_1" type="submit" name="review">Send</button>
          </form>
          </div>
        </aside>
      </div>
    </section>

    <footer>
      <p>Kazi: For the best Laundry Services Copyright &copy; 2019</p>
    </footer>
  </body>
</html>
