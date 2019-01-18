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
		height:600px;
		border-radius:20px;
		margin-left: auto;
		margin-right: auto;
		padding: 30px;
		margin-bottom:20px;
		background-color: #ffffff;

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
				</ul>
				<ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="welcome.php" style="font-size: 17px;"><span class="glyphicon glyphicon-user"></span>Profile</a></li>

				  <li ><a href="logout.php" style="font-size: 17px;"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
				</ul>
			  </div>
			</nav>

						<div class="form1">






<?php
$button = $_GET ['submit'];
$search = $_GET ['search'];

if(!$button)
echo "you didn't submit a keyword";
else
{
if(strlen($search)<=1)
echo "Search term too short";
else{
echo "You searched for <b>$search</b> <hr size='1'></br>";
$dbname="sweet website";
$servername="localhost";
$password="";
$dbuser="root";

$conn= mysqli_connect($servername,$dbuser,$password,$dbname);

$search_exploded = explode (" ", $search);

foreach($search_exploded as $search_each)
{


  $construct ="keywords LIKE '%$search_each%' OR title LIKE '%$search_each%' ";



}


$q ="SELECT * FROM search_sweets WHERE $construct";
$run = mysqli_query($conn,$q);

$foundnum = mysqli_num_rows($run);

if ($foundnum==0){
  echo "Sorry, there are no matching result for <b>$search</b>.</br></br>1.
Try more general words. for example: If you want to search 'how to create a website'
then use general keyword like 'create' 'website'</br>2. Try different words with similar
 meaning</br>3. Please check your spelling";}

else
{
echo "$foundnum results found !<p><br><hr>";

while($runrows = mysqli_fetch_assoc($run))
{
$title = $runrows ['title'];
$desc = $runrows ['description'];
$url = $runrows ['url'];

echo "
<a href='$url'><b>$title</b></a><br>
$desc<br>
<br><br><hr>
";

}
}

}
}

?>

</div>
  </body>


</html>
