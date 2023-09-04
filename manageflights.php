<html>
<head>

<title>Manage Flights</title>
	<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
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
		
		opacity: 1;
	}
</style>
</head>
  
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
    		<center><h1> <b>AIRLINE DATABASE MANAGEMENT SYSTEM</b></h1></center><br>
    		<!-- <p>Manage Flights,Airports and Planes </p> -->
    	</div>


    	<center>
    	
    		<!-- <h2 class="header">New Flights </h2> -->
		<!-- <form action = "manageflightsinsert-backend.php" method = "POST" class="container" style="max-width: 500px!important;">
		<select  id="source" name="source" required>
				<option  selected="" disabled="">Select Source Airport</option>
			  <?php require_once"selectairports.php";
                    foreach ($tuples as $row) {
                    	echo'<option value="'.$row[0].'">'.$row[2].' ('.$row[1].')</option>';
                    }
			     ?>
            </select> <br><br>  
		
			<select  id="destination" name="destination" required>
				<option selected="" disabled="">Select Destination Airport</option>> -->
		<form class="card" style="padding:20px;" action = "manageflightsinsert-backend.php" method = "POST" id="form">
		<h2 style="text-align:center;">New Flights</h2>

			<select  id="source" name="source"  class="form-control" required>
				<option  selected="" disabled="">Select Source Airport</option>
			  <?php require_once"selectairports.php";
                    foreach ($tuples as $row) {
                    	echo'<option value="'.$row[0].'">'.$row[2].' ('.$row[1].')</option>';
                    }
			     ?>
            </select> <br><br> 
			<select  id="destination" name="destination"  class="form-control" required>
				<option selected="" >Select Destination Airport</option>
			  <?php require_once"selectairports.php";
                    foreach ($tuples as $row) {
                    	echo'<option value="'.$row[0].'">'.$row[2].' ('.$row[1].')</option>';
                    }
			     ?>
            </select> <br><br> 
			<select id="stops" name="stops" class="form-control" required>
              <option value=0>Stops</option>
              <option value=0>0</option>
              <option value=1>1</option>
			  <option value=2>2</option>
			  <option value=3>3</option>
			  <option value=4>4</option>
			  <option value=5>5</option>
			  <option value=6>6</option>
            </select> <br><br> 
			<div class="row">
				<div class="col-xs-12 col-sm-6">
				<button class="btn btn-success" type = "Submit">Proceed To Plane Details</button>
				</div>
				<div class="col-xs-12 col-sm-6">
				<button class="btn btn-danger" type ="reset">Clear Entries</button>
					</div>
			</div>
			<br>
		</form>
        <form class="card" style="padding:20px;" action = "manageflightsdelete-backend.php" method = "POST" id="form">
		<h2 style="text-align:center;">Delete Existing Flights</h2>
		 <!-- <form action = "manageflightsdelete-backend.php" method = "POST" class="container"> -->
			<!-- <label style="color:#1affa3;">PlaneID:</label>
			<input name = "plane_id" placeholder="Registration Number" required type="text"><br><br>  -->
			<select  id="plane_id" name="plane_id"  class="form-control" required>
				<option selected="" disabled="">Plane ID</option>
			  <?php require"selectplanes.php";
                    foreach ($tuples as $row) {
                    	echo'<option value="'.$row[0].'">'.$row[2].' ('.$row[1].')</option>';
                    }
			     ?>
             </select> <br><br> 
		
			<select  id="source" name="source"  class="form-control" required>
				<option  selected="" disabled="">Select Source Airport</option>
			  <?php require"selectairports.php";
                    foreach ($tuples as $row) {
                    	echo'<option value="'.$row[0].'">'.$row[2].' ('.$row[1].')</option>';
                    }
			     ?>
            </select> <br><br> 
			<select  id="destination" name="destination"  class="form-control" required>
				<option selected="" disabled="">Select Destination Airport</option>
			  <?php require"selectairports.php";
                    foreach ($tuples as $row) {
                    	echo'<option value="'.$row[0].'">'.$row[2].' ('.$row[1].')</option>';
                    }
			     ?>
            </select> <br><br> 
			<label>Date</label>
            <input name = "date" type= "date" required ><br><br>
			<label>Time</label>
            <input name = "time" type= "time" required ><br><br>
			
			<!-- <label style="color:#1affa3;">Date and Time of Departure:</label>
			<input type="date" name="date" required type="date">
			<input type="time" name="time" required type="time"><br><br> -->
			<!-- <button class="btn danger"   type = "submit">Delete</button>
			<button class="btn info"   type = "reset">ClearEntries</button> -->
			<div class="row">
				<div class="col-xs-12 col-sm-6">
				<button class="btn btn-success" type = "Delete">Delete</button>
				</div>
				<div class="col-xs-12 col-sm-6">
				<button class="btn btn-danger" type ="reset">Clear Entries</button>
					</div>
			</div>
		</form>
		<form class="card" style="padding:20px;" action = "manageflightsupdate-backend.php" method = "POST" id="form">
		<h2 style="text-align:center;">Update Fare </h2>
		<select  id="plane_id" name="plane_id"  class="form-control" required>
				<option selected="" disabled="">Plane ID</option>
			  <?php require"selectplanes.php";
                    foreach ($tuples as $row) {
                    	echo'<option value="'.$row[0].'">'.$row[2].' ('.$row[1].')</option>';
                    }
			     ?>
             </select> <br><br> 
			 <select  id="source" name="source"  class="form-control" required>
				<option  selected="" disabled="">Select Source Airport</option>
			  <?php require"selectairports.php";
                    foreach ($tuples as $row) {
                    	echo'<option value="'.$row[0].'">'.$row[2].' ('.$row[1].')</option>';
                    }
			     ?>
            </select> <br><br> 
			<select  id="destination" name="destination"  class="form-control" required>
				<option selected="" disabled="">Select Destination Airport</option>
			  <?php require"selectairports.php";
                    foreach ($tuples as $row) {
                    	echo'<option value="'.$row[0].'">'.$row[2].' ('.$row[1].')</option>';
                    }
			     ?>
            </select> <br><br> 
			<label>Date</label>
            <input name = "date" type= "date" required ><br><br>
			<label>Time</label>
            <input name = "time" type= "time" required ><br><br>
			<label style="color:black;">Increased or Decreased by Price &#x20b9</label>
			<input type="number" name="economy_fare" placeholder="Economy class"required><br><br>
			<label style="color:black;">Increased or Decreased by Price &#x20b9</label>
			<input type="number" name="business_fare"placeholder="Business class" required><br><br>
			<label style="color:black;">Increased or Decreased by Price &#x20b9</label>
			<input type="number" name="first_fare"placeholder="First Class" required><br><br>
			<div class="row">
				<div class="col-xs-12 col-sm-6">
				<button class="btn btn-success" type = "Submit">Update Fare</button>
				</div>
				<div class="col-xs-12 col-sm-6">
				<button class="btn btn-danger" type ="reset">Clear Entries</button>
					</div>
			</div>

		<!-- <form action = "manageflightsupdate-backend.php" method = "POST" class="container">
		<h2 class="header" style="color:white;">Update fare</h2>
			<label style="color:#1affa3;">PlaneID:</label>
			<input name = "plane_id" type="text" placeholder="Registration Number" required><br><br>
			<select  id="source" name="source" required>
				<option  selected="" disabled="">Select Source Airport</option>
			  <?php require_once"selectairports.php";
                    foreach ($tuples as $row) {
                    	echo'<option value="'.$row[0].'">'.$row[2].' ('.$row[1].')</option>';
                    }
			     ?>
            </select>
		
			<select  id="destination" name="destination" required>
				<option selected="" disabled="">Select Destination Airport</option>
			  <?php require_once"selectairports.php";
                    foreach ($tuples as $row) {
                    	echo'<option value="'.$row[0].'">'.$row[2].' ('.$row[1].')</option>';
                    }
			     ?>
            </select>
			<label style="color:#1affa3;">Date and Time of Departure:</label>
			<input type="date" name="date" required type="date">
			<input type="time" name="time" required type="time"><br><br>
			<label style="color:#1affa3;">Increased or Decreased by Price &#x20b9</label>
			<input type="number" name="economy_fare" placeholder="Economy class"required><br><br>
			<label style="color:#1affa3;">Increased or Decreased by Price &#x20b9</label>
			<input type="number" name="business_fare"placeholder="Business class" required><br><br>
			<label style="color:#1affa3;">Increased or Decreased by Price &#x20b9</label>
			<input type="number" name="first_fare"placeholder="First Class" required><br><br>
			<button class="btn success" type = "submit">Update Fare</button>
			<button class="btn info" type = "reset">ClearEntries</button>
		</form> -->
        
       
    </center>
	
</body>
</html>