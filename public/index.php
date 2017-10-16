<?php
/*
$rand_redir=mt_rand(1,10);
if ($rand_redir==1)
{
	header("Location: http://pop2.musicdownloadingwebsite.com".$_SERVER['REQUEST_URI']);
	exit();
}
*/
if ($_SERVER['REQUEST_URI']=='/robots.txt')
{
        include 'robots.php';
}
else
{
	include 'config/blacklist.php';

	if ($_SERVER['HTTP_HOST']=='az-mp3.gdn' || $_SERVER['HTTP_HOST']=='bestmp3download.top' || $_SERVER['HTTP_HOST']=='az-mp3.men' || $_SERVER['HTTP_HOST']=='az-mp3.top' || $_SERVER['HTTP_HOST']=='az-mp3.pw')
	{
		echo 'domain blocked.';}
	else
	{
		include 'config/include-all.php';
		include 'header.php';
		include 'main.php';
		include 'footer.php';
		include 'config/include-footer.php';
	}
}

?>
