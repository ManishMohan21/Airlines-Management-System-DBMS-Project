<!-- <?php
session_start();
require_once"dbconnect.php";

$name=$_SESSION["name"];

$profile_query="select username from admin where username='$name' ";
$result=mysqli_query($con,$profile_query);
$profile=mysqli_fetch_array($result);
$name=$profile[0]


?>

<html>
<head>
	<title>Admin Profile</title>
	<meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="/AirlinesBooking/layoutsstyle.css">

<style>
 
    a:hover{
        box-shadow: 0 12px 16px 0 black, 0 17px 50px 0 black;
        background: #da190b;

    }

</style>
<link rel="stylesheet" type="text/css" href="/AirlinesBooking/layoutsstyle.css">


</head>
  
    <body>
    	<div class="header">
    		<h1>Airlines Database Management Platform</h1>
    		<p>Manage Flights,Airports and Planes </p>
    	</div>
    	<div class="topnav">
    		<a href="adminsprofile.php">Profile</a>
    		<a href="adminshome.php">Home</a>
    		<a href="manageflights.php">Manage Flights</a>
            <a href="manageairports">Manage Airports</a>
    		<a href="manageplanes.php">Manage Planes</a>
    	</div>
        <center> 
             <div class="container">
            <img src="admin_profile.jpeg" height="300" width="300">
            <ul>
                <li><?php echo'<p class="header">Admin Name: '.$name.'</p>'; ?></li>      
            </ul>
            <a style="   display:block;
        padding:25px;
        margin:25px;
        border-radius: 25px;
        color:white;
        background-color: #f44336;
        box-sizing: 30%;
        text-decoration: none;"   href="logout.php">LogOut</a>   
        </div>
    </center> 

</body>
</html> --><?php
// session_start();
// require_once"dbconnect.php";


// $name=$_SESSION["name"];

$profile_query="select username from admin where username ='$name'";
// where email='$email'
$result=mysqli_query($con,$profile_query);
$profile=mysqli_fetch_array($result);
$name=$profile[0];


?>

<html>
<head>
	<title>Profile</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="/AirlinesBooking/layoutsstyle.css">

<style>
 
   /* a:hover{
        box-shadow: 0 12px 16px 0 black, 0 17px 50px 0 black;
        background: #da190b;

    }*/
    .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}
p {
  font-size: 20px;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>




</head>
<body style="background-image:url('images/manage_flights.jpg');background-size:cover;">
    <!-- <div class="topnav">
    		<a href="adminsprofile.php">Profile</a>
    		<a href="adminshome.php">Home</a>
    		<a href="manageflights.php">Manage Flights</a>
            <a href="manageairports">Manage Airports</a>
    		<a href="manageplanes.php">Manage Planes</a>
    	</div> -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="adminprofile.php" color:black>Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adminshome.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="manageflights.php">Manage Flights</a>
          </li>
     
          <li class="nav-item">
            <a class="nav-link" href="manageplanes.php">Manage planes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="manageairports.php">Manage Airports</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
        <center>
        <h2 style="text-align:center">AIRLINE BOOKING PLATFORM</h2>

<div class="card">
  <img src="images/admin_profile.jpeg" alt="PROFILE PIC" style="width:100%"><br>
                 <span><?php echo'<b><p class="header" font-size: "29px" >ADMIN  NAME: '.$name.'</b></p>'; ?></span>
                <!-- <span><?php echo'<b><p class="header">Email: '.$email.'</b></p>'; ?></span>     -->
  

                <!-- <ul>
                <li><?php echo'<p class="header">ADMIN NAME: '.$name.'</p>'; ?></li>      
            </ul> -->
  <div style="margin: 24px 0;">
   
  </div>

  <!-- <center>
            <div class="container">
            <img src="images/admin_profile.jpeg" height="300" width="300">
            <ul>
                <li>
                  <?php 
                  // echo'<p class="header">Admin Name: '.$username.'</p>';
                   ?>
                </li>      
            </ul>
            <a style="   display:block;
        padding:25px;
        margin:25px;
        border-radius: 25px;
        color:white;
        background-color: #f44336;
        box-sizing: 30%;
        text-decoration: none;"   href="logout.php">LogOut</a>   
        </div>
    </center> -->






  <p><button>PROFILE CARD</button></p>
</div>

            <a style="   display:block;
        padding:25px;
        margin:25px;
        border-radius: 25px;
        color:white;
        background-color: #f44336;
        box-sizing: 30%;
        text-decoration: none;"   href="logout.php">LogOut</a>   
        </div>
    </center>
</body>
</html>


    
