<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<!--content-->
			<div class="col-lg-12">
				<div class="row">
				    <div class="col-xs-12">
					<div class="well well-sm well-search">
					<form action="http://<?php echo $_SERVER['HTTP_HOST'];?>/search2.php" role="search" method="POST">
					    <div class="input-group">
						<input id="search_header" type="text" class="form-control ui-autocomplete-input" name="q" value="<?php echo $query_echo;?>" placeholder="Search Your Favourite Songs Here ...">
						<span class="input-group-btn">
						    <button class="btn btn-default" type="submit" ><strong><span class="glyphicon glyphicon-search" aria-hidden="true"></span> <span class="hidden-xs">Search</span></strong></button>
						</span>
					    </div><!-- /input-group -->
					</form>
					<div id="sonuc"></div>
					</div>
				    </div>
				</div>
				<?php
				if (strpos($_SERVER['REQUEST_URI'], 'downloader')!== false  && $_GET['url']!='')
				{

					echo '<iframe class="col-sm-12" height="2000px" marginwidth="0" marginheight="0" scrolling="no" src="http://'.$_SERVER['HTTP_HOST'].'/external/public/video?url='.rawurlencode($_GET['url']).'"></iframe>';

				}
				elseif ($query_echo=='')
				{
					echo '


				<h1 id="buttons">Welcome to '.$name.'</h1>
                                <b>'. $name.'</b> provides easy way to search and download mp3s from our multimillion music database. Search your favorite songs in our database and download these in the best possible quality for price of free. There is no registration required. <br><br>
                                <b>'. giveHost($_SERVER['HTTP_HOST']).'</b> is one of the most popular and fastest Mp3 search engines in the world. With our search engine, you can search for a song name or an artist name in several databases and download the results immediately for free.<br><br>
                                You can even look at the newest songs available, if you have no idea what to listen.<br>
                                Have fun and enjoy this website! And if you like, please bookmark us (CTRL + D)<br><br>
							

						<center><div class="page-header">
							  <h2 id="buttons">Top Music Charts</h2>
						</div>
						'.$ad_300x250.'<br>';
					$previous_value = libxml_use_internal_errors(TRUE);
					$doc = new DOMDocument();
					@$doc->load('http://itunes.apple.com/us/rss/topsongs/limit=99/explicit=true/xml');
					libxml_clear_errors();
					libxml_use_internal_errors($previous_value);
					$itunes = array();
					foreach ($doc->getElementsByTagName('entry') as $node) {
						$itemRSS = array ();
						$itemRSS['id'] = $node->getElementsByTagName('id')->item(0)->getAttribute('im:id');
						$itemRSS['title'] = strip_tags($node->getElementsByTagName('title')->item(0)->nodeValue);
						$itemRSS['duration'] = $node->getElementsByTagName('link')->item(1)->getElementsByTagName('duration')->item(0)->nodeValue;
						$itemRSS['name'] = $node->getElementsByTagName('name')->item(0)->nodeValue;
						$itemRSS['image'] = $node->getElementsByTagName('image')->item(2)->nodeValue;
						$itemRSS['artist'] = $node->getElementsByTagName('artist')->item(0)->nodeValue;
						$itemRSS['genre'] = $node->getElementsByTagName('category')->item(0)->getAttribute('label');
						$itunes[] = $itemRSS;
					 }
					$loop=0;
					foreach ($itunes as $i) {
					if ($loop==0)
					{
						echo '<div class="col-sm-12">';
					}
					$loop=$loop+1;
					echo '
					<div class="col-sm-4">
						<div class="panel panel-primary">
						  <div class="panel-heading">
							<h3 class="panel-title"><a href="http://'.$_SERVER['HTTP_HOST'].'/'.cleanPermalink($i['name']).'-'.cleanPermalink($i['artist']).'" title="'.$i['name'].'">'.$i['name'].'</a></h3>
						  </div>
						  <div class="panel-body">
							<a href="http://'.$_SERVER['HTTP_HOST'].'/'.cleanPermalink($i['artist']).'"><span class="artist">by '.$i['artist'].'</span></a>  on <a href="http://'.$_SERVER['HTTP_HOST'].'/'.cleanPermalink($i['genre']).'-songs"><span class="genre">'.$i['genre'].'</span></a><br />
							<a href="http://'.$_SERVER['HTTP_HOST'].'/'.cleanPermalink($i['title']).'">
								<img width="170" height="170" src="'.$i['image'].'" class="cover" alt="'.$i['title'].'" title="'.$i['title'].'">
							</a>
						  </div>
						</div>
					</div>';
					if ($loop==3) 
					{
						//echo $ad_468x60;
						echo '</div>';
						$loop=0;
					}

					}
				}
				else
				{
				echo '
					<center>
					<div class="page-header">
						<h1 id="buttons">'.$query_echo.' Download</h1>
					</div>
					'.$ad_300x250.'
					<br></center>';
				//show content handler
					if (!empty($_GET['s']) || !empty($videoid))
					{
					echo '
					<div class="col-sm-12" align="left">
						<div class="panel panel-primary">
						  <div class="panel-heading">
							<h3 class="panel-title">'.$query_echo.'</h3>
						  </div>
						  <div class="panel-body">
						  		<center>
					';
						if ($_GET['s']!='')
						{
							echo '<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/'.$_GET['s'].'&amp;auto_play=true&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
							<br>'.$ad_468x60;
							$desc_v = '';
						}

						elseif ($videoid!='')
							echo '<iframe width="100%" height="500" src="http://www.youtube.com/embed/'.$videoid.'?autoplay=1"></iframe>
							<br>'.$ad_468x60;
						echo '	
								</center>
								<br>
								This is our directory list for <b>'.$query_echo.'</b>. You can download or stream <b>'.$query_echo.'</b> here for free without registration.<br>
								<br>
								The file <b>'.$query_echo.'</b> is intended just for testing purposes only. If you like the audio, please consider buying it to support the creator. <br>
								<br>
								Please notice that we did not store any music or videos in our server, including (but not limited to) <b>'.$query_echo.'</b>. We only crawl and save multiple search engine results for your use.
								If you legally own these videos or music and want to remove from our search engine, you may want to contact the original uploader.
								That way, our link will also be gone automatically.
								<br>
								<br>'.nl2br($desc_v).'
								<br>
								<br>
								<br><center>	
						';
						if ($_GET['s']!='')
							echo '<a rel="nofollow" href="http://'.$_SERVER['HTTP_HOST'].'/external/public/video?url=https%3A//api.soundcloud.com/tracks/'.$_GET['s'].'">Download</a>';
						elseif ($videoid!='')
							echo '<br /> <br />
								<!--
								<a rel="nofollow" href="http://'.$_SERVER['HTTP_HOST'].'/external/public/video?url='.rawurlencode('http://www.youtube.com/embed/'.$videoid.'?autoplay=1').'&audio=on">MP3</a> 
								<a rel="nofollow" href="http://'.$_SERVER['HTTP_HOST'].'/external/public/redirect?url='.rawurlencode('http://www.youtube.com/embed/'.$videoid.'?autoplay=1').'&page=redirect&format=best">MP4</a> 
								<a rel="nofollow" href="http://'.$_SERVER['HTTP_HOST'].'/downloader/'.$query.'?url='.rawurlencode('http://www.youtube.com/embed/'.$videoid.'?autoplay=1').'">Other format</a>
								--> ';
							echo '<a href="" data-href="https://www.youtube.com/watch?v='.$videoid.'" target="_blank" class="y2m">Download mp3</a><script type="text/javascript" src="https://ycapi.org/js/link.js"></script>';
						echo 	'<br>
								'.$ad_468x60.'
								</center>
							</div>
						</div>
						<br><br>
					</div>
					';
					}

				//end show content handler	
	





//start search handler

	if (empty($videoid))
	{
		echo '<b>Download '.$query_echo.' Mp3 </b> free by left clicking on the track title. '.$query_echo.' results is displayed based on the keyword relevancy. '.$query_echo.' mp3 is presented for preview before you buy the original mp3 files. <br /><br />';
		echo spp($query_echo);


		$apiurl="http://mp3-project-181114.appspot.com/yt.php?query=".rawurlencode($query_echo);
		$remote = file_get_contents($apiurl);
		if (empty($remote))
			$remote = '';
		$getapi=$remote;
		$apidecode =json_decode($getapi, true);
		$loop=1;
		if (!empty($apidecode)) {
		foreach ($apidecode['items'] as $items) {
		$title          = $items['snippet']['title'];
		$desc           = $items['snippet']['description'];
		$videoid        = $items['id']['videoId'];
		$dur = file_get_contents('http://mp3-project-181114.appspot.com/yt_v_details.php?query='.$videoid);



		$duration =json_decode($dur, true);
		foreach ($duration['items'] as $vidTime) {
			$vTime= $vidTime['contentDetails']['duration'];
		}

		  $pattern = '/PT(([0-23]+)H)(([0-9]+)M)?(([0-9]+)S)?/';
		  preg_match($pattern, $vTime, $matches);

		  if(!empty($matches[2]))
		  {
			$hrs = $matches[2];
		  }
		  else
		  {
			$hrs = 0;
		  }


		  if(!empty($matches[4]))
		  {
			$mins = $matches[4];
		  }
		  else
		  {
			$mins = 0;
		  }
		  
		  if(!empty($matches[6]))
		  {
			$secs = $matches[6];
		  }
		  else
		  {
			$secs = 0;
		  }

		if ($hrs == 0 && $mins == 0 && $secs == 0)
		{

		  $pattern = '/PT(([0-9]+)M)?(([0-9]+)S)?/';
		  preg_match($pattern, $vTime, $matches);

		$hrs = 0;


		  if(!empty($matches[2]))
		  {
			$mins = $matches[2];
		  }
		  else
		  {
			$mins = 0;
		  }

		  if(!empty($matches[4]))
		  {
			$secs = $matches[4];
		  }
		  else
		  {
			$secs = 0;
		  }


		}


	//	mysqli_query($conn,"UPDATE ytapi SET used = used+1 WHERE api='".$youtube_api."'");

		if ($loop==1)
		{
			echo '<div class="col-sm-12">';

		}

		$filesize = round(((((($mins * 60 )+ ($hrs * 3600) + $secs) * 192 )/8)/1000),2);


		echo '
		<div class="col-sm-6">
			<div class="panel panel-primary">
			  <div class="panel-heading">
				<h3 class="panel-title"><a target="_blank" style="text-align:left;display:block;" href="http://'.$_SERVER['HTTP_HOST'].'/'.cleanPermalink($title).'/'.$videoid.'"><span class="glyphicon glyphicon-music"></span> '.$title.'.mp3</a></h3>
			  </div>
			  <div class="panel-body">
				<a target="_blank" style="text-align:left;display:block;" href="http://'.$_SERVER['HTTP_HOST'].'/'.cleanPermalink($title).'/'.$videoid.'">
					<img height=40px width=60px align="left" alt="'.$title.'" src="http://img.youtube.com/vi/'.$videoid.'/default.jpg"></img>
				</a>

				<span class="glyphicon glyphicon-time"></span>  '.$hrs.' hours '.$mins.' minutes '.$secs.' seconds. <br />
				<span class="glyphicon glyphicon-download-alt"></span> '.$filesize.' MB
				<br />'.$desc.'
				<!--<a href="http://'.$_SERVER['HTTP_HOST'].'/'.cleanPermalink($title).'/'.$videoid.'" style="text-align:left;display:block;" target="_blank" title="download mp3" >Download</a>-->
			  </div>
			</div>
		</div>

		';
		if ($loop==2)
		{
			echo '</div>';
			$loop=0;
		}
		$loop=$loop+1;
		}
		}
		else
		{
				$apiurl='http://mp3-project-181114.appspot.com/sc.php?query='.urlencode($query_echo);
				$remote = file_get_contents($apiurl);
				if(!empty($remote) && $cache_enable !='false')
				{
					$getapi=$remote;
				}

			$decode	=	json_decode($getapi,true);
			foreach ($decode as $a)
			{
				$loop=$loop+1;
				if ($a['artwork_url'] != '')
					$img=$a['artwork_url'];
				else
					$img=$a['user']['avatar_url'];
				echo '
				<div class="col-sm-12">
					<div class="panel panel-primary">
					  <div class="panel-heading">
						<h3 class="panel-title"><a target="_blank" style="text-align:left;display:block;" href="http://'.$_SERVER['HTTP_HOST'].'/'.cleanPermalink($a['title']).'?s='.$a['id'].'">'.$a['title'].'</a></h3>
					  </div>
					  <div class="panel-body">
						<a target="_blank" style="text-align:left;display:block;" href="http://'.$_SERVER['HTTP_HOST'].'/'.cleanPermalink($a['title']).'?s='.$a['id'].'">
							<img height=90px width=120px align="left" alt="'.$a['title'].'" src="'.$img.'"></img>
							
						</a>
						<a target="_blank" style="text-align:left;display:block;" href="http://'.$_SERVER['HTTP_HOST'].'/'.cleanPermalink($a['title']).'?s='.$a['id'].'">Download</a>
					  </div>
					</div>
				</div>
				';
	if ($loop==10)
	{
		//echo $ad_468x60;
		$loop=0;
	}
			}	
		}
	}





//end search handler



	

	

				}
				?>
				


			</div>
			

		
			
			
			
			<!--end content-->
			
			
			



		</div>
	</div>
</div>
