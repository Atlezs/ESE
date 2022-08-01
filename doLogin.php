<?php
session_start();

// php file that contains the common database connection code
include "dbFunction.php";

$entered_username = $_POST['username'];
$entered_password = $_POST['password'];

$queryCheck = "SELECT * FROM user
          WHERE username='$entered_username'
          AND password = SHA1('$entered_password')";

$resultCheck = mysqli_query($link, $queryCheck) or die(mysqli_error($link));

if (mysqli_num_rows($resultCheck) == 1) {
    $row = mysqli_fetch_array($resultCheck);
    $_SESSION['user_id'] = $row['userid'];

    if (isset($_POST['remember'])) {
        setcookie("username", $row['username'], time() + 60 * 60 * 24 * 365 * 10);
    }

    $_SESSION['wrongPassword'] = FALSE;
} else {
    $_SESSION['wrongPassword'] = TRUE;
}

mysqli_close($link);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <?php
        if ($_SESSION['wrongPassword'] == FALSE) {
            header("location: sugarMonitoring.php");
        } else {
            header("location: index.php");
        }
        ?>
    </body>
</html>