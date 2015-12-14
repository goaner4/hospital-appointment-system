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

		<section class="gallery-title text-center">
			<div class="gallery-wrapper">
				<div class="container">
					<div class= "row">
						<div>
							<h1 class="headline">Our Gallery</h1>
						</div>
					</div>
					<div class="row">
						<div class="sub-headline">
							<p>Lorem ipsum dolor sit amet, consectetur </p>
						</div>
					</div>	
				</div>
			</div>
		</section>

		<section class="gallery-content">
			<div class="container">
				<div class="row port">
	    			<div class="col-md-8 col-md-offset-2 text-center button-group" id="filters">

	    				<button type="button" class="gallery-btn btn-primary btn is-checked" data-filter="*">All</button>
	    				<button type="button" class="gallery-btn btn-primary btn" data-filter=".care">Care</button>
	    				<button type="button" class="gallery-btn btn-primary btn" data-filter=".treatment">Treatment</button>
	    				<button type="button" class="gallery-btn btn-primary btn" data-filter=".staff">Staff</button>
	    				<button type="button" class="gallery-btn btn-primary btn" data-filter=".donation">Donation</button>
	    				<button type="button" class="gallery-btn btn-primary btn" data-filter=".pharmacy">Pharmacy</button>

	    			</div>
		    	</div>	<!-- row -->
	    		<div class="row">
	    			<div class="isotope" id="port-items">
	    				<div class="col-md-4 col-sm-6 col-xs-6 element-item care" data-category="care">
	    					<img class="img-responsive center-block" src="assets/img/care1.jpg" alt="Image">
	    					<div class="item-desc hidden-xs">
								<div class="item-title">
									<h3>Lorem Ipsum</h3>
								</div>
								<div class="item-tags">
									<p>
										Lorem ipsum dolor porro non delectus cupiditate a!
									</p>
								</div>
							</div><!-- /.item-desc -->
	    				</div>
	    				<div class="col-md-4 col-sm-6 col-xs-6 element-item treatment" data-category="treatment">
	    					<img class="img-responsive center-block" src="assets/img/treatment2.jpg" alt="Image">
	    					<div class="item-desc hidden-xs">
								<div class="item-title">
									<h3>Lorem Ipsum</h3>
								</div>
								<div class="item-tags">
									<p>
										Lorem ipsum dolor assumenda minima sapiente eius cum 
									</p>
								</div>
							</div><!-- /.item-desc -->
	    				</div>
	    				<div class="col-md-4 col-sm-6 col-xs-6 element-item staff" data-category="staff">
	    					<img class="img-responsive center-block" src="assets/img/staff1.jpg" alt="Image">
	    					<div class="item-desc hidden-xs">
								<div class="item-title">
									<h3>Lorem Ipsum</h3>
								</div>
								<div class="item-tags">
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
									</p>
								</div>
							</div><!-- /.item-desc -->
	    				</div>
	    				<div class="col-md-4 col-sm-6 col-xs-6 element-item care" data-category="care">
	    					<img class="img-responsive center-block" src="assets/img/care2.jpg" alt="Image">
	    					<div class="item-desc hidden-xs">
								<div class="item-title">
									<h3>Lorem Ipsum</h3>
								</div>
								<div class="item-tags">
									<p>
										Lorem ipsum dolor sit natus beatae nobis temporibus sint
									</p>
								</div>
							</div><!-- /.item-desc -->
	    				</div>
	    				<div class="col-md-4 col-sm-6 col-xs-6 element-item treatment" data-category="treatment">
	    					<img class="img-responsive center-block" src="assets/img/treatment1.jpg" alt="Image">
	    					<div class="item-desc hidden-xs">
								<div class="item-title">
									<h3>Lorem Ipsum</h3>
								</div>
								<div class="item-tags">
									<p>
										Lorem ipsum aperiam ipsam voluptas ipsum dolor sit quam.
									</p>
								</div>
							</div><!-- /.item-desc -->
	    				</div>
	    				<div class="col-md-4 col-sm-6 col-xs-6 element-item staff" data-category="staff">
	    					<img class="img-responsive center-block" src="assets/img/staff2.jpg" alt="Image">
	    					<div class="item-desc hidden-xs">
								<div class="item-title">
									<h3>Lorem Ipsum</h3>
								</div>
								<div class="item-tags">
									<p>
										Lorem ipsum dolor sit amet, assumenda numquam tempora.
									</p>
								</div>
							</div><!-- /.item-desc -->
	    				</div>
	    				<div class="col-md-4 col-sm-6 col-xs-6 element-item care" data-category="care">
	    					<img class="img-responsive center-block" src="assets/img/care3.jpg" alt="Image">
	    					<div class="item-desc hidden-xs">
								<div class="item-title">
									<h3>Lorem Ipsum</h3>
								</div>
								<div class="item-tags">
									<p>
										 qui nihil ducimus nobis quidem sed a Sint, dolore.
									</p>
								</div>
							</div><!-- /.item-desc -->
	    				</div>
	    				<div class="col-md-4 col-sm-6 col-xs-6 element-item treatment" data-category="treatment">
	    					<img class="img-responsive center-block" src="assets/img/treatment4.jpg" alt="Image">
	    					<div class="item-desc hidden-xs">
								<div class="item-title">
									<h3>Lorem Ipsum</h3>
								</div>
								<div class="item-tags">
									<p>
										Lorem atque quas laboriosam eaque neque expedita nisi.
									</p>
								</div>
							</div><!-- /.item-desc -->
	    				</div>
	    				<div class="col-md-4 col-sm-6 col-xs-6 element-item staff" data-category="staff">
	    					<img class="img-responsive center-block" src="assets/img/staff4.jpg" alt="Image">
	    					<div class="item-desc hidden-xs">
								<div class="item-title">
									<h3>Lorem Ipsum</h3>
								</div>
								<div class="item-tags">
									<p>
										Lorem ipsum dolor sit ametident, facere, tempore rem 
									</p>
								</div>
							</div><!-- /.item-desc -->
	    				</div>
	    				<div class="col-md-4 col-sm-6 col-xs-6 element-item donation" data-category="donation">
	    					<img class="img-responsive center-block" src="assets/img/donation2.jpg" alt="Image">
	    					<div class="item-desc hidden-xs">
								<div class="item-title">
									<h3>Lorem Ipsum</h3>
								</div>
								<div class="item-tags">
									<p>
										 repellat dicta. Debitis dignissimos inventore pariatur.
									</p>
								</div>
							</div><!-- /.item-desc -->
	    				</div>
	    				<div class="col-md-4 col-sm-6 col-xs-6 element-item pharmacy" data-category="pharmacy">
	    					<img class="img-responsive center-block" src="assets/img/pharmacy1.jpg" alt="Image">
	    					<div class="item-desc hidden-xs">
								<div class="item-title">
									<h3>Lorem Ipsum</h3>
								</div>
								<div class="item-tags">
									<p>
										 distnctio atque ipsum illo magnam error perspiciatis ab!
									</p>
								</div>
							</div><!-- /.item-desc -->
	    				</div>
	    				<div class="col-md-4 col-sm-6 col-xs-6 element-item staff" data-category="staff">
	    					<img class="img-responsive center-block" src="assets/img/staff3.jpg" alt="Image">
	    					<div class="item-desc hidden-xs">
								<div class="item-title">
									<h3>Lorem Ipsum</h3>
								</div>
								<div class="item-tags">
									<p>
										Debitis aliquam, cupiditate error nihil iure doloribus. 
									</p>
								</div>
							</div><!-- /.item-desc -->
	    				</div>
	    				<div class="col-md-4 col-sm-6 col-xs-6 element-item donation" data-category="donation">
	    					<img class="img-responsive center-block" src="assets/img/donation1.jpg" alt="Image">
	    					<div class="item-desc hidden-xs">
								<div class="item-title">
									<h3>Lorem Ipsum</h3>
								</div>
								<div class="item-tags">
									<p>
										poris veniam dolores consequatur, quae dignissimos omnis.
									</p>
								</div>
							</div><!-- /.item-desc -->
	    				</div>
	    				<div class="col-md-4 col-sm-6 col-xs-6 element-item pharmacy" data-category="pharmacy">
	    					<img class="img-responsive center-block" src="assets/img/pharmacy2.jpg" alt="Image">
	    					<div class="item-desc hidden-xs">
								<div class="item-title">
									<h3>Lorem Ipsum</h3>
								</div>
								<div class="item-tags">
									<p>
										voluptates odit quos, odio fuga in consectetur.
									</p>
								</div>
							</div><!-- /.item-desc -->
	    				</div>
	    				<div class="col-md-4 col-sm-6 col-xs-6 element-item treatment" data-category="treatment">
	    					<img class="img-responsive center-block" src="assets/img/treatment3.jpg" alt="Image">
	    					<div class="item-desc hidden-xs">
								<div class="item-title">
									<h3>Lorem Ipsum</h3>
								</div>
								<div class="item-tags">
									<p>
										Eaque quos, veniam doloribus consectetur cum. Sunt 
									</p>
								</div>
							</div><!-- /.item-desc -->
	    				</div>
	    			</div>	<!-- isotope -->
	    		</div>	<!-- row -->
			</div>
		</section>

		<!--start of footer -->
<?php include_once("footer.php") ; ?>

		<!--start of footer -->

		<script type="text/javascript" src="assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
		<script type="text/javascript" src="assets/js/wow.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

		<script>
      		new WOW().init();
		</script>

		<script>
			$( function() {
				  // init Isotope
			  	var $container = $('.isotope').isotope
			  	({
				    itemSelector: '.element-item',
				    layoutMode: 'fitRows'
			  	});


  				// bind filter button click
  				$('#filters').on( 'click', 'button', function() 
  				{
				    var filterValue = $( this ).attr('data-filter');
				    // use filterFn if matches value
				    $container.isotope({ filter: filterValue });
				 });
  
			  // change is-checked class on buttons
			  	$('.button-group').each( function( i, buttonGroup ) 
			  	{
			    	var $buttonGroup = $( buttonGroup );
			    	$buttonGroup.on( 'click', 'button', function() 
			    	{
			      		$buttonGroup.find('.is-checked').removeClass('is-checked');
			      		$( this ).addClass('is-checked');
			    	});
			  	});
			  
			});
		</script>
		
	</body>
</html>
