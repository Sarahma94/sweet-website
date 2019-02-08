<?php
session_start();

 ?>
<!doctype html>
<html>
	<head>
	<title> Chocolate Fudge Cake </title>
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
		height:930px;
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
		padding: 10px;
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
		height:340px;
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
	       <a href="#"><img class="image" src="img/fudge.jpg" alt="Gingerbread Pear Muffins" title="Gingerbread Pear Muffins" width="380" height="380"/></a>
				</div>


			<div class="ingrident">
				<h3 style="color:brown;">Ingredients</h3>
				2 cups (500 mL) all-purpose flour<br>
				1 cup (250 mL) cocoa powder<br>
				1 1/4 tsp (6 mL) baking soda<br>
				3/4 cup (180 mL) Butter, at room temperature<br>
				2/3 cup (160 mL) <br>
				3/4 cup (180 mL) brown sugar<br>
				2 eggs<br>
				1 1/2 cups (375 mL) Milk<br>
				1 tbsp (15 mL) white vinegar<br>
				2 tsp (10 mL) vanilla extract<br>


			</div>
			</br>

			<div class="time">
			Prep. Time:45mins	,  Cooking Time:30 mins   ,	 Serves:16		</div>
			<br/>

			<div class="preparation">
				<h3 style="color:brown;">Preparation</h3>
					Preheat oven to 350ºF (180ºC). Line the bottoms of two 9-inch (23 cm) round cake pans with parchment paper.
					Butter  paper and sides of pans. Dust with flour. Turn pans over and tap to remove excess flour.

			Sift together flour, cocoa and baking soda. Set aside.

		Cream butter and sugars at medium speed until light and fluffy.

			Add the eggs one at a time, beating well after each addition and scraping down the sides of the bowl.

			In another bowl, combine milk, vinegar and vanilla.

			Fold in one third of the flour mixture. Add half the milk and combine gently. Repeat,
			then finish with the remaining flour. Divide the batter equally between the prepared pans.

			Bake until a paring knife inserted in the centre comes out clean, about 30 minutes.

			Transfer pans to wire racks and cool 10 minutes. Remove cake from pans, peel off parchment paper
			and place directly on racks to cool completely. Slice each cake horizontally into 2 equal layers.
			</div>
      <a title="click this button to download the recipe"   class="download" href="recipes_download/Chocolate Fudge Cake.pdf"> Download</a>


			</div>









	 </body>





</html>
