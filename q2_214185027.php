<?php
$conn = mysqli_connect("localhost","root","","itemsdb");

 if (isset($_POST['enter'])) {

$number = $_POST['no'];
$name= $_POST['name'];
$price= $_POST['price'];

$sql= "INSERT INTO `items` (itemno, itemname, itemprice) VALUES ('$number', '$name', '$price')";

$result = mysqli_query($conn, $sql);

if($conn)
echo "Successful insert";

else {
  echo "Error".mysqli_error($conn);
}



 }

 mysqli_close($conn);


 ?>
