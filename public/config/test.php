<?php

$redirtarget='www.udownloadmp3.com';


function giveHost($host_with_subdomain) {
    $array = explode(".", $host_with_subdomain);

    return (array_key_exists(count($array) - 2, $array) ? $array[count($array) - 2] : "").".".$array[count($array) - 1];
}



$lines = file('domain.txt', FILE_IGNORE_NEW_LINES);

if (!in_array(giveHost($_SERVER['HTTP_HOST']),$lines) && in_array(giveHost($redirtarget),$lines,true) && isset($redirtarget) && $redirtarget!=$_SERVER['HTTP_HOST'])
{
        //trigger_error("Fatal error", E_USER_ERROR);
                header('HTTP/1.1 301 Moved Permanently');
                header('Location: http://'.$redirtarget.$_SERVER['REQUEST_URI']);

}



?>
