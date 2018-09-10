<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>medicine</title>
</head>
<style>

h1{
font-size:50px;
text-align:center;
padding-top:30px;
}
img 
{ float: left;
width: 77px;
}
th{
font-size:30px;
}
ul{
font-size:30px;
}
ul h3{
font-size:40px;
}

body {margin:0;
padding:0;
font-family:"Bahnschrift Light", "Bernard MT Condensed", "Berlin Sans FB Demi", "Bell MT";
width:100%;
height:100vh;
background-image:url(pic/healthcare-banner.jpg);
background-size:cover;
}
</style>
<body>
<h1 class="text-center">All The Doctor's Of  Gynecologist</h1>
<table border="1" cellPadding="13" align="center" 
class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col" >Name</th>
      <th scope="col" >Specialist</th>
      <th scope="col">Qualification</th>

    </tr>
  </thead>
<?php 
include("connection.php");

       $query = "SELECT * 
                     FROM doctor inner join schedule on schedule.d_id=doctor.id   where permission='approved' AND specialist like'g%' OR permission='Added' AND specialist like'g%' ";
				   $run = mysqli_query($db, $query);
				   while($row = mysqli_fetch_array($run))
				   {
				         
						  echo  "<h3><tr><th><a href='Admin/detail.php?s_id={$row['s_id']}'>{$row['f_name']}{$row['l_name']}</a></th></h3>";
						    
						   echo "<h3><th>". $row['specialist'] ." </th></h3>" ;
						   echo "<h3><th>". $row['qualification'] ." </th></tr></h3>";
						   
						  
				   }
				    
			   ?></table>
                   
<div class="container ">
<ul class="pager font-weight-bold text-monospace">
<li class="previous" ><a href="index.php">Previous </a></li>
   <li class="next "><a href=blog/blog_front_page.php>Next </a></li>
</ul></div><?php
	   include 'footer.html';?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
              

</body>
</html>
