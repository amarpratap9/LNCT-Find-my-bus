<?php      
    include('connection.php'); 
    $Na = $_POST['Name']; 
    $Emailid = $_POST['email'];
    $Phone = $_POST['phone'];
    $Accsoft= $_POST['accsoft'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $sq="select * from user where (email='$Emailid');";

      $res=mysqli_query($con,$sq);

      if (mysqli_num_rows($res) > 0) {
        
        $row = mysqli_fetch_assoc($res);
        if($Emailid==isset($row['email']))
        {
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Email already use")'; 
            echo '</script>';
        }
		}
else{
    if($password == $cpassword){
        $sql = "INSERT INTO `user` (`Name`, `email`, `phone`, `accsoft`, `password`) VALUES ('$Na', '$Emailid', '$Phone', '$Accsoft', '$password')";  
        $result = mysqli_query($con, $sql);   
          
        if($result){  
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Register Sucessfuly")';  
            echo '</script>';
            header("Location: http://localhost//findmybus/index.html#Sign-in");  
        }  
       
    }
    else{
        header("Location: http://localhost//home//main/index.html#Sign-up");
    }  
} 
?>  