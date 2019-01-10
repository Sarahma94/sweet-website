<?php
session_start();

 ?>


<!doctype html>
<html>
	<head>
	<title>About Us </title>
	 <meta charset="UTF-8"/>
	 	   <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
  integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	 <style>
			html,body{
		  height: 100%;
		  font-family: Verdana, sans-serif;


	}
		.bg{

		background-image: url("img/pink.jpg");

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;


		}

		p{color: white;
		font-size: 30px;
		float: left;
		margin:15px;
		padding: 20px;


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
          <li><a href="Recipes.php" style="font-size: 17px;" >Recipes</a></li>
          <li class="active"><a href="about.php" style="font-size: 17px;">About Us</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="welcome.php" style="font-size: 17px;"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
         <li><a href="logout.php" style="font-size: 17px;"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
				</ul>
			  </div>
			</nav>
			<p> We are two young programming students who are aiming<br> to become chefs and bring the best of our experiences as<br> both developers
			and chefs to all the world. </p>

			<img src="img/cloud.png" width="200" height="200" style="float:right; margin:30px;"/>
			<img src="img/chef.png" width="200" height="300" style="float:right; margin:0px;"/>
			<img src="img/think.png" width="200" height="250" style="float:right; margin:-50px;"/>







	 </body>





</html>
