<?php
session_start();

require_once "dbconnect.php";
$email=$_SESSION["email"];



$query="select * from books where email='$email' order by timestamp DESC";
$result=mysqli_query($con,$query);
$tuples=mysqli_fetch_all($result);
$i=0;
echo'<html>
<head>
	<title>Booking History</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="/AirlinesBooking/layoutsstyle.css">
<style>
.this{
position:fixed;
z-index:-1;
min-width:100%
min-hight:100%;
right:0;
bottom:0; 
}

table, th, td {
  border: 5px solid black;
}

h2 {
  color: #666;
  margin: 20px 10px 0px;
  padding: 3px 30px 30px 30px;
  text-align: center;
}

@media (prefers-color-scheme: dark) {
  img {
    opacity: .75;
    transition: opacity .5s ease-in-out;
  }
  img:hover {
    opacity: 1;
  }
}
img {
  opacity: 1;
}

</style>
</head>
  
    <body>
      

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="profile.php" color:black>Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="usershome.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="booktickets.php">Book Flight Ticktets</a>
          </li>
      <li class="nav-item">
            <a class="nav-link" href="bookinghistory.php">Your Booking History</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
      <div class="header" font-style=italic;>
      
      <h2 style="font-weight: 900" text-align=center>BOOK FLIGHTS TICKETS AND KEEP TRACK OF YOUR BOOKING HISTORY</h2>
    </div>';
    	
foreach($tuples as $row){
  $i=$i+1;	
  if($row[12]){
  	echo'<center>';
  echo'<div class="column container" style="width:100%"';
  echo'<h3 style="color:white;text-align:center">Indirect Flight from '.$row[8].' to '.$row[9].' via '.$row[10].' on '.$row[17].'</h3>';
  echo'<details style="text-align:center">
  <p> Booking Number : '.$row[0].'   Booking Name : '.$row[2].'    Age : '.$row[3].'</p>
  <p> Type of ID  : '.$row[4].'    '.$row[4].'Number : '.$row[5].'    PhoneNumber:'.$row[6].' </p>
  <p> Class of Ticket : '.$row[7].'</p>
  <p> Plane from '.$row[8].' to '.$row[10].' : '.$row[11].'</p>
  <p> ---------Date and Time of Depature '.$row[17].'</p>
  <p> ---------Date and Time of Arrival  '.$row[18].'</p>
  <p> Plane from '.$row[10].' to '.$row[9].' : '.$row[12].'</p>
  <p> ---------Date and Time of Depature '.$row[19].'</p>
  <p> ---------Date and Time of Arrival  '.$row[20].'</p>
  <p>Number of Adults : '.$row[14].'    Number of Infants : '.$row[15].'</p>
  <p>Total Fare : '.$row[13].'</p>
  </details>';
  echo'</div>';
  echo"</center>";
  }
  else{

/*echo'<table border="3">
<tr>
  <td>Cell 1</td>
  <td>Cell 2</td>
  <td>Cell 3</td>
</tr>
<tr>
  <td>Cell 4</td>
  <td>Cell 5</td>
  <td>Cell 6</td>
</tr>
</table>';*/


  echo"<div class='container'>";
  echo'<div class="row">';
  echo'<h3>DIRECT FLIGHT FROM '.$row[8].' TO '.$row[9].' ON '.$row[17].'</h3>';
   echo'<details class="card" style="text-align:left " style="background-color:black;">
  <p> Booking Number : '.$row[0].' <br>   Booking Name : '.$row[2].'  <br> Age : '.$row[3].'</p>
  <p> Type of ID  : '.$row[4].'    '.$row[4].'<br>Number : '.$row[5].' <br>  PhoneNumber:'.$row[6].' </p>
  <p> Class of Ticket : '.$row[7].'</p>
  <p> Plane from '.$row[8].' to '.$row[9].' : '.$row[11].'</p>
  <p> Date and Time of Depature '.$row[17].'</p>
  <p> Date and Time of Arrival  '.$row[18].'</p>
  <p>Number of Adults : '.$row[14].'<br> Number of Infants : '.$row[15].'</p>
  <p>------------------------------------------------</p>
  <p>Total Fare : '.$row[13].'</p>
  <p>------------------------------------------------</p>
  </details>';
  echo'</div>';
  echo"</div>";
  }
} 





?>