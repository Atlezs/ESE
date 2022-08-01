<?php
session_start();

include "dbFunction.php";

$username = $_POST['username'];
$password = $_POST['password'];
$height = $_POST['height'];
$weight = $_POST['weight'];

$query2 = "SELECT * FROM user WHERE username='$username'";
$status2 = mysqli_query($link, $query2);
$row = mysqli_num_rows($status2);

if ($row > 0) {
    $_SESSION['registerFail'] = TRUE;
} else {
    $query = "INSERT INTO user
          (username, password, height, weight) 
          VALUES 
          ('$username',SHA1('$password'), '$height', '$weight')";

    $status = mysqli_query($link, $query);

    if ($status) {
        $_SESSION['registerFail'] = FALSE;
    } else {
        $_SESSION['registerFail'] = TRUE;
    }
}

mysqli_close($link);
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
    </head>
    <body>
        <?php
        if ($_SESSION['registerFail'] == FALSE) {
            header("location: index.php");
        } else {
            header("location: index.php");
        }
        ?>
    </body>
</html>