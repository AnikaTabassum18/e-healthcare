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
<title>login</title>
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
padding-top:65px;
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
    <h1>User's Login Page</h1>

<?php
error_reporting(0);
session_start();
include("connection.php");
include ('../translate.php');

if(isset($_POST['submit'])){

$id=$_POST['id'];
$pswd=$_POST['pswd'];
$email=$_POST['email'];
if(empty($email) || empty ($pswd))
{
$error_msg="filled all the requirements";
}

else

{

$u_query="select* from user where email='$email' AND pswd='$pswd'";
	$check=mysqli_query($db,$u_query);
	
	if(mysqli_num_rows($check)>0)
	/*if($_POST['id']=='$id' && $_POST['pswd']=='$pswd')*/
	
	{
	$check_row= mysqli_fetch_assoc($check);
	$_SESSION['email']=$check_row['email'];
	echo "<script> window.location='view_user_home_page.php' </script> ";
	}
	else
	{
	$invalid_msg="Invalid user email/ password ";
	}

}
}
?>
<p style="color:#000066"> It's <strong style="color:black">User login</strong> page . Only user can login from here .If you want to <strong style="color:black">Login</strong>. You need to register first . If you are not registered , <strong style="color:black">Register</strong> first . After being a member , you can make appointment to doctor's . You can get also other facilities .
<h2 ><a href=..><strong style="color:#000000">Back</strong></a></h2> </p>

<strong style="padding-left:100px">Click Here For Login    <button onClick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button></br>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="login.php" method="post">
    <div class="imgcontainer">
      <span onClick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="../2-256.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="email"><b>User Email</b></label>
      <input type="email" placeholder="Enter User Email" name="email" required>

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
?><strong style="padding-left:100px">
Not Yet A Member? <a href=registration.php>Register</a></strong><br />

</div>


</body>
</html>
