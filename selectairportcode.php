<?php
require_once "dbconnect.php";

$query="select * from airports order by stn_code";
$result=mysqli_query($con,$query);
$tuples=mysqli_fetch_all($result);



?>