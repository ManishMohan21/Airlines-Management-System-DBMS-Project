<html>

<head>
	<title>Manage Airports</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" type="text/css" href="/AirlinesBooking/layoutsstyle.css"> -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
		integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
		integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
	</script>
	<link rel="stylesheet" type="text/css" href="/AirlinesBooking/layoutsstyle.css">
	<!-- <style>
    html{
          background-image:url("manage_airports.jpg");
          background-size:100%;
        }
</style> -->
	<style type="text/css">
		html {
			background-image: url("images/manage_flights.jpg");
			background-size: 100%;
		}

		form {
			max-width: 1000px !important;
			opacity: 1.5 !important;

		}

		form:hover {

			opacity: 1;
		}
	</style>
</head>

<body style="background-image:url('images/manage_flights.jpg');background-size:cover;">
    
    
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="#"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
		<center>
			<h1> <b>AIRLINE DATABASE MANAGEMENT SYSTEM</b></h1>
		</center><br>
		<!-- <p>Manage Flights,Airports and Planes </p> -->
	</div>
	<!-- <center>
    	<div class="column">
	
		<h2 class="header">Enter New Airport Details</h2>
		<center> -->
	<!-- <form class="container" action = "manageairportsinsert-backend.php" method = "POST">
			<label>AirportCode:</label>
			<input type="text" name = "stn_code" placeholder = "3-6 letter Code" required=""><br><br>
			<label>AirportName:</label>
			<input type="text" name = "airport_name" placeholder = "Name of the Airport" required=""><br><br>
			<label>City:</label>
			<input type="text" name = "city" placeholder = "Name of the City" required><br><br>
			<button class="btn success" type = "submit">Submit</button>
			<button class="btn danger" type = "reset">ClearEntries</button>
			
		</form>-->
	<center>
		<form class="card" style="padding:20px;" action="manageairportsinsert-backend.php" method="POST" id="form">
			<h2 style="text-align:center;">Enter New Airport Details</h2>
			<input type="text" name="stn_code" id="stn_code" class="form-control" placeholder="Enter the station code here" required >
			<br><br>
			<input type="text" name="airport_name" id="airport_name" class="form-control" placeholder="airport name need to be added" required >
			 <br><br>
			 <input type="text" name="city" id="city" class="form-control" placeholder="airport city" required >
			  <br><br>
			<div class="row">
				<div class="col-xs-12 col-sm-6">
				<button class="btn btn-success" type = "Submit">Submit</button>
				</div>
				<div class="col-xs-12 col-sm-6">
				<button class="btn btn-danger" type ="reset">Clear Entries</button>
					</div>
			</div>
			<br>
				</form>
				</center>
				<center>
				<form class="card" style="padding:20px;" action="manageairportsdelete-backend.php" method="POST" id="form">
			<h2 style="text-align:center;">Deleting Existing Airports Details</h2>
	
		
		<form class="container" action="manageairportsdelete-backend.php" method="POST">
			<!-- <label>AirportCode:</label> -->
			<!-- <select id="dstn_code" name="dstn_code" required>
				<option selected="" disabled="">Select Source Airport</option>
				<?php /*require_once"selectairports.php";
                    foreach ($tuples as $row) {
                    	echo'<option value="'.$row[0].'">'.$row[1].'</option>';
                    }
			     */?> -->
	<select id="dstn_code" name="dstn_code" class="form-control" required>
				<option selected="" disabled="">Airport Code</option>
				<?php require_once"selectairports.php";
                    foreach ($tuples as $row) {
                    	echo'<option value="'.$row[0].'">'.$row[0].'</option>';
                    }
			     ?>
			</select> <br><br>
			<!-- </select> <br><br> -->
			<!-- <button class="btn danger" type="submit">Delete Airport</button>
			<button class="btn info" type="reset">ClearEntries</button> -->
			<div class="row">
				<div class="col-xs-12 col-sm-6">
				<button class="btn btn-success" type = "delete">delete</button>
				</div>
				<div class="col-xs-12 col-sm-6">
				<button class="btn btn-danger" type ="reset">Clear Entries</button>
					</div>
			</div>
			<br>
		</form>
				
			</center>
</body>

</html>