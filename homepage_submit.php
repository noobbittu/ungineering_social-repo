<?php
    $hostname= "localhost";
    $username= "root";
    $db_password= "ketan1998";
    $databese= "ungineering";
    $conn = mysqli_connect($hostname, $username, $db_password, $databese);
    
    if(!$conn){
        die("Connection failed:".mysqli_connect_error());
    }
    
    $sql1= "SELECT id FROM users";
    $result = mysqli_query($conn, $sql1);
    
    if (!$result) {
        die(mysqli_error($conn));
    }
    
    $row=mysqli_fetch_array($result);
    $date=$_POST['date'];
    $status=$_POST['status'];
    
    $sql2= "INSERT INTO users(email_id,date,status) VALUES('$row[0]', '$date', '$status')";
    
    if(!(mysqli_query($conn,$sql2))){
        die("Error:".$sql2.",<br>".mysqli_error($conn));
    }
?>
