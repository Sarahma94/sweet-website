<?php
session_start();

 ?>
<!doctype html>
<html>
	<head>
	<title> Marble Cake </title>
	 <meta charset="UTF-8"/>
	 <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
  integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
			html,body{
		  font-family: Verdana, sans-serif;



	}
		.bg{

		background-image: url("img/pink.jpg");

  /* Full height */

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;


		}

		.recipe{
		flex: flex;
		width: 900px;
		height:880px;
		border-radius:20px;
		margin-left: auto;
		margin-right: auto;
		padding: 40px;
		margin-bottom:20px;
		background-color: #ffffff;


		}
		.im{
		float:left;

		}

		.image{
			border: 1px solid brown;
			border-radius:20px;



		}

		.ingrident{
		width:380px;
		height:380px;
		border: 1px solid brown;
			border-radius:20px;
			float:right;
			padding: 20px;
			font-size: 16px;
		}
		.time{
		width:800px;
		height:60px;
		border: 1px solid brown;
		padding: 20px;
		font-size: 16px;
		border-radius:20px;
		float:left;
		margin:20px;
		text-align: center;



		}
		.preparation{
		padding:20px;
		text-align:justify;
		float:left;
		font-size: 16px;
		border-radius:20px;
		width:800px;
		height:290px;
		border: 1px solid brown;



		}
    .download{
      float:right;
      text-decoration: none;
      border: 1px solid black;
      padding: 5px;
      background: #4CAF50;
      color: white;
      text-align: center;
      font-size:18px;
      margin:10px;
      width:120px;
      height:40px;
      border-radius: 10px;
    }
    .download:hover{
      color:  #4CAF50;
      background: white;


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
          <li><a href="contact.php" style="font-size: 17px;" >Contact Us</a></li>

				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="welcome.php" style="font-size: 17px;"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
				 <li><a href="logout.php" style="font-size: 17px;"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
				</ul>
			  </div>
			</nav>

			<div class="recipe">
				<div class="im">
	       <a href="#"><img class="image" src="img/marble.jpg" alt="Gingerbread Pear Muffins" title="Gingerbread Pear Muffins" width="380" height="380"/></a>
				</div>


			<div class="ingrident">
				<h3 style="color:brown;">Ingredients</h3>
					2 cups all-purpose flour<br/>

					2 tbsp  baking powder<br/>

					1/2 tsp  salt<br/>

					1/2 cup unsalted butter, at room temperature <br/>

					1 white sugar<br/>

					2 eggs<br/>

					1 tsp vanilla<br/>

					1 cups milk<br/>

					2 tablespoons unsweetened cocoa powder<br/>




			</div>
			</br>

			<div class="time">

			Prep:20min ,  Cook:35min  ,  Serves: 8
			</div>
			<br/>

			<div class="preparation">
				<h3 style="color:brown;">Preparation</h3>
				Preheat oven to 350 degrees F (175 degrees C). Grease and flour a 9 inch round pan.
Place flour, baking powder, salt, sugar, butter or margarine, eggs, vanilla, and milk into mixing bowl. Beat slowly to moisten, then beat with an electric mixer at medium speed for about 2 minutes until smooth. Reserve 3/4 cup batter; pour the remainder into pan.
Stir cocoa into the 3/4 cup reserved batter. Drop by spoonfuls over top of white batter. Using a knife, swirl the cocoa batter into the white batter to incorporate it in a marble effect.
Bake in preheated oven for 30 to 35 minutes, until an inserted wooden pick comes out clean.
			</div>
      <a title="click this button to download the recipe"   class="download" href="recipes_download/The Marble.pdf"> Download</a>

			</div>









	 </body>





</html>
