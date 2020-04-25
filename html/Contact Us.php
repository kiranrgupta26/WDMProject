<?php
session_start();
include('contactus.php');
?>
<!-- Gupta,Kiran Rambilas : 1001726759
Deo, Neel Jayant : 1001773075 -->

<!DOCTYPE html>
<html>
<head>
	<title>Contacto</title>
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
			<a href="Contact Us.php">Contacto </a> /
			<a href="#popup1">Inicio de Sesion </a> 
			 
		</nav>
		
	</header>

	<div class="container">
  		<img src="../img/homepage-one-banner.jpg" alt="Snow" style="width:100%; height: 100%;">
  		<div class="centered">
  			<h1>CONTACT US</h1>
  			<h4>HOME > CONTACT US</h4>
  		</div>
	</div>

	<main>

		<div class="row">
			<div class="column">
			    <h1>NUESTRAS <i><span id=con_color>REDES</span></i></h1>
			    <h1 class="contacto"><i><u>SO</u>CIALES</i></h1>

			    <ul class="contact-img">
			    	<li>
			    		<img src="../img/instagram_black.png">
			    		<p>@genteycuidadorg</p>
			    	</li>
			    	<li>
			    		<img src="../img/twitter_black.png">
			    		<p>@genteycuidadorg</p>
			    	</li>
			    </ul>
			    <ul class="contact-img">
			    	<li>
			    		<img src="../img/telephone.png">
			    		<p>0013467143892</p>
			    		<p>0584148225881</p>
			    		<p>056933948007</p>
			    	</li>
			    	<li>
			    		<img src="../img/email.png">
			    		<p>info@genteycuidad.org</p>
			    	</li>
			    </ul>
			 </div>
			<div class="column1">
			    <h1>FORMULARIO DE</h1>
			    <h1 class="contacto"><i><u>CO</u>NTACTO</i></h1>

			    <form name="contactUs" method="post" action="Contact Us.php" onsubmit="return footerContact()">
			    	
				    <p>Tu Nombre (requerido)</p>
				    <input type="text" name="name" placeholder="Tu Nombre" size="50" class="inputT" required>
				    <p>Tu Correo (requerido)</p>
				    <input type="email" name="email" placeholder="Tu Correo" size="50" class="inputT" required>
				    <p>Asunto</p>
				    <input type="text" name="query" placeholder="Asunto" size="50" class="inputT" required>
				    <p>Asunto</p>		    
				    <textarea name ="querydesc" rows="4" cols="50" placeholder="Asunto" required></textarea>
				    <br>
				    <input type="text" name="" size = "54" style="width: 0px;height: 0px">
				    <input type="submit" name ="contact" class="enviar" value="ENVIAR">
			    </form>
  			</div>
		</div>
		
	</main>


	<div id="popup1" class="overlay">
		<div class="popup">
			<h1>Inicio de <i>Sesion</i></h1>
			<a class="close" href="#">&times;</a>
			<div class="content">
				<form method="post" action="Login.php">
					<div class="popup_indiv">
						<input type="radio" name="logintype" value = "admin" checked>Admin
						<input type="radio" name="logintype" value = "user">User
						Correo <br>
						<input type="text" name="username" placeholder="Tu Correo" id="username"  class="logintext" required> <br><br>
						Contraseña <br>
						<input type="password" name="password" placeholder="Tu Contraseña"  class="logintext" required> <br>
					</div>
					<br>
					<input type="submit" name="login" value="ENVIAR" class="enviar1">
					<br>
					<br>
					&nbsp;
				</form>
			</div>
		</div>
	</div>


	<footer id="wrapper">
		<div class="footer-img-contact">
			<img src="../img/homepage-one-banner.jpg" alt="Snow" id="imgid">
			<div class="footer-1-content">
				<p>Escríbenos, te invitamos a brindar lo mejor de ti para el bien común, <span id="con_color">queremos conocer acerca de tus ideas para mejorar.</span></p>			
			</div>
		</div>

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
				<li>
					<button  onclick="topFunction()" id="foot_button" value="^">^</button>
				</li>
			</ul>
		</div>
	</footer>
</body>
</html>