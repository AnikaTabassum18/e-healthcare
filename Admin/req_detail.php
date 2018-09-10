<style>
<?php

include '../style.css';

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

<title>req_detail</title>
</head>

<style>
h1{
font-size:50px;
text-align:center;
padding-top:30px;
color:#000066;
}
img 
{ float: left;
width: 77px;
}
li{
font-size:24px;
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
<body>
<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
<ul class="text-center font-weight-bold text-monospace text-dark">
<?php 
 if(isset($_GET['id'])){
 include("connection.php");
 $d_id=mysqli_query($db,$_GET['id']);
 	$show_doctor_profile_query="select * from doctor  WHERE id='$_GET[id]'" ;
	   $show_run_doctor_profile_query=mysqli_query($db,$show_doctor_profile_query);
	      $row = mysqli_fetch_array($show_run_doctor_profile_query);

				?>
                    <h1  class=" text-center font-weight-bold text-monospace text-warning">Personal Information</h1><hr></br>
                             <h3>ID :    <?php  echo  $row['id'] . "<br />";?></br></h3> 
                             <h3> Name :  <?php  echo   $row['f_name']; echo  $row['l_name']. "<br />";?></br></h3>
                             <h3>Email/Gmail Address :     <?php   echo $row['email'] . "<br />";?></br></h3>
                             <h3> Contact Number :   <?php  echo   $row['contact'] . "<br />";?></br></h3>
                             <h3> Clinic Address :   <?php  echo  $row['address'] . "<br />";?></br></h3>
                             <h3> Qualification :    <?php  echo  $row['qualification'] . "<br />";?></br></h3>
                             <h3> Specialism :    <?php  echo  $row['specialist'] . "<br />";?></h3><hr>
                        
                        <?php
                      
						
					
				   } 
		   ?>
</body>
</html>
