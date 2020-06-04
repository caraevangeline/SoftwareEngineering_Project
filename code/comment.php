<?php
session_start();
?>

<?php

$comment = $_POST['comment'];
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link,"se project");
$comment = stripcslashes($comment);
$comment = mysqli_real_escape_string($link,$comment);
$tid=$_SESSION['tida'];
if(!empty('$comment'))
{
	$result=mysqli_query($link,"update teacher set comment='$comment' where Tid='$tid'")
	    or die("failed to query database ".mysqli_error($link));

// echo $row['Tid'];
header("LOCATION: admin1.php"); 

}
else
{header("LOCATION: process_feedbacka.php");}

?>