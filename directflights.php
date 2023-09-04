<html>
<head>
	<title>Direct Flights Insert</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="/AirlinesBooking/layoutsstyle.css">
</head>

<style type="text/css">
         html{
           /* background-image:url("images/manage_flights.jpg"); */
           background-size:100%;
}
	form{
		max-width: 1000px !important;
		opacity: 1.5 !important;

	}
	form:hover{
		
		opacity: 1;
	}
</style>
	
<body style="background-image:url('images/manage_flights.jpg');background-size:cover;">
  
    	<!-- <div class="topnav">
    		<a href="adminprofile.php">Profile</a>
    		<a href="adminshome.php">Home</a>
    		<a href="manageflights.php">Manage Flights</a>
    		<a href="manageairports.php">Manage Airports</a>
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
						<a class="nav-link active" aria-current="page" href="adminlogin.php" color:black>Back</a>
					</li>
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
          <a class="nav-link"href="manageplanes.php">Manage Planes</a>
        </li>
		<li class="nav-item">
    <a class="nav-link"href="manageairports.php">Manage Airports</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="header">
    		<center><h1>AIRLINES DATABASE MANAGEMENT</h1></center>
    		<!-- <p>Manage Flights,Airports and Planes </p> -->
    	</div>
    	<center>
		<!-- <h2 class="header">Enter Plane Details</h2>
		<form  class="container" action = "direct-indirect-flights-backend.php" method = "POST" style="max-width: 1100px!important;"> -->
		<form class="card" style="padding:20px;" action = "direct-indirect-flights-backend.php" method = "POST" id="form">
		<h2 style="text-align:center;">ENTER PLANE DETAILS </h2>	<br>
		<h4 class="header" style="background-color:grey"><?php echo"Enter Details of Plane Starting From ".$source." to ".$destination ?></h4>
			<select  id="plane_id" name="plane_id" required>
				<option  selected="" disabled="">Select Planes</option>
			  <?php require_once"selectplanes.php";
                    foreach ($tuples as $row) {
                    	echo'<option value="'.$row[0].'">'.$row[0].' (Airlines - '.$row[1].')</option>';
                    }
			     ?>
            </select> <br><br>
			<!-- <label>Airlines:</label>
			<input type="text"name = "airlines" placeholder = "Name Of Airlines" required><br><br> -->
			<label>Date And Time of Departure:</label>
			<input name = "dd" type="date" required>
			<input name = "td" type="time" required><br><br>
			<label>Date And Time of Arrival:</label>
			<input name = "da" type="date" required>
			<input name = "ta" type="time" required><br><br>
			<label>Economy Class Price &#x20b9 </label>
			<input type="number" name="economy_fare"><br>
				<label>Business Class Price &#x20b9 </label>
			<input type="number" name="business_fare"><br>
				<label>First Class Price &#x20b9 </label>
			<input type="number" name="first_fare"><br>
			<input type="hidden" name="stops" value="<?php echo $stops; ?>">
			<input type="hidden" name="source" value="<?php echo $source; ?>">
			<input type="hidden" name="destination" value="<?php echo $destination; ?>">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
				<button class="btn btn-success" type = "Submit">Submit</button>
				</div>
				<div class="col-xs-12 col-sm-6">
				<button class="btn btn-danger" type ="reset">Clear Entries</button>
					</div>
			</div>
			<br>
	</center>
</body>
</html>