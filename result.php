<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>Home Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<!-- Local -->
	<!-- <link rel="stylesheet" href="bootstrap/bootstrap.min.css"> -->
	<!-- Optional theme - Transparent div not working -->
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">-->
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link href="css/custom-styles.css" rel="stylesheet">
	<link href="css/custom-styles-result.css" rel="stylesheet">
	<link href="css/custom-styles-navbar.css" rel="stylesheet">
	<link href="css/custom-styles-footer.css" rel="stylesheet">

	<!-- Google Maps API -->
	<script src="http://maps.googleapis.com/maps/api/js"></script>
	<script>
	function initialize() {
		var mapProp = {
			center:new google.maps.LatLng(28.5506709,77.1912772),
			zoom:15,
			mapTypeId:google.maps.MapTypeId.ROADMAP
			};
			var map=new google.maps.Map(document.getElementById("map-canvas"), mapProp);
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
</head>

<body>
	
<?php
	require 'includes/nav-bar.php';
?>

<div id="container-parent">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1">
				<div class="row hider">
					<div class="col-xs-12">
						<img class="img-responsive" src="img/logo_d_v.png" alt="" style="padding-top:20vh;">	
					</div>
				</div>
			</div><!-- col-md-1 -->

			<div class="col-md-6" style="padding-right:60px;padding-left:0px;" id="result-parent">
				<div class="row">
					<ul class="nav nav-tabs nav-justified" role="tablist" id="option-tab">
						<li role="presentation" class="active"><a href="#cheap-tab" role="tab" data-toggle="tab"><h4>Cheapest</h4></a></li>
						<li role="presentation"><a href="#quick-tab" role="tab" data-toggle="tab"><h4>Quickest</h4></a></li>
						<li role="presentation"><a href="#best-tab" role="tab" data-toggle="tab"><h4>Best Rated</h4></a></li>
					</ul>	
				</div>
				

				<div class="row" style="overflow:hidden;" id="shadow-content-box">
					<div class="tab-content" id="content-tab">
						<div class="tab-pane fade active in" id="cheap-tab"><!-- Local Styling --> <!-- To change height dynamically -->
							
							<div class="row single-result">
								<div class="col-xs-4 col-lg-2 vcenter-img">
									<img src="img/cmp/ola.jpg" alt="" class="img-responsive center-block img-restricted">
								</div><!-- Logo -->
								<div class="col-xs-4 col-lg-2 vcenter-img">
									<div class="row">
										<div class="col-xs-12">
											<img src="img/cab-type/hatch.png" alt="" class="img-responsive center-block img-restricted">
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center margin-less-text" style="font-size:90%;">Hatchback</p>
										</div>
									</div>
								</div><!-- Cab Type -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center" style="font-size:80%;">
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
											</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center margin-less-text" style="font-size:80%;">
												7 Ratings
											</p>
										</div>
									</div>
								</div><!-- Rating -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<h3 class="text-center margin-less-text">
										<span class="label label-info">Offers!!!</span>
									</h3>
								</div><!-- Offers -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<p class="text-center margin-less-text">Cost</p>
								</div><!-- Cost -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<a href="#" class="btn btn-primary btn-block">Book Now</a>
								</div><!-- Book Now -->
							</div>					

							<hr>

							<div class="row single-result">
								<div class="col-xs-4 col-lg-2 vcenter-img">
									<img src="img/cmp/tfs.jpg" alt="" class="img-responsive center-block img-restricted">
								</div><!-- Logo -->
								<div class="col-xs-4 col-lg-2 vcenter-img">
									<div class="row">
										<div class="col-xs-12">
											<img src="img/cab-type/sedan.png" alt="" class="img-responsive center-block img-restricted">
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center margin-less-text" style="font-size:90%;">Sedan</p>
										</div>
									</div>
								</div><!-- Cab Type -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center" style="font-size:80%;">
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
											</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center margin-less-text" style="font-size:80%;">
												7 Ratings
											</p>
										</div>
									</div>
								</div><!-- Rating -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<h3 class="text-center margin-less-text">
										<span class="label label-info">Offers!!!</span>
									</h3>
								</div><!-- Offers -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<p class="text-center margin-less-text">Cost</p>
								</div><!-- Cost -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<a href="#" class="btn btn-primary btn-block">Book Now</a>
								</div><!-- Book Now -->
							</div>					

							<hr>

							<div class="row single-result">
								<div class="col-xs-4 col-lg-2 vcenter-img">
									<img src="img/cmp/easy.jpg" alt="" class="img-responsive center-block img-restricted">
								</div><!-- Logo -->
								<div class="col-xs-4 col-lg-2 vcenter-img">
									<div class="row">
										<div class="col-xs-12">
											<img src="img/cab-type/hatch.png" alt="" class="img-responsive center-block img-restricted">
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center margin-less-text" style="font-size:90%;">Hatchback</p>
										</div>
									</div>
								</div><!-- Cab Type -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center" style="font-size:80%;">
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
											</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center margin-less-text" style="font-size:80%;">
												7 Ratings
											</p>
										</div>
									</div>
								</div><!-- Rating -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<h3 class="text-center margin-less-text">
										<!-- <span class="label label-info">Offers!!!</span> -->
									</h3>
								</div><!-- Offers -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<p class="text-center margin-less-text">Cost</p>
								</div><!-- Cost -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<a href="#" class="btn btn-primary btn-block">Book Now</a>
								</div><!-- Book Now -->
							</div>					

							<hr>

							<div class="row single-result">
								<div class="col-xs-4 col-lg-2 vcenter-img">
									<img src="img/cmp/mega.jpg" alt="" class="img-responsive center-block img-restricted">
								</div><!-- Logo -->
								<div class="col-xs-4 col-lg-2 vcenter-img">
									<div class="row">
										<div class="col-xs-12">
											<img src="img/cab-type/sedan.png" alt="" class="img-responsive center-block img-restricted">
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center margin-less-text" style="font-size:90%;">Sedan</p>
										</div>
									</div>
								</div><!-- Cab Type -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center" style="font-size:80%;">
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
											</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center margin-less-text" style="font-size:80%;">
												7 Ratings
											</p>
										</div>
									</div>
								</div><!-- Rating -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<h3 class="text-center margin-less-text">
										<!-- <span class="label label-info">Offers!!!</span> -->
									</h3>
								</div><!-- Offers -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<p class="text-center margin-less-text">Cost</p>
								</div><!-- Cost -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<a href="#" class="btn btn-primary btn-block">Book Now</a>
								</div><!-- Book Now -->
							</div>					

							<hr>

							<div class="row single-result">
								<div class="col-xs-4 col-lg-2 vcenter-img">
									<img src="img/cmp/uber.jpg" alt="" class="img-responsive center-block img-restricted">
								</div><!-- Logo -->
								<div class="col-xs-4 col-lg-2 vcenter-img">
									<div class="row">
										<div class="col-xs-12">
											<img src="img/cab-type/limo.png" alt="" class="img-responsive center-block img-restricted">
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center margin-less-text" style="font-size:90%;">Hatchback</p>
										</div>
									</div>
								</div><!-- Cab Type -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center" style="font-size:80%;">
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
											</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center margin-less-text" style="font-size:80%;">
												7 Ratings
											</p>
										</div>
									</div>
								</div><!-- Rating -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<h3 class="text-center margin-less-text">
										<span class="label label-info">Offers!!!</span>
									</h3>
								</div><!-- Offers -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<p class="text-center margin-less-text">Cost</p>
								</div><!-- Cost -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<a href="#" class="btn btn-primary btn-block">Book Now</a>
								</div><!-- Book Now -->
							</div>					

							<hr>	

							<div class="row single-result">
								<div class="col-xs-4 col-lg-2 vcenter-img">
									<img src="img/cmp/meru.jpg" alt="" class="img-responsive center-block img-restricted">
								</div><!-- Logo -->
								<div class="col-xs-4 col-lg-2 vcenter-img">
									<div class="row">
										<div class="col-xs-12">
											<img src="img/cab-type/suv.png" alt="" class="img-responsive center-block img-restricted">
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center margin-less-text" style="font-size:90%;">SUV</p>
										</div>
									</div>
								</div><!-- Cab Type -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center" style="font-size:80%;">
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
											</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center margin-less-text" style="font-size:80%;">
												7 Ratings
											</p>
										</div>
									</div>
								</div><!-- Rating -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<h3 class="text-center margin-less-text">
										<!-- <span class="label label-info">Offers!!!</span> -->
									</h3>
								</div><!-- Offers -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<p class="text-center margin-less-text">Cost</p>
								</div><!-- Cost -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<a href="#" class="btn btn-primary btn-block">Book Now</a>
								</div><!-- Book Now -->
							</div>					

							<hr>	

							<div class="row single-result">
								<div class="col-xs-4 col-lg-2 vcenter-img">
									<img src="img/cmp/taxi-pixi.jpg" alt="" class="img-responsive center-block img-restricted">
								</div><!-- Logo -->
								<div class="col-xs-4 col-lg-2 vcenter-img">
									<div class="row">
										<div class="col-xs-12">
											<img src="img/cab-type/sedan.png" alt="" class="img-responsive center-block img-restricted">
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center margin-less-text" style="font-size:90%;">Sedan</p>
										</div>
									</div>
								</div><!-- Cab Type -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center" style="font-size:80%;">
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
											</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center margin-less-text" style="font-size:80%;">
												7 Ratings
											</p>
										</div>
									</div>
								</div><!-- Rating -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<h3 class="text-center margin-less-text">
										<span class="label label-info">Offers!!!</span>
									</h3>
								</div><!-- Offers -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<p class="text-center margin-less-text">Cost</p>
								</div><!-- Cost -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<a href="#" class="btn btn-primary btn-block">Book Now</a>
								</div><!-- Book Now -->
							</div>					

							<hr>

							<div class="row single-result">
								<div class="col-xs-4 col-lg-2 vcenter-img">
									<img src="img/cmp/ola.jpg" alt="" class="img-responsive center-block img-restricted">
								</div><!-- Logo -->
								<div class="col-xs-4 col-lg-2 vcenter-img">
									<div class="row">
										<div class="col-xs-12">
											<img src="img/cab-type/hatch.png" alt="" class="img-responsive center-block img-restricted">
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center margin-less-text" style="font-size:90%;">Hatchback</p>
										</div>
									</div>
								</div><!-- Cab Type -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center" style="font-size:80%;">
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
											</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center margin-less-text" style="font-size:80%;">
												7 Ratings
											</p>
										</div>
									</div>
								</div><!-- Rating -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<h3 class="text-center margin-less-text">
										<span class="label label-info">Offers!!!</span>
									</h3>
								</div><!-- Offers -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<p class="text-center margin-less-text">Cost</p>
								</div><!-- Cost -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<a href="#" class="btn btn-primary btn-block">Book Now</a>
								</div><!-- Book Now -->
							</div>					

							<hr>

							<div class="row single-result">
								<div class="col-xs-4 col-lg-2 vcenter-img">
									<img src="img/cmp/tfs.jpg" alt="" class="img-responsive center-block img-restricted">
								</div><!-- Logo -->
								<div class="col-xs-4 col-lg-2 vcenter-img">
									<div class="row">
										<div class="col-xs-12">
											<img src="img/cab-type/sedan.png" alt="" class="img-responsive center-block img-restricted">
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center margin-less-text" style="font-size:90%;">Sedan</p>
										</div>
									</div>
								</div><!-- Cab Type -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center" style="font-size:80%;">
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
											</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center margin-less-text" style="font-size:80%;">
												7 Ratings
											</p>
										</div>
									</div>
								</div><!-- Rating -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<h3 class="text-center margin-less-text">
										<span class="label label-info">Offers!!!</span>
									</h3>
								</div><!-- Offers -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<p class="text-center margin-less-text">Cost</p>
								</div><!-- Cost -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<a href="#" class="btn btn-primary btn-block">Book Now</a>
								</div><!-- Book Now -->
							</div>					

							<hr>

							<div class="row single-result">
								<div class="col-xs-4 col-lg-2 vcenter-img">
									<img src="img/cmp/easy.jpg" alt="" class="img-responsive center-block img-restricted">
								</div><!-- Logo -->
								<div class="col-xs-4 col-lg-2 vcenter-img">
									<div class="row">
										<div class="col-xs-12">
											<img src="img/cab-type/hatch.png" alt="" class="img-responsive center-block img-restricted">
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center margin-less-text" style="font-size:90%;">Hatchback</p>
										</div>
									</div>
								</div><!-- Cab Type -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center" style="font-size:80%;">
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
											</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center margin-less-text" style="font-size:80%;">
												7 Ratings
											</p>
										</div>
									</div>
								</div><!-- Rating -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<h3 class="text-center margin-less-text">
										<!-- <span class="label label-info">Offers!!!</span> -->
									</h3>
								</div><!-- Offers -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<p class="text-center margin-less-text">Cost</p>
								</div><!-- Cost -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<a href="#" class="btn btn-primary btn-block">Book Now</a>
								</div><!-- Book Now -->
							</div>					

							<hr>

							<div class="row single-result">
								<div class="col-xs-4 col-lg-2 vcenter-img">
									<img src="img/cmp/mega.jpg" alt="" class="img-responsive center-block img-restricted">
								</div><!-- Logo -->
								<div class="col-xs-4 col-lg-2 vcenter-img">
									<div class="row">
										<div class="col-xs-12">
											<img src="img/cab-type/sedan.png" alt="" class="img-responsive center-block img-restricted">
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center margin-less-text" style="font-size:90%;">Sedan</p>
										</div>
									</div>
								</div><!-- Cab Type -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center" style="font-size:80%;">
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
											</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center margin-less-text" style="font-size:80%;">
												7 Ratings
											</p>
										</div>
									</div>
								</div><!-- Rating -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<h3 class="text-center margin-less-text">
										<!-- <span class="label label-info">Offers!!!</span> -->
									</h3>
								</div><!-- Offers -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<p class="text-center margin-less-text">Cost</p>
								</div><!-- Cost -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<a href="#" class="btn btn-primary btn-block">Book Now</a>
								</div><!-- Book Now -->
							</div>					

							<hr>

							<div class="row single-result">
								<div class="col-xs-4 col-lg-2 vcenter-img">
									<img src="img/cmp/uber.jpg" alt="" class="img-responsive center-block img-restricted">
								</div><!-- Logo -->
								<div class="col-xs-4 col-lg-2 vcenter-img">
									<div class="row">
										<div class="col-xs-12">
											<img src="img/cab-type/limo.png" alt="" class="img-responsive center-block img-restricted">
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center margin-less-text" style="font-size:90%;">Hatchback</p>
										</div>
									</div>
								</div><!-- Cab Type -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center" style="font-size:80%;">
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
											</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center margin-less-text" style="font-size:80%;">
												7 Ratings
											</p>
										</div>
									</div>
								</div><!-- Rating -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<h3 class="text-center margin-less-text">
										<span class="label label-info">Offers!!!</span>
									</h3>
								</div><!-- Offers -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<p class="text-center margin-less-text">Cost</p>
								</div><!-- Cost -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<a href="#" class="btn btn-primary btn-block">Book Now</a>
								</div><!-- Book Now -->
							</div>					

							<hr>	

							<div class="row single-result">
								<div class="col-xs-4 col-lg-2 vcenter-img">
									<img src="img/cmp/meru.jpg" alt="" class="img-responsive center-block img-restricted">
								</div><!-- Logo -->
								<div class="col-xs-4 col-lg-2 vcenter-img">
									<div class="row">
										<div class="col-xs-12">
											<img src="img/cab-type/suv.png" alt="" class="img-responsive center-block img-restricted">
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center margin-less-text" style="font-size:90%;">SUV</p>
										</div>
									</div>
								</div><!-- Cab Type -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center" style="font-size:80%;">
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
											</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center margin-less-text" style="font-size:80%;">
												7 Ratings
											</p>
										</div>
									</div>
								</div><!-- Rating -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<h3 class="text-center margin-less-text">
										<!-- <span class="label label-info">Offers!!!</span> -->
									</h3>
								</div><!-- Offers -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<p class="text-center margin-less-text">Cost</p>
								</div><!-- Cost -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<a href="#" class="btn btn-primary btn-block">Book Now</a>
								</div><!-- Book Now -->
							</div>					

							<hr>	

							<div class="row single-result">
								<div class="col-xs-4 col-lg-2 vcenter-img">
									<img src="img/cmp/taxi-pixi.jpg" alt="" class="img-responsive center-block img-restricted">
								</div><!-- Logo -->
								<div class="col-xs-4 col-lg-2 vcenter-img">
									<div class="row">
										<div class="col-xs-12">
											<img src="img/cab-type/sedan.png" alt="" class="img-responsive center-block img-restricted">
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center margin-less-text" style="font-size:90%;">Sedan</p>
										</div>
									</div>
								</div><!-- Cab Type -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center" style="font-size:80%;">
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
											</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<p class="text-center margin-less-text" style="font-size:80%;">
												7 Ratings
											</p>
										</div>
									</div>
								</div><!-- Rating -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<h3 class="text-center margin-less-text">
										<span class="label label-info">Offers!!!</span>
									</h3>
								</div><!-- Offers -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<p class="text-center margin-less-text">Cost</p>
								</div><!-- Cost -->
								<div class="col-xs-4 col-lg-2 vcenter-text">
									<a href="#" class="btn btn-primary btn-block">Book Now</a>
								</div><!-- Book Now -->
							</div>					
														

							

						</div>
						<div class="tab-pane fade" id="quick-tab" style="height:80vh;">
							<h2 class="text-center">Comming Soon</h2>
						</div>
						<div class="tab-pane fade" id="best-tab" style="height:80vh;">
							<h2 class="text-center">Comming Soon</h2>
						</div>
					</div>				
				</div>
	

			</div><!-- col-md-6 -->

			<div class="col-md-5">
				<div id="right-sidebar">
					<div class="row from-to-sidebar hider">
						<div class="col-xs-6">
							<div class="form-group input-sm">
								<input type="text" class="form-control input-sm" placeholder="From">
							</div>
						</div>
						<div class="col-xs-6">
							<div class="form-group input-sm">
								<input type="text" class="form-control input-sm" placeholder="To">
							</div>
						</div>
						<div class="col-xs-6">
							<div class="form-group input-sm">
								<input type="text" class="form-control input-sm" placeholder="ASAP">
							</div>						
						</div>
						<div class="col-xs-6" style="padding:4px;">
							<button type="submit" class="btn btn-default btn-sm btn-block">Let's Go</button>
						</div>
					</div><!-- From To Side Selector -->
					

					<div class="row cab-type-sidebar hider">
						<div class="row">
							<div class="col-xs-12">
								<h3 class="margin-less-text-cab">Cab Type</h3>
							</div>
						</div>
						

						<div class="row cab-type-img" style="width:120%">
							<div class="col-xs-2">
								<div class="row">
									<div class="col-xs-12"><img class="img-responsive" src="img/cab-type/auto.png" alt=""></div>
									<div class="col-xs-offset-4 col-xs-3">
										<input class="cab-type-check" type="checkbox" style="margin-top:0px;">
									</div>
								</div>
							</div>
							<div class="col-xs-2">
								<div class="row">
									<div class="col-xs-12"><img class="img-responsive" src="img/cab-type/hatch.png" alt=""></div>
									<div class="col-xs-offset-4 col-xs-3">
										<input class="cab-type-check" type="checkbox" style="margin-top:0px;">
									</div>
								</div>
							</div>
							<div class="col-xs-2">
								<div class="row">
									<div class="col-xs-12"><img class="img-responsive" src="img/cab-type/sedan.png" alt=""></div>
									<div class="col-xs-offset-4 col-xs-3">
										<input class="cab-type-check" type="checkbox" style="margin-top:0px;">
									</div>
								</div>
							</div>
							<div class="col-xs-2">
								<div class="row">
									<div class="col-xs-12"><img class="img-responsive" src="img/cab-type/suv.png" alt=""></div>
									<div class="col-xs-offset-4 col-xs-3">
										<input class="cab-type-check" type="checkbox" style="margin-top:0px;">
									</div>
								</div>
							</div>
							<div class="col-xs-2">
								<div class="row">
									<div class="col-xs-12"><img class="img-responsive" src="img/cab-type/limo.png" alt=""></div>
									<div class="col-xs-offset-4 col-xs-3">
										<input class="cab-type-check" type="checkbox" style="margin-top:0px;">
									</div>
								</div>
							</div>

						</div> <!-- Car Type-->

						<div class="row"  style="position:relative; top:-7px;">
							<div class="col-xs-12" style="text-align:right;">
								<a id="more-filter" class="margin-less-text">+ More Filter Options</a>
							</div>
						</div>
					</div><!-- Car Type Sidebar -->
				</div>
					
				<div id="white-gradient">
				</div>
				<div class="row" id="trip-info">
					<div class="col-xs-5"><h4 class="margin-less-text trip-info-text">Distance</h4></div>
					<div class="col-xs-3"><h4 class="margin-less-text trip-info-text">20.4</h4></div>
					<div class="col-xs-3"><img class="img-responsive trip-info-img" src="img/logo_m.png" alt=""></div>
					<div class="col-xs-offset-5 col-xs-3"><h4 class="margin-less-text trip-info-text">12.7</h4></div>
					<div class="col-xs-3"><h4 class="margin-less-text trip-info-text" style="color:rgb(250,200,18);">miles</h4></div>
					<div class="col-xs-5"><h4 class="margin-less-text trip-info-text">Time</h4></div>
					<div class="col-xs-6"><h4 class="margin-less-text trip-info-text">46 min</h4></div>
				</div>
			</div><!-- col-md-5 -->
		</div>
	</div>
</div>


<!-- Mobile View -->

<!-- Mobile View Tabs -->
<div id="mobile-tab-parent">
	<div class="row shower mobile-tab-group" id="mobile-fromto-tab"><img src="img/from-to-mobile-tab.png" alt=""></div>
	<div class="row shower mobile-tab-group" id="mobile-filter-tab"><img src="img/filter-mobile-tab.png" alt=""></div>
	<div class="row shower mobile-tab-group" id="mobile-map-tab"><img src="img/map-mobile-tab.png" alt=""></div>
</div>

<!-- Mobile View From To -->
<div class="row shower" id="from-to-mobile">
	<div class="col-xs-6">
		<div class="form-group input-sm">
			<input type="text" class="form-control input-sm" placeholder="From">
		</div>
	</div>
	<div class="col-xs-6">
		<div class="form-group input-sm">
			<input type="text" class="form-control input-sm" placeholder="To">
		</div>
	</div>
	<div class="col-xs-6">
		<div class="form-group input-sm">
			<input type="text" class="form-control input-sm" placeholder="ASAP">
		</div>						
	</div>
	<div class="col-xs-6" style="padding:4px;">
		<button type="submit" class="btn btn-default btn-sm btn-block">Let's Go</button>
	</div>
</div><!-- From To Mobile Selector -->


<!-- Mobile Filter -->
<div class="row shower" id="cab-type-mobile">	

	<div class="row cab-type-img">
		<div class="col-xs-2">
			<div class="row">
				<div class="col-xs-12"><img class="img-responsive" src="img/cab-type/auto.png" alt=""></div>
				<div class="col-xs-offset-4 col-xs-3">
					<input class="cab-type-check" type="checkbox" style="margin-top:0px;">
				</div>
			</div>
		</div>
		<div class="col-xs-2">
			<div class="row">
				<div class="col-xs-12"><img class="img-responsive" src="img/cab-type/hatch.png" alt=""></div>
				<div class="col-xs-offset-4 col-xs-3">
					<input class="cab-type-check" type="checkbox" style="margin-top:0px;">
				</div>
			</div>
		</div>
		<div class="col-xs-2">
			<div class="row">
				<div class="col-xs-12"><img class="img-responsive" src="img/cab-type/sedan.png" alt=""></div>
				<div class="col-xs-offset-4 col-xs-3">
					<input class="cab-type-check" type="checkbox" style="margin-top:0px;">
				</div>
			</div>
		</div>
		<div class="col-xs-2">
			<div class="row">
				<div class="col-xs-12"><img class="img-responsive" src="img/cab-type/suv.png" alt=""></div>
				<div class="col-xs-offset-4 col-xs-3">
					<input class="cab-type-check" type="checkbox" style="margin-top:0px;">
				</div>
			</div>
		</div>
		<div class="col-xs-2">
			<div class="row">
				<div class="col-xs-12"><img class="img-responsive" src="img/cab-type/limo.png" alt=""></div>
				<div class="col-xs-offset-4 col-xs-3">
					<input class="cab-type-check" type="checkbox" style="margin-top:0px;">
				</div>
			</div>
		</div>
		<div class="col-xs-2">
			<div class="row" style="margin-right:0px;">
				<div class="col-xs-12" style="padding-right:0px;"><img class="img-responsive" src="img/more-filters.png" alt=""></div>
			</div>
		</div>

	</div> <!-- Car Type-->

	<div class="row"  style="position:relative; top:-7px;">
		
	</div>
</div><!-- Car Type Mobile -->
</div>

<!-- Cross -->
<img src="img/cross.png" class="hidden" alt="" id="cross-fromto">
<img src="img/cross.png" class="hidden" alt="" id="cross-filter">
<img src="img/cross.png" class="hidden" alt="" id="cross-map">







<!-- Map Canvas -->
<div id="map-canvas">
</div>

<!-- Footer -->
<div id="scroll-footer">
	<?php
		require 'includes/footer.php';
	?>	
</div>
	
</body>


<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
<!-- Local -->
<script src="bootstrap/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> -->
<!-- Local -->
<script src="bootstrap/bootstrap.min.js"></script>
<script src="js/custom-script.js"></script>
<script src="js/custom-script-navbar.js"></script>
<script src="js/custom-script-result.js"></script>

</html>