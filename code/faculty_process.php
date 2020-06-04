<?php
$username = $_POST['username'];
$password = $_POST['password'];

$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link,"se project");

$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($link,$username);
$password = mysqli_real_escape_string($link,$password);

if(!empty($username) && !empty($password))
{
$result = mysqli_query($link,"select * from users where username = '$username' and username like 't%' and password = '$password' ")
	  or die("failed to query database ".mysqli_error());
$row = mysqli_fetch_array($result);
if($row['username'] == $username && $row['password'] == $password){
	header("LOCATION: faculty1.php");
}
else{echo "failed to login.";
echo "<script>setTimeout(\"location.href = 'http://localhost/se%20project/login_faculty.php';\",1500);</script>";
}
}
else
{header("LOCATION: login_faculty.php");
}