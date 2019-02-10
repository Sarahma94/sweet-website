<!DOCTYPE html>
<html lang="en">
<head>
<title>
  Example
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet">

<style>

  .bg{

  background-image: url("img/pink.jpg");

/* Full height */
height: 100%;

/* Center and scale the image nicely */
background-position: center;
background-repeat: no-repeat;
background-size: cover;


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
  li {
    font-size: 17px;
  }
/* Contact Section */
#contact {
	padding: 100px 0 60px 0;
	background: url("pink.jpg");
	color: rgba(255,255,255,.75);
}
#contact .section-title {
	margin-bottom: 40px;
}
#contact .section-title p {
	font-size: 16px;
}
#contact h2 {
	color: #fff;
	margin-top: 10px;
	margin-bottom: 15px;
	padding-bottom: 15px;
}
#contact .section-title h2::after {
	position: absolute;
	content: "";
	background: rgba(255,255,255,.3);
	height: 4px;
	width: 60px;
	bottom: 0;
	left: 30px;
}
#contact h3 {
	color: #fff;
	margin-top: 80px;
	margin-bottom: 25px;
	padding-bottom: 20px;
	font-weight: 400;
}
#contact form {
	padding-top: 20px;
}
#contact .text-danger {
	color: #cc0033;
	text-align: left;
}
#contact .btn-custom {
	margin: 30px 0;
	background: transparent;
	border: 2px solid #fff;
}
#contact .btn-custom:hover {
	color: #1f386e;
	background: #fff;
}
label {
	font-size: 12px;
	font-weight: 400;
	font-family: 'Open Sans', sans-serif;
	float: left;
}
#contact .form-control {
	display: block;
	width: 100%;
	padding: 6px 12px;
	font-size: 16px;
	line-height: 1.42857143;
	color: #444;
	background-color: #fff;
	background-image: none;
	border: 1px solid #ddd;
	border-radius: 0;
	-webkit-box-shadow: none;
	box-shadow: none;
	-webkit-transition: none;
	-o-transition: none;
	transition: none;
}
#contact .form-control:focus {
	border-color: #999;
	outline: 0;
	-webkit-box-shadow: transparent;
	box-shadow: transparent;
}
.form-control::-webkit-input-placeholder {
color: #777;
}
.form-control:-moz-placeholder {
color: #777;
}
.form-control::-moz-placeholder {
color: #777;
}
.form-control:-ms-input-placeholder {
color: #777;
}
#contact .contact-item {
	margin: 20px 0;
}
#contact .contact-item span {
	color: rgba(255,255,255,1);
	margin-bottom: 10px;
	display: block;
}
#contact .contact-item i.fa {
	margin-right: 10px;
}
#contact .social {
	border-top: 1px solid rgba(255,255,255,0.15);
	padding-top: 50px;
	margin-top: 50px;
	text-align: center;
}
#contact .social ul li {
	display: inline-block;
	margin: 0 20px;
}
#contact .social i.fa {
	font-size: 22px;
	width: 48px;
	height: 48px;
	padding: 12px 0;
	border: 2px solid #fff;
	color: #fff;
	border-radius: 50%;
	transition: all 0.3s;
}
#contact .social i.fa:hover {
	color: #608dfd;
	background: #fff;}
</style>
</head>
<body class="bg">
   <nav class="navbar navbar-inverse">
     <div class="container-fluid">
     <div class="navbar-header">
       <a class="navbar-brand" href="#">Sweets Recipes</a>
     </div>
     <ul class="nav navbar-nav">
       <li ><a href="index.php">Home</a></li>
       <li ><a href="Recipes.php" >Recipes</a></li>
       <li><a href="about.php">About Us</a></li>
       <li class="active"><a href="#">Contact Us</a></li>

     </ul>
     <ul class="nav navbar-nav navbar-right">
       <li><a href="welcomw.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
       <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
     </ul>
     </div>
   </nav>
<div id="contact">
  <div class="container">
    <div class="col-md-8">
      <div class="row">
        <div class="section-title">
          <h2>Get In Touch</h2>
          <p>Please fill out the form below to send us an email and we will get back to you as soon as possible.</p>
        </div>
        <form name="sentMessage" id="contactForm" novalidate action="contact_me.php" method="post">
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


  <p><small>Copyright &copy; 2018 <a href="index.html">Sweets Website</a> All rights reserved | Website By <a target="_blank" href="sarahalm462@gmail.com">Sarah Alm</a></small></p>

</footer>


</body>
</html>
