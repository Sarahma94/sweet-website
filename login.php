<?php
include "dbconfig.php";
session_start();

?>
<!doctype html>
<html>
	<head>
	<title> Login Page  </title>
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
		height:340px;
		border-radius:20px;
		margin-left: auto;
		margin-right: auto;
		padding: 30px;
		margin-bottom:20px;
		background-color: #ffffff;

		.logout{

			border: 1px solid brown;
			padding: 5px;
		}

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
				  <li class="active"><a href="login.html" ><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			  </div>
			</nav>

				<div class="form1">

					<?php
					if($_POST['login']){
					$txtEmail= $_POST['uemail'];
					 $pwd= $_POST['password'];
						$query = " SELECT * FROM `user` WHERE `email` = '".$txtEmail."'And `password` = '". $pwd."' ";
						$con = mysqli_connect('localhost','root','','sweet website');

								$result = mysqli_query($con,$query);
								//$rowSelected   = mysqli_num_rows($result);

							if ( mysqli_num_rows($result)== 1 ) {
								$row= mysqli_fetch_assoc($result);
										//echo "Login Successful";

								$_SESSION['email']=$txtEmail;
								$_SESSION['password']=$pwd;
								$_SESSION['name']=$row['username'];
								$_SESSION['age']=$row['age'];






								header("location: welcome.php");

						}else {
									echo "<script>alert('Invalid Email or Password')</script>";
									$error = "<h3>Email or Password is invalid</h3>";
									echo $error;
									echo "<h4><a href='login.html'> Try Again</a></h4>";

									}

						mysqli_close($con);

					}

					?>







				</div>

			</body>

</html>
