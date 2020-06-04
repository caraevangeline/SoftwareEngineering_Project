

<?php

$rollno = $_POST['rollno'];
$tid = $_POST['tid'];
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link,"se project");
$tid = stripcslashes($tid);
$tid = mysqli_real_escape_string($link,$tid);
$rollno = stripcslashes($rollno);
$rollno = mysqli_real_escape_string($link,$rollno);
//$_SESSION['tida']=$tid;

if(!empty('$tid') && !empty('$rollno'))
{
	$result=mysqli_query($link,"select * from $tid where sid='$rollno'")
	    or die("failed to query database ".mysqli_error($link));
 $row = mysqli_fetch_array($result);
// echo $row['Tid'];
if(!$row){ header("LOCATION: student1.php");
}
}
else
{header("LOCATION: student1.php");}

?>
<html>
	<head>
		<title>feedback</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="opacity.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
	</head>
	<body style="background-image:url(images/b3.jpg)">
		<nav class="nav navbar-inverse">
			<div class="container-fluid">
					<div class="navbar-header">
					<a href="student.html" class="navbar-brand"><span align="center" style="color:white;font-weight:2px"><span class="glyphicon glyphicon-grain" style="font-size:20px;color:white"></span>WSDC</span>
					</a>
					</div>
					<ul class="nav navbar-nav">
						<li><a href="student1.php">Home</a></li>
						
					</ul>
					<ul class="nav navbar-nav navbar-right">
			
						<li><a href="firstpage.php"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
					</ul>
			</div>
		</nav>
<div class="row" align="center">
	<h2>Marks and Attendence</h2>
	<br>
	<br>
</div>	
<div class="row">
<div class="col-sm-4">
	<div class="row">
 	<div class="col-sm-3">
	 </div>
    
                 <div class="col-sm-8">
         	      <img src="images/student.png"  width="200" height="300">  
                 </div>
             

      <div class="col-sm-1">
	 </div>
   </div>        

</div>
	<div class="col-sm-4">
<div class="row">		
<div class="panel panel-primary">
  <div class="panel-heading"><h3>Attendence</h3></div>
  <div class="panel-body"><?php echo $row['Attendence'] ?></div>
</div>
</div>
<div class="row">
	<br>
	<br>
</div>	
<div class="row">		
<div class="panel panel-primary">
  <div class="panel-heading"><h3>Marks</h3></div>
  <div class="panel-body"><?php echo $row['CGPA'] ?></div>
</div>
</div>
    </div>
<div class="col-sm-4"></div>
</div>
</body>
</html>

