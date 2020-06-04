<?php
session_start();
?>

<?php
//include 'process_feedback.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
$rating1=$_POST['rating1'];
$rating2=$_POST['rating2'];
$rating3=$_POST['rating3'];
$rating4=$_POST['rating4'];
$rating5=$_POST['rating5'];
$rating6=$_POST['rating6'];
$rating7=$_POST['rating7'];
$rating8=$_POST['rating8'];
$rating9=$_POST['rating9'];
$rating10=$_POST['rating10'];
$rating11=$_POST['rating11'];
$rating12=$_POST['rating12'];
$rating13=$_POST['rating13'];
$rating14=$_POST['rating14'];
$rating15=$_POST['rating15'];
$rating16=$_POST['rating16'];
$rating17=$_POST['rating17'];
$rating18=$_POST['rating18'];
$rating19=$_POST['rating19'];
$rating20=$_POST['rating20'];
$rating21=$_POST['rating21'];
$rating22=$_POST['rating22'];
$rating23=$_POST['rating23'];
$rating24=$_POST['rating24'];
$rating25=$_POST['rating25'];
$rating26=$_POST['rating26'];
$rating27=$_POST['rating27'];
$rating28=$_POST['rating28'];
$rating29=$_POST['rating29'];
$rating30=$_POST['rating30'];
$tid=$_SESSION['tidf'];
$rollno=$_SESSION['rollnof'];

echo"$rating1";
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link,"se project");
$res=mysqli_query($link,"select * from $tid where sid='$rollno'")
 or die("failed to query database ".mysqli_error($link));
 $row = mysqli_fetch_array($res);
 
if(empty('$rating1') || empty('$rating2') ||empty('$rating3') ||empty('$rating4') ||empty('$rating5') ||empty('$rating6') ||empty('$rating7') ||empty('$rating8') ||empty('$rating9') ||empty('$rating10') ||empty('$rating11') ||empty('$rating12') ||empty('$rating13') ||empty('$rating14') ||empty('$rating15') ||empty('$rating16') ||empty('$rating17') ||empty('$rating18') ||empty('$rating19') ||empty('$rating20') ||empty('$rating21') ||empty('$rating22') ||empty('$rating23') ||empty('$rating24') ||empty('$rating25') ||empty('$rating26') ||empty('$rating27') ||empty('$rating28') ||empty('$rating29') ||empty('$rating30'))
{echo "all questions are compulsory";
 	//header("LOCATION: student1.php");
 echo "<script>setTimeout(\"location.href = 'http://localhost/se%20project/student1.php';\",1500);</script>";


}

if($row['sid']==$rollno && $row['Q1']!=NULL){echo "feedback given";}

else if(!$row)
{
$result=mysqli_query($link,"insert into $tid(sid,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14,Q15,Q16,Q17,Q18,Q19,Q20,Q21,Q22,Q23,Q24,Q25,Q26,Q27,Q28,Q29,Q30) values ('$rollno','$rating1','$rating2','$rating3','$rating4','$rating5','$rating6','$rating7','$rating8','$rating9','$rating10','$rating11','$rating12','$rating13','$rating14','$rating15','$rating16','$rating17','$rating18','$rating19','$rating20','$rating21','$rating22','$rating23','$rating24','$rating25','$rating26','$rating27','$rating28','$rating29','$rating30') ")
 or die("failed to query database ".mysqli_error($link));
 if($result){
 //echo "feedback registered";
 echo "<script>setTimeout(\"location.href = 'http://localhost/se%20project/student1.php';\",1500);</script>";
 	header("LOCATION: student1.php");
}
}
 else
 {$result=mysqli_query($link,"insert into $tid(Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14,Q15,Q16,Q17,Q18,Q19,Q20,Q21,Q22,Q23,Q24,Q25,Q26,Q27,Q28,Q29,Q30) values ('$rating1','$rating2','$rating3','$rating4','$rating5','$rating6','$rating7','$rating8','$rating9','$rating10','$rating11','$rating12','$rating13','$rating14','$rating15','$rating16','$rating17','$rating18','$rating19','$rating20','$rating21','$rating22','$rating23','$rating24','$rating25','$rating26','$rating27','$rating28','$rating29','$rating30') where sid='$rollno'")
 or die("failed to query database ".mysqli_error($link));
//echo "feedback registered";
 //echo "<script>setTimeout(\"location.href = 'http://localhost/se%20project/student.php';\",1500);</script>";

header("LOCATION: student1.php");

 }

 }