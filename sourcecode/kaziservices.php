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
    <meta name="description" content="Affordable and professional web design">
	  <meta name="keywords" content="web design, affordable web design, professional web design">
  	<meta name="author" content="Brad Traversy">
    <title>Kazi Laundry| Services</title>
    <link rel="stylesheet" href="styles.css">
    <style type="text/css">
      table{
        border-collapse: collapse;
        width: 100%;
        color: #d9;
        font-family: monospace;
        font-size: 24px;
        text-align: left;
      }
    </style>
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
          <h1 class="page-title">Available Workers in Nairobi</h1>
          <div>
          <table>
            <tr>
              <th>First Name</th>
              <th>Rate per Hour</th>
              <th>Location</th>
              <th>Time (Hours)</th>
            </tr>
            <?php
            $db=  mysqli_connect('localhost', 'root', '', 'kazi');

            require_once("dbconnect.php");
            $connecting = connection();
            $sql = "SELECT laundry.id AS workerID, laundry.location AS location, laundry.time AS workerTime, worker.first_name AS name, worker.rate_per_bucket AS rate, worker.id FROM laundry,worker WHERE laundry.id = worker.id";

            

            $result=mysqli_query($connecting,$sql);

            while($rows = mysqli_fetch_assoc($result)){
              $id = $rows['workerID'];
              $location = $rows['location'];
              $time = $rows['workerTime'];
              $name = $rows['name'];
              $rate = $rows['rate'];
              if ($time== 8) {
                     $time = "8 - 9";
                }
                else if ($time== 9) {
                    $time = "9 - 10";
                }
                else if ($time== 10) {
                    $time = "10 - 11";
                }
                else if ($time== 11) {
                    $time = "11 - 12";
                }
                else if ($time== 12) {
                    $time = "12 - 13";
                }
                else if ($time== 13) {
                    $time = "13 - 14";
                }
                else if ($time== 14) {
                    $time = "14 - 15";
                }
                else if ($time== 15) {
                    $time = "15 - 16";
                }
                else if ($time== 16) {
                    $time = "16 - 17";
                }
                else if ($time== 17) {
                    $time = "17 - 18";
                }
              echo "<tr><td>".$name."</td><td>".$rate."</td><td>".$location."</td><td>".$time."</td></tr>";
            }
            echo "</table>";
            ?>

          </table>
        </div>
        <br>
        <h1 class="page-title">Services</h1>
          <ul id="services">
            <li>
              <h3>Laundry of Clothes</h3>
              <p>In case one would like to get their clothes laundered one should specify the amount of clothes they have so as to compare with the given prices.</p>
						  <img src="./img/nguo.png">
            </li>
            <li>
              <h3>Laundry of Shoes</h3>
              <p>The shoe prices vary acoording to the type of shoe and the ease of washing the shoes</p>
							 <img src="./img/shoe.png">
            </li>
            <li>
              <h3>Laundry of Heavy Clothes</h3>
              <p>Heavy clothes may include beddings such as duvets and towels</p>
            </li>
			<li>
              <h3>Ironing</h3>
              <p>The price of ironing ranges from the number of clothes.</p>
						   <img src="./img/iron.png">
            </li>
          </ul>
        </article>
        

        <aside id="sidebar" >
          <div class="dark">
            <h3>Indicate time</h3>
            <form class="quote" action="location.php" method="post">
  						<div>
  							<label>Location</label><br>
							<select name="location">
						<option>Makadara</option>
						<option>Kamukunji</option>
						<option>Starehe</option>
						<option>Langata</option>
						<option>Dagoretti</option>
						<option>Westlands</option>
						<option>Embakasi</option>
            <option>Kasarani</option>
					</select>
  						</div>
              <br>
  						<div>
  							<label>Time (24h clock system)</label><br>
                <select name="time">
            <option>8 - 9</option>
            <option>9 - 10</option>
            <option>10 - 11</option>
            <option>11 - 12</option>
            <option>12 - 13</option>
            <option>13 - 14</option>
            <option>14 - 15</option>
            <option>15 - 16</option>
            <option>16 - 17</option>
            <option>17 - 18</option>
          </select>
  						</div>
              <br>
  						<button class="button_1" type="submit" name="send">Link with worker</button>
					</form>
          </div>
        </aside>
		
      </div>
    </section>

    <footer>
      <p>Kazi: For The Best Laundry Services &copy; 2019</p>
    </footer>
  </body>
</html>
