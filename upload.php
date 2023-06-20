<?php
include('connection.php'); 
$date = $_POST['date'];
$slot = $_POST['Slot'];
$file_name = $_FILES['myfile']['name'];
$file_tmp = $_FILES['myfile']['tmp_name'];
$fileerreor = $_FILES['myfile']['error'];
 if($fileerreor == 0)
 {
    $destfile = 'upload-images/'.$file_name;
    move_uploaded_file($file_tmp, 'upload-images/'.$file_name);
    $sql = "INSERT INTO `upload` (`date`, `slot`, `file`) VALUES ('$date', '$slot', '$destfile');";
    $result = mysqli_query($con, $sql);
    if($result){
        echo '<script>alert("Upload Sucessfully");</script>';
     }
    else{
        echo " Not Inserted";
        header("Location: http://localhost//findmybus//adminpage.html"); 
    }
 }
?>