<?php
session_start();

 ?>
 <!doctype html>
<html>
	<head>
	<title> CupCake </title>
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
		height:910px;
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
		height:320px;
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
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="welcome.php" style="font-size: 17px;"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
         <li><a href="logout.php" style="font-size: 17px;"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
				</ul>
			  </div>
			</nav>

			<div class="recipe">
				<div class="im">
	       <a href="#"><img class="image" src="img/ccup.jpg" alt="Gingerbread Pear Muffins" title="Gingerbread Pear Muffins" width="380" height="380"/></a>
				</div>


			<div class="ingrident">
				<h3 style="color:brown;">Ingredients</h3>
						110g softened butter</br>
						110g golden caster sugar</br>
						2 large eggs</br>
						½ tsp vanilla extract</br>
						110g self-raising flour</br>
						150g softened butter</br>
						300g icing sugar</br>
						1 tsp vanilla extract</br>
						3 tbsp milk</br>
						food colouring paste of your choice (optional)</br>


			</div>
			</br>

			<div class="time">

			Prep:20min   Cook:15min    Serves: 12
			</div>
			<br/>

			<div class="preparation">
				<h3 style="color:brown;">Preparation</h3>
					Heat oven to 180C/160C fan/gas 4 and fill a 12 cupcake tray with cases.
					Using an electric whisk beat the butter and sugar together until pale and fluffy then whisk in the eggs one at a time,
					scraping down the sides of the bowl after each addition. Add the vanilla, flour and a pinch of salt, whisk until just
					combined then spoon the mixture into the cupcake cases.Bake for 15 mins until golden brown and a skewer inserted into
					the middle of each cake comes out clean. Leave to cool completely on a wire rack.
					For the buttercream, whisk the butter until super soft then add the icing sugar,
					vanilla extract and a pinch of salt. Whisk together until smooth (start off slowly to avoid an icing sugar cloud) then beat in the milk.
					If wanting to colour, stir in the food colouring now. Spoon or pipe onto the cooled cupcakes.

			</div>
      <a title="click this button to download the recipe"   class="download" href="recipes_download/The Cupcake Recipe.pdf"> Download</a>

			</div>









	 </body>





</html>
