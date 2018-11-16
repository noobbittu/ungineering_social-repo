<!DOCTYPE html>
<html>
    <head>
        <title>Homepage</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="css/homepage.css">
    </head>
    <body class="body">
        <div class="container-fluid">
            <div class="row header">
                <div class="col-2">
                    <img src="img/logo.png" alt="vk logo" class="center">
                </div>
                <div class="col-8">
                    <p class="vikings">
                        Vi Kings
                    </p>
                </div>
                <div class="col-2 dashboard">
                    <div class="register">
                        <button>Register</button>
                    </div>
                    <div class="login">
                        <button>Login</button>
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
                            <img class="d-block w-100" src="img/one.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/two.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/three.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/four.jpg" alt="Fourth slide">
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
                    <form class="form-container">
                        <h1>What are you upto?</h1>
                        <hr/ color="black">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputStatus1">Status</label>
                            <input type="text" class="form-control" id="exampleInputStatus1" placeholder="What's on your mind?">
                        </div>
                        <button class="btn btn-success btn-block">Update</button>
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="js/homepage_submit.js"></script>
    </body>
</html>
