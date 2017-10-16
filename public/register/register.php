<?php
include '../config/include-all.php';

$title		=mysqli_real_escape_string($conn,$_POST['title']);
$header		=mysqli_real_escape_string($conn,$_POST['header']);


$domains 	= explode("\n", $_POST['domain']);




foreach($domains as $domain)
{

$domain 	=trim(preg_replace('/\s+/', ' ', $domain));
$sql =
"
INSERT INTO domains (domain,name) VALUES ('".$domain."','".$title."')
ON DUPLICATE KEY UPDATE
name		='".$title."'
";
	//echo $sql;
	mysqli_query($conn,$sql)     or die(mysqli_error($conn));
	echo 'Domain '.$domain.' telah berhasil diregister.<br>';
	echo $sql.'<br>';
}


?>

