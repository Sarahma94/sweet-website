<!doctype html>
<html>
      <head>
        <title> </title>
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
			.form1{
		width: 900px;
		height:380px;
		border-radius:20px;
		margin-left: auto;
		margin-right: auto;
		padding: 30px;
		margin-bottom:20px;
		background-color: #ffffff;
		
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
				  <li ><a href="index.html">Home</a></li>
				  <li><a href="Recipes.html">Recipes</a></li>
				  <li><a href="about.html">About Us</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				  <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				  <li class="active"><a href="#" ><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			  </div>
			</nav>
			
						<div class="form1">
						
						<?php
							include('session.php');
							?>
						

	  <h1>
	  
	  Welcome
	  </h1>
	  
						<?php
						echo $login_session;
							?>
	  
	  
	  <a href="logout.php">Logout</a>
	  
	  </div>
      </body>


</html>
