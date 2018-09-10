<style>
<?php

include '../style1.css';

?>

</style>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>doctor_home_page</title>
</head>
<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
<style>

img 
{ 
width: 40px;
}
p{
color:#000066;
font-size:28px;
font-style:inherit;
font-family:Geneva, Arial, Helvetica, sans-serif;
padding-top:180px;
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
<div class="menu">

<a href="#" class="brand"><img src="../pic/icn-nav-healthcare2.png"> </a>

<?php
include("connection.php");

?>
<div class="container">
<?php
     session_start();

                 $d_email=$_SESSION['email'];
?>   

<?php $edit_doctor_profile_query="select * from doctor join schedule on schedule.d_id=doctor.id join appointment on appointment.sid=schedule.s_id  join user on appointment.pid=user.id where doctor.email='$d_email'" ;
$edit_run_doctor_profile_query=mysqli_query($db,$edit_doctor_profile_query);
                              while($drow = mysqli_fetch_array($edit_run_doctor_profile_query))
				                  {}
								  ?>
                                  <?php
 $queryPermission="WHERE permission='Pending' ";
  $show_number_pending_request_query = "select * from doctor join schedule on schedule.d_id=doctor.id join appointment on appointment.sid=schedule.s_id  join user on appointment.pid=user.id   where doctor.email='$d_email'  and appointment.permission='Pending' 
                
				";
				   $run = mysqli_query($db, $show_number_pending_request_query);
				   $count=mysqli_num_rows($run);
	

 
?>

                                  <?php
 $queryPermission="WHERE permission='Deleted' ";
  $show_number_deleted_request_query = "select * from doctor join schedule on schedule.d_id=doctor.id join appointment on appointment.sid=schedule.s_id  join user on appointment.pid=user.id   where doctor.email='$d_email'  and appointment.permission='Deleted' 
                
				";
				   $run1 = mysqli_query($db, $show_number_deleted_request_query);
				   $count1=mysqli_num_rows($run1);
	

 
?>
</div>
<nav>
<ul>

<li><a href=view_doctor_profile.php>My Profile</a></li>




<li><a href=doctor_appointment_schedule_updating.php>Update Appointment Schedule</a></li>
<li><a href=view_my_schedule.php>My Schedule</a></li>
<li><a href=user_appointment_request.php>Appointment's Request<?php if($count>0)
{

} 
echo '('.$count.')'?></a></li>
<li><a href=deleted_appointment_notification.php>Notification<?php if($count1>0)
{

} 
echo '('.$count1.')'?></a></li>

<li><a href="../messages/d_message.php">Consultation</a></li>
<li><a href=doctorlogout.php>Logout</a></li>

</ul>
 </nav>   
 </div>
 
<p style="color:#000066"> It's<strong style="color:black"> doctor home</strong> page . After login you can <strong style="color:black">Update Your Schedule For Appointments</strong> . You can see <strong style="color:black">Appointment's Request </strong> . If you want to cancel request then You can <strong style="color:black">Cancel Request </strong>. You can also <strong style="color:black">Cancel Booking</strong> if you want . 

    
                         
</body>
</html>