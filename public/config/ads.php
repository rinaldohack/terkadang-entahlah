<?php

if ($ads == 'true')
{
	$rand_ads=mt_rand(1,100);
	$rand_ads2=mt_rand(1,100);

	$rand_ads = 50;

	if ($rand_ads <= 70)
	{
		$ad_300x250 		= '<script>var adParams = {s: 1000186985, w: 300, h: 250, c: 4, blank: false, title: "'.$query_echo.'" }; </script><script src="http://js.srcsmrtgs.com/js/ad.js"></script>';
		$ad_468x60 		= '<script>var adParams = {s: 1000187418, w: 234, h: 60, c: 4, blank: false, title: "'.$query_echo.'" }; </script><script src="http://js.srcsmrtgs.com/js/ad.js"></script>';
		$header 		= '<script>section=1000186980;popTimes=3;channel=4;captureFirstClick=true;</script><script src="http://js.srcsmrtgs.com/js/pop.js"></script>';
	}
	elseif ($rand_ads <=90) 
	{

		$ad_300x250		=
			"<script type='text/javascript'>
				atOptions = {
					'key' : '6576ed5ae14355764ded8e07a0de2e72',
					'format' : 'iframe',
					'height' : 250,
					'width' : 300,
					'params' : {}
				};
				document.write('<scr' + 'ipt type='text/javascript' src='http' + (location.protocol === 'https:' ? 's' : '') + '://www.bnserving.com/invoke.js'></scr' + 'ipt>');
			</script>";
		$ad_468x60		=
			"<script type='text/javascript'>
				atOptions = {
					'key' : 'f8d53f2d2e21726cfe098d7f5d3ecbf5',
					'format' : 'iframe',
					'height' : 60,
					'width' : 468,
					'params' : {}
				};
				document.write('<scr' + 'ipt type='text/javascript' src='http' + (location.protocol === 'https:' ? 's' : '') + '://www.bnserving.com/invoke.js'></scr' + 'ipt>');
			</script>";
		$header 		= "<script type='text/javascript' src='//pl128646.puserving.com/e8/7e/f1/e87ef1dfffa55d9864453b9f5f663b69.js'></script>";
	}
	elseif ($rand_ads <=100)
	{
		$ad_468x60		= "<script data-cfasync='false' type='text/javascript' src='//p109256.clksite.com/adServe/banners?tid=109256_343827_0'></script>";
		$ad_300x250		= "<script data-cfasync='false' type='text/javascript' src='//p109256.clksite.com/adServe/banners?tid=109256_343827_1'></script>";
		$header			= "<script data-cfasync='false' type='text/javascript' src='//p109256.clksite.com/adServe/banners?tid=109256_343827_2&tagid=2'></script>";
	}

	if ($mobile_ads == 'true')
	{
		$detect = new Mobile_Detect;
		if ( $detect->isMobile() )
		{
			$header 		= '<script src="http://sufferee.com/file?type=script&n=1&k=c7f9527dab40267258e5a0eafe128879&int=60&cl=4"></script>';
		}
	}

}




?>
