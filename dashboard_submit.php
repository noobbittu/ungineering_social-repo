<?php
    $hostname = "localhost";
    $username = "root";
    $db_password = "password"; 
    $database = "ungineering";
    
    $conn = mysqli_connect($hostname,$username,$db_password,$database);
    if(!$conn){
        die("Connection field:".mysqli_connect_error());
    }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $college = $_POST['college'];
    $phone_number = $_POST['phone_number'];
    
     $sql = "INSERT INTO users(name,email,password,college,phone_number)VALUES ('$name','$email','$password','$college','$phone_number')";
     
     if(!mysqli_query($conn,$sql)){
        die("Error:".$sql."<br>".mysqli_error($conn));
    }   
    mysqli_close($conn);
?>
    
