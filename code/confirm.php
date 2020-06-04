<?php include 'signup.php';
#require signup.php;
$email=$_POST['email'];
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link,"se project");
$result = mysqli_query($link,"update users set confirmed='1' where email='$email' ")
	  or die("failed to query database1 ".mysqli_error($link));
	  ?>