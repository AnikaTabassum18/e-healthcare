<style>
<?php
include '../style.css';
include 'style.css';
?>
</style>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>doctor_login</title>
</head>
<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
<style>
h1{
font-size:50px;
text-align:center;
padding-top:50px;
color:#330066;
}
p{
color:#000066;
font-size:28px;
font-style:inherit;
font-family:Geneva, Arial, Helvetica, sans-serif;
padding-top:80px;
padding-left:90px;
padding-right:90px;
text-align:center;
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
<body>
  <h1>Doctor's Login Page</h1>
     
     
<?php
error_reporting(0);
session_start();
include("connection.php");
include ('..translate.php');

if(isset($_POST['submit'])){

$d_id=$_POST['id'];
$d_pswd=$_POST['pswd'];
$d_email = $_POST['email'];  
if(empty($d_email) || empty ($d_pswd))
{
$error_msg="filled all the requirements";
}
//elseif($d_query="select* from doctor where  email='$d_email'  AND pswd='$d_pswd' AND permission='Pending'")
//{
//$error_msg="Wait for  Admins Approval";

//}
else

{

$d_query="select* from doctor where  email='$d_email'  AND pswd='$d_pswd' AND permission='Approved' OR  email='$d_email'    AND pswd='$d_pswd' AND permission='Added'";
	$check=mysqli_query($db,$d_query);
	
	if(mysqli_num_rows($check)>0)
	/*if($_POST['id']=='$id' && $_POST['pswd']=='$pswd')*/
	
	{
	$check_drow= mysqli_fetch_assoc($check);
	$_SESSION['email']=$check_drow['email'];
	//$_SESSION['id']=$check_drow['id'];
	echo "<script> window.location='doctor_home_page.php' </script> ";
	}
	
else
{
$invalid_msg="Invalid email / password / Not Approved/Added by Admin ";
}
}
}
?>
<p style="color:#000066"> It's<strong style="color:black"> doctor login</strong> page . Only doctor can login from here .If you want to <strong style="color:black">Login</strong> . You need to register first . If you are not registered , <strong style="color:black">Register</strong> first . 
<h2 ><a href=..><strong style="color:#000000">Back</strong></a></h2> </p>

<strong style="padding-left:100px">
Click Here For Login <button onClick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button></strong></br>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="doctor_login.php" method="post">
    <div class="imgcontainer">
    <span onClick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="../2-256.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="email"><b> Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="pswd"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pswd" required>
        
 
        <button type ="submit" name="submit" value="login">Login</button>
    
 </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onClick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
     
    </div>
    
   
  </form>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
 <?php
if(isset($error_msg)){echo $error_msg;}
if(isset($invalid_msg)){echo $invalid_msg;}
?>
<strong>
Not Yet A Member? <a href=doctor_registration.php>Register</a></strong><br />

</div>

</body>
</html>
