<?php



$request_array	= explode("/", $_SERVER['REQUEST_URI']);

$query			= $request_array[1];
$query_echo		= explode("?",ucwords(urldecode(str_replace("-"," ",$query))))[0];
$videoid		= $request_array[2];



if (isset($videoid))
{

		$query_echo             = explode("?",ucwords(urldecode(str_replace("-"," ",$query))))[0];
		$title_echo = '<title>'.$query_echo.' - '.$name.'</title>';
}
elseif (empty($query_echo)&&empty($request))
{
	$title_echo = '<title>'.$name.' - Free Mp3 Downloads</title>';
}
elseif (isset($query_echo))
{
    $title_echo = '<title>'.$query_echo.' - '.$name.'</title>';
}
elseif (strpos($_SERVER['REQUEST_URI'], 'register')!== false)
{
	
}
elseif (strpos($_SERVER['REQUEST_URI'], 'test.php')!== false)
{

}
elseif (strpos($_SERVER['REQUEST_URI'], 'downloader')!== false)
{

}
elseif (strpos($_SERVER['REQUEST_URI'], 'mail.php')!== false)
{

}
else
{
	//header("HTTP/1.1 301 Moved Permanently");
    //header("Location: http://".$_SERVER['HTTP_HOST']);
}
?>
