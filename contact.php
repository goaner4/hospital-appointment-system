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

		<section class="contact-title text-center">
			<div class="contact-wrapper">
				<div class="container">
					<div class= "row">
						<div>
							<h1 class="headline">Contact us</h1>
						</div>
					</div>
					<div class="row">
						<div class="sub-headline">
							<p>Contact us incase of any inquiries,comments or emergencies. </p>
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
    <form method="post" action="send_contact.php">
                            <label>Full Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" name="fname" size="60" id="name" required data-validation-required-message="Please enter your name."></br></br>
                            <label>Phone Number:</label>&nbsp;&nbsp;&nbsp;
                            <input type="tel" name="phone" size="60" id="phone" required data-validation-required-message="Please enter your phone number."></br></br>
                            <label>Email Address:</label>&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="email" name="email" id="email" size="60" required data-validation-required-message="Please enter your email address."></br></br>
                            <label>Message:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <textarea rows="10" cols="59" name="message" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea></br></br>
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
