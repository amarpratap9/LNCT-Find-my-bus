<?php
include('connection.php'); 
$route = $_POST['route'];
$bus = $_POST['bus'];
$sql ="update busroute set Bus_Number='$bus' WHERE Route_no='$route'";
?>  