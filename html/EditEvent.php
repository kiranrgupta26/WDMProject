<?php
session_start();
include('updateevent.php');
?>
<!-- Gupta,Kiran Rambilas : 1001726759
Deo, Neel Jayant : 1001773075 -->

<!DOCTYPE html>
<html>
<head>
	<title>Edit Events</title>
	<link rel="stylesheet" type="text/css" href="../css/cuidad.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
	<header class="topmenu">
		<img src="../img/Logotipo.png">
		<nav>		
			<a href="default1.php">Inicio </a> /
			<a href="Nosotros.html">Nosotros </a> /
			<a href="Equipos.html">Equipos </a> /
			<a href="http://krg6759.uta.cloud/">Blog </a> /
			<a href="Contact Us.html">Contacto </a> 
		</nav>
		
	</header>

	<div class="container">
  		<img src="../img/homepage-one-banner.jpg" alt="Snow" style="width:100%; height: 100%;">
  		<div class="centered">
  			<h1>EDIT EVENTS</h1>
  		</div>
	</div>

	<nav class="sidemenu">
		<ul>
		  <?php  echo "<li><a href='Events.php'>Events</a></li>"; ?>
		  <?php  
		  echo "<li><a href='default1.php'>Logout</a></li>";
		  ?>
		</ul>
	</nav>

	<div class="addevent">
		<?php
		include 'connection.php';
		$conn = OpenCon();
		$eventid = $_GET["eventid"];
		$userid = $_SESSION["userid"];

		$sql = "SELECT eventName,adminID,email,location,date,time,phone FROM event where adminID='$userid' and eventID='$eventid'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		$eventname = $row["eventName"];
		$eventdate = $row["date"];
		$eventtime = $row["time"];
		$eventlocation = $row["location"];
		$eventresponsible = $_SESSION["username"];
		$tel = $row["phone"];
		?>

		<form method="post" action="EditEvent.php">
		<input type="hidden" name="eventid" value=<?php echo $eventid ?>>
		<ul>	
			<li><input type="text" name="eventname" placeholder="Event Name" required class="addeventin" value=<?php echo $eventname ?> ></li>
			<li><input type="date" name="eventdate" placeholder="Event Date" required class="addeventin"  value=<?php echo $eventdate ?> ></li>
		</ul>

		<ul>			
			<li><input type="time" name="eventtime" placeholder="Event Time" class="addeventin" required value=<?php echo $eventtime ?> ></li>			
			<li><input type="text" name="eventlocation" placeholder="Event Location" class="addeventin" required value=<?php echo $eventlocation ?> ></li>			
		</ul>

		<ul>			
			<li><input type="text" name="eventresponsible" placeholder="Event Responsible" class="addeventin" required value=<?php echo $eventresponsible ?> ></li>			
			<li><input type="tel" name="eventtel" placeholder="Mobile" class="addeventin" required value=<?php echo $tel ?>> </li>		
		</ul> 
  	
  <input type="submit" name="update" class="enviar" value="Update">
  </form>
</div>

	

	<footer id="wrapper">
		<div class="footer-2">
			<li><img src="../img/email1.png"></li>				
				<li><img src="../img/twitter_grey.png"></li>
				<li><img src="../img/instagram_grey.png"></li>
		</div>
		<div class="footer-3">
			<ul id="footer-apps">
				<li>
					DiazApps
				</li>
				<li>
					&copy; 2020 All rights Reserved
				</li>
			</ul>
		</div>
	</footer>
</body>
</html>