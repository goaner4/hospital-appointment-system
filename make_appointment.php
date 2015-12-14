<?php
//Start the session
session_start();
include_once 'Server_connection.php';

if(!isset($_SESSION['user']))
{
 header("Location: index.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
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
						<h2 class="headline">Appointment Form</h2>
					</div>
					<div class="row">
						<div class="sub-headline">
							<p></p>
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
    <form method="post" action="send_appointment.php">
                            <div class="col-md-6">
									<div class="form-group">
										<label>First Name</label>
										<input type="text" name="fname" class="form-control" placeholder="Your name">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Last Name</label>
										<input type="text" name="lname" class="form-control" placeholder="Your name">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Age</label>
										<input type="text" name="age" class="form-control" placeholder="Your age">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Adress</label>
										<input type="text" name="adress" class="form-control" placeholder="Your adress">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Contact</label>
										<input type="text" name="contact" class="form-control" placeholder="Your contact">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Email</label>
										<input type="email" name="email" class="form-control" placeholder="Your email adress">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Appointment Date</label>
										<input type="text" name="date" class="form-control" placeholder="Your Date">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Are You Humain?</label>
										<input type="text" name="humain" class="form-control" placeholder="Are You Humain?">
									</div>
								</div>
								<div class="form-group">
								<label>Nature of the problem</label>
								<textarea class="form-control" name="nature" id="nature" placeholder="Write you message here..." style="height:100px;"></textarea>
							</div>

                            <center><button type="submit" class="btn btn-primary">Send Message</button></center>
                </form>
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
		                        <h3>Quick Contact</h3>
		                        <span class="or">OR</span>
		                    </div>

							<!-- form of appointment -->
							<div class="row">
								<form method="post" action="#">
									<div class= "form">
										<div class="input-group margin-bottom-sm col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
										 	<p>
										<i class="fa fa-home"></i> 
										<span>Full Address:</span> 
										plot 23, luwuum street kampala Uganda
									</p>
										</div>
										<div class="input-group margin-bottom-sm col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
										 	<p>
										<i class="fa fa-phone"></i>
										<span>Cell No:</span>
										 +256 759940083
									</p>
										</div>
										<div class="input-group margin-bottom-sm col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
										 	<p>
										<i class="fa fa-fax"></i> 
										<span>Fax No:</span>
										+58 - 0123456789
									</p>
										</div>
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
