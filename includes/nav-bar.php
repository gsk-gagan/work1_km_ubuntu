<!-- Nav Bar -->
	<div class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation" style="opacity:0.95;"> <!-- Local Styling -->
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">KnowMiles</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			<a class="navbar-brand" href="#"><img src="img/logo.png" /></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" data-toggle="modal" data-target="#log-in">Log In</a></li>
					<li><a href="#" data-toggle="modal" data-target="#sign-up">Sign Up</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Help</a></li>
					<li><a href="#" style="padding-bottom:0px; padding-top:10px">
						<select class="form-control input-sm">
							<option>New Delhi</option>
							<option>Ambala</option>
							<option>Vadodara</option>
							<option>Surat</option>
							<option>Mumbai</option>
						</select>
					</a></li>
				</ul>
			</div>
		</div>
	</div>

<!--LOG IN-->
	<div class="modal fade" id="log-in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Log In</h4>
				</div>
				<div class="modal-body">
					<form class="form-horizontal">
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<div class="checkbox">
								<label>
									<input type="checkbox"> Remember me
								</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-default btn-primary">Sign in</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

<!-- SIGN UP -->	
	<div class="modal fade" id="sign-up" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Sign Up</h4>
				</div>
				<div class="modal-body">

					<form class="form-horizontal">
						<div class="form-group">
							<label for="signup-name" class="col-sm-2 control-label">Your Name</label>
							<div class="col-sm-10">
								<input type="name" class="form-control" id="signup-name" placeholder="FirstName LastName">
							</div>
						</div>
						<div class="form-group">
							<label for="signup-email" class="col-sm-2 control-label">Email</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" id="signup-email" placeholder="abc@xyz.com">
							</div>
						</div>
						<div class="form-group">
							<label for="signup-mobile" class="col-sm-2 control-label">Mobile</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" id="signup-mobile" placeholder="9876543210">
							</div>
						</div>
						<div class="form-group">
							<label for="signup-password" class="col-sm-2 control-label">Password</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" id="signup-password" placeholder="Password">
							</div>
						</div>
						<div class="form-group">
							<label for="signup-passwordcnf" class="col-sm-2 control-label"></label>
							<div class="col-sm-10">
								<input type="password" class="form-control" id="signup-passwordcnf" placeholder="Re-type Password">
							</div>
						</div>
					</form>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Sign Up</button>
				</div>
			</div>
		</div>
	</div>
