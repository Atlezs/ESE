<?php
session_start();

include "dbFunction.php";

$queryReading = "SELECT sr.userid, sr.readingDate, sr.readingTimes, sr.readingLvl
            FROM sugarreading sr, user u
            WHERE sr.userID=u.userid";

$resultReading = mysqli_query($link, $queryReading) or
        die(mysqli_error($link));
$arrReading;

while ($row = mysqli_fetch_assoc($resultReading)) {
    $arrReading[] = $row;
}

if (isset($arrReading)) {
    $user = $arrReading[0]['userid'];
    if ($_SESSION['user_id'] == $user) {
        for ($i = 0; $i < count($arrReading); $i++) {
            $date = $arrReading[$i]['readingDate'];
            $time = $arrReading[$i]['readingTimes'];
            $level = $arrReading[$i]['readingLvl'];

            echo "<tr>";
            echo "<td>" . $date . "</td>";
            echo "<td>" . $time . "</td>";
            echo "<td>" . $level . "</td>";
            echo "</tr>";
        }
    }
}

mysqli_close($link);
?>