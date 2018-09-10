<style>
<?php

include '../style1.css';

?>

</style>
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>user_appointment_request</title>
</head>
<style>ul{
font-size:24px;
}
h1{
font-size:50px;
padding-top:60px;
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
<body>
<h1 class="text-center font-weight-bold ">View Patients Request</h1></br>
<form class="text-center text-capitalize font-weight-bold"  action = "user_appointment_request.php" method="POST"><table  border="1" cellPadding="13" align="center" 
class="table table-hover table-dark">
<thead>
<tr>

<th>Name</th>
<th>Request Date</th>
<th>Appointment Date</th>
<th>Appointment Time</th>
<th>Status</th>
<th><input class="alert-success" type ="submit" value="Approved" name="submit"></th>
<th><input class="alert-danger"type ="submit" value="Cancel Booking" name="submit1"></th>

</tr></thead>

<?php
session_start();
include("connection.php");
include 'translate.php';?><br/><br/>
<?php
$d_email=$_SESSION['email'];

	$doctor_sid_show_squery="select * from doctor join schedule on schedule.d_id=doctor.id  where email='$d_email'" ;
	
	$doctor_sid_squery=mysqli_query($db,$doctor_sid_show_squery);
 
				   while($d_s_row = mysqli_fetch_array($doctor_sid_squery))
				   {
				   ?>
                  <h3> Enter Your ID :  <?php
echo $d_s_row['s_id'];  echo "  " ;		         
 }   ?> <input class="text-center text-dark" type = "sid" name="sid"  placeholder=" Enter Your ID "/></h3><hr> 


<?php
 if(isset($_REQUEST["submit"]))
				   {
				   $sid=$_POST['sid'];
				   $check=$_REQUEST["check"];
				   $save=implode(",",$check);
				$sid=$_GET['sid'];
//$d_email = $_SESSION['email'];
$pid=$_POST['pid'];
$choose_doctor_schedule_query="select * from doctor join schedule on schedule.d_id=doctor.id join appointment on appointment.sid=schedule.s_id  join user on appointment.pid=user.id where doctor.email='$d_email' ";
	$run_doctor_schedule_query=mysqli_query($db,$choose_doctor_schedule_query);
	

	if(mysqli_num_rows($run_doctor_schedule_query)>0)
	{
	$check_drow= mysqli_fetch_assoc($run_doctor_schedule_query);

	$update_doctor_schedule_query="update doctor join schedule on schedule.d_id=doctor.id join appointment on appointment.sid=schedule.s_id  join user on appointment.pid=user.id 
							 set appointment.permission='Approved' 
							
							 where pid  in ($save) and doctor.email='$d_email'  ";
							    
	
	
	$run_update_doctor_schedule_query=mysqli_query($db,$update_doctor_schedule_query);
	if(isset($run_update_doctor_schedule_query))
	{
	$update_msg="Approved Successfully";
		echo"	<script> alert ('Approved Successfully')</script> ";
	
	}
	else
	{
	$error_msg="not updated";
	}
	
	}
		else
	{
	$error_msg="user not found";
	}
}


?>
<?php
 if(isset($_REQUEST["submit1"]))
				   {
				   $sid=$_POST['sid'];
				   $check=$_REQUEST["check"];
				   $save=implode(",",$check);
				$sid=$_GET['sid'];
//$d_email = $_SESSION['email'];
$pid=$_POST['pid'];
$choose_doctor_schedule_query="select * from doctor join schedule on schedule.d_id=doctor.id join appointment on appointment.sid=schedule.s_id  join user on appointment.pid=user.id where doctor.email='$d_email'";
	$run_doctor_schedule_query=mysqli_query($db,$choose_doctor_schedule_query);
	

	if(mysqli_num_rows($run_doctor_schedule_query)>0)
	{
	$check_drow= mysqli_fetch_assoc($run_doctor_schedule_query);

	$update_doctor_schedule_query="update doctor join schedule on schedule.d_id=doctor.id join appointment on appointment.sid=schedule.s_id  join user on appointment.pid=user.id 
							 set appointment.permission='Canceled' 
							
							 where pid  in ($save) and doctor.email='$d_email'  ";
							    
	
	
	$run_update_doctor_schedule_query=mysqli_query($db,$update_doctor_schedule_query);
	if(isset($run_update_doctor_schedule_query))
	{
	$update_msg="Successfully Removed";
		echo"	<script> alert (' Successfully Removed')</script> ";
	
	}
	else
	{
	$error_msg="not updated";
	}
	
	}
		else
	{
	$error_msg="user not found";
	}
}


?>
	 <?php
$d_email=$_SESSION['email'];

$edit_doctor_profile_query="select * from doctor join schedule on schedule.d_id=doctor.id join appointment on appointment.sid=schedule.s_id  join user on appointment.pid=user.id where doctor.email='$d_email' and appointment.permission='Pending' || doctor.email='$d_email' and appointment.permission='Approved'";
	
	$edit_run_doctor_profile_query=mysqli_query($db,$edit_doctor_profile_query);
 
				   while($drow = mysqli_fetch_array($edit_run_doctor_profile_query))
				     {
                        ?>
                        <tr>
                      
                           <th> <h3><?php   echo  "<a href='../Admin/user_detail.php?id={$drow['id']}'>{$drow['f_name']}{$drow['l_name']}</a>";?></h3></th>
					  
						   <th><?php echo $drow['date'];  	?></th>
                           <th><?php echo $drow['booking_date'];  	?></th>
                           <th><?php echo $drow['booking_time'];  	?></th>
                           <th><?php echo $drow['permission'];  ?></th>
                           <th><input type ="checkbox" name ="check[] "value="<?php echo $drow['id']?> "> </th>
                           <th><input type ="checkbox" name ="check[] "value="<?php echo $drow['id']?> "> </th>
                           <?php
						   }
						   ?>
                            </tr> 
                 
</table>
     <?php               
if(isset($error_msg)){echo $error_msg;}
if(isset($update_msg)){echo $update_msg;}

?>

</form>
<div class="container ">
<ul class="pager font-weight-bold text-monospace">
  <li class="previous "><a href="doctor_home_page.php">Previous</a></li>
    <li class="next "><a href="deleted_appointment_notification.php">Next</a></li>

</ul></div>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>


</body>
</html>
