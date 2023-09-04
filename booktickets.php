
<html>
<head>
	<title>
		Book Tickets
	</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="/AirlinesBooking/layoutsstyle.css">
<style>
/* 
.this{
position:fixed;
z-index:-1;
min-width:100%
min-hight:100%;
right:0;
bottom:0;  
} */
/* 
html{
           background-image:url("images/manage_flights.jpg");
           background-size:100%;
} */
	form{
		max-width: 1000px !important;
		opacity: 1.5 !important;

	}
	form:hover{
		
		opacity: 1;
	}
</style>

</head>

<body style="background-image:url('images/manage_flights.jpg');background-size:cover;">
           <!-- <video class="this" autoplay="" loop="" plays-inline>
                <source src="images/My Video.mp4" type="video/mp4">
           </video> -->


		<nav class="navbar navbar-expand-lg navbar-light bg-light">
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


<div class="header" style="text-align:center;padding:20px;color:white;font-weight:bold;">
    		<h1>AIRLINE BOOKING PLATFORM</h1>
    		<p>Book Flight tickets and Keep track of your Booking History</p>
    	</div>

	    <div class="container">
		<center>
		<form class="card" style="padding:20px;" action = "bookingtickets-backend.php" method = "POST" id="form">
		<h3 style="text-align:center;">PLAN YOUR JOURNEY</h3>

			<select  id="source" name="source"  class="form-control" required>
				<option  selected="" disabled="">Select Source Airport</option>
			  <?php require_once"selectairports.php";
                    foreach ($tuples as $row) {
                    	echo'<option value="'.$row[0].'">'.$row[2].' ('.$row[1].')</option>';
                    }
			     ?>
            </select> <br><br>  
		
			<select  id="destination" name="destination"  class="form-control" required>
				<option selected="" disabled="">Select Destination Airport</option>
			  <?php require_once"selectairports.php";
                    foreach ($tuples as $row) {
                    	echo'<option value="'.$row[0].'">'.$row[2].' ('.$row[1].')</option>';
                    }
			     ?>
            </select> <br><br> 
			
			<select id="class" name="class" class="form-control" required>
              <option value="economy">Economy Class</option>
              <option value="business">Business Class</option>
              <option value="first">First Class</option>
            </select> <br><br>  
            <label>Date of Departure:</label>
            <input name = "date_of_depart" type= "date" required ><br><br>

			<div class="row">
				<div class="col-xs-12 col-sm-6">
				<button class="btn btn-success" type = "Submit">Check Flights</button>
				</div>
				<div class="col-xs-12 col-sm-6">
				<button class="btn btn-danger" type ="reset">Clear Entries</button>
					</div>
			</div>
			<br>
		</form>
	</center>
	</div>


</body>
</html>
