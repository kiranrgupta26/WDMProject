<!-- Gupta,Kiran Rambilas : 1001726759
Deo, Neel Jayant : 1001773075 -->

<!DOCTYPE html>
<html>
<head>
	<title>Delete Events</title>
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
  			<h1>DELETE EVENTS</h1>
  		</div>
	</div>

	<nav class="sidemenu">
		<ul>
		  <?php  echo "<li><a href='Events.php?user=". $_GET['name']."'>Events</a></li>"; ?>
		  <li><a href="default1.php">Logout</a></li>
		</ul>
	</nav>

	<div class="addevent">
		<form method="post" name = "delEvent" action="delete_event.php" onsubmit="return delEvent()">
		<input type="hidden" name="eventid" value=<?php echo $_GET["eventid"] ?> ">
		<input type="hidden" name="username" value=<?php echo $_GET['name'] ?>>
		<ul>	
			<li><input type="text" name="eventname" placeholder="Event Name" class="addeventin" value=<?php echo $_GET["eventname"] ?> disabled></li>
			<li><input type="text" name="eventdate" placeholder="Event Date" class="addeventin"  value=<?php echo $_GET["eventdate"] ?>   onfocus="(this.type='date')" disabled></li>
		</ul>

		<ul>			
			<li><input type="text" name="eventtime" placeholder="Event Time" class="addeventin" value=<?php echo $_GET["eventtime"] ?>  onfocus="(this.type='time')" disabled></li>			
			<li><input type="text" name="eventlocation" placeholder="Event Location" class="addeventin" value=<?php echo $_GET["eventlocation"] ?> disabled></li>			
		</ul>

		<ul>			
			<li><input type="text" name="eventresponsible" placeholder="Event Responsible" class="addeventin" value=<?php echo $_GET["eventresponsible"] ?> disabled></li>			
			<li><input type="tel" name="eventtel" placeholder="Mobile" class="addeventin" value=<?php echo $_GET["mobile"] ?> disabled></li>		
		</ul>
  	
  <input type="submit" class="enviar" value="Delete">
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