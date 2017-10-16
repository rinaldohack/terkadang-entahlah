<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
	if ($query_echo=='')
		echo '<meta name="description" content="Search and download mp3 for free from our multimillion Mp3 database search engine.">';
	else
		echo '<meta name="description" content="This is our directory list for '.$query_echo.'. You can download or stream '.$query_echo.' here for free without registration..">';
	?>

	<?php echo $title_echo;


	if (isset($query_echo))
	{
		$count=str_word_count($query_echo);
		if ($count >=2 )
			echo '<meta name="robots" content="index,follow">';
		else
			echo '<meta name="robots" content="noindex,nofollow">';

	}

	echo $header;
	?>


    <!-- Bootstrap Core CSS -->
    <link href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/bootstrap-unity.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <link rel='stylesheet' href='//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>



<!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,2908072,4,0,0,0,00010000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?2908072&101" alt="" border="0"></a></noscript>
<!-- Histats.com  END  -->



</head>


<body>



    <!-- Navigation -->
    <nav class="navbar navbar-fixed-top navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="http://<?php echo $_SERVER['HTTP_HOST'];?>"><?php echo $name;?></a>



            </div>



            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


<?php
if(strstr(strtolower($_SERVER['HTTP_USER_AGENT']), "googlebot") || strstr(strtolower($_SERVER['HTTP_USER_AGENT']), "bingbot"))
{
						
				for ($i=0;$i<=20;$i++)
				{
					randomterms();
					echo '<br>';
				}
}
?>


