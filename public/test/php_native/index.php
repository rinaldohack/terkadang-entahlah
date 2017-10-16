<?PHP 
/**
 * Social Like Content Locker
 *
 * @author      Muneeb <m4munib@hotmail.com>
 * @copyright   Muneeb <m4munib@hotmail.com>
 * @twitter     http://twitter.com/#!/muhammadmunib
 */
ob_start();
require_once "lib/clsSocialLikeLocker.php";
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Social - Content Locker - SEO Friendly</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" media="screen" href="../assets/style.css" /> 
<link type="text/css" rel="stylesheet" media="all" href="../assets/highlight.css" />
<meta name="author"  content="Muneeb" />
<meta name="publisher"  content="Muneeb" />
<meta name="copyright"  content="2012 Muneeb" />
<script type="text/javascript" src="../assets/jquery.min.js"></script>
<script type="text/javascript" src="../assets/highlight.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
            $('pre.code').highlight({source:1, zebra:1, indent:'space', list:'ol'});
    });
</script>
</head>

<body>
    <div class="wrapper">         
        <h1>Social URL/Content Locker - SEO Friendly</h1> 
        <p align="center">By: <a href='http://codecanyon.net/user/amzee/portfolio?ref=amzee'>Muneeb</a></p>
        
        <div class="block">
            <h2>Features</h2>
            <ul class="features">                
                <li>Like, Tweet or Google+ to unlock the URL</li>
                <li>Facebook Like Callback - <a href='?example=facebook'>View Example</a></li>
                <li>Twitter Tweet Callback- <a href='?example=twitter'>View Example</a></li>
                <li>Google Plus Callback - <a href='?example=gplus'>View Example</a></li>
                <li>Separate Example for each social Network</li>
                <li>Protected URLs  - Hashing technique</li>
                <li>Docs - <a href='../docs.php'>PHP Documentation</a></li>
            </ul>
        </div>
        
        
        <div class="block">
            <?PHP
                $_example = 'generic';
                $examples = array('facebook','gplus','twitter');
                if(in_array($_GET['example'], $examples))
                {
                    $_example = $_GET['example'];
                }
                
            ?>
            <?PHP include"examples/".$_example.".example.php"; ?>
        </div>

    </div>
</body>
</html>
