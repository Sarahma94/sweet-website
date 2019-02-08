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
          font-family: Verdana, sans-serif;


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
		height:1510px;
		border-radius:20px;
		margin-left: auto;
		margin-right: auto;
		padding: 30px;
		margin-bottom:20px;
		background-color: #ffffff;

		}
    footer
    {
      position: relative;
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
object
{
  border-radius: 10px;
color: black;
width: 620px;
height:300px;


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
              <body>
                <form method="post" action="upload.php" enctype="multipart/form-data">
                <table width="350" border="0" cellpadding="1" cellspacing="1" class="box">
                <tr>
                <td width="246">
                <input name="userfile" type="file"  id="userfile">
                </td>
                <td width="80"><input name="upload" class="btn btn-primary" type="submit" class="box" id="upload" value=" Upload "></td>
                </tr>

                <?php

                $dbname="sweet website";
                $servername="localhost";
                $password="";
                $dbuser="root";

                $conn= mysqli_connect($servername,$dbuser,$password,$dbname);
                $query = "SELECT * FROM upload ORDER BY id DESC";
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_array($result))
                {

                  $title = $row ['name'];
                  $url = $row ['content'];
                  $usern= $row['user_uploaded'];
                  echo " <p> Name: ".$title." </p>";
              echo ' <tr>
              <object data="data:application/pdf;base64,'.base64_encode($row['content'] ).'" type="application/pdf"></object>';
              echo "<br> Uploaded By User:".$usern."";
              echo "<hr>

              </tr>";


                }
                ?>
                </table>
                </form>



            </div>



                    <footer>


                      <p><small>Copyright &copy; 2018 <a href="index.html">Sweets Website</a> All rights reserved | Website By <a target="_blank" href="sarahalm462@gmail.com">Sarah Alm</a></small></p>

                 </footer>
              </body>


        </html>
