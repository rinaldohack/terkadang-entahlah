<?php
header("Content-Type: text/plain");

include 'config/include-all.php';
error_reporting(E_ALL);


$limit			= $_GET['limit'];
$address        	= $_GET['address'];



for($i=1;$i<=$limit;$i++)
{
	$content = '<script type="text/javascript" src="https://ycapi.org/js/link.js"></script>';
	$query_echo='';


	while ($query_echo=='')
	{


		$query_echo             = mysqli_fetch_array(mysqli_query($conn,"SELECT term FROM terms2 ORDER BY RAND() LIMIT 1 "))['term'];
	}


	$query                  = cleanPermalink($query_echo);





                $apiurl="http://".$servername."/external/public/yt.php?query=".$query;
                $getapi = file_get_contents($apiurl);
        $apidecode =json_decode($getapi, true);
    foreach ($apidecode['items'] as $items) {
        $title          = $items['snippet']['title'];
        $desc           = $items['snippet']['description'];
        $videoid        = $items['id']['videoId'];



$content = $content.'
<div class="col-sm-6">
        <div style="background-color: #F5F7FC;border: dotted 1px #D2D2CF;padding: 5px; overflow: auto;">
		Download <b>'.$title.'</b> Mp3 free here, no registration required. '.$title.' results is displayed based on the keyword relevancy. '.$title.' mp3 is presented for preview before you buy the original mp3 files.  
               <div style="margin-left:5px">
                        <a target="_blank" style="text-align:left;display:block;" href="http://www.youtube.com/watch?v='.$videoid.'">
				<img align="left" src="https://img.youtube.com/vi/'.$videoid.'/default.jpg"></img>
                                 <strong>'.$title.'</strong>
                        </a>
                </div>
		<br />
                <div style="margin:5px 0;">
                        <a class="y2m" href="" data-href="http://www.youtube.com/watch?v='.$videoid.'" target="_blank" title="download mp3" class="btn btn-info">Download</a>
                </div>
		<br /><br />
        </div>
        <br>
</div>
       ';
		}
//echo $content;
mail($address,$query_echo.' MP3 Download',$content,"Content-Type: text/html; charset=ISO-8859-1\r\n");		


echo 'Success mailed '.$query_echo.' MP3 Download<br>';
}
?>
