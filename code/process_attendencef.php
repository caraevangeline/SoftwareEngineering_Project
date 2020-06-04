<?php
session_start();
?>

<?php
if (isset($_POST['submit'])){
$tid = $_POST['tid'];
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link,"se project");
$tid = stripcslashes($tid);
$tid = mysqli_real_escape_string($link,$tid);
$_SESSION['tidattendence']=$tid;
if(!empty('$tid'))
{$result= mysqli_query($link,"create table if not EXISTS $tid like t251")
	      or die("failed to query database ".mysqli_error($link));    

	$result=mysqli_query($link,"select sid from $tid")
	    or die("failed to query database ".mysqli_error($link));
 $row = mysqli_fetch_array($result);
// echo $row['Tid'];
 if(!$row){header("LOCATION: faculty1.php");}

}
else
{header("LOCATION: faculty1.php");}
}
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
			
				<h1 align="center" style="color:#006400">Enter Attendence</h1>
				<br>
				<br>
			</div>
		</div>
<div class="col-sm-3">
</div>
<div class="col-sm-6" align="center">
		<form action = "store_attendence.php" method="POST">
	
		<table border="2">
   <div class="col-sm-12">
   <tr>
      <th>Student roll no</th>
      <th>attendence</th>
      </tr>
    </div>
    <div class="row">
	</div>
<tr></tr>
    <div class="col-sm-12">
    <tr>

    	<td><input type="text" name="s" class="form-control" required  maxlength="4" minlength="4"  size="4" pattern="[12]{1}[1234]{1}[0-9]{2}" title="please give the valid roll number"></td>
    	<td><input type="text" name="a" class="form-control"></td>
    </tr>
</div>
</table>
<div class="row">
	</div>

<div class="col-sm-12">
<input type="submit" name="submit" value="Submit!" id="btn" class="btn btn-success"/>
</div>
</form>
</div>
<div class="col-sm-3">
	</div>


</body>
</html>