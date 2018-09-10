
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>Smart medical service</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
  <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 20px;
      color: #111;
  }input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}
  .container {
      padding: 80px 120px;
  }
  .carousel-inner img {
      -webkit-filter: grayscale(90%);
      filter: grayscale(90%); /* make all photos black and white */ 
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;
  font-size:24px;}
  .bg-1 p {font-style:oblique;
  font-size:20px;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  
  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .nav-tabs li a {
      color:#999999;
  } 
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 16px !important;
	font-weight:900;
      letter-spacing: 2px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: red !important;
  }
  footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 22px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }  
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }    footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }  .container-fluid {
      padding: 60px 50px;
  }
  </style></head>

  <?php
	   include("connection.php");
error_reporting(0);
 $queryPermission="WHERE permission='Approved'";
  $show_number_pending_request_query = "SELECT * 
                  FROM doctor $queryPermission 
				";
				   $run = mysqli_query($db, $show_number_pending_request_query);
				   $count=mysqli_num_rows($run);
	

 

?>
<?php    $queryPermission="WHERE permission='Approved' || permission='Added' ";
       $show_approve_request_query = "SELECT * 
                  FROM doctor WHERE permission='Approved' || permission='Added'
				 ";
$n_query=mysqli_query($db,$show_approve_request_query );
                              while($drow = mysqli_fetch_array($n_query))
				                  {}
								    $count=mysqli_num_rows($n_query);
								  ?>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid ">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand text-dark" href="#myPage"><strong>e-healthcare</strong></a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">LogIn/Register  <span class="caret"></span></a>
          <ul class="dropdown-menu">
                  <li><a href="Doctor/doctor_login.php">Doctor</a></li>
                  <li><a href="Users/login.php">User</a></li>
            	<li><a href="Admin/adminlogin.php">Admin</a></li>
                  </ul>
          </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#location">Hospital Location  <span class="caret"></span></a>
          <ul class="dropdown-menu"> 
       <li> <a href="location map/dhaka.html">Dhaka</a></li>
      <li>  <a href='location map/chittagong.html'>Chittagong</a></li>
       <li> <a href="location map/barishal.html">Barishal</a></li>
      <li>  <a href="location map/khulna.html">Khulna</a></li>
     <li>   <a href='location map/mymensingh.html'>Mymensingh</a></li>
     <li>   <a href='location map/rajshahi.html'>Rajshahi</a></li>
     <li>   <a href='location map/rangpur.html'>Rangpur</a></li>
     <li>   <a href='location map/sylhet.html'>Sylhet</a></li>
        </ul>
        </li>
        
        
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Available Doctors
          <span class="caret"></span></a>
          <ul class="dropdown-menu">     
     <li> <a href='medicine.php'>Medicine</a></li>
    <li>  <a href='dentist.php'>Dentist</a></li>
      <li> <a href='bone.php'>Orthopedic</a></li>
      <li> <a href="cardiac_electrophysiologist.php">Cardiac electrophysiologist</a></li>
      <li> <a href='cardiologist.php'>Cardiologist</a></li>
      <li> <a href='surgeon.php'>Surgeon</a></li>
     <li>  <a href='gynecologist.php'>Gynecologist</a></li>
     </ul>
        </li>
        <li> <a href="blog/blog_front_page.php">Blog</a></li>
     
      
            	<li><a href="Admin/notification.php">Notification<?php if($count>0)
{

} 
echo '('.$count.')'?></a></li>
                
     <li>
       <form action = "search.php" method = "POST">

 <input type = "text" name="f_name" placeholder="Search By Doctor Name..." />
                   <input  type="submit"name="search"  value="GO" />
                       <?php
if(isset($error_msg)){echo $error_msg;}
?>
       </form></li>
       </li> 

      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="pic/15287983165.jpg" alt="UNITED HOSPITAL" width="1200" height="700">
           
      </div>

      <div class="item">
        <img src="pic/15287983094.jpg" alt="UNITED HOSPITAL" width="1200" height="700">
             
      </div>
    
    
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<?php
	   include 'translate.php';?>
<div id="#" class="bg-1">
  <div class="container">
    <h3 class="text-center">e-Health-Care</h3>
  <p class="text-center"><em>Virtual healthcare  means online patient care!</em></p>
    <p class="text-center"> Our highly specialized experts are deeply experienced in treating rare and complex conditions . You can get appointment from here . For getting appointment at first you need to login at this site . If you are not registered already, <strong style="color:#0066FF"><a href="Users/registration.php">Register</a></strong> here please . You can still get locations about other nearest hospitals from here.
 </p>
  
    </div>
  </div>

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Copyright<a href="http://labaidgroup.com/specialized/doctor" data-toggle="tooltip" title="Visit Labaid Specialized Hospital">@www.Labaid.com</a></p> 
</footer>
<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>
