<?php

$enableredir = 'false';

function giveHost($host_with_subdomain) {
    $array = explode(".", $host_with_subdomain);

    return (array_key_exists(count($array) - 2, $array) ? $array[count($array) - 2] : "").".".$array[count($array) - 1];
}

$lines = file('config/domain.txt', FILE_IGNORE_NEW_LINES);




if(php_sapi_name() == 'cli' || $enableredir == 'false' || $_SERVER['HTTP_HOST'] == $servername || in_array(giveHost($_SERVER['HTTP_HOST']),$lines) || $_SERVER['REQUEST_URI'] == '/register/register.php')
{

}
else
{
	shuffle($lines);
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: http://www.'.giveHost($lines[0]).$_SERVER['REQUEST_URI']);
	exit(0);
}





/**
if (($redirtarget != $_SERVER['HTTP_HOST']) && ($redirtarget != ''))
{
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: http://'.$redirtarget.$_SERVER['REQUEST_URI']);
}
**/

$domainsql = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM domains where domain = '".giveHost($_SERVER['HTTP_HOST'])."'"),MYSQLI_ASSOC);

if (!empty($domainsql))
{
        $name            = $domainsql['name'];
}
else
{

	$name = 'Mp3 Resource';




}



?>
