<?php
    require_once "conn.php";
    $id = $_GET["id"];
    $query = "DELETE FROM students WHERE id = '$id'";
    if (mysqli_query($conn, $query)) {
        header("location: admin.php");
    } else {
         echo "Something went wrong. Please try again later.";
    }
?>