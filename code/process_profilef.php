<?php

$tid = $_POST['tid'];
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link,"se project");
$tid = stripcslashes($tid);
$tid = mysqli_real_escape_string($link,$tid);

if(!empty('$tid'))
{
	$result=mysqli_query($link,"select * from teacher where Tid='$tid'")
	    or die("failed to query database ".mysqli_error($link));
 $row = mysqli_fetch_array($result);
// echo $row['Tid'];
 if(!$row){echo "<script>setTimeout(\"location.href = 'http://localhost/se%20project/faculty1.php';\",1500);</script>";
}
}
else
{header("LOCATION: faculty1.php");}

?>
<html>
<html>
	<head>
		<title>feedback</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="opacity.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
	</head>
	<body style="background-image:url(images/b4.jpg)">
		<nav class="nav navbar-inverse">
			<div class="container-fluid">
					<div class="navbar-header">
					<a href="student.html" class="navbar-brand"><span align="center" style="color:white;font-weight:2px"><span class="glyphicon glyphicon-grain" style="font-size:20px;color:white"></span>WSDC</span>
					</a>
					</div>
					<ul class="nav navbar-nav">
						<li><a href="faculty1.php">Home</a></li>
						
					</ul>
					<ul class="nav navbar-nav navbar-right">
			
						<li><a href="firstpage.php"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
					</ul>
			</div>
		</nav>
		
		<div class="row">
			<div class="col-sm-12">
				<br>
				<br>
			
				<h1 align="center" style="color:#006400">Profile</h1>
				<br>
				<br>
			</div>
		</div>
		    <div class="row">
				<div class="col-sm-3">
				</div>
				
				<div class="col-sm-6 well" style="background-image:url(images/b3.jpg)">
		               <div class="row">
						<div class="col-sm-12">
							<br>
						</div>
					</div><!--row2 ends-->
					
					<div class="row">
						<div class="col-sm-8">
							<h3 style="color:#D2691E">No of conferences attended:</h3>
						</div>
						<div class="col-sm-4">
							<h3><?php echo $row['Conference'] ?></h3>
						</div>
					</div><!--row3 ends-->
					
					<div class="row">
						<div class="col-sm-12">
							<br>
						</div>
					</div><!--row4 ends-->
					
                    <div class="row">
						<div class="col-sm-8">
							<h3 style="color:#D2691E">No of Workshops attended:</h3>
						</div>
						<div class="col-sm-4">
							<h3><?php echo $row['Workshops'] ?></h3>
						</div>
					</div><!--row3 ends-->
					
					<div class="row">
						<div class="col-sm-12">
							<br>
						</div>
					</div><!--row4 ends-->
					 <div class="row">
						<div class="col-sm-8">
							<h3 style="color:#D2691E">No of Papers Published:</h3>
						</div>
						<div class="col-sm-4">
							<h3><?php echo $row['Papers'] ?></h3>
						</div>
					</div><!--row3 ends-->
					
					<div class="row">
						<div class="col-sm-12">
							<br>
						</div>
					</div><!--row4 ends-->
                    
                     <div class="row">
						<div class="col-sm-8">
							<h3 style="color:#D2691E">No of awards received:</h3>
						</div>
						<div class="col-sm-4">
							<h3><?php echo $row['Awards'] ?></h3>
						</div>
					</div><!--row3 ends-->
					
					<div class="row">
						<div class="col-sm-12">
							<br>
						</div>
					</div><!--row4 ends-->
  
                     <div class="row">
						<div class="col-sm-8">
							<h3 style="color:#D2691E">Teaching experience(in yrs):</h3>
						</div>
						<div class="col-sm-4">
							<h3><?php echo $row['Teaching_exp'] ?></h3>
						</div>
					</div><!--row3 ends-->
					
					<div class="row">
						<div class="col-sm-12">
							<br>
						</div>
					</div><!--row4 ends-->

                     <div class="row">
						<div class="col-sm-8">
							<h3 style="color:#D2691E">Industrial experience (in yrs):</h3>
						</div>
						<div class="col-sm-4">
							<h3><?php echo $row['Industrial_exp'] ?></h3>
						</div>
					</div><!--row3 ends-->
					
					<div class="row">
						<div class="col-sm-12">
							<br>
						</div>
					</div><!--row4 ends-->

                     <div class="row">
						<div class="col-sm-8">
							<h3 style="color:#D2691E">Acquired a Phd degree? :</h3>
						</div>
						<div class="col-sm-4">
							<h3><?php echo $row['Phd'] ?></h3>
						</div>
					</div><!--row3 ends-->
					
					<div class="row">
						<div class="col-sm-12">
							<br>
						</div>
					</div><!--row4 ends-->
                </div>

                 <div class="col-sm-3">
				</div>
			</div>

				</body>
				</html>