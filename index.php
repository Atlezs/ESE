<!DOCTYPE html>
<!--
Allows user to login or register. You can choose to have a separate registration page.
This page is deliberately left blank.

-->

<?php
session_start();
if ((isset($_SESSION['registerFail']))) {
    if ($_SESSION['registerFail'] == TRUE) {
        ?>
        <script src="js/usernameTaken.js" type="text/javascript"></script>
        <?php
        session_destroy();
    } else {
        ?>
        <script src="js/registerSuccess.js" type="text/javascript"></script>
        <?php
        session_destroy();
    }
}

if ((isset($_SESSION['wrongPassword']))) {
    if ($_SESSION['wrongPassword'] == TRUE) {
        ?>
        <script src="js/incorrectUserPass.js" type="text/javascript"></script>
        <?php
        session_destroy();
    }
}
?>

<html>
    <head>
        <title>Sugar Monitoring</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-3.6.0.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="wrapper">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbd">\
                <a class="navbar-brand" href="#"><img src="images/apple.jpeg" height="40px" width="40px" alt=""/>Sugar Monitoring App</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="navbar-nav ml-auto" method="post" action="doLogin.php">
                        <input class="form-control" type="text" name="username" placeholder="Username" required/>
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                        <button class="btn btn-outline-light" type="submit">Login</button>
                    </form>
                    <a class="btn btn-outline-info login-trigger" href="#" data-target="#login" data-toggle="modal">Register</a>
                </div>
            </nav>

            <div class="container-fluid">
                <div class="row">
                    <div class="container col-lg-6 col-sm-12">
                        <div id="div1">
                            <h4>Monitor your sugar level at Ease</h4>
                            <img src="images/notes.jpeg" height="550px" width="400px" alt=""/>
                        </div>
                    </div>

                    <div class="container col-lg-6 col-sm-12" id="containerCards">
                        <h4>Just Listen to these People</h4>
                        <div class="row" id="cardID">
                            <div class="card">
                                <div class="card-body text-center">
                                    <img src="images/man1.jpeg" height="300px" alt=""/>
                                    <p class="card-text">Simple,<br/>Streamline Design</p>
                                </div>
                                <div class="card-footer bg-info text-center text-white">Jason Chew<br/>-United States</div>
                            </div>

                            <div class="card">
                                <div class="card-body text-center">
                                    <img src="images/man2.jpeg" height="300px" alt=""/>
                                    <p class="card-text">Simple to Use</p>
                                </div>
                                <div class="card-footer bg-info text-center text-white">James Chin<br/>-Canada</div>
                            </div>

                            <div class="card">
                                <div class="card-body text-center">
                                    <img src="images/woman.jpeg" height="300px" alt=""/>
                                    <p class="card-text">Makes it easy for me to keep track by myself</p>
                                </div>
                                <div class="card-footer bg-info text-center text-white">Kylie Min<br/>-Australia</div>
                            </div>

                            <div class="card">
                                <div class="card-body text-center">
                                    <img src="images/woman2.jpeg" height="300px" alt=""/>
                                    <p class="card-text">Just Wonderful</p>
                                </div>
                                <div class="card-footer bg-info text-center text-white">Allison Abby<br/>-Germany</div>
                            </div>

                            <div class="card">
                                <div class="card-body text-center">
                                    <img src="images/man_sitting.jpg" height="300px" alt=""/>
                                    <p class="card-text">I was overweight,<br/>but now I'm not</p>
                                </div>
                                <div class="card-footer bg-info text-center text-white">Allison A<br/>-United States</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="login" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <button data-dismiss="modal" class="close">&times;</button>
                        <h4>Registration</h4>
                        <hr/>
                        <form method="post" action="doRegister.php">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="username123" required/>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="******" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Height</label>
                                <input type="text" class="form-control" name="height" placeholder="160(cm)" required/>
                            </div>
                            <div class="form-group">
                                <label>Weight</label>
                                <input type="text" class="form-control" name="weight" placeholder="40(kg)" required/>
                            </div>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
