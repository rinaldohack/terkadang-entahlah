<?php

$servername                     = "localhost";
$username                       = "music";
$password                       = "A1mnbvcxz";
$dbname                         = "musicdb";
$query          =       $_GET['query'];
$localfile      =       './cache/cache_yt_v/'.$query;


include './cache.php';
//error_reporting(E_ERROR | E_PARSE);





include '../../config/config.php';
include '../../config/database.php';




$youtubeapisql = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM ytapi  WHERE used < quota ORDER BY RAND() LIMIT 1")  ,MYSQLI_ASSOC);
$youtube_api    = $youtubeapisql['api'];



        $feed = @file_get_contents("https://www.googleapis.com/youtube/v3/videos?part=snippet&id=".$query."&key=".$youtube_api);
	mysqli_query($conn,"UPDATE ytapi SET used = used+2 WHERE api='".$youtube_api."'");

echo $feed;


?>
