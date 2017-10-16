<?php
$blacklist = array(
'5DsVwYqVhdU',
'cITmgWvkvaI'
);

if (isset($_GET['v']))
{
	if (in_array($_GET['v'],$blacklist))
	{
		header("Location: http://".$_SERVER['HTTP_HOST']);
		exit();
	}
}

?>
