


<?php

require_once 'dbconnect.php';

$source = $_POST["source"];
$destination = $_POST["destination"];
$class = $_POST["class"];
$date_of_depart=$_POST["date_of_depart"];



$query = "SELECT * FROM airports WHERE stn_code ='$source' or airport_name='$source'"; 

$result = mysqli_query($con, $query);
$row=mysqli_fetch_array($result);
$numResults = mysqli_num_rows($result);


if($numResults == 0)
{
	//$query = "UPDATE users SET login_count = login_count + 1 WHERE email='$email'";
	//mysqli_query($con, $query);
	echo "<br><br><br><center><h1>Invalid SourceName!</h1></center>";

}

$query = "SELECT * FROM airports WHERE stn_code ='$destination' or airport_name='$destination'"; 
$result = mysqli_query($con, $query);
$row=mysqli_fetch_array($result);
$numResults = mysqli_num_rows($result);

if($numResults == 0)
{
	//$query = "UPDATE users SET login_count = login_count + 1 WHERE email='$email'";
	//mysqli_query($con, $query);
	echo "<br><br><br><center><h1>Invalid DestinationName!</h1></center>";

}
else{
	echo'<html>
<head>
	<title>Flights Available</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="/AirlinesBooking/layoutsstyle.css">
<style>
// html{
//   background-image:url("images/manage_flights.jpg");
//   background-size:100%;
// }
table, th, td {
  border: 1px solid black;
  text-align:center;
  padding:4px;
  border-color: black;
}
</style>  
</head>
  
    <body>
    
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
      </nav>';
    echo'<div class="column">';
	echo "<center><h1>Direct Flights from ".$source." to ".$destination."</h1></center><br>";

	$query = "SELECT f.flight_id,f.stops,t.plane_id,t.path,t.path_desc,t.economy_fare,t.business_fare,t.first_fare,t.date_of_depart,t.time_of_depart,t.date_of_arrival,t.time_of_arrival FROM flights as f ,taken_by_plane as t WHERE f.source ='$source' and f.destination='$destination'and f.flight_id=t.flight_id and t.date_of_depart='$date_of_depart' and f.stops=0";
	$result = mysqli_query($con, $query);
	$table=mysqli_fetch_all($result);
	$numResults = mysqli_num_rows($result);

	echo'<table border="2" class="table table-dark table-striped">

    <tr>
    <th>flight_id</th>
    <th>stops</th> 
    <th>plane_id</th>
    <th>path</th>
    <th>path_desc</th>
    
    <th>Date_of_Depart</th> 
    <th>time_of_depart</th>
    <th>Date_of_arrival</th>
    <th>time_of_arrival</th>
    <th>Class</th>  
    <th>Seats_Available</th>
    <th>Price</th>
    <th>BOOK_this_flights</th>
    </tr>';
	foreach ($table as $row){
    $prev_flightid=0;
    $prev_planeid=0;	
	echo  "<tr>";
    echo "<td>".$row[0]."</td>";
    echo "<td>".$row[1]."</td>";
    echo "<td>".$row[2]."</td>";
    echo "<td>".$row[3]."</td>";
    echo "<td>".$row[4]."</td>";

    
    echo "<td>".$row[8]."</td>";
    echo "<td>".$row[9]."</td>";
    echo "<td>".$row[10]."</td>";
    echo "<td>".$row[11]."</td>";
    
    if($class=="first"){
    	$query="select p.total_first_seats,h.booked_first_seats from planes as p,has_booked_seats_in_plane as h where h.flight_id='$row[0]' and p.plane_id='$row[2]' and p.plane_id=h.plane_id";
    	$result=mysqli_query($con,$query);
    	$seats=mysqli_fetch_array($result);
    	$total_seats=$seats[0];
    	$booked_seats=$seats[1];
    	$seats_available=$total_seats-$booked_seats; 
    }
    if ($class=="business") {
    	$query="select p.total_business_seats,h.booked_business_seats from planes as p,has_booked_seats_in_plane as h where h.flight_id ='$row[0]'  and p.plane_id='$row[2]' and p.plane_id=h.plane_id";
    	$result=mysqli_query($con,$query);
    	$seats=mysqli_fetch_array($result);
    	$total_seats=$seats[0];
    	$booked_seats=$seats[1];
    	$seats_available=$total_seats-$booked_seats; 
    }
    if($class=="economy"){
    	$query="select p.total_economy_seats,h.booked_economy_seats from planes as p,has_booked_seats_in_plane as h where h.flight_id='$row[0]' and p.plane_id='$row[2]' and p.plane_id=h.plane_id";
    	$result=mysqli_query($con,$query);
    	$seats=mysqli_fetch_array($result);
    	$total_seats=$seats[0];
    	$booked_seats=$seats[1];
    	$seats_available=$total_seats-$booked_seats;
    }
    echo "<td>".$class."</td>";
    echo "<td>".$seats_available."</td>";
    if ($class=="economy"){
        $fare=$row[5];

    }
      if ($class=="business"){
         $fare=$row[6];

    }
      if ($class=="first"){
         $fare=$row[7];

    }
    echo"<td>".$fare."</td>";
    if($seats_available){
    echo '<td>
        <form action="proceedtopay.php" method="post">

        



        <input type="hidden" name="flight_id" value="'.$row[0].'">
        <input type="hidden" name="plane_id" value="'.$row[2].'">
        <input type="hidden" name="path" value="'.$row[3].'">
        <input type="hidden" name="path_desc" value="'.$row[4].'">
        <input type="hidden" name="class" value="'.$class.'">
        <input type="hidden" name="fare" value="'.$fare.'">
        <input type="hidden" name="date_of_depart" value="'.$row[8].'">
        <input type="hidden" name="time_of_depart" value="'.$row[9].'">
        <input type="hidden" name="date_of_arrival" value="'.$row[10].'">
        <input type="hidden" name="time_of_arrival" value="'.$row[11].'">
        <input type="hidden" name="total_seats" value="'.$total_seats.'">
        <input type="hidden" name="booked_seats" value="'.$booked_seats.'">
        <input type="hidden" name="seats_available" value="'.$seats_available.'">
        <input type="hidden" name="source" value="'.$source.'">
        <input type="hidden" name="destination" value="'.$destination .'">
        <input type="hidden" name="stops" value="'.$row[1].'">
        <button class="btn btn-success" type="submit">Book</button>
        </form>
        </td>';
    }
    else{

        echo'<td>
        
        <button class="btn btn-success" type="submit">Sold Out</button>
        
        </td>';

    }
    echo "</tr>";
    // $prev_flightid=$current_flightid;
    // $prev_planeid=$current_planeid;
	}
	echo"</table>";
	



    echo "<center><h1>Indirect Flights from ".$source." to ".$destination."</h1></center><br>";

	$query = "SELECT f.flight_id,f.stops,t.plane_id,t.path,t.path_desc,t.economy_fare,t.business_fare,t.first_fare,t.date_of_depart,t.time_of_depart,t.date_of_arrival,t.time_of_arrival FROM flights as f ,taken_by_plane as t WHERE f.source ='$source' and f.destination='$destination'and f.flight_id=t.flight_id and ((t.date_of_depart='$date_of_depart' and t.path=1)or(t.path=2)) and f.stops=1 order by f.flight_id,t.path";
	$result = mysqli_query($con, $query);
	$table=mysqli_fetch_all($result);
	$numResults = mysqli_num_rows($result);
	// echo'<table border="2" style="background-color:white;">
  echo'<table border="2" class="table table-dark table-striped">
    <tr>
    <th>flight_id</th>
    <th>stops</th> 
    <th>plane_id</th>
    <th>path</th>
    <th>path_desc</th> 
    
    <th>Date_of_Depart</th> 
    <th>time_of_depart</th>
    <th>Date_of_arrival</th>
    <th>time_of_arrival</th>
     <th>Class</th> 
    <th>Seats_Available</th>
    <th>Price</th>
    <th>BOOK_this_flights</th>
    </tr>';
    $prev_flightid=0;
    $current_planeid=0;	
	foreach ($table as $row){

	$current_flightid=$row[0];
	$current_planeid=$row[2];

	if($current_flightid==$prev_flightid){
	echo  "<tr>";
    echo "<td>".$prow[0]."</td>";
    echo "<td>".$prow[1]."</td>";
    echo "<td>".$prow[2]."<br><br>".$row[2]."</td>";
    echo "<td>".$prow[3]."<br><br>".$row[3]."</td>";
    echo "<td>".$prow[4]."<br><br>".$row[4]."</td>";
    echo "<td>".$prow[8]."<br><br>".$row[8]."</td>";
    echo "<td>".$prow[9]."<br><br>".$row[9]."</td>";
    echo "<td>".$prow[10]."<br><br>".$row[10]."</td>";
    echo "<td>".$prow[11]."<br><br>".$row[11]."</td>";
    
    
    if($class=="first"){
    	$query="select p.total_first_seats,h.booked_first_seats from planes as p,has_booked_seats_in_plane as h where h.flight_id='$prow[0]' and p.plane_id='$prow[2]' and p.plane_id=h.plane_id";
    	$result=mysqli_query($con,$query);
    	$seats=mysqli_fetch_array($result);
    	$ptotal_seats=$seats[0];
    	$pbooked_seats=$seats[1];
    	$pseats_available=$ptotal_seats-$pbooked_seats;
    	$query="select p.total_first_seats,h.booked_first_seats from planes as p,has_booked_seats_in_plane as h where  h.flight_id='$row[0]' and  p.plane_id='$row[2]' and p.plane_id=h.plane_id";
    	$result=mysqli_query($con,$query);
    	$seats=mysqli_fetch_array($result);
    	$total_seats=$seats[0];
    	$booked_seats=$seats[1];
    	$seats_available=$total_seats-$booked_seats;  
    }
    if ($class=="business") {
    	$query="select p.total_business_seats , h.booked_business_seats from planes as p,has_booked_seats_in_plane as h where  h.flight_id='$prow[0]'  and  p.plane_id='$prow[2]' and p.plane_id=h.plane_id";
    	$result=mysqli_query($con,$query);
    	$seats=mysqli_fetch_array($result);
    	$ptotal_seats=$seats[0];
    	$pbooked_seats=$seats[1];
    	$pseats_available=$ptotal_seats-$pbooked_seats;
    	$query="select p.total_business_seats , h.booked_business_seats from planes as p,has_booked_seats_in_plane as h where h.flight_id='$row[0]'  and p.plane_id='$row[2]' and p.plane_id=h.plane_id";
    	$result=mysqli_query($con,$query);
    	$seats=mysqli_fetch_array($result);
    	$total_seats=$seats[0];
    	$booked_seats=$seats[1];
    	$seats_available=$total_seats-$booked_seats; 
    }
    if($class=="economy"){
    	$query="select p.total_economy_seats , h.booked_economy_seats from planes as p,has_booked_seats_in_plane as h where h.flight_id='$prow[0]'  and   p.plane_id='$prow[2]' and p.plane_id=h.plane_id";
    	$result=mysqli_query($con,$query);
    	$seats=mysqli_fetch_array($result);
    	$ptotal_seats=$seats[0];
    	$pbooked_seats=$seats[1];
    	$pseats_available=$ptotal_seats-$pbooked_seats;
    	$query="select p.total_economy_seats , h.booked_economy_seats from planes as p,has_booked_seats_in_plane as h where h.flight_id='$row[0]'  and  p.plane_id='$row[2]' and p.plane_id=h.plane_id";
    	$result=mysqli_query($con,$query);
    	$seats=mysqli_fetch_array($result);
    	$total_seats=$seats[0];
    	$booked_seats=$seats[1];
    	$seats_available=$total_seats-$booked_seats;
    }
    echo "<td>".$class."</td>";
    echo "<td>".$pseats_available."<br><br>".$seats_available."</td>";
    if($class=="economy"){
        $fare1=$prow[5];
        $fare2=$row[5];
    }
    if($class=="business"){
        $fare1=$prow[6];
        $fare2=$row[6];
    }
    if($class=="first"){
        $fare1=$prow[7];
        $fare2=$row[7];
    }
    echo "<td>".$fare1."<br><br>".$fare2."</td>";
    if($pseats_available!=0 && $seats_available!=0){
    echo '<td>
        <form action="proceedtopay.php" method="post">

        <input type="number" name="age" placeholder="age" value="12"/>
        <input type="text" name="anumticks" placeholder="anumticks" value="3"/>
        <input type="text" name="cnumticks" placeholder="cnumticks" value="1"/>
        <input type="text" name="name" placeholder="name" value="testing"/>
        <input type="text" name="card" placeholder="card" value="4325 12345 67890"/>
        <input type="text" name="id_num" placeholder="id_num" value="190"/>
        <input type="text" name="phone" placeholder="phone" value="9876543210"/>


        <input type="hidden" name="flight_id" value="'.$row[0].'">
        <input type="hidden" name="plane_id1" value="'.$prow[2].'">
        <input type="hidden" name="plane_id2" value="'.$row[2].'">
        <input type="hidden" name="path1" value="'.$prow[3].'">
        <input type="hidden" name="path2" value="'.$row[3].'">
        <input type="hidden" name="path_desc1" value="'.$prow[4].'">
        <input type="hidden" name="path_desc2" value="'.$row[4].'">
        <input type="hidden" name="class" value="'.$class.'">
        <input type="hidden" name="fare1" value="'.$fare1.'">
        <input type="hidden" name="fare2" value="'.$fare2.'">
        <input type="hidden" name="date_of_depart1" value="'.$prow[8].'">
        <input type="hidden" name="date_of_depart2" value="'.$row[8].'">
        <input type="hidden" name="time_of_depart1" value="'.$prow[9].'">
        <input type="hidden" name="time_of_depart2" value="'.$row[9].'">
        
        <input type="hidden" name="date_of_arrival1" value="'.$prow[10].'">
        <input type="hidden" name="date_of_arrival2" value="'.$row[10].'">
        <input type="hidden" name="time_of_arrival1" value="'.$prow[11].'">
        <input type="hidden" name="time_of_arrival2" value="'.$row[11].'">
        <input type="hidden" name="total_seats1" value="'.$ptotal_seats.'">
        <input type="hidden" name="total_seats2" value="'.$total_seats.'">
        <input type="hidden" name="booked_seats1" value="'.$pbooked_seats.'">
        <input type="hidden" name="booked_seats2" value="'.$booked_seats.'">
        <input type="hidden" name="seats_available1" value="'.$pseats_available.'">
        <input type="hidden" name="seats_available2" value="'.$seats_available.'">
        <input type="hidden" name="source" value="'.$source.'">
        <input type="hidden" name="destination" value="'.$destination .'">
       
         <input type="hidden" name="stops" value="'.$row[1].'">
        <button class="btn btn-success" type="submit">Book</button>
        </form>
        </td>';
    }
    else{
        echo'<td>
        <button class="btn btn-warning" type="">Sold Out</button>
        </td>';
    }
    
    echo "</tr>";
    }
    $prev_flightid=$current_flightid;
    $prev_planeid=$current_planeid;
    $prow[0]=$row[0];
	$prow[1]=$row[1];	
	$prow[2]=$row[2];
	$prow[3]=$row[3];
	$prow[4]=$row[4];
	$prow[5]=$row[5];
	$prow[6]=$row[6];
	$prow[7]=$row[7];
	$prow[8]=$row[8];
	$prow[9]=$row[9];
    $prow[10]=$row[10];
    $prow[11]=$row[11];
 
	}
	echo"</table>";
	echo"</div>";
	echo'</body></html>';



}
?>