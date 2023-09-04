<html>
<head>
	<link rel="stylesheet" type="text/css" href="layoutsstyle.css">
	<title>AirlinesBookingSignup</title>
	<style>
		
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
.btn-info{
	width: 20px;
}
	</style>
</head>
  
    <body  style="background-image: url('images/book.jpg'); background-size:cover;">
    	<div class="header">
    		<h1>Airlines Booking Platform</h1>
    		<p>Please Provide the Following Details to SignUp</p>
    		
    	</div>
	<center>
		
		<form action = "signup-backend.php" method = "POST" class="container">
			<label>Name: </label>
			<input name = "name" placeholder = "Name" type="text" required><br><br>
			<label>Email: </label>
			<input name = "email" placeholder = "Email" type="email" required><br><br>
			<label>Password:</label>
			<input name = "password" type = "password" placeholder = "Password"><br><br>
			<button class="btn success"type = "submit">Submit</button>
			<button class="btn danger"type = "reset">ClearEntries</button>
			<!-- <button href="http://localhost/airlines/" class="btn info" type="back">Back</button> -->
			<a href="http://localhost/airlines/" class="btn btn-info" type="button" style="width:80%">Back</a>

		</form>
		<!-- <button href="http://localhost/airlines/" class="btn info" type="back">Back</button> -->
	</center>
</div>
</body>
</html>
