<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Homepage</title>
        <link rel="stylesheet" href="../../static/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../static/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="../../static/css/homepage.css">
    </head>
    <body class="body">
        <div class="container-fluid">
            <div class="row header">
                <div class="col-2">
                    <img src="../../static/img/logo.png" alt="vk logo" class="center">
                </div>
                <div class="col-8">
                    <p class="vikings">
                        Vi Kings
                    </p>
                </div>
                <div class="col-2 dashboard">
                    <div class="register">
                        <?php
                            if($_SESSION['id']){
                        ?>
                        <button class="rounded">Dashboard</button>
                        <?php
                            }else{
                        ?>
                        <button class="rounded">Register</button>
                        <?php
                            }
                        ?>
                    </div>
                    <div class="login">
                        <?php
                            if($_SESSION['id']){
                        ?>
                        <button class="rounded">Logout</button>
                        <?php
                            }else{
                        ?>
                        <button class="rounded">Login</button>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="carouselExampleControls" class="carousel slide mt-2" data-ride="carousel" style="width: 856px;height: 538px; margin: 0 auto">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="../../static/img/one.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../../static/img/two.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../../static/img/three.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../../static/img/four.jpg" alt="Fourth slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <form class="form-container" id="form">
                        <h1>What are you upto?</h1>
                        <hr color="black"/>
                        <div class="form-group">
                            <label for="exampleInputStatus1">Enter your status update here</label>
                            <input type="text" name="status" class="form-control" id="exampleInputStatus1" placeholder="What's on your mind?">
                        </div>
                        <button type="submit" class="btn btn-success btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="../../static/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="../../static/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../../static/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="../../static/js/homepage.js"></script>
    </body>
</html>