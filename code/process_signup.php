
<?php

/*$name = $_POST['user'];
$email = $_POST['email'];
$username = $_POST['username'];
$regnum = $_POST['regnum'];
$rollno = $_POST['rollno'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
*/

$nameerr=$emailerr=$phoneerr=$regnumerr=$rollnoerr=$usererr=$passworderr=$cpassworderr="";
$error=0;
$name=$email=$username=$regnum=$rollno=$mobile=$password=$cpassword="";
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link,"se project");

/*$username = mysqli_real_escape_string($link,$username);
$name = mysqli_real_escape_string($link,$name);
$email = mysqli_real_escape_string($link,$email);
$regnum = mysqli_real_escape_string($link,$regnum);
$rollno = mysqli_real_escape_string($link,$rollno);
$mobile = mysqli_real_escape_string($link,$mobile);
$password = mysqli_real_escape_string($link,$password);
*/
if($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"]))
  {
    $nameerr = "Name is required";
$error=1;
  }
  else
  {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name))
    {
      $nameerr = "Only letters and white space allowed";
$error=1;
    }
  }

 if (empty($_POST["email"])) {
    $emailerr = "Email is required";
  } 
  else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailerr = "Invalid email format";
    }
  }

 if (empty($_POST["username"]))
  {
    $usererr = "Username is required";

  }
  else
  {
    $name = test_input($_POST["username"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[st0-9]*$/",$username))
    {
      $usererr = "id or Registration no is only allowed";

    }
     if((strlen($_POST["username"]))>6)
 	{
             $usererr= "username should be less than 6 characters";
 	}
  }
if(!empty($_POST["regnum"])){
$regnum = test_input($_POST["regnum"]);
     if ((!preg_match("/^[0-9]*$/",$regnum)))
     {
       $regnumerr= "Only numbers are allowed";
     }
     if((strlen($_POST["regnum"]))!=5)
 	{
             $regnumerr= "enter valid registration number";
 	}
}

if(!empty($_POST["rollno"])){
$rollno = test_input($_POST["rollno"]);
     if ((!preg_match("/^[0-9]*$/",$rollno)))
     {
       $rollnoerr= "Only numbers are allowed";
     }
     if((strlen($_POST["rollno"]))!=4)
 	{
             $rollnoerr= "enter valid roll number";
 	}
}

if (empty($_POST["password"]))
   {
     $passworderr= "Password required";
   }
   else
   {
     $password = test_input($_POST["password"]);
     
     if((strlen($_POST["password"]))>6)
 	{
             $passworderr= "Password should be maximum 6 digits";
 	}
   }

if (empty($_POST["cpassword"]))
   {
     $cpassworderr= "Conform Password required";
   }
   else
   {
     $cpassword = test_input($_POST["cpassword"]);
     
     if($cpassword != $password)
 	{
             $cpassworderr= "Not same as password";
 	}
   }
 	
 	if (empty($_POST["mobile"]))
   {
     $phoneerr= "mobile number is required";
   }
   else
   {
     $mobile = test_input($_POST["mobile"]);
     if ((!preg_match("/^[0-9 ]*$/",$mobile)))
     {
       $phoneerr= "Only numbers are allowed";
     }
     if((strlen($_POST["mobile"]))!=10)
 	{
             $phoneerr= "mobile number should be a 10 digit number";
 	}
   }

/*if(!empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['cpassword']) && !empty($_POST['mobile']))

{
$result = mysqli_query($link,"select * from users where email = '$email' ")
	  or die("failed to query database1 ".mysqli_error($link));
$row = mysqli_fetch_array($result);
if($row)
{echo "email already registered";
echo "<script>setTimeout(\"location.href = 'http://localhost/se%20project/signup.php';\",1500);</script>";
}

else{
	$result = mysqli_query($link,"select * from users where username = '$username' ")
	  or die("failed to query database2 ".mysqli_error($link));

$row = mysqli_fetch_array($result);
if($row)
{echo "username already exists";
 echo "<script>setTimeout(\"location.href = 'http://localhost/se%20project/signup.php';\",1500);</script>";
}
else{
	$result = mysqli_query($link,"select * from users where regnum = '$regnum' ")
	  or die("failed to query database3 ".mysqli_error($link));

$row = mysqli_fetch_array($result);
if($row)
{echo "registration number already registered";
echo "<script>setTimeout(\"location.href = 'http://localhost/se%20project/signup.php';\",1500);</script>";
}
else{
if($password != $cpassword)
 {echo "re enter password correctly" ;
  echo "<script>setTimeout(\"location.href = 'http://localhost/se%20project/signup.php';\",1500);</script>";
  }
else{
  $query = "INSERT INTO users (name,email,username,regnum,rollno,mobile,password) VALUES ('$name','$email','$username','$regnum','$rollno','$mobile','$password')";

if(mysqli_query($link,$query)) 
{ echo "your have successfully registered" ;}

else{	die ("failed to query database 4".mysqli_error($link));}

mysqli_close($link);
}}}}}
else{echo "enter all details";
      echo "<script>setTimeout(\"location.href = 'http://localhost/se%20project/signup.php';\",1500);</script>";}*/
if($nameerr==""&&$emailerr==""&&$phoneerr==""&&$regnumerr==""&&$rollnoerr==""&&$usererr==""&&$passworderr==""&&$cpassword=="")
{
$result = mysqli_query($link,"select * from users where email = '$email' ")
	  or die("failed to query database1 ".mysqli_error($link));
$row = mysqli_fetch_array($result);
if($row)
{$emailerr = "email already registered";
}


	$result = mysqli_query($link,"select * from users where username = '$username' ")
	  or die("failed to query database2 ".mysqli_error($link));

$row = mysqli_fetch_array($result);
if($row)
{$usererr = "username already exists";
 }

	$result = mysqli_query($link,"select * from users where regnum = '$regnum' ")
	  or die("failed to query database3 ".mysqli_error($link));

$row = mysqli_fetch_array($result);
if($row)
{$regnumerr = "registration number already registered";
}

if($emailerr==""&&$usererr==""&&$regnumerr=="")
  {$query = "INSERT INTO users (name,email,username,regnum,rollno,mobile,password) VALUES ('$name','$email','$username','$regnum','$rollno','$mobile','$password')";

if(mysqli_query($link,$query)) 
{ echo "your have successfully registered" ;
      echo "<script>setTimeout(\"location.href = 'http://localhost/se%20project/firstpage.php';\",1500);</script>";}


else{	die ("failed to query database 4".mysqli_error($link));}

mysqli_close($link);
}}
else{echo "enter all details";
     // echo "<script>setTimeout(\"location.href = 'http://localhost/se%20project/signup.php';\",1500);</script>";
}
}
      function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>