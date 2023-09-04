<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="/AirlinesBooking/layoutsstyle.css">
	<title>Admin Login</title>
	<style>

                html{
  background-size:100%;
  /* background-image:url("airimage 03.jpg"); */
}
                  
			a:link, a:visited {
  background-color: #2196F3;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 25px;
  margin-right:  10px;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
    font-family: "Comic Sans MS", cursive, sans-serif;
}

a:hover, a:active {
  background-color: #0b7dda;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
		
	</style>
</head>

<body  style="background-image: url('images/manage_flights.jpg');background-size:cover;">
	<br><br>
	<center>
		<div class="container">

		<div style="text-align:left;margin-bottom:30px;">
		<a href="http://localhost/airlines/" class="btn btn-outline">Back</a>
		</div>

		<h1 class="header"  style="color:white">Welcome to Airlines Booking Database Management Platform</h1>

		<p class = "header"  style="color:white">Please Login to Manage Airlines Booking Database</p>

		<form  action="adminlogin-backend.php" method = "POST" class="column container">

		<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">username</span>
  <input type="text" class="form-control" placeholder="Admin Username" aria-label="Username" name="username" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Password</span>
  <input type="password" class="form-control" placeholder="Admin password" aria-label="password" name="password" aria-describedby="basic-addon1">
</div>

<button type="submit" class="btn btn-success">Submit</button>
<button type="reset" class="btn btn-danger">ClearEntries</button>


			<!-- <label>username:</label>
			<input name = "username" placeholder = "AdminUsername" type="text"  class="form-control"><br><br> -->
			<!-- <label>Password:</label>
			<input name = "password" type = "password" placeholder = "Admins Password"><br><br> -->
			<!-- <button class="btn success" type = "submit">Submit</button>   <button class="btn danger" type = "reset">ClearEntries</button>
<button><a href="http://localhost/airlines/">Back</a></button> -->
	    </form>
		</div>

		
	</center>
</body>
</html>