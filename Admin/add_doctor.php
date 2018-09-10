<style>
<?php 
include '../style1.css';
?>
</style><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="style.css" rel="stylesheet" type="text/css" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Doctor name list</title>
</head>
<style>h1{
font-size:50px;
text-align:center;
padding-top:30px;
color:#000066;
}
img 
{ float: left;
width: 77px;
}
div{
font-size:22px;
}
li{
font-size:22px;
}
ul{
font-size:28px;
}
ul h3{
font-size:40px;
}
body {margin:0;
padding:0;
font-family:"Bahnschrift Light", "Bernard MT Condensed", "Berlin Sans FB Demi", "Bell MT";
width:100%;
height:100vh;
background-image:url(../pic/healthcare-banner.jpg);
background-size:cover;
}
</style>
<?php 
include("connection.php");
include '../translate.php';


if(isset($_POST["submit"])){
$d_id = $_POST['id'];
$d_f_name = $_POST['f_name'];
$d_l_name = $_POST['l_name'];
$d_email = $_POST['email'];
$d_specialist=($_POST['specialist']);
$d_qualification=($_POST['qualification']);
$d_pswd = $_POST['pswd'];
$d_pswd_len=strlen($d_pswd);
 
 $date = date("y/m/d") ;

  $_POST[".$date."];

//if(empty($d_id))
//{
//$error_msg="Please Enter Your Id";
//}
  // elseif(!filter_var($d_id,FILTER_VALIDATE_INT)){
	//  $error_msg ="Please Enter A Valid Id";
	 //  }
	 if(empty($d_f_name))
	   {
	   $error_msg="Please Enter Your  First Name";
	   }
	   	 elseif(empty($d_l_name))
	   {
	   $error_msg="Please Enter Your  Last Name";
	   }
	     elseif(empty($d_email))
	   {
	   $error_msg="Please Enter Your Email";
	   }
	   elseif(empty($d_specialist))
	   {
	   $error_msg="Please Enter Your Specialism";
	   }
	    elseif(empty($d_qualification))
	   {
	   $error_msg="Please Enter Your Qualification Section";
	   }
	  
	   elseif(empty($d_pswd))
	   {
	   
	   $error_msg=" Please Enter Your Password";
	   }
	  elseif($d_pswd_len<=8)
	   {
	   $error_msg="Yuor Password Should Be More Than 8 Characters Long";
	   }
	   else
	   
	   { $d_query="INSERT INTO doctor(id,f_name,l_name,email,specialist,qualification,permission,pswd,date)     
	                            VALUES('$d_id','$d_f_name','$d_l_name','$d_email','$d_specialist','$d_qualification','Added','$d_pswd','$date')" ;
								mysqli_query($db,$d_query);
							$run= $success_msg="Successfully Members Are Add ";
						
				
							 }
	
	
}
	 
?>
<h1>ADD DOCTOR</h1>
<form  action = "add_doctor.php"  method="POST">
<div class="container text-dark font-weight-bold">

     <h2>Please fill in this form to create an account.</h2>
      <hr>

<label  class="text-capitalize"for="f_name"><b>First Name:</b></label><br /><br /><input type="text"placeholder="Enter  First Name" name="f_name"required><br /><br />
<label for="l_name"><b>Last Name:</b></label><br /><br /><input type="text"placeholder="Enter  Last Name" name="l_name"required><br /><br />
<label for="email"><b>Email:</b></label><br /><br /><input type="email"placeholder="Enter Email" name="email"required><br /><br />
<label for="specialist"><b>Specialist:</b></label><br /><br /><select name="specialist"required>
  
  <option value= "medicine"required>Medicine</option>
  <option value="Orthopedic"required>Orthopedic</option>
  <option value="gynecologist"required>Gynecologist</option>
  <option value="dentist"required>Dentist</option>
   <option value= "cardiac_electrophysiologist"required> Cardiac electrophysiologist</option>

    <option value="cardiologist"required>Cardiologist </option>
 
   <option value="surgeon"required>Surgeon </option></select> <br /><br />
 
 
<label for="qualification"><b>Qualification:</b></label><br /><br /><input type="text"placeholder="Enter  Designation" name="qualification"required><br /><br /> 

<label for="pswd"><b>Create New Password  :</b></label><br /><br /><input type = "password" placeholder="Create  Password"name="pswd"required>   password should be more than 8 characters long 

      <br /><br />    <input  class="text-capitalize font-weight-bold"type ="submit" name="submit" value="register">   
</div>
<?php
if(isset($error_msg)){echo $error_msg;}
if(isset($success_msg)){echo $success_msg;}

?>

</form></ul>
<div class="container ">
<ul class="pager font-weight-bold text-monospace text-center">
  <li class="previous "><a href="view_admin_home_page.php">Previous</a></li>
  <li class="next"><a href="display_user.php">Next</a></li>
</ul></div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
      
</body>
</html>
