<?php

$conn = mysqli_connect($dbhost, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
