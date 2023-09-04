<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="/AirlinesBooking/layoutsstyle.css">
	<title>Airlines Booking</title>
	<style>
html{
    
    
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
<body  style="background-image: url('images/direct_indirect1.jpg'); background-size:100%;">

	<br><br>
	<center>
		<div class="header">
		<h1><b>WELCOME TO AIRLINES BOOKING SYSTEM</b></h1>
		<h3><b>Please Login to book your tickets</b></h3>
	</div>
		<form  class="container" action="login-backend.php" method = "POST" >
		<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Email</span>
  <input type="email" class="form-control" name="email" placeholder="abc@example.com" aria-label="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$" required aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">password</span>
  <input type="password" class="form-control" name="password" placeholder="password" aria-label="password" required aria-describedby="basic-addon1">
</div>



			<!-- <label>Email:</label>
			<input type="email" name = "email" placeholder = "abc@example.com" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$" required><br><br>
			<label>Password:</label>
			<input name = "password" type = "password" placeholder = "Password" required><br><br> -->
			<button class="btn btn-success" type = "submit">Submit</button>
			<button class="btn btn-warning" type="reset">ClearEntries</button><br><br>
	        <a href="signup.php">Create New account</a>             
	        <a href="adminlogin.php">login for admin</a>
	    </form>
	</center>
</body>
</html>
