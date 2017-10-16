<script type="text/javascript" src="http://platform.twitter.com/widgets.js" /></script>
<script type="text/javascript" src="../assets/events.js" /></script>

<?PHP
$oLocker = new clsSocialLikeLocker();
$share_url = clsSocialLikeLocker::getCurrentURL();

$isLiked = $oLocker->isLiked($share_url);
?>
  <?PHP if($isLiked == false): ?>
<div class="panels">
    <input type="hidden" id="url_request" value="unlock_handler.php?url=<?PHP echo urlencode($share_url); ?>" />
    <div class="panel" title="Tweet this item"> 
        <a href="http://twitter.com/share" 
           class="twitter-share-button"
           data-url="<?PHP echo $share_url; ?>"
           data-text="Social URL/Content Locker"
           data-count="vertical"
           data-via="muhammadmunib">Tweet</a>
    </div> 

    <br class="clear" />
   
</div>
<?PHP endif; ?>

<?PHP if($isLiked == true): ?>
<div class="panels">
        <h2>URL Unlocked</h2>
        <p>Place your protected Content Here</p>
</div>
 <?PHP endif; ?>

<h2>Implementation - HowTo</h2>
<pre class="code" lang="php">
$oLocker = new clsSocialLikeLocker();
$share_url = clsSocialLikeLocker::getCurrentURL(); // Current URL
$isLiked = $oLocker->isLiked($share_url);
if($isLiked)
{
    //Place Locked Content
}
else
{
    // Display Twitter Button
}
</pre>
