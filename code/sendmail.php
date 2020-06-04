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
			<form name="frmForgot" id="frmForgot" method="post" onSubmit="return validate_forgot();">

			<div class="row">
				<div class="col-sm-3">
				</div>
				<div class="col-sm-6 well">
					<div class="row">
						<div class="col-sm-2">
							<label>Email</label>
						</div>
						<div class="col-sm-10">
							<input type="text" name="email" placeholder="enter email" class="form-control">
						</div>
					</div> <!--row1 ends-->
					<div class="row">
						<div class="col-sm-12">
							<br>
							<h6 align="center" style="color:#9933FF"><span class="glyphicon glyphicon-warning-sign" size="8px"></span>Check your inbox(or spam mail) for activation</h6>>
						</div>
					</div><!--row2 ends-->
					<div class="row">
						<div class="col-sm-12 text-center">
							<button type="submit" class="btn btn-success">Submit</button>
							<button type="reset" class="btn btn-warning">Clear</button>
						</div>
					</div><!--row19 ends-->
					<div class="row">
						<div class="col-sm-12">
							<br>
						</div>
					</div><!--row20 ends-->
					
				</div><!--col-sm-6 is getting closed-->
				<div class="col-sm-3">
				</div>
			</div>
			</form>
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
	</body>
</html>


<?php
	if(!empty($_POST["Submit"])){
$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($link,"se project");
		
		$condition = "";
		
		if(!empty($_POST["user-email"])) {
			
			$condition = " email = '" . $_POST["user-email"] . "'";
		}
		
		if(!empty($condition)) {
			$condition = " where " . $condition;
		}

		$sql = "Select * from users " . $condition;
		$result = mysqli_query($conn,$sql);
		$user = mysqli_fetch_array($result);
		
		if(!empty($user)) {
			require_once("forgot-password-recovery-mail.php");
		} else {
			$error_message = 'No User Found';
		}
	}
?>




