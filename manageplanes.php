<html>
<head>
	<title>Manage Planes</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" type="text/css" href="/AirlinesBooking/layoutsstyle.css"> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="/AirlinesBooking/layoutsstyle.css">
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
		
		opacity: 0;
	}
</style>
</head>
  
    <!-- <body style="background-image:url('images/manage_flights.jpg');background-size:cover;"> -->
	<body style="background-image:url('images/manage_flights.jpg');background-size:cover;">
    
    
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
          <a class="nav-link" href="manageairports.php">Manage Airports</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="manageplanes.php">Manage Planes</a>
        </li>
      </ul>
    </div>
  </div>
</nav><br>

<div class="header">
    		<center><h1> <b>AIRLINE DATABASE MANAGEMENT SYSTEM</b></h1>
		</center><br>
    		<!-- <p>Manage Flights,Airports and Planes </p> -->
    	</div>

    	<center>
		<form class="card" style="padding:20px;" action = "manageplanesinsert-backend.php" method = "POST" id="form">
		<h2 style="text-align:center;"><b>INSERT NEW PLANES</b> </h2><br>
		<h3 style="text-align:left;">Enter Plane Details:</h3>
		<select  id="plane_id" name="plane_id"  class="form-control" required>
				<option selected="" disabled="">Plane ID</option>
			  <?php require_once"selectplanes.php";
                    foreach ($tuples as $row) {
                    	echo'<option value="'.$row[0].'">'.$row[2].' ('.$row[1].')</option>';
                    }
			     ?>
             </select> <br><br> 

			 <select  id="airlines" name="airlines"  class="form-control" required>
				<option selected="" disabled="">Airline Name</option>
			  <?php require_once"selectplanes.php";
                    foreach ($tuples as $row) {
                    	echo'<option value="'.$row[1].'">'.$row[1].' ('.$row[0].')</option>';
                    }
			     ?>
             </select> <br><br> 
			 <!-- <label>Total Number of EconomyClass Seats:</label> -->
			<input type="number" name = "total_economy_seats" placeholder = "Total Number of EconomyClass Seats"><br><br>
			<input type="number" name = "total_business_seats" placeholder = "Total Number of BusinessClass Seats"><br><br>
			<input type="number" name = "total_first_seats" placeholder = "Total Number of FirstClass Seats"><br><br>
			<div class="row">
				<div class="col-xs-12 col-sm-6">
				<button class="btn btn-success" type = "Submit">Submit</button>
				</div>
				<div class="col-xs-12 col-sm-6">
				<button class="btn btn-danger" type ="reset">Clear Entries</button>
					</div>
			</div>
				</form>

		<!-- <h1 class="header">INSERT NEW PLANES:</h1>
		<h3 class="header">Enter Plane Details </h3>
		<form class="container" action = "manageplanesinsert-backend.php" method = "POST" style="max-width: 1000px !important;">
			<label>PlaneID:</label>
			<input type="text" name = "plane_id" placeholder = "Registration_ID"><br><br>
			<label>AirLines Name:</label>
			<input type="text"name = "airlines" placeholder = "Name of the Airlines"><br><br>
			<label>Total Number of EconomyClass Seats:</label>
			<input type="number" name = "total_economy_seats" placeholder = "Number of Seats"><br><br>
			<label>Total Number of BusinessClass Seats:</label>
			<input type="number" name = "total_business_seats" placeholder = "Number of Seats"><br><br>
			<label>Total Number of FirstClass Seats:</label>
			<input type="number" name = "total_first_seats" placeholder = "Number of Seats"><br><br>
			<button class="btn success" type = "submit">Submit</button>
			<button class="btn danger"type= "reset">ClearEntries</button>
		</form> -->
		<form class="card" style="padding:20px;" action = "manageplanesdelete-backend.php" method = "POST" id="form">
		<h2 style="text-align:center;"><b>DELETE EXISTING PLANES FROM DATABASE</b> </h2><br>
		<select  id="dplane_id" name="dplane_id"  class="form-control" required>
				<option selected="" disabled="">Plane ID</option>
			  <?php require_once"selectplanes.php";
                    foreach ($tuples as $row) {
                    	echo'<option value="'.$row[0].'">'.$row[2].' ('.$row[1].')</option>';
                    }
			     ?>
             </select> <br><br> 
			 <div class="row">
				<div class="col-xs-12 col-sm-6">
				<button class="btn btn-success" type = "Delete">Delete</button>
				</div>
				<div class="col-xs-12 col-sm-6">
				<button class="btn btn-danger" type ="reset">Clear PlaneID</button>
					</div>
			</div>
		<!-- <h3 style="text-align:left;">Enter Plane Details:</h3> -->
		<!--<h1 class="header">DELETE EXISTING PLANES FROM DATABASE</h1>
		<h3 class="header">ENTER PLANE_ID</h3>
		<form class="container"action = "manageplanesdelete-backend.php" method = "POST" >
			<label>PlaneID:</label>
			<input type="text" name = "dplane_id" placeholder = "Registration_ID"><br><br>
			<button class="btn danger" type = "submit">Delete</button>
			<button class="btn success" type= "reset">ClearPlaneID</button>
		</form> -->
	</center>
</body>
</html>