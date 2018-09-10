<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


 <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>view_users_appointment</title>
</head>
<style>
h1{
font-size:50px;
padding-left:400px;
padding-top:60px;
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
<h1>You Have a Notification</h1>
<table  border="1" cellPadding="13" align="center" 
class="table table-hover table-dark">

<thead>
<tr>



<?php
session_start();
include("connection.php");
include 'translate.php';


$d_email=$_SESSION['email'];

	$edit_doctor_profile_query="select schedule.s_id,user.f_name as fname,user.l_name as lname,user.id,doctor.f_name,doctor.l_name,appointment.booking_date,appointment.booking_time,appointment.permission from doctor join schedule on schedule.d_id=doctor.id join appointment on appointment.sid=schedule.s_id  join user on appointment.pid=user.id where  doctor.email='$d_email' and appointment.permission='Deleted'";
	
	$edit_run_doctor_profile_query=mysqli_query($db,$edit_doctor_profile_query);
 
				   while($drow = mysqli_fetch_array($edit_run_doctor_profile_query))
				     {
					 ?>
                       <th> <h3 class="text-center "> <?php echo "<a href='../Admin/user_detail.php?id={$drow['id']}'>{$drow['fname']}  {$drow['lname']}</a>";?> &nbsp; Has  &nbsp;
                       <?php echo $drow['permission']; ?>&nbsp; His/Her Appointment </h3></th></tr>
                          <?php	
						  }
                          ?><br>
                          </table>
                          <div class="container ">
<ul class="pager font-weight-bold text-monospace">
  <li class="previous "><a href="doctor_home_page.php">Previous</a></li>
  <li class="next"><a href="../messages/d_message.php">Next</a></li>
</ul></div>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
						 </body>
</html>
