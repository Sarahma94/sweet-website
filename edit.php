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



      <?php


session_start();
include "dbconfig.php";


  try{
    $name = $_POST['uname'];
    $age=$_POST['uage'];
    $email = $_SESSION['email'];
    $newpass= $_POST['newpass'];
    $conpass= $_POST['confirmpass'];

    $query = "UPDATE `user` SET username= '$name' , age ='$age',password= '$newpass',confirm= '$conpass' WHERE `email`= '".$email."' ";
    $stmt = $DB_con->prepare($query);

    if($stmt->execute()){
        echo "<div class='alert alert-success'>
  <strong>Success!</strong> User Updated Successfully
</div>";
$query = " SELECT * FROM `user` WHERE `email` = '".$email."'And `password` = '". $newpass."' ";
$con = mysqli_connect('localhost','root','','sweet website');

    $result = mysqli_query($con,$query);
    //$rowSelected   = mysqli_num_rows($result);

  if ( mysqli_num_rows($result)== 1 ) {
    $row= mysqli_fetch_assoc($result);
        //echo "Login Successful";

    $_SESSION['email']= $row['email'];
    $_SESSION['password']=$row['password'];
    $_SESSION['name']=$row['username'];
    $_SESSION['age']=$row['age'];

    echo "<a href='welcome.php'>Profile </a>";


}
        }

      }

      catch (Exception $ex)

         {

           die($ex->getMessage());
         }











 ?>


</form>







</div>



      <footer>


        <p><small>Copyright &copy; 2018 <a href="index.html">Sweets Website</a> All rights reserved | Website By <a target="_blank" href="sarahalm462@gmail.com">Sarah Alm</a></small></p>

   </footer>
 </body>


</html>
