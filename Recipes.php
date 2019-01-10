<?php
session_start();


?>


<!doctype html>
<html>
	<head>
	<title> Recipes Page  </title>
	 <meta charset="UTF-8"/>
	 	   <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
  integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



	 <style>
			html,body{


	}
		.bg{

		background-image: url("img/pink.jpg");

  /* Full height */

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;


		}
		* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;
height:50%;
}
.slidey {vertical-align: middle;
height: 500px;


}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: brown;
  font-size: 25px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: brown;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

.images{
	margin:100px;
	padding:20px;


	}
	.imge {
	margin-left: 70px;
	margin-bottom: 40px;

		border: 1px solid #5E3F43;



	}

	 </style>


	 </head>

	 <body class="bg">
			<nav class="navbar navbar-inverse">
			  <div class="container-fluid">
				<div class="navbar-header">
				  <a class="navbar-brand" href="#">Sweets Recipes</a>
				</div>
				<ul class="nav navbar-nav">
					<li ><a href="index.php" style="font-size: 17px;">Home</a></li>
					<li class="active"><a href="Recipes.php" style="font-size: 17px;" >Recipes</a></li>
					<li><a href="about.php" style="font-size: 17px;">About Us</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="welcome.php" style="font-size: 17px;"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
				 <li><a href="logout.php" style="font-size: 17px;"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
				</ul>
			  </div>
			</nav>


						<div class="slideshow-container">

									<div class="mySlides fade">
									  <div class="numbertext">1 / 3</div>
									  <img src="img/chocolate.jpg" style="width:100%" class="slidey">
									  <div class="text">Chocolate Cake</div>
									</div>

									<div class="mySlides fade">
									  <div class="numbertext">2 / 3</div>
									  <img src="img/homemade.jpg" style="width:100%" class="slidey">
									  <div class="text">Home Made Cakes</div>
									</div>

									<div class="mySlides fade">
									  <div class="numbertext">3 / 3</div>
									  <img src="img/g.jpeg" style="width:100%" class="slidey">
									  <div class="text">Chocolate Lava</div>
									</div>

									</div>
									<br>

									<div style="text-align:center">
									  <span class="dot"></span>
									  <span class="dot"></span>
									  <span class="dot"></span>
									</div>



								<div>
								<p class="text"> Please Choose the recipe you like</p>
								<figure class="images">

						<a href="crossiant.php">  <img class="imge" src="img/cross.jpg" alt="Crossiant" title="Crossiant" width="180" height="180"/></a>
					 <a href="cupcake.php"> <img class="imge" src="img/cupcake.jpg" alt="CupCake" title="CupCake" width="180" height="180"/></a>
					 <a href="crepe.php"><img class="imge" src="img/crepe.jpg" alt="Crepe" title="Crepe" width="180" height="180"/></a>
						<a href="fudge.php"><img class="imge" src="img/fudge.jpg" alt="Chocolate fudge cake" title="fudge cake" width="180" height="180"/></a>
								  <br>
					<a href="swirl.php"><img class="imge" src="img/swirl.jpg" alt="Swirl cake" title="swirl cake" width="180" height="180"/></a>
					<a href="mint.php"><img class="imge" src="img/pudding.jpg" alt="Chocolate Mint Pudding" title="Chocolate Mint Pudding" width="180" height="180"/></a>
					<a href="muffin.php"><img class="imge" src="img/muffin.jpg" alt="Gingerbread Pear Muffins" title="Gingerbread Pear Muffins" width="180" height="180"/></a>

					<a href="choco.php"><img class="imge" src="img/cookies.jpg" alt="Chocolate chip cookies" title="Chocolate chip cookies" width="180" height="180"/></a>






								</figure>




								</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 5 seconds
}
</script>



	 </body>





</html>
