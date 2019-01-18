<?php
session_start();


?>


<!doctype html>
<html>
	<head>
	<title> Sweet Recipes  </title>
	 <meta charset="UTF-8"/>
	   <meta name="viewport" content="width=device-width, initial-scale=1">
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/bootstrap-reboot.css"
	integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/jquery.min.js"></script>

	<style>
	html,body{
		  height: 100%;
		 font-family: Verdana, sans-serif;



	}
		.bg{
		margin-top:-20px;
		background-image: url("img/pink.jpg");

  /* Full height */
  height: 48%;
  background-position: -200px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;


		}

		.bg-down{
		margin-bottom:0px;
			background-image: url("img/pink.jpg");
			height: 15%;
			background-position: center;
		  background-repeat: no-repeat;
		  background-size: cover;

		}

	.images{
	margin:100px;
	padding:20px;


	}
	.imge {
	margin-left: 70px;
		border-radius: 400px;
		border: 1px solid #5E3F43;



	}
	.imge-head{
		margin-top: 10px;

		margin-left: 500px;;
		border-radius: 500px;


	}
	p {
	margin:10px;
	color:#5E3F43;

	}
	.h2{
		margin:10px;


	}
	.figcapt{
	text-align:center;
	margin:10px;
	color:#5E3F43;
	}

.topnav {
  overflow: hidden;
  background-color: ;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color:;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 50px;
  background: white;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: lift;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: lift;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 2px solid #ccc;
  }
}
.searche{
	width: 70px;
	height:38px;
	margin-left: -5px;
	border-radius: 10px;

}
.search_field{
	border-radius: 10px;
}
	</style>


	 </head>

	 <body>
	 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Sweets Recipes</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#" style="font-size: 17px;">Home</a></li>
      <li><a href="Recipes.php" style="font-size: 17px;">Recipes</a></li>
      <li><a href="about.php" style="font-size: 17px;">About Us</a></li>
	  <div class="topnav">

  <div class="search-container">
    <form action="search.php" method='GET'>
      <input class="search_field" type="text" placeholder="Search.." name="search">
      <i ><input class="searche" type="submit" name="submit"></i>
    </form>
    </ul>
    <ul class="nav navbar-nav navbar-right">
			<li><a href="welcome.php" style="font-size: 17px;"><span class="glyphicon glyphicon-user"></span>Profile</a></li>

      <li><a href="logout.php" style="font-size: 17px;"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>

<div class="bg">
		  <img class="imge-head" src="img/logo.jpg" alt="Chef" width="290" height="290"/>


</div>

	<figure class="images">
	<a href="crossiant.php">  <img class="imge" src="img/cross.jpg" alt="Crossiant" title="Crossiant" width="290" height="290"/></a>
	 <a href="cupcake.php"> <img class="imge" src="img/cupcake.jpg" alt="CupCake" title="CupCake" width="290" height="290"/></a>
	  <a href="crepe.php"><img class="imge" src="img/crepe.jpg" alt="Crepe" title="Crepe" width="290" height="290"/></a>
	  <figcaption class="figcapt">
			<h2>Our Most Enjoyable Recipes</h2>
	  </figcaption>



	</figure>

	<div class="bg-down">
	<p><h2 class="h2"> Contact us:</h2></p>
	<p> Our Email: <a>SweetGroups@gmail.com</a></p>
	<p> Our Telephone: 092 98376587</p>


	</div>





	 </body>





</html>
