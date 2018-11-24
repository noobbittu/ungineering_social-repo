<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>login page</title>
        <link rel = "stylesheet" type = "text/css" href = "../../static/css/bootstrap.min.css">
        <link rel = "stylesheet" type = "text/css" href = "../../static/css/login.css">
        <script src = ""></script>
    </head>
    <body class="body">
        <div class="container-fluid bg">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12"></div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <form id="login_form" class="form-container">
                        <h1>Vikings Login</h1>
                        <hr/>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-success btn-block">Submit</button>
                    </form>
                </div>

            </div>    
        </div>
        <script type="text/javascript" src="../../static/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="../../static/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../../static/js/login.js"></script>

    </body>
</html>