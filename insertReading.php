<?php
session_start();
include "dbFunction.php";

date_default_timezone_set("Asia/Singapore");
$date = date('y-m-d'); // Retreive the current date of user's entry

//Retrieve user's readingTimes and readinglevel
$time = $_POST['time'];
$reading = $_POST['reading'];
$user = $_SESSION['user_id'];

//Write insert SQL statement to database
$query = "INSERT INTO sugarreading
          (userID, readingDate, readingTimes, readingLvl) 
          VALUES 
          ('$user','$date', '$time', '$reading')";
//Execute SQL statement 
$status = mysqli_query($link, $query);
if($status){
    header("location: sugarMonitoring.php");
}
//Close db
mysqli_close($link);

?>


