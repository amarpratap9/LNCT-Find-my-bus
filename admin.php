<?php      
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        $sql = "select *from admin where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
           
        if(!$result){  
            echo '<script>alert("Login Sucessfully")</script>';
            header("location: http://localhost//findmybus/adminpage.html;");  
        }  
        else{  
            echo '<script>alert("Login failed. Invalid username or password.")';  
            header("location: http://localhost//findmybus/admin.html"); 
        }     
?>  