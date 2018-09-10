<style>
<?php

include '../style1.css';

?>

</style>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>view_my_schedule</title>
</head>
<style>
h1{
font-size:50px;
text-align:center;
padding-top:60px;
}
img 
{ float: left;
width: 77px;
}
ul{
font-size:24px;
}

li{
font-size:24px;
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
<h1 class="text-center font-weight-bold ">My Schedule Time</h1>
<?php
session_start();
include("connection.php");
include '../translate.php';
$d_email=$_SESSION['email'];
$show_schedule= "SELECT * 
                 FROM doctor inner join schedule on schedule.d_id=doctor.id where email='$d_email'" ;
	
$show_schedule_query=mysqli_query($db,$show_schedule);
 
				   while($drow = mysqli_fetch_array($show_schedule_query))
				   {
				?>
                  <h3 class="text-center"> Name :  <?php  echo   $drow['f_name']; echo  $row['l_name']; ?> ...... Specialist of <?php echo $drow['specialist'];?></h3></br>
                            
                            
                            <h3 class="text-center">  <?php  echo   $drow['Day_Time1']; ?></h3></br>
                            <h3 class="text-center">  <?php  echo   $drow['Day_Time2']; ?></h3></br>   
                            <h3 class="text-center">  <?php  echo   $drow['Day_Time3']; ?></h3></br>
                            <h3 class="text-center">  <?php  echo   $drow['Day_Time4']; ?></h3></br>
                            <h3 class="text-center">  <?php  echo   $drow['Day_Time5']; ?></h3></br>
                            <h3 class="text-center">  <?php  echo   $drow['Day_Time6']; ?></h3></br>
                            <h3 class="text-center">  <?php  echo   $drow['Day_Time7']; ?></h3></br>
                            <?php
							}
							?>   
<div class="container ">
<ul class="pager font-weight-bold text-monospace">
  <li class="previous "><a href="doctor_home_page.php">Previous</a></li>
  <li class="next"><a href="user_appointment_request.php">Next</a></li>
</ul></div>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

</body>
</html>
