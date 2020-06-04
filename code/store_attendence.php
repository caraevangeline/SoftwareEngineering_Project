<?php
session_start();
?>

<?php
if (isset($_POST['submit'])){
$tid = $_SESSION['tidattendence'];
$sid = $_POST['s'];
$att = $_POST['a'];
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link,"se project");
$sid = stripcslashes($sid);
$sid = mysqli_real_escape_string($link,$sid);
$att = stripcslashes($att);
$att = mysqli_real_escape_string($link,$att);

if(!empty('$sid'))
{   $result=mysqli_query($link,"select * from $tid where sid='$sid'")
	    or die("failed to query database ".mysqli_error($link));
	 $row=mysqli_fetch_array($result);
	 if($row){   
 
	$result=mysqli_query($link,"update $tid set Attendence='$att' where sid='$sid'")
	    or die("failed to query database ".mysqli_error($link));
 
 if(!$result){header("LOCATION: process_attendencef.php");}
}
else
{$result=mysqli_query($link,"insert into $tid(sid,Attendence) values ('$sid','$att')")
	    or die("failed to query database ".mysqli_error($link));
 
 if(!$result){header("LOCATION: process_attendencef.php");}

}
}
else
{header("LOCATION: faculty1.php");}
}
?>