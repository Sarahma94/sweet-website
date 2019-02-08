<?php
session_start();

 ?>
<!doctype html>
<html>
	<head>
	<title> Crossiant </title>
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
		height:950px;
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
		height:345px;
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
	       <a href="#"><img class="image" src="img/cross.jpg" alt="Gingerbread Pear Muffins" title="Gingerbread Pear Muffins" width="380" height="380"/></a>
				</div>


			<div class="ingrident">
				<h3 style="color:brown;">Ingredients</h3>
			1 1/4 teaspoons dried active baking yeast</br>
			3 tablespoons warm water (45 degrees C)</br>
			160ml warm milk</br>
			2 tablespoons vegetable oil</br>
			1/2 teaspoon caster sugar</br>
			220g plain flour</br>
			2 teaspoons caster sugar</br>
			1 1/2 teaspoons salt</br>
			150g unsalted butter, chilled</br>
			1 egg</br>
			1 tablespoon water</br>


			</div>
			</br>

			<div class="time">

			Prep:45min |  Cook:12min |   Extra time: 7hr23min  |  Ready in:8hr20min
			</div>
			<br/>

			<div class="preparation">
				<h3 style="color:brown;">Preparation</h3>
			Proof the yeast in the warm water and set aside.
			Beat egg yolks,stir in warm milk,sugar,salt, yeast mixture,and 2/3cup of the flour.
				Beat until smooth and set aside.
				Cut butter into remaining flour until particles are the size of LARGE PEAS.
				Pour in yeast mixture.
				Mix lightly with a spatula just until flour is moistened.
				Cover and chill at least 2 hours or up to 3 days.
				IT MUST BE COLD WHEN ROLLING OUT. If it gets too warm and the butter starts to melt, fold into thirds and refrigerate for 30 minutes.
				Turn out onto a floured board and knead lightly.
				Divide into thirds.
				Roll each into 16 inch diameter circle and cut into 12 pie shaped wedges.
				Roll wedges starting at the wide end.
				Place point side down on a greased baking sheet.
				Cover with towel and let rise at room temperature until doubled.
				Brush each with beaten egg white.
				Bake in a 375 degree oven for about 20 minutes.
				Serve warm or re-heat in low oven-- do not microwave.
				Makes 36 small, but you can make as big as you want.

			</div>
      <a title="click this button to download the recipe"   class="download" href="recipes_download/The croissant recipe.pdf"> Download</a>

			</div>










	 </body>





</html>
