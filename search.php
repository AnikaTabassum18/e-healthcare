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

<title>search</title>
</head>
<style>
h1{
font-size:50px;
padding-left:590px;
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
background-image:url(pic/healthcare-banner.jpg);
background-size:cover;
}
</style>
<body>
<h1 class="text-center font-weight-bold ">Searching Doctor's</h1>
<?php include("connection.php");
error_reporting(0);
 //if(isset($_GET['s_id'])){
 //include("connection.php");
 //$d_id=mysqli_query($db,$_GET['s_id']);
 if(isset($_REQUEST["search"]))
			
				{ 
				$d_id=mysqli_query($db,$_GET['s_id']);
					$name=$_REQUEST['f_name'];  
					 
				         $query1 = "
				                    
							       select * from doctor inner join schedule on schedule.d_id=doctor.id WHERE  permission='approved' AND f_name like'$name%'  OR permission='Added' AND f_name like'$name%'    ";   
							  $run = mysqli_query($db,$query1);
							
						
							  while($row=mysqli_fetch_array($run))
							   {
							   ?>
                               <h3 class="text-center font-weight-bold "><?php
							       echo "<a href='Admin/detail.php?s_id={$row['s_id']}'>{$row['f_name']}{$row['l_name']}</a>"; ?>&nbsp  
								  <?php echo "specialist of" ; ?> &nbsp <?php echo  $row["specialist"]."</br>";?></h3>
								 
								<?php
							   }
							   //	echo  "No results found";
							  }
						
						
						
							   ?>

</body>
</html>
