<?php
//Start the session
session_start();

include_once 'Server_connection.php';

if(isset($_SESSION['user'])!="")
{
 header("Location: make_appointment.php");
}
if(isset($_POST['btn-login']))
{
 $email = mysql_real_escape_string($_POST['email']);
 $upass = mysql_real_escape_string($_POST['pass']);
 $res=mysql_query("SELECT * FROM users WHERE email='$email'");
 $row=mysql_fetch_array($res);
 if($row['password']==md5($upass))
 {
  $_SESSION['user'] = $row['user_id'];
  header("Location: make_appointment.php");
 }
 else
 {
  ?>
        <script>alert('wrong details');</script>
        <?php
 }
 
}
?>

<!DOCTYPE html>

<html>

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="img/season-change.jpg" type="image/x-icon">
		<title>Hospital Appointment</title>

	    <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
	    <!-- <link href='http://fonts.googleapis.com/css?family=Pontano+Sans' rel='stylesheet' type='text/css'>
	    <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans:300,400,500,700' rel='stylesheet' type='text/css'> -->
	    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
	    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400,500,600' rel='stylesheet' type='text/css'>
	    
		
		<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/main.css">
		
	</head>

	<body>
		<!-- start of the header-->

<?php include_once ("header.php"); ?>

		<!-- end  of the header-->

		<section class="service-title text-center">
			<div class="service-wrapper">
				<div class="container">
					<div class= "row">
						<h2 class="headline">Log In</h2>
					</div>
					<div class="row">
						<div class="sub-headline">
							<p> </p>
						</div>
					</div>	
				</div>
			</div>
		</section>

		<section class="contact-content">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="google-map">
							<div id="map-canvas">

							</div>
						</div>
						<div class="quick-contact">
							
							<div class="row">
								<div class="col-md-6">
									
								</div>
								<div class="col-md-6">
									
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									
								</div>
								<div class="col-md-6">
									
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class= "appointment">
							
		                    <div class="header text-center">
		                        <h3>Login Form</h3>
		                    </div>

							<!-- form of appointment -->
							<div class="row">
								<form method="post">
									<div class= "form">
										<div class="input-group margin-bottom-sm col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
								<label>Email :</label></br>
<input id="name" type="text" size="30" name="email" placeholder="Your Email" required></br></br>

    <label>Password :</label></br>
<input id="password" type="password" size="30" name="pass" placeholder="Your Password" required>
</br></br>
    <center><input type="submit" name="btn-login" value=" Login ">
    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    	<a href="register.php">Sign Up</a></center>
		
										
									</div>
									
								</form>
							</div>
							<!-- end of form -->
						</div><!-- end of appointment-->
					</div>
				</div>
			</div>
		</section>


		<!--start of footer -->
<?php include_once("footer.php") ; ?>

		<!--start of footer -->

		<script type="text/javascript" src="assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
		<script type="text/javascript" src="assets/js/wow.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js"></script>
		
		<script>
	      function initialize() {
	        var mapCanvas = document.getElementById('map-canvas');
	        var mapOptions = {
	          center: new google.maps.LatLng(24.900392, 91.853181),
	          zoom: 16,
	          mapTypeId: google.maps.MapTypeId.ROADMAP
	        }
	        var map = new google.maps.Map(mapCanvas, mapOptions)
	      }
	      google.maps.event.addDomListener(window, 'load', initialize);
	    </script>

		<script>
      		new WOW().init();
		</script>


	</body>
</html>
