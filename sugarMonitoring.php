<html>
    <head>
        <title>Sugar Monitoring</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style2.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.6.0.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/bloodLevel.js" type="text/javascript"></script>
        <script src="js/table.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="wrapper">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="nav">
                <img src="images/apple.jpeg" height="40px" width="40px" alt=""/>
                <a class="navbar-brand" href="#">Sugar Monitoring App</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="navbar-nav ml-auto" method="post" action="doLogOut.php">
                        <button class="btn btn-outline-light" type="submit">Sign Out</button>
                    </form>
                </div>
            </nav>

            <div class="container col-lg-2 col-sm-4" id="saladtable">
                <div class="text-center" id="saladcenter">
                    <h2>Blood Sugar Level Readings</h2>
                    <hr/>
                    <form method="post" id="form1" action="insertReading.php">
                        <h5>Reading Taken After:</h5><br/>
                        <select name="time" id="time">
                            <option value="Morning" name="morning" selected>Morning</option>
                            <option value="Lunch" name="lunch">Lunch</option>
                            <option value="Dinner" name="dinner">Dinner</option>
                        </select><br>
                        Readings are to be taken 2 hours after each meal
                        <h5>Blood Sugar Level Readings (in mmol/L): </h5><br/>
                        <input type="text" id="reading" name="reading" size="13" required/><br/>
                        <input type="submit" value="Enter"/>
                    </form>
                </div>
            </div>

            <div class="container col-lg-10 col-sm-8" id="containerTable">
                <div class="text-center">
                    <table class="table table-striped" id="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">After-Meals Reading</th>
                                <th scope="col">Reading</th>
                            </tr>
                        </thead>
                        <tbody id="table1">

                        </tbody>
                    </table>
                </div>
            </div>

            <div id="footer_wrapper">
                <div id="footer1">
                    <p>Min Khant. 2021-2021. All rights reserved.</p>
                </div>
            </div>
        </div>
    </body>
</html>
