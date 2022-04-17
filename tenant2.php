<!DOCTYPE html>
<html lang="en">
<head>
  <title>HamroGhar</title>
  <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="table.css">
   <link rel="stylesheet" type="text/css" href="m.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://use.fontawesome.com/2c50f767b4.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img src="img/home.png" alt="" srcset="">
          <h1>HamroGhar</h1></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Houses <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="houses.php">Houses</a></li>
            <li><a href="rating.php">Rating</a></li>
          </ul>
        </li>

        <li><a href="owner.php">Owners</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tenants<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="tenant.php">Tenants</a></li>
            <li><a href="members.php">Members</a></li>
          </ul></li>
        <li><a href="booking.php">Booking</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">

         <li><a href="#"><span class="glyphicon glyphicon-user"></span>Hi <?php session_start();echo $_SESSION['uname'];?></a>
         </li>
        <li><a href="index.html"><span class="glyphicon glyphicon-user"></span> Sign Out</a></li>
      </ul>
    </div>
  </div>
</nav>

  
<div class="container">
  <a href="tenant.php" class='btn btn-primary'>Hide Members</a><br><br>
  <table border="1" id="customers">
    <tr>
      <th>Tenant ID</th>
      <th>Member Name</th>
      <th>Member Occupation</th>
      <th>Member Gender</th>
      <th>Member Date Of Birth</th>
      <th>Member relationship with tenant</th>
    </tr>
<?php
include("connection.php");
$query="select * from tenant t join member m on t.t_id=m.t_id";
$data=mysqli_query($conn,$query);
while($result=mysqli_fetch_assoc($data))
{
 echo "<tr><td>".$result['t_id']."</td><td>".$result['fname']." ".$result['lname']."</td><td>".$result['occupation']."</td><td>".$result['gender']."</td><td>".$result['dob']."</td><td>".$result['relationship']."</td></tr>";
}
echo "</table>";
?>
</div>
 <!-- Footer -->
 <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>HamroGhar</h4>
          <ul>
            <li><a href="#" class="query"><span>For any queries</span> </a></li>
            <li><a href="#">Email: imonshrestha9@gmail.com</a></li>
            <li><a href="#">Contact No.: +9779861494599</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Causes</h4>
          <ul>
            <li><a href="#"> New Houses</a></li>
            <li><a href="#">Furnished Houses</a></li>
            <li><a href="#">Apartment</a></li>
            <li><a href="#">Empty Houses</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>About Us</h4>
          <ul>
            <li><a href="#">Team HamroGhar</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">How HamroGhar Works?</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>follow us</h4>
          <div class="social-links">
            <a href="https://www.facebook.com/imon.shrestha.9" target="blank"><i class="fa fa-facebook-f"></i></a>
            <a href="https://twitter.com/Imon_Shrestha" target="blank"><i class="fa fa-twitter"></i></a>
            <a href="https://www.instagram.com/imon_shrestha/" target="blank"><i class="fa fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/imon-shrestha-758106219/" target="blank"><i
                class="fa fa-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>
