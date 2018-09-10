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
<style>
h1{
font-size:50px;
text-align:center;
padding-top:50px;
color:#330066;
}
p{
color:#000066;
font-size:32px;
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
<title>adminlogin</title>
</head>
<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
<body background="pic/healthcare-banner.jpg">
<h1>Admin's Login Page</h1>

<?php
error_reporting(0);
session_start();
include("connection.php");
include ('..translate.php');

if(isset($_POST['submit'])){

$admin_id=$_POST['admin_id'];
$admin_pswd=$_POST['admin_pswd'];

if(empty($admin_id) || empty ($admin_pswd))
{
//$error_msg="filled all the requirements";
}

else

{

$admin_query="select* from admin where admin_id='$admin_id' AND admin_pswd='$admin_pswd'";
	$check=mysqli_query($db,$admin_query);
	
	if(mysqli_num_rows($check)>0)
	/*if($_POST['id']=='$id' && $_POST['pswd']=='$pswd')*/
	
	{
	$check_row= mysqli_fetch_assoc($check);
	$_SESSION['admin_id']=$check_row['admin_id'];
	echo "<script> window.location='view_admin_home_page.php' </script> ";
	}
	else
	{
	$invalid_msg="Invalid user id / password ";
	}

}
}
?>
<p style="color:#000066"> It's <strong style="color:black">admin login</strong> page . Only admin can login from here .
<h2 ><a href=..><strong style="color:#000000">Back</strong></a></h2> </p>


Click Here For Login <button onClick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button></br>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="adminlogin.php" method="post">
    <div class="imgcontainer">
    <span onClick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="../2-256.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="id"><b>Admin's ID</b></label>
      <input type="text" placeholder="Admin's ID" name="admin_id" required>

      <label for="pswd"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="admin_pswd" required>
        
 
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



</div>


</body>
</html>