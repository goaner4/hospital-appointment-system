
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
                  <li><a href="admin.php">Admin</a></li>
              <li><a href="appointment_view.php">Appointment View</a></li>
                  <li><a href="#">About View</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Log Out</a></li>
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
      <h1 align="center">DISPLAY DATA FROM THE DB DELETE AND EDITE </h1>
<table width="1100" border="1" align="center">
<tr>
<td width="289"><strong>First Name</strong></td>
<td width="300"><strong>Last Name</strong></td>
<td width="214"><strong>Age</strong></td>
<td width="600"><strong>Adress</strong></td>
<td width="500"><strong>Contact</strong></td>
<td width="1000"><strong>Email</strong></td>
<td width="57"><strong> ID </strong></td>
<td width="161"><strong> Actions </strong></td>
</tr>

<?php
include ("connection.php");

$strquery="SELECT * from  apointment";
$results=mysql_query($strquery);
$num=mysql_num_rows($results);

$i=0;
while ($i< $num)

{
$fname=mysql_result($results,$i,"fname");
$lname=mysql_result($results,$i,"lname");
$age=mysql_result($results,$i,"age");
$adress=mysql_result($results,$i,"adress");
$contact=mysql_result($results,$i,"contact");
$email=mysql_result($results,$i,"email");
$id=mysql_result($results,$i,"id");

?>

<tr>
<td><?php echo $fname ; ?></td>
<td><?php echo $lname ; ?></td>
<td><?php echo $age ; ?></td>
<td><?php echo $adress ; ?></td>
<td><?php echo $contact ; ?></td>
<td><?php echo $email ; ?></td>
<td><?php echo $id ; ?></td>
<td><?php echo " <a href='edit.php?do=edit&id=" . $id . "'> edit </a> "; ?> | <?php echo " <a href='delete.php?id=" . $id . "'> delete </a> "; ?></td>
</tr>

<?php

  $i ++;
  }
  ?>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</table>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<p>&nbsp;</p>
<td>&nbsp;</td>
<p>&nbsp;</p>
<p>

</p>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<p>&nbsp;</p>
<td>&nbsp;</td>
<p>&nbsp;</p>
<p>&nbsp; </p>
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
