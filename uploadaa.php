<?php      
    include('connection.php'); 
    $time = $_POST['Slot'];
    $uploads = $_POST['myfile'];
    $sql = "INSERT INTO `upload` (`time`, `file`) VALUES ('$time', '$uploads');";  
    $result = mysqli_query($con, $sql);   
          
    if($result){  
            echo '<script>alert("Register Sucessfully");</script>';
            header("Location: http://localhost//home//main/index.html#Sign-in");  
        }  
    else{
        header("Location: http://localhost//home//main/index.html#Sign-up");
    }   
?>  