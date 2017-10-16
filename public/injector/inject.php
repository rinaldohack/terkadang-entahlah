<?php
include '../config/include-all.php';
error_reporting(E_ALL);
if (isset($argv[1]))
	$filetxt=$argv[1];
else
	$filetxt='keywords.txt';
echo "start injecting.";
$handle = fopen($filetxt, "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        $myvalue = cleanPermalink($line);
        $arr = explode(' ',trim($myvalue));
			$query_sql=mysqli_real_escape_string($conn, clean_space($line));
			$sql = "INSERT INTO terms (term) VALUES ('".$query_sql."')";
			if (!mysqli_query($conn, $sql)) {
				echo ("Error description: " . mysqli_error($conn));
				echo PHP_EOL; }
			else {
				echo 'injected '.$line;
				echo PHP_EOL; }
    }
} else {
    echo 'Apeeek.. error maning son!';
}
fclose($handle);
?>

