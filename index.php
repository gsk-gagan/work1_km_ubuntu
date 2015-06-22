<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>Home Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Latest compiled and minified CSS -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> -->
	<!-- Local -->
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
	<!-- Optional theme - Transparent div not working -->
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">-->
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link href="css/custom-styles.css" rel="stylesheet">
	<link href="css/custom-styles-home.css" rel="stylesheet">
	<link href="css/custom-styles-navbar.css" rel="stylesheet">
	<link href="css/custom-styles-footer.css" rel="stylesheet">
</head>

<body>
	
<?php
	require 'includes/nav-bar.php';
?>

	<main class="cd-main-content">
		<div class="cd-fixed-bg cd-bg-1">

			<div style="padding-top:13%"></div><!-- Local Styling -->

			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 style="color:white; text-align:center;">Travel Safely for a fixed price. Mighty Minicabs 24/7.</h1><!-- Local Styling -->
					</div><!-- col-md-12 -->
				</div><!-- row -->
			</div> <!-- container -->
					
			<div style="padding-top:8%"></div><!-- Local Styling -->
						
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-offset-2 col-md-8">
						<form class="well" style="padding-right:35px; padding-left:35px;">
							<div class="row">
								<div class="col-md-7">
									<div class="row">
										<div class="col-sm-offset-1 col-sm-5 col-md-offset-0 col-md-6" style="padding:5px">
											<label class="sr-only" for="Source">From</label>
											<input type="text" class="form-control input-lg" placeholder="From">	
										</div>
										<div class="col-sm-5 col-md-6" style="padding:5px">
											<label class="sr-only" for="Destination">To</label>
											<input type="text" class="form-control input-lg" placeholder="To">
										</div>
									</div>
								</div>
								<div class="col-md-5">
									<div class="row">
										<div class="col-sm-offset-1 col-sm-5 col-md-offset-0 col-md-7" style="padding:5px">
											<label class="sr-only" for="Time">Date and Time</label>
											<input type="text" class="form-control input-lg" placeholder="ASAP">
										</div>
										<div class="col-sm-5 col-md-5" style="padding:5px">
											<button type="submit" class="btn btn-default btn-lg btn-block">Let's Go</button>			
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div><!-- row -->	
			</div><!-- container-fluid -->

		</div> <!-- cd-fixed-bg -->			
			

		<div class="cd-scrolling-bg cd-color-2" style="min-height:70%">
			<div class="cd-container">
				<h1 style="text-align:center;">
					Why use KnowMiles?
				</h1>
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-md-3 services">
							<img src="img/man.png" alt="Cab Art">
							<h3>Many Options</h3>
							<p>
								Compare &amp; Choose cabs from various cab-services based on best price, earliest availability &amp; best rated. 
							</p>
						</div>
						<div class="col-sm-6 col-md-3 services">
							<img src="img/hand.png" alt="Mobile Art">
							<h3>One Touch Booking</h3>
							<p>
								Now all cabs anywhere, anytime are just a one click away. 
							</p>
						</div>
						<div class="col-sm-6 col-sm-offset-1 col-sm-pull-1 col-md-3 col-md-offset-0 col-md-pull-0 services">
							<img src="img/thumb.png" alt="Thumbs Up Art">
							<h3>Rate &amp; Reviews</h3>
							<p>
								Honest ratings by fellow cab-users makes you choose the best cab &amp; hence making life simpler &amp; happier.
							</p>
						</div>
						<div class="col-sm-5 col-sm-pull-1 col-md-3 col-md-pull-0 services">
							<img src="img/light.png" alt="Light Bulb Art">
							<h3>Quick &amp; Intuitive</h3>
							<p>
								Quick &amp; Easy to understand User Interface, advanced search-engine providing results in fractions of second.  
							</p>
						</div>
					</div>
				</div>
			</div> <!-- cd-container -->
		</div> <!-- cd-scrolling-bg -->

		<div class="cd-fixed-bg cd-bg-2" style="min-height:50%">
			<div style="padding-top:10%"></div><!-- Local Styling -->

			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 style="color:white; text-align:center;">So, Book your Ride NOW!!!</h1><!-- Local Styling -->
					</div><!-- col-md-12 -->
				</div><!-- row -->
			</div> <!-- container -->

		</div> <!-- cd-fixed-bg -->

		<div class="cd-scrolling-bg cd-color-3" style="padding-bottom:0">
			<div class="cd-container">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<blockquote>
								<p>Fixed price, doesn't increase with traffic couldn't ask for better taxi booking service. Watch as the taxi comes to you feature! Great app no longer have to wonder how far away your cab is.</p>
								<footer>Tech Steve!, 15&nbsp;July 2014</footer>
							</blockquote>
						</div>
						<div class="col-md-4">
							<blockquote>
								<p>Brilliant App gets better with every update &amp; the staff are also very helpful when you call or email with your queries.</p>
								<footer>Boss Lady 74, 18&nbsp;June 2014</footer>
							</blockquote>
						</div>
						<div class="col-md-4">
							<blockquote>
								<p>Quick, simple and cheap mini cab bookings. Stores most used addresses and allows you to compare fares by time, price and reviews which is handy. Would recommend.</p>
								<footer>DoodleDandy80,&nbsp;18&nbsp;June 2014</footer>
							</blockquote>
						</div>
					</div>
				</div>


<?php
	require 'includes/footer.php';
?>

			</div> <!-- cd-container -->
		</div> <!-- cd-scrolling-bg -->
	</main> <!-- cd-main-content -->
	
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

</html>