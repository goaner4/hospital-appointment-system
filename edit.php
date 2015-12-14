<?php
include ("connection.php");

$strquery = "SELECT * from apointment where id= '" . $_GET["id"] . "' ";
$results = mysql_query ($strquery);
$row = mysql_fetch_array($results);

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




    <section class= "navs">
      <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo" href="#">
                  Hospital Appointment
                </a>
            </div>
    
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                  <li><a href="admin.php">Home</a></li>
              <li><a href="apointment_view.php">Appointment View</a></li>
                  <li><a href="#">About View</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="logout.php?logout">Log Out</a></li>
            </li>
                </ul>
            </div><!-- navbar-collapse -->
        </div><!-- container-fluid -->
      </nav>
    </section>

    <!-- end  of the header-->

    <section class="contact-title text-center">
      <div class="contact-wrapper">
        <div class="container">
          <div class= "row">
            <div>
              <h1 class="headline">Administration</h1>
            </div>
          </div>
          <div class="row">
            <div class="sub-headline">
              <p>DISPLAY DATA FROM THE DB DELETE AND EDITE </p>
            </div>
          </div>  
        </div>
      </div>
    </section>


    <section class="contact-content">
      <form id="form1" name="form1" method="get" action="update.php">
<label>
<h1 align="center">UPDATE YOUR DATABASE</h1>
<p align="center">&nbsp;</p>
<table width="200%" border="0" align="center">
  <tr>
    <td><strong>First Name:</strong></td>
    <td><input name="fname" type="text" id="fname" value=" <?php echo $row["fname"]; ?>" /></td>
  </tr>
  <tr>
    <td><strong>Second Name:</strong></td>
    <td><input name="secname" type="text" id="secname" value=" <?php echo $row["secname"]; ?>" /></td>
  </tr>
  <tr>
    <td><strong>Gender: </strong></td>
    <td><label>
      <input name="gender" type="text" id="gender" value=" <?php echo $row["gender"]; ?>" />
    </label>
      <input name="id" type="hidden" id="section2"  value=" <?php echo $row["id"]; ?>" /></td>
  </tr>
  <tr>
    <td><strong>Course Unit:</strong></td>
    <td><input name="course_unit" type="text" id="course_unit" value=" <?php echo $row["course_unit"]; ?>" /></td>
  </tr>
  <tr>
    <td><strong>Year Of Birth:</strong></td>
    <td><input name="year_of_birth" type="text" id="year_of_birth" value=" <?php echo $row["year_of_birth"]; ?>" /></td>
  </tr>
  <tr>
    <td><strong>Message:</strong></td>
    <td><input name="message" type="text" id="message" value=" <?php echo $row["message"]; ?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="Update" /></td>
  </tr>
</table>
<p align="center">&nbsp;</p>
<p>&nbsp;</p>
<p>
<label></label>
</p>
<p>&nbsp;</p>
</form>

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
