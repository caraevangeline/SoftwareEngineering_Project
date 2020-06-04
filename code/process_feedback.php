<?php
session_start();
?>

<?php

$tid = $_POST['tid'];
$rollno = $_POST['rollno'];

$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link,"se project");
$tid = stripcslashes($tid);
$tid = mysqli_real_escape_string($link,$tid);
$rollno = stripcslashes($rollno);
$rollno = mysqli_real_escape_string($link,$rollno);
$_SESSION['tidf']=$tid;
$_SESSION['rollnof']=$rollno;

if(!empty($tid) && !empty($rollno))
{$result1 = mysqli_query($link,"select * from users where username ='$tid'")
	      or die("failed to query database ".mysqli_error($link));

$row1 = mysqli_fetch_array($result1);
if(!$row1) {echo "enter valid teacher id" ;
               echo "<script>setTimeout(\"location.href = 'http://localhost/se%20project/student.php';\",1500);</script>";
}

$result2 = mysqli_query($link,"select * from users where rollno='$rollno'")
	      or die("failed to query database ".mysqli_error($link));

$row2= mysqli_fetch_array($result2);
if(!$row2) {echo "enter valid roll number" ;
               echo "<script>setTimeout(\"location.href = 'http://localhost/se%20project/student.php';\",1500);</script>";
}

	$result= mysqli_query($link,"create table if not EXISTS $tid like t251")
	      or die("failed to query database ".mysqli_error($link));
	header("LOCATION: feedbackform.php");      
}
else
{	header("LOCATION: student1.php"); 

}

