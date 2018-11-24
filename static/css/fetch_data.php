<?php
    $hostname = "localhost";
    $username = "username";
    $db_password = "password";
    $database = "ungineering";

    $conn = mysqli_connect($hostname, $username, $db_password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM users";

    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die(mysqli_error($conn));
    }

    while ($row=mysqli_fetch_array($result)) {
        echo $row['email'] . "<br/>";
    }    	

    mysqli_close($conn);
?>

