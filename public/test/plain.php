<?PHP 
/**
 * Social Like Content Locker
 *
 * @author      Muneeb <m4munib@hotmail.com>
 * @copyright   Muneeb <m4munib@hotmail.com>
 * @twitter     http://twitter.com/#!/muhammadmunib
 */
ob_start();
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Social - Content Locker - SEO Friendly</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author"  content="Muneeb" />
<meta name="publisher"  content="Muneeb" />
<meta name="copyright"  content="2012 Muneeb" />
<script type="text/javascript" src="../assets/jquery.min.js"></script>
<script type="text/javascript" src="http://widgets.digg.com/buttons.js" /></script>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js" /></script>
<script type="text/javascript" src="http://connect.facebook.net/en_US/all.js#xfbml=1" /></script>
<script type="text/javascript" src="http://platform.twitter.com/widgets.js" /></script>
<script type="text/javascript" src="assets/events.js" /></script>
<style>
    .panel{float:left; margin-left:5px;}
    .clear{clear:both;}
    .buttons_container{margin-left:40%; margin-top:20px;}
</style>
</head>

<body>

        <?PHP require_once "php_native/lib/clsSocialLikeLocker.php"; ?>
            <input type="hidden" id="url_request" value="php_native/unlock_handler.php?url=<?PHP echo urlencode($share_url); ?>" />
        <div class="buttons_container">
            <div class="panel" title="Tweet this item"> 
                <a href="http://twitter.com/share" 
                   class="twitter-share-button"
                   data-url="<?PHP echo $share_url; ?>"
                   data-text="Social URL/Content Locker"
                   data-count="vertical"
                   data-via="muhammadmunib">Tweet</a>
            </div> 

            <!-- Facebook --> 
            <div class="panel" title="Like on Facebook"> 
                <fb:like href="<?PHP echo $share_url; ?>" layout="box_count" action="like" font="arial" show_faces="true" width="48" height="65"></fb:like> 
            </div> 

               <!-- Google Buzz --> 
            <div class="panel" title="Post to Google Buzz"> 
                    <g:plusone size="tall" callback="gplus_callback" href="<?PHP echo $share_url; ?>"></g:plusone> 
            </div>  
             
               <br class="clear" />
        </div>


        <?PHP if($isLiked == true): ?>
            <div class="panels">
                 <div align="center" style="margin-top:10px;">Place your protected Content Here</div>
            </div>
         <?PHP else: ?>
             <div align="center" style="margin-top:10px;">Content Protected - Press Tweet, Like or Google+ to unlock the URL </div>
         <?PHP endif; ?>


</body>
</html>
