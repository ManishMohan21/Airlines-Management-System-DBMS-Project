<?php
require_once "dbconnect.php";
$flight_id=$_POST["flight_id"];
// $anum=$_POST["anumticks"];
// $cnum=$_POST["cnumticks"];
// $booking_name=$_POST["name"];
// $type_of_identity_card=$_POST["card"];
// $id_number=$_POST["id_num"];
// $age=$_POST["age"];
// $phone=$_POST["phone"];
$class=$_POST["class"];


//echo$email;
//echo$flight_id;
// if($class=="economy"){
// $fare_of_single_ticket_query="select sum(economy_fare) from taken_by_plane where flight_id='$flight_id'";
// $result_tuples=mysqli_query($con,$fare_of_single_ticket_query);
// $result_row=mysqli_fetch_array($result_tuples);
// $fare_of_single_ticket=$result_row[0];
// $total_fare=$anum*$fare_of_single_ticket;
// }
// if($class=="business"){
// $fare_of_single_ticket_query="select sum(business_fare) from taken_by_plane where flight_id='$flight_id'";
// $result_tuples=mysqli_query($con,$fare_of_single_ticket_query);
// $result_row=mysqli_fetch_array($result_tuples);
// $fare_of_single_ticket=$result_row[0];
// $total_fare=$anum*$fare_of_single_ticket;
// }
// if($class=="first"){
// $fare_of_single_ticket_query="select sum(first_fare) from taken_by_plane where flight_id='$flight_id'";
// $result_tuples=mysqli_query($con,$fare_of_single_ticket_query);
// $result_row=mysqli_fetch_array($result_tuples);
// $fare_of_single_ticket=$result_row[0];
// $total_fare=$anum*$fare_of_single_ticket;
// }



?>
<html>
<head>
	<title>Payment</title>
	<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="/AirlinesBooking/layoutsstyle.css">
<style>
body{
   background-image:url("images/proceed_To_pay.jpg");
   background-size:100%;
}
form{
		max-width: 800px !important;
		opacity: 1.5 !important;

	}
  .submit
{
width: 50%;
/* margin-top: 39.5%; */
margin-left: 20%%;
}
.form-control{border-width: 2px; border-color: black;}   

</style>
</head>
  
<!-- <body style="background-color:black;"> -->
<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <!-- <li class="nav-item">
          <a class="nav-link"  href="bookingtickets-backend.php" color:black>Back</a>
        </li> -->
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
<BR>
    	<div class="header">
        <center>
    		<h1 style="color:white;"><b>ENTER YOUR DETAILS</b></h1><br>
</center>
<!-- //    		<p style="color:black;">Book Flight tickets and Keep track of your Booking History</p> -->
    	</div>
     <div style="color:black;"class="container">
  
          <center>
     <form action="pay.php" method="POST" class="container"  > 

	 <input type="text" name="class" value="<?php echo $class;?>" class="form-control">
	 <input type="text" name="flight_id" value="<?php echo $flight_id;?>" class="form-control">
	  <input type="number" name="age" placeholder="age" class="form-control"/>
<input type="text" name="anum" placeholder="No Of Adult" class="form-control"/>
<input type="text" name="cnum" placeholder="No Of Children" class="form-control"/>
<input type="text" name="name" placeholder="Booking name" class="form-control" />
<input type="text" name="card" placeholder="Identity card Details" class="form-control"/>
<input type="text" name="id_num" placeholder="id_num" class="form-control"/>
<input type="text" name="phone" placeholder="phone Number" class="form-control"/>
<br>
<div class="col-xs-12 col-sm-6">
     	     	<button class="btn btn-success btn-lg submit" type = "Submit">Pay</button>
</div>

     </form>


 </center>
</div>
</body>
</html>