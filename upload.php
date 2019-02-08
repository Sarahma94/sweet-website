<?php
session_start();
if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
{
$fileName = $_FILES['userfile']['name'];
$tmpName = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];
$user= $_SESSION['name'];

$fp = fopen($tmpName,"r");
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);

$fileName = addslashes($fileName);

$dbname="sweet website";
$servername="localhost";
$password="";
$dbuser="root";

$conn= mysqli_connect($servername,$dbuser,$password,$dbname);

$query = "INSERT INTO upload (name, type, size, content,user_uploaded ) VALUES ('$fileName', '$fileType', '$fileSize', '$content','$user')";
if(mysqli_query($conn, $query))
{
     echo '<script>alert("File Inserted into Database")</script>';
     header("Location:uploadpage.php");
}
else {
  echo "Something went wrong<br>".mysqli_error($conn);
}

}
?>
