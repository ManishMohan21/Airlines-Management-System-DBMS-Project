<html>
<head>
<style>
html{
background-image:url("insert_flight.jpg");
background-size:100%;
}
</style>
</head>
<body>
<?php

require_once"dbconnect.php";
$source=$_POST["source"];
$destination=$_POST["destination"];
$stops=$_POST["stops"];

if($stops == 0){

	// header('Location: directflights.php');

	require_once "directflights.php";

}
else if($stops > 0){

	// header('Location: indirectflights.php');
	require_once "indirectflights.php";
	

} 
?>
</body>
</html>