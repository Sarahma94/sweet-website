<?php
session_start();


?>


<!doctype html>
<html>
	<head>
	<title> Sweet Recipes  </title>
	 <meta charset="UTF-8"/>
	   <meta name="viewport" content="width=device-width, initial-scale=1">
		 <link rel="stylesheet" type="text/css" href="css/style.css">

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
	@font-face {
	font-family: myFirstFont;
	src: url("tagetts.ttf");
}
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
		height: 108%;
			background-image: url("img/pink.jpg");
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;

		}

		footer{
			text-align: center;
			background-image: url("img/pink.jpg");
			background-size: cover;
			height: 5%;
			margin-top: -23px;




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
	h1{
		margin:10px;
		line-height: 1.5em;
		font-weight: bold;
		color: Deeppink;
		font-family: myFirstFont;


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

li{
	font-size: 17px;
}
.welcome{
	position: relative;
	left: 500px;
	top:12px;
	text-align: center;
	color: Deeppink;
	font-family: myFirstFont;
	line-height: 1.5em;
	font-weight: bold;
	}
	</style>
	<script>
	$(function() {
$(".imge-head")
.animate({ "height" : 300 })
.fadeOut()
.show(2000)
.animate({ "width" : 290 });
$(".welcome").hide(1500).show(500).animate({"width": 290});
$(".imge").on("mouseenter", function() {
	$(".imge").animate({ "height" : 350, "width": 350 });

}).on("mouseleave", function(){

	$(".imge").animate({ "height" : 290, "width": 290 });

});
$(".imge-head").on("mouseenter", function() {
	$(".imge-head").animate({ "height" : 400, "width": 400 });

}).on("mouseleave", function(){

	$(".imge-head").animate({ "height" : 290, "width": 290 });

});

});
</script>





	 </head>

	 <body>
	 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Sweets Recipes</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#" style="font-size: 17px;">Home</a></li>
			<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" style="font-size: 17px;" href="Recipes.html">Recipes
		<span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li><a href="cupcake.php">Cupcake</a></li>
			<li><a href="crepe.php">Crepe</a></li>
			<li><a href="crossiant.php">Crossiant</a></li>
		</ul>
	</li>
      <li><a href="about.php" style="font-size: 17px;">About Us</a></li>
			<li ><a href="#contact">Contact Us</a></li>

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
			<h1 class="welcome"> Welcome To Our Website</h1>



</div>

	<figure class="images">
	<a href="crossiant.php">  <img class="imge" src="img/cross.jpg" alt="Crossiant" title="Crossiant" width="290" height="290"/></a>
	 <a href="cupcake.php"> <img class="imge" src="img/cupcake.jpg" alt="CupCake" title="CupCake" width="290" height="290"/></a>
	  <a href="crepe.php"><img class="imge" src="img/crepe.jpg" alt="Crepe" title="Crepe" width="290" height="290"/></a>
	  <figcaption class="figcapt">
			<h1>Our Most Enjoyable Recipes</h1>
	  </figcaption>



	</figure>


			<div class="bg-down">
				<div id="contact">
				<div class="container">
					<div class="col-md-8">
						<div class="row">
							<div class="section-title">
								<h2>Get In Touch</h2>
								<p>Please fill out the form below to send us an email and we will get back to you as soon as possible.</p>
							</div>
							<form name="sentMessage" id="contactForm" action="contact_me.php" method="post" novalidate>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" id="name" class="form-control" placeholder="Name" required="required">
											<p class="help-block text-danger"></p>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="email" id="email" class="form-control" placeholder="Email" required="required">
											<p class="help-block text-danger"></p>
										</div>
									</div>
								</div>
								<div class="form-group">
									<textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
									<p class="help-block text-danger"></p>
								</div>
								<div id="success"></div>
								<button type="submit" class="btn btn-custom btn-lg">Send Message</button>
							</form>
						</div>
					</div>
					<div class="col-md-3 col-md-offset-1 contact-info">
						<div class="contact-item">
							<h3>Contact Info</h3>
							<p><span><i class="fa fa-map-marker"></i> Address</span>Libya,Tripoli<br>
							UOT, IT college</p>
						</div>
						<div class="contact-item">
							<p><span><i class="fa fa-phone"></i> Phone</span> +218 983 89 399</p>
						</div>
						<div class="contact-item">
							<p><span><i class="fa fa-envelope-o"></i> Email</span> sweetrecipe@gmail.com</p>
						</div>
					</div>
					<div class="col-md-12">
						<div class="row">
							<div class="social">
								<ul>
									<li><a href="www.facebook.com"><i class="fa fa-facebook"></i></a></li>
									<li><a href="www.twitter.com"><i class="fa fa-twitter"></i></a></li>
									<li><a href="www.google.com"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="www.youtube.com"><i class="fa fa-youtube"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<footer>


				<p>Copyright &copy; 2018 <a href="index.html">Sweets Website</a> All rights reserved | Website By <a target="_blank" href="sarahalm462@gmail.com">Sarah Alm</a></p>

	</footer>



	</div>





	 </body>





</html>
