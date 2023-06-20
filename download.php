<?php
include('connection.php');
$date = $_POST['date'];
$slot = $_POST['Slot'];
$sql = "Select file from upload where (date='$date' and slot='$slot')";  
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
echo  "";
?>