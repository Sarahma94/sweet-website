<?php
include "dbconfig.php";

session_start();
?>
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
  <script>
     var check = function() {
  if (document.getElementById('pwd1').value ==
    document.getElementById('pswcon').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}

	function yellow(x){
	x.style.background= "yellow";


	}

	function white(x){
	x.style.background= "white";


	}
	$(document).ready(function(){
		$("#pwd1").keyup(function() {
			if($("#pwd1").val().length < 6){
				$("#message").text("Weak Password").css("color","red");
			}
			else if($("#pwd1").val().length   < 8){
				$("#message").text("Good Password").css("color","green");



			} else {
				$("#message").html("Strong Password").css("color","blue");


			}
});


	});

    </script>


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
		height:580px;
		border-radius:20px;
		margin-left: auto;
		margin-right: auto;
		padding: 30px;
		margin-bottom:20px;
		background-color: #ffffff;

		}
    footer
    {
      position: absolute;
      bottom: 0px;
      left: 30%;
      height: 5%;
      float: left;
      font-size: 16px;




    }
    .searche{
      margin-top: 8px;
    	width: 70px;
    	height:38px;
    	margin-left: -5px;
    	border-radius: 10px;

    }
    .search_field{
      margin-top: 8px;

    	border-radius: 10px;
      height: 38px;
    }
    li{
      font-size: 17px;
    }

     td {
        border-bottom: 1px solid #ddd;

    padding: 15px;

    }
    h2{
      color: DeepPink ;
    }
    hr{
height: -5%;   }

.info{
  border: 1px solid lightgray;
  border-radius: 10px;
  padding: 12px;
  display: block;

}
.title{
  color: DeepPink;
}
.edit{
  display: block;
  float: left;
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
				  <li><a href="Recipes.php" style="font-size: 17px;">Recipes</a></li>
				  <li><a href="about.php" style="font-size: 17px;">About Us</a></li>
          <li><a href="contact.php" style="font-size: 17px;" >Contact Us</a></li>
        <li>    <form action="search.php" method='GET'>
              <input class="search_field" type="text" placeholder="Search.." name="search">
              <i ><input class="searche" type="submit" name="submit"></i>
            </form></li>
          </ul>
				<ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="welcome.php" style="font-size: 17px;"><span class="glyphicon glyphicon-user"></span>Profile</a></li>

				  <li ><a href="logout.php" style="font-size: 17px;"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
				</ul>
			  </div>
			</nav>

						<div class="form1">


              <form class="form-horizontal" action="edit.php" method="post">
    					<fieldset><legend>Update your Information</legend>

    						 <div class="form-group">
    							<label class="control-label col-sm-2" for="name">*Name:</label>
    							<div class="col-sm-10">
    								<input type="text" class="form-control" id="name" name="uname" onfocus="yellow(this)" onblur="white(this)" placeholder="Please Enter Your Name" required>
    							</div>
    					  </div>
    					   <div class="form-group">
    							<label class="control-label col-sm-2" for="age">Age:</label>
    							<div class="col-sm-10">
    								<input type="number" class="form-control" id="age" name="uage" onfocus="yellow(this)"   onblur="white(this)" placeholder="Please Enter Your Age">
    							</div>
    					  </div>

               <div class="form-group">
                 <label class="control-label col-sm-2" for="pwd1">*New Password:</label>
                 <div class="col-sm-10">
         <input type="password" class="form-control" id="pwd1" name="newpass" onfocus="yellow(this)"  onblur="white(this)" placeholder="Please Re-enter Your Password" onkeyup='check();'  required>
             <span id='message'></span>
                 </div>
               </div>
               <div class="form-group">
                 <label class="control-label col-sm-2" for="pswcon">*Confirm new Password:</label>
                 <div class="col-sm-10">
         <input type="password" class="form-control" id="pswcon" name="confirmpass" onfocus="yellow(this)"  onblur="white(this)" placeholder="Please Re-enter Your Password" onkeyup='check();'  required>
                 </div>
               </div>





    					  <div class="form-group">
    						<div class="col-sm-offset-2 col-sm-10">
    						  <button type="submit" name="update" class="btn btn-default">Update</button>
    						</div>
    					  </div>
    					  <div class="form-group">
    						<div class="col-sm-offset-2 col-sm-10">
    						  <button type="reset" class="btn btn-default">Reset</button>
    						</div>
    					  </div>

    					  	  <img class="imge" src="img/kiss.png" alt="cake" width="90" height="90" style="margin-top:50px;"/>
    						  </fieldset>

    					</form>







            </div>



                   <footer>


                     <p><small>Copyright &copy; 2018 <a href="index.html">Sweets Website</a> All rights reserved | Website By <a target="_blank" href="sarahalm462@gmail.com">Sarah Alm</a></small></p>

                </footer>
              </body>


        </html>
