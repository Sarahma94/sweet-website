<?php
include "dbconfig.php";
?>


<!doctype html>
<html>
	<head>
	<title> SignUp Page  </title>
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
		font-size: 25px;

		}
		li{
			font-size: 17px;
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
					<li><a href="contact.html" >Contact Us</a></li>

				</ul>
				<ul class="nav navbar-nav navbar-right">
				  <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				  <li class="active"><a href="#" ><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			  </div>
			</nav>

				<div class="form1">

				<?php

				function test_input($data){
					$data = trim($data);
					$data= stripslashes($data);
					$data= htmlspecialchars($data);
					return $data;
				}
				try{
					$nameErr= $emailErr= $passwordErr= "";

					$name = $_POST['uname'];
					$age=$_POST['uage'];
					$email = $_POST['uemail'];
					$password = $_POST['password'];
					$conpass= $_POST['confirmpass'];

					if($_SERVER["REQUEST_METHOD"]=="POST"){
						if(empty($_POST['uname'])){
							$nameErr= "Name is Required";
						} else {
							$name= test_input($_POST['uname']);

						}
						if(empty($_POST['uemail'])){
							$emailErr= "Email is Required";
						} else {
							$email= test_input($_POST['uemail']);
							//check if email address is well formed
							if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
								$emailErr= "Invalid Email format";
							}

						}
						if(empty($_POST['uage'])){
							$age= "";
						} else {
							$age= test_input($_POST['uage']);

						}

						if(empty($_POST['password'])){
							$passwordErr= "Password is Required";
						} else {
							$password= test_input($_POST['password']);

						}

					}


				$query = "INSERT INTO `user` (username, age ,email, password,confirm) VALUES ('$name','$age','$email', '$password','$conpass' )";
				$stmt = $DB_con->prepare($query);

				if($stmt->execute()){
						echo "User Created Successfully.<br><br>";
						echo "Login in here: <a href='login.html'>Login</a>";
						}

					}


				 catch (Exception $ex)

						{
							if($ex->getCode() == 23000){
								echo "This Email Already Exists, Please Use A Different Email Address";
							}
							else {
							die($ex->getMessage());}
						}


				?>
				</div>

			</body>





</html>
