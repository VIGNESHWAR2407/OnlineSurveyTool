<?php

function db()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "ost_db_tech";

    $conn = mysqli_connect($servername, $username, $password, $database);
    if ($conn) {
        return $conn;
    } else {
        die('Error Connection');
    }
}


$db = db();

extract($_POST);


if (isset($_POST['color'])) {
    $sql = "INSERT INTO revenue VALUES ('$color', '$car')";
    if ($db->query($sql) === TRUE) {
        echo "Value stored successfully!";
    } else {
        echo "Error: " . $db->error . "<br>";
    }

    // Close the database connection
    mysqli_close($db);
} else
    die("No data provided");
?>