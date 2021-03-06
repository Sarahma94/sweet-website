<?php
session_start();

 ?>
<!doctype html>
<html>
	<head>
	<title> Chocolate chip cookies </title>
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
		height:915px;
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
	       <a href="#"><img class="image" src="img/cookies.jpg" alt="Gingerbread Pear Muffins" title="Gingerbread Pear Muffins" width="380" height="380"/></a>
				</div>


			<div class="ingrident">
				<h3 style="color:brown;">Ingredients</h3>
					3/4cup granulated sugar<br>
					3/4 cup packed brown sugar<br>
					1 cup butter, softened<br>
					1 teaspoon vanilla<br>
					1 egg<br>
					2 1/4 cups Gold Medal™ all-purpose flour<br>
					1 teaspoon baking soda<br>
					1/2 teaspoon salt<br>
					1 package (12 ounces) semisweet chocolate chips (2 cups)<br>




			</div>
			</br>

			<div class="time">

			Prep:45min ,  Cook:45min  ,  Serves: 48
			</div>
			<br/>

			<div class="preparation">
				<h3 style="color:brown;">Preparation</h3>
			Heat oven to 375ºF.
			In large bowl, beat granulated sugar, brown sugar, butter, vanilla and egg with electric mixer on medium speed or mix with spoon until well blended.
			Stir in flour, baking soda and salt (dough will be stiff). Stir in chocolate chips and nuts.
			Drop dough by rounded tablespoonfuls about 2 inches apart onto ungreased cookie sheet.

			Bake 8 to 10 minutes or until light brown (centers will be soft). Cool 1 to 2 minutes; remove from cookie sheet. Cool on wire rack.
			<br><br>
			<strong> Tips: </strong>
			* Use a 1-inch meatball scooper (or a #16 cookie/ice cream disher) to make consistently round cookies.<br>
			* Make monster cookies—use a larger scoop and press candy-coated pieces into the dough or stir in bits of chopped mini peanut butter cups.
			</div>
      <a title="click this button to download the recipe"   class="download" href="recipes_download/The chocolate chip cookies.pdf"> Download</a>


			</div>









	 </body>





</html>
