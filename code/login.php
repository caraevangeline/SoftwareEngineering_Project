<html>
	<head>
		<title>
		Form in bootstrap
		</title>
		<link href="css/bootstrap.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
				</div>
				<div class="col-sm-4">
					<h3 align="center" style="color:blue;font-weight:2px"><span class="glyphicon glyphicon-grain" style="font-size:20px;color:#009966"></span>WSDC</h3>
					<h2 align="center" style="color:#9999FF">Student Portal</h2>
				</div>
				<div class="col-sm-4">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
				</div>
				<div class="col-sm-4 well">
					<h5 align="center" style="color:#9999FF">WSDC Account</h5>
					
					<form action="process.php" method="POST">
					<div class="row">
						<div class="col-sm-4">
							<label>Username</label>
						</div>

						<div class="col-sm-8">
							<input type="text" name="username" placeholder="enter username" id="username" class="form-control" required  maxlength="6" minlength="6"  size="6" pattern="[s]{1}[12]{1}[1234]{1}[0-9]{2}" title="please give the valid student id">
						</div>
					</div><!--row1 ends-->
					
					<div class="row">
						<div class="col-sm-12">
							<br>
						</div>
					</div><!--row2 ends-->
					
					<div class="row">
						<div class="col-sm-4">
							<label>Password</label>
						</div>
						<div class="col-sm-8">
							<input type="password" name="password" placeholder="enter password" id="password" class="form-control" required size="6" minlength="6" maxlength="6" title="password should contain exactly 6 characters">
						</div>
					</div><!--row7 ends-->
					
					<div class="row">
						<div class="col-sm-12">
							<br>
						</div>
					</div><!--row8 ends-->
					<div class="row">
						<div class="col-sm-12 text-center">
							<input type="submit" id="btn" class="btn btn-success" value="login">
							<!--	<a href="student.html">Login</a></button>-->
							<input type="reset" class="btn btn-warning" value="refresh">
						</div>
					</div><!--row19 ends-->
					
					<div class="row">
						<div class="col-sm-12">
							<br>
						</div>
					</div><!--row20 ends-->
				</form>
				
				</div><!--col-sm-6 is getting closed-->
				<div class="col-sm-4">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
				</div>
				<div class="col-sm-4">
					<h5 align="center" style="color:#9999FF"> Forgot Password?<a href="sendmail.php">Click Here</a></h5>
					<hr>
					<h5 align="center" style="color:#9999FF">Don't have an Account?</h5>
					<h5 align="center" style="color:#9933FF"><a href="signup.php">Sign UP</a></h5>
					<hr>
					<h5 align="center" style="color:#9933FF"><a href="firstpage.php">NIT Andhra Pradesh Portal</a></h5>
				</div>
				<div class="col-sm-4">
				</div>
			</div>
		</div>
	</body>
</html>


