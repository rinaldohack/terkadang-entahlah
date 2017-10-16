<?php
include 'config/include-all.php';
$sql = "INSERT IGNORE INTO terms_splitter (term) SELECT term FROM terms;";
mysqli_query($conn, $sql) or die(mysqli_error($conn));

?>


