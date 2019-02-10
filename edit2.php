<?php
  if($_POST['confirm']){
    $pass= $_POST['password'];
    $em= $_SESSION['email'];
    $query = " SELECT * FROM `user` WHERE `email` = '".$em."'And `password` = '". $pass."' ";
    $con = mysqli_connect('localhost','root','','sweet website');

        $result = mysqli_query($con,$query);
        //$rowSelected   = mysqli_num_rows($result);

      if ( mysqli_num_rows($result)== 1 ) {
        header("location:editprofile2.php");
      }

        else {

          echo "<script>alert('Invalid Password')</script>";
          header("location:editprofile.php");


        }


  }


 ?>
