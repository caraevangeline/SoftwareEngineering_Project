<html>
	<head>
		<title>feedback</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="opacity.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
	</head>
	<body>
		<nav class="nav navbar-inverse">
			<div class="container-fluid">
					<div class="navbar-header">
					<a href="faculty.php" class="navbar-brand"><span align="center" style="color:white;font-weight:2px"><span class="glyphicon glyphicon-grain" style="font-size:20px;color:white"></span>WSDC</span>
					</a>
					</div>
					<ul class="nav navbar-nav">
						<li>
							<button type="button"  class="btn btn-link" data-toggle="modal" data-target="#mymodal0">
							Profile <span class="caret"></span>
							</button>
								<div id="mymodal0" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"><span style="color:red;">close</span>&times;</button>
											</div>
											<div class="modal-body">
												<div class="row">
													<div class="col-sm-2">
													</div>
													<div class="col-sm-8">
														<form action="process_profilef.php" method="POST">
														<div class="panel panel-warning">
															<div class="panel-heading">
																<div class="panel-title">
																<h3 style="text-align:center;">Profile</h3>
																</div>
															</div><!--panel heading getting closed-->
															<div class="panel-body">
																	<div class="row">
																		<div class="col-sm-4">
																			<label>Teacher ID : </label>
																		</div>

																		<div class="col-sm-8">
																			<input type="text" name="tid" placeholder="enter Teacher id" id="tid" class="form-control" required  maxlength="3" minlength="3"  size="3" pattern="[12][0-9]{2}" title="please give the valid teacher id">
																		</div>
																	</div><!--row1 ends-->
																	
																	<div class="row">
																		<div class="col-sm-12">
																			<br>
																		</div>
																	</div><!--row2 ends-->
																	
																	
															<div><!--panel body getting closed-->
															<div class="panel-footer">
																<div class="row">
																<div class="col-sm-12 text-center">
																			<input type="submit" id="btn" class="btn btn-success" value="login">
																			<!--	<a href="student.html">Login</a></button>-->
																			<input type="reset" class="btn btn-warning" value="refresh">
																		</div>

																</div><!--row19 ends-->
															</div><!--panel footer getting closed-->
														</div>
														</form>
													</div>
													<div class="col-sm-2">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
						</li>
						<li>
							<button type="button"  class="btn btn-link" data-toggle="modal" data-target="#mymodal1">
							Enter Attendance <span class="caret"></span>
							</button>
								<div id="mymodal1" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"><span style="color:red;">close</span>&times;</button>
											</div>
											<div class="modal-body">
												<div class="row">
													<div class="col-sm-2">
													</div>
													<div class="col-sm-8">
														<form action="process_attendencef.php" method="POST">
														<div class="panel panel-warning">
															<div class="panel-heading">
																<div class="panel-title">
																<h3 style="text-align:center;">Enter Attendance</h3>
																</div>
															</div><!--panel heading getting closed-->
															<div class="panel-body">
																	<div class="row">
																		<div class="col-sm-4">
																			<label>Teacher ID(eg:t251) : </label>
																		</div>

																		<div class="col-sm-8">
																			<input type="text" name="tid" placeholder="enter Teacher ID" id="tid" class="form-control" required  maxlength="4" minlength="4"  size="4" pattern="[t][12][0-9]{2}" title="please give the valid teacher id">
																		</div>
																	</div><!--row1 ends-->
																	
																	<div class="row">
																		<div class="col-sm-12">
																			<br>
																		</div>
																	</div><!--row2 ends-->
																	
																	
															<div><!--panel body getting closed-->
															<div class="panel-footer">
																<div class="row">
																<div class="col-sm-12 text-center">
																			<input type="submit" id="btn" class="btn btn-success" value="login">
																			<!--	<a href="student.html">Login</a></button>-->
																			<input type="reset" class="btn btn-warning" value="refresh">
																		</div>

																</div><!--row19 ends-->
															</div><!--panel footer getting closed-->
														</div>
														</form>
													</div>
													<div class="col-sm-2">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
						</li>
						<li>
							<button type="button"  class="btn btn-link" data-toggle="modal" data-target="#mymodal2">
							View Feedback<span class="caret"></span>
							</button>
								<div id="mymodal2" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"><span style="color:red;">close</span>&times;</button>
											</div>
											<div class="modal-body">
												<div class="row">
													<div class="col-sm-2">
													</div>
													<div class="col-sm-8">
														<form action="process_feedbackf.php" method="POST">
														<div class="panel panel-warning">
															<div class="panel-heading">
																<div class="panel-title">
																<h3 style="text-align:center;">View Feedback</h3>
																</div>
															</div><!--panel heading getting closed-->
															<div class="panel-body">
																	<div class="row">
																		<div class="col-sm-4">
																			<label>Teacher ID: </label>
																		</div>

																		<div class="col-sm-8">
																			<input type="text" name="tid" placeholder="enter Teacher ID" id="tid" class="form-control" required  maxlength="3" minlength="3"  size="3" pattern="[12][0-9]{2}" title="please give the valid teacher id">
																		</div>
																	</div><!--row1 ends-->
																	
																	<div class="row">
																		<div class="col-sm-12">
																			<br>
																		</div>
																	</div><!--row2 ends-->
																	
																	
															<div><!--panel body getting closed-->
															<div class="panel-footer">
																<div class="row">
																<div class="col-sm-12 text-center">
																			<input type="submit" id="btn" class="btn btn-success" value="login">
																			<!--	<a href="student.html">Login</a></button>-->
																			<input type="reset" class="btn btn-warning" value="refresh">
																		</div>

																</div><!--row19 ends-->
															</div><!--panel footer getting closed-->
														</div>
														</form>
													</div>
													<div class="col-sm-2">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
			
						<li><a href="firstpage.php"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
					</ul>
			</div>
		</nav>
		<div class="imagebox">
			
			<div class="row">
				<div class="col-sm-12">
					<br>
					<br>
				</div>
			</div>
			<div class="row">
			<div class="col-sm-4">
			</div>
			<div class="col-sm-4" >
				<div class="alert alert-info">
					<marquee behavior="scroll" direction="left"><h4><span class="glyphicon glyphicon-certificate"></span>feedback page is open</h4></marquee>
				</div>
				<br>
				<div class="alert alert-info">
					<marquee behavior="scroll" direction="left"><h4><span class="glyphicon glyphicon-certificate"></span>results are out now</h4></marquee>
				</div>
			</div>
			<div class="col-sm-4">
			</div>
			</div>
		</div>
	</body>
</html>