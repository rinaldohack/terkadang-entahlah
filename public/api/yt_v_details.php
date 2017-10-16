<?php
error_reporting(E_ERROR | E_PARSE);
error_reporting(E_ALL);

include '../config/include-all.php';

$query          =       $_GET['query'];
$localfile      =       '../cache/yt_vd/'.$query;
$remotefile     =       'http://mp3project1.storage.googleapis.com/yt_vd/'.$query;

	//$youtube_api    = "AIzaSyAC5dDo2CrWaeKrz-LVDIHQfZM_HprQN4M";
		$youtube_api 	= "AIzaSyBH5q2mLbrcrtmDxN1dqpOpdQ1m_UAbRDg";

//	$feed = file_get_contents($remotefile);
	if (file_exists($localfile))
		$feed = file_get_contents($localfile);
	else
	{
	        $feed = @file_get_contents("https://www.googleapis.com/youtube/v3/videos?part=contentDetails&id=".$query."&key=".$youtube_api);
		file_put_contents($localfile,$feed);
	}
		echo $feed;

?>
