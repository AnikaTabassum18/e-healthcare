<?php 
include "../translate.php";
?><style>
<?php

include "../style1.css";
include("connection.php");
error_reporting(0);
?>
</style>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>view_admin_home_page</title>
</head>
<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
<style>
h1{
font-size:50px;
padding-left:400px;
padding-top:55px;
}
img 
{ float: left;
width: 77px;
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




<body background="../pic/healthcare-banner.jpg">

<div class="menu">

<a href="#" class="brand"><img src="../pic/icn-nav-healthcare2.png"> </a>
<?php
 $queryPermission="WHERE permission='Pending' ";
  $show_number_pending_request_query = "SELECT * 
                  FROM doctor $queryPermission 
				   order by date='$d_date' asc
				";
				   $run = mysqli_query($db, $show_number_pending_request_query);
				   $count=mysqli_num_rows($run);
	

 
?>
<h1>Admin's Home Page</h1>

<nav>
	<ul>
           
<li><a href='doctor_name_display.php'> Doctors Name display</a></li>
<li><a href='add_doctor.php'> Add Members/Doctor</a></li>
<li><a href='display_user.php'>Display All User List</a></li>
<li><a href=doc_reg_request.php>Request <?php if($count>0)
{

} 
echo '('.$count.')'?></a></li>
<li><a href=list_appointed_patients.php>List Of All The Appointents</a></li>
<li><a href=admin_logout.php>Logout</a></li>
</ul>

</nav>

 
</body>

</html>
