<?php
session_start();
//$email = $_COOKIE['email'];
$email = $_SESSION ['email'];
echo $email;
?>
<html>
    <head>
        <meta charset ="utf-8">
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <link rel ="stylesheet" href="css/dashboard.css"/>  
    </head>
    <body class="container-fluid">
        <div class="row header bg-dark">
            <div class="col-4">
                <a href="#">
                    <img class="img" src="css/a.png" alt="LOGO"/>
                </a>
            </div>
            <div class="col-4 col-sm-4">
            </div>
            <div class="col-4 col-md-4 col-sm-4">
                <a href="https://www.google.com/"><button type="button" class="btn btn-danger">Your Status</button></a>
                <a href="#"><button type="button" class="btn btn-success">LOG OUT</button></a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6 col-md-4 col-sm-6">
                <form>
                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="password" class="form-control" id="exampleInputName1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputCollege1">College</label>
                        <input type="college" class="form-control" id="exampleInputCollege1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPhoneNumber1">Phone number</label>
                        <input type="phone_number" class="form-control" id="exampleInputPhoneNumber1">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </body>
</html>

