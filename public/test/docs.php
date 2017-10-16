<?PHP 
/**
 * Social Like Content Locker Extended
 *
 * @author      Muneeb <m4munib@hotmail.com>
 * @copyright   Muneeb <m4munib@hotmail.com>
 * @twitter     http://twitter.com/#!/muhammadmunib
 */
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Social - Content Locker - SEO Friendly - Extended</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" media="screen" href="assets/style.css" /> 
<link type="text/css" rel="stylesheet" media="all" href="assets/highlight.css" />
<meta name="author"  content="Muneeb" />
<meta name="publisher"  content="Muneeb" />
<meta name="copyright"  content="2012 Muneeb" />
<script type="text/javascript" src="assets/jquery.min.js"></script>
<script type="text/javascript" src="assets/highlight.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
            $('pre.code').highlight({source:1, zebra:1, indent:'space', list:'ol'});
    });
</script>
</head>

<body>
    <div class="wrapper">         
        <h1>Social URL Locker - SEO Friendly - Documentation</h1> 
        <div align="center"><h2>Simple PHP Implementation</h2> </div>
        <p align="center"><a href='php_native/index.php'><strong>PHP Examples</strong></a></p>
        <br /><br /><p align="center">By: <a href='http://codecanyon.net/user/amzee/portfolio?ref=amzee'>Amzee</a></p>
        
<h3>Include PHP class</h3>
<pre class="code" lang="php">require_once "lib/clsSocialLikeLocker.php"; </pre>

        
<h3>Instantiate PHP class Object</h3>
<pre class="code" lang="php">
/**
 * @param array $session_vars An array of values that set how the class functions.
    * 	-'cookie_path' _string_: The path where the cookie is to be stored
    * 	-'cookie_domain' _string_: The domain the that the cookie resides on
    * 	-'cookie_secure' _boolean_: Access the cookie only over an secure connection
    * 	-'cookie_httponly' _boolean_: Write to the cookie only over an http(s) connection
    * 	-'cookie_lifetime' _int_: The amount of time the cookie is active for
    * 	-'hash_cookie' _boolean_ :Hash the cookie to its value is not easily readable
    * 	-'hash_session' _boolean: Has a season so its value is not easily readable
    * 	-'session_name' _string_ : Name of the current session
    * 	-'session_lifetime' _int_: The life time of the session, in seconds
    * 	-'session_path' _string_: The path of the session.
    * 	-'session_domain' _string_: The domain of the session. Default is current.
    * 	-'session_secure'_boolean_: Access the session only over a secure connection
    * 	-'session_httponly' _boolean: Writes to the session only over an http connection
    * 	-'hash_storage_key' _boolean: Session/Cookie Storage key will be hashed.
    * 	-'storage_key' _string: Session/Cookie Key to Store Like Data
 */
 $defaults = array(
        'cookie_path' => '/', 
        'cookie_domain' => $_SERVER['HTTP_HOST'], 
        'cookie_secure' => false, 
        'cookie_httponly' => false, 
        'cookie_lifetime' => time() + 30 * 24 * 60, //one month - default
        'hash_storage_key' => true, 
        'session_lifetime' => 2000, 
        'session_path' => '/', 
        'session_domain' => $_SERVER['HTTP_HOST'], 
        'session_secure' => false, 
        'session_httponly' => false, 
        'session_start' => true,
        'storage_key' => 'social_like_locker_data'
);

$clsSocialLikeLocker = new clsSocialLikeLocker($optional_params);</pre>

  
<h3>Available Methods</h3>
<pre class="code" lang="php">
$clsSocialLikeLocker = new clsSocialLikeLocker();

/**
 * $url - URL to check (optional parameter)
 * $url - If not provided - Method will use Current Page URL
 */
$clsSocialLikeLocker->isLiked([ string $url = '']);

/**
 * $url - URL to mark as Liked
 */
$url = 'http://www.abcdomain.com/locked.php';
$clsSocialLikeLocker->markAsLiked($url);

/**
 * Usage: Use this method, if you want just one page to be liked and wish to unlock entire site
 */
$clsSocialLikeLocker->isAnyUrlLiked();

/**
 * Destroys Like Session
 */
$clsSocialLikeLocker->destroyLikeSession();

/*
 * This will give you the current URL
 */
$curren_page_url = clsSocialLikeLocker::getCurrentURL();

</pre>    
</div>
  
</body>
</html>
