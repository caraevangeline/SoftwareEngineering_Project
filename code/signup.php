<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
<title>
		Form in bootstrap
		</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/jquery.min.js" rel="stylesheet">
</head>
<body>  
<form method="POST" action="mailpro1.php">
<?php

	


$nameerr=$emailerr=$phoneerr=$regnumerr=$rollnoerr=$usererr=$passworderr=$cpassworderr="";
$error=0;
$name=$email=$username=$regnum=$rollno=$mobile=$password=$cpassword="";
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link,"se project");

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
    $username = test_input($_POST["username"]);
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
if(empty($_POST["regnum"])){
$regnum ="";}
else{$regnum= test_input($_POST["regnum"]);
     if ((!preg_match("/^[0-9]*$/",$regnum)))
     {
       $regnumerr= "Only numbers are allowed";
     }
     if((strlen($_POST["regnum"]))!=5)
 	{
             $regnumerr= "enter valid registration number";
 	}
}

if(empty($_POST["rollno"])){
	$rollno="";}
	else{
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
 	 if((strlen($_POST["password"]))<6)
 	{
             $passworderr= "Password should be exactly 6 digits";
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


if($nameerr==""&&$emailerr==""&&$phoneerr==""&&$regnumerr==""&&$rollnoerr==""&&$usererr==""&&$passworderr==""&&$cpassworderr=="")
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
  { #$confirmcode=rand();
  	$query = "INSERT INTO users VALUES ('$name','$email','$username','$regnum','$rollno','$mobile','$password','0','9878')";

if(mysqli_query($link,$query)) 
{ echo "your have successfully registered!!!! Please verify your mail " ;


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

        <div class="container">
			<div class="row">
				<div class="col-sm-4">
				</div>
				<div class="col-sm-4">
					<h3 align="center" style="color:blue;font-weight:2px"><span class="glyphicon glyphicon-grain" style="font-size:20px;color:#009966"></span>WSDC</h3>
				</div>
				<div class="col-sm-4">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3">
				</div>
				
				<div class="col-sm-6 well">
					<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<div class="row">
						<div class="col-sm-4">
							<label>Name</label>
						</div>
						<div class="col-sm-8">
							<input type="text" name="name" placeholder="enter name" id="name" class="form-control" value="<?php echo $name;?>">
							<span class="error">* <?php echo $nameerr;?></span>
						</div>
					</div><!--row1 ends-->
					
					<div class="row">
						<div class="col-sm-12">
							<br>
						</div>
					</div><!--row2 ends-->
					
					<div class="row">
						<div class="col-sm-4">
							<label>Email</label>
						</div>
						<div class="col-sm-8">
							<input type="text" name="email" placeholder="enter email" id="email" class="form-control" value="<?php echo $email;?>">
							<span class="error">*<?php echo $emailerr ;?></span>
						</div>
					</div><!--row3 ends-->
					
					<div class="row">
						<div class="col-sm-12">
							<br>
						</div>
					</div><!--row4 ends-->
					
					<div class="row">
						<div class="col-sm-4">
							<label>User name</label>
						</div>
						<div class="col-sm-8">
							<input type="text" name="username" placeholder="enter username" id="username" class="form-control" value="<?php echo $username;?>">
							<span class="error">*<?php echo $usererr ;?></span>
							
						</div>
					</div><!--row5 ends-->
					
					
					<div class="row">
						<div class="col-sm-12">
							<br>
						</div>
					</div><!--row6 ends-->
					
					<div class="row">
						<div class="col-sm-4">
							<label>Registration Number</label>
						</div>
						<div class="col-sm-8">
							<input type="text" name="regnum" placeholder="enter registered number at first year" id="regnum" class="form-control" value="<?php echo $regnum;?>">
							<span class="error"><?php echo $regnumerr ;?></span>
						</div>
					</div><!--row5 ends-->
					
					<div class="row">
						<div class="col-sm-12">
							<br>
							<br>
						</div>
					</div><!--row6 ends-->
					
					<div class="row">
						<div class="col-sm-4">
							<label>Roll NO</label>
						</div>
						<div class="col-sm-8">
							<input type="text" name="rollno" placeholder="enter roll number" id="rollno" class="form-control" value="<?php echo $rollno;?>">
							<span class="error"><?php echo $rollnoerr ;?></span>
						</div>
					</div><!--row5 ends-->
					
					<div class="row">
						<div class="col-sm-12">
							<br>
							<br>
						</div>
					</div><!--row6 ends-->
					<div class="row">
						<div class="col-sm-4">
							<label>Mobile</label>
						</div>
						<div class="col-sm-8">
							<input type="text" name="mobile" placeholder="enter mobile" id="mobile" class="form-control" value="<?php echo $mobile;?>">
							<span class="error">*<?php echo $phoneerr ;?></span>
						</div>
					</div><!--row5 ends-->
					
					<div class="row">
						<div class="col-sm-12">
							<br>
						</div>
					</div><!--row6 ends-->
					
					<div class="row">
						<div class="col-sm-4">
							<label>Password</label>
						</div>
						<div class="col-sm-8">
							<input type="password" name="password" placeholder="enter password" id="password" class="form-control" value="<?php echo $password;?>">
							<span class="error">*<?php echo $passworderr ;?></span>
						</div>
					</div><!--row7 ends-->
					<div class="row">
						<div class="col-sm-12">
							<br>
						</div>
					</div><!--row8 ends-->
					
					<div class="row">
						<div class="col-sm-4">
							<label>Confirm Password</label>
						</div>
						<div class="col-sm-8">
							<input type="password" name="cpassword" placeholder="re-enter password" id="cpassword" class="form-control" value="<?php echo $cpassword;?>">
							<span class="error">*<?php echo $cpassworderr ;?></span>
						</div>

					</div><!--row9 ends-->
					<div class="row">
						<div class="col-sm-12">
							<br>
						</div>
					</div><!--row10 ends-->
					
					<div class="row">
						<div class="col-sm-12 text-center">
							<input type="submit" id="btn" class="btn btn-success" value="Create Account">
							<button type="reset" class="btn btn-warning">Clear</button>
						</div>
					</div><!--row19 ends-->
					<div class="row">
						<div class="col-sm-12">
							<br>
						</div>
					</div><!--row20 ends-->
					</form>
				</div><!--col-sm-6 is getting closed-->
				
				<div class="col-sm-3">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
				</div>
				<div class="col-sm-4">
					<h5 align="center" style="color:#9933FF"><a href="firstpage.php">NIT Andhra Pradesh Portal</a></h5>
				</div>
				<div class="col-sm-4">
				</div>
			</div>
		</div>
	</form>
	</body>
</html>