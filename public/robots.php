<?php header('Content-type: text/text');
echo '';
?>

User-agent: *
<?php
if (strpos($_SERVER['HTTP_HOST'], 'rinaldo') !== false) {
    echo 'Disallow: /';
	echo PHP_EOL;
}
else
{
	echo 'Disallow: ';
	echo PHP_EOL;
}
?>

Sitemap: http://<?php echo $_SERVER['HTTP_HOST'];?>/sitemaps.xml.php
