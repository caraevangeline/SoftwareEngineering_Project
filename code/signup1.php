<?php require 'process_signup.php' ?>

<html>
	<head>
		<title>
		Form in bootstrap
		</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/jquery.min.js" rel="stylesheet">
	</head>
	<body>
		<form method="POST" action="mailpro1.php">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
				</div>
				<div class="col-sm-4">
					<h3 align="center" style="color:blue;font-weight:2px"><span class="glyphicon glyphicon-grain" style="font-size:20px;color:#009966"></span>WSDC</h3>
				</div>
				<div class="col-sm-4">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3">
				</div>
				
				<div class="col-sm-6 well">
					<form method="POST">
					<div class="row">
						<div class="col-sm-4">
							<label>Name</label>
						</div>
						<div class="col-sm-8">
							<input type="text" name="user" placeholder="enter name" id="user" class="form-control">
						</div>
					</div><!--row1 ends-->
					
					<div class="row">
						<div class="col-sm-12">
							<br>
						</div>
					</div><!--row2 ends-->
					
					<div class="row">
						<div class="col-sm-4">
							<label>Email</label>
						</div>
						<div class="col-sm-8">
							<input type="text" name="email" placeholder="enter email" id="email" class="form-control">
						</div>
					</div><!--row3 ends-->
					
					<div class="row">
						<div class="col-sm-12">
							<br>
						</div>
					</div><!--row4 ends-->
					
					<div class="row">
						<div class="col-sm-4">
							<label>User name</label>
						</div>
						<div class="col-sm-8">
							<input type="text" name="username" placeholder="enter username" id="username" class="form-control">
							<input id="username" type="text" name="username"  placeholder="username" minlength="4" maxlength="12" pattern="[a-zA-Z]+" required title=" valid UserName is required for registration">
						</div>
					</div><!--row5 ends-->
					
					
					<div class="row">
						<div class="col-sm-12">
							<br>
						</div>
					</div><!--row6 ends-->
					
					<div class="row">
						<div class="col-sm-4">
							<label>Registration Number</label>
						</div>
						<div class="col-sm-8">
							<input type="text" name="regnum" placeholder="enter registered number at first year" id="regnum" class="form-control">
						</div>
					</div><!--row5 ends-->
					
					<div class="row">
						<div class="col-sm-12">
							<br>
						</div>
					</div><!--row6 ends-->
					
					<div class="row">
						<div class="col-sm-4">
							<label>Roll NO</label>
						</div>
						<div class="col-sm-8">
							<input type="text" name="rollno" placeholder="enter roll number" id="rollno" class="form-control">
						</div>
					</div><!--row5 ends-->
					
					<div class="row">
						<div class="col-sm-12">
							<br>
						</div>
					</div><!--row6 ends-->
					<div class="row">
						<div class="col-sm-4">
							<label>Mobile</label>
						</div>
						<div class="col-sm-8">
							<input type="text" name="mobile" placeholder="enter mobile" id="mobile" class="form-control">
						</div>
					</div><!--row5 ends-->
					
					<div class="row">
						<div class="col-sm-12">
							<br>
						</div>
					</div><!--row6 ends-->
					
					<div class="row">
						<div class="col-sm-4">
							<label>Password</label>
						</div>
						<div class="col-sm-8">
							<input type="password" name="password" placeholder="enter password" id="password" class="form-control">
						</div>
					</div><!--row7 ends-->
					<div class="row">
						<div class="col-sm-12">
							<br>
						</div>
					</div><!--row8 ends-->
					
					<div class="row">
						<div class="col-sm-4">
							<label>Confirm Password</label>
						</div>
						<div class="col-sm-8">
							<input type="password" name="cpassword" placeholder="re-enter password" id="cpassword" class="form-control">
						</div>
					</div><!--row9 ends-->
					<div class="row">
						<div class="col-sm-12">
							<br>
						</div>
					</div><!--row10 ends-->
					
					<div class="row">
						<div class="col-sm-12 text-center">
							<input type="submit" id="btn" class="btn btn-success" value="Create Account">
							<button type="reset" class="btn btn-warning">Clear</button>
						</div>
					</div><!--row19 ends-->
					<div class="row">
						<div class="col-sm-12">
							<br>
						</div>
					</div><!--row20 ends-->
					</form>
				</div><!--col-sm-6 is getting closed-->
				
				<div class="col-sm-3">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
				</div>
				<div class="col-sm-4">
					<h5 align="center" style="color:#9933FF"><a href="firstpage.php">NIT Andhra Pradesh Portal</a></h5>
				</div>
				<div class="col-sm-4">
				</div>
			</div>
		</div>
	</form>
	</body>
</html>