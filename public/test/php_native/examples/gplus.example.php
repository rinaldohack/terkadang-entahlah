<script type="text/javascript" src="https://apis.google.com/js/plusone.js" /></script>
<script type="text/javascript" src="../assets/events.js" /></script>

<?PHP
$oLocker = new clsSocialLikeLocker();
$share_url = clsSocialLikeLocker::getCurrentURL();

$isLiked = $oLocker->isLiked($share_url);
?>
<div class="panels">
    <input type="hidden" id="url_request" value="unlock_handler.php?url=<?PHP echo urlencode($share_url); ?>" />
   
    <!-- Google Buzz --> 
    <div class="panel" title="Post to Google Buzz"> 
            <g:plusone size="tall" callback="gplus_callback" href="<?PHP echo $share_url; ?>"></g:plusone> 
    </div>    
    
    <br class="clear" />
   
</div>

<?PHP if($isLiked == true): ?>
<div class="panels">
        <h2>URL Unlocked</h2>
        <p>Place your protected Content Here</p>
</div>
 <?PHP else: ?>
<div class="panels">
        <h2>URL Locked</h2>
        <p>Press Google+ to unlock</p>
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
    // Display GooglePlus Button
}
</pre>
