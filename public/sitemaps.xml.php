<?php
header("Content-type: application/xml");
error_reporting(0);
$filename = 'cache/sitemaps/'.$_SERVER['HTTP_HOST'];
if (empty($_GET['limit']))
	$_GET['limit'] = 1000;

if (file_exists($filename)) 
{
	echo file_get_contents($filename);
}
else
{
	ob_start();
	echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

	if (isset($_GET['country']))
		$country = $_GET['country'];
	else
		$country = 'us';


	include 'config/include-all.php';



	   $previous_value = libxml_use_internal_errors(TRUE);
	   $doc = new DOMDocument();
	   @$doc->load('https://itunes.apple.com/'.$country.'/rss/topsongs/limit=200/explicit=true/xml');
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
		echo
		'<url>
			<loc>http://'.$_SERVER['HTTP_HOST'].'/'.urlencode(cleanPermalink($itemRSS['title'])).'</loc>
			<priority>0.8</priority>
		</url>';
	   }

	$result = mysqli_query($conn,"SELECT * FROM terms ORDER BY rand() LIMIT ".$_GET['limit']);

			while($row = mysqli_fetch_array($result)) {
			$term = $row['term'];
			echo
			'<url>
			<loc>http://'.$_SERVER['HTTP_HOST'].'/'.cleanPermalink($term).'</loc>
			<priority>0.5</priority>
			</url>';

			}
	echo '</urlset>';	
	$htmlStr = ob_get_contents();
	
	ob_end_clean(); 
	file_put_contents($filename, $htmlStr);
	echo $htmlStr;

}
	?>
	
