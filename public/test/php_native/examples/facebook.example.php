<script type="text/javascript" src="http://connect.facebook.net/en_US/all.js#xfbml=1" /></script>
<script type="text/javascript" src="../assets/events.js" /></script>
<?PHP
$oLocker = new clsSocialLikeLocker();
$share_url = clsSocialLikeLocker::getCurrentURL();
$isLiked = $oLocker->isLiked($share_url);
?>
<div class="panels">
    <input type="hidden" id="url_request" value="unlock_handler.php?url=<?PHP echo urlencode($share_url); ?>" />
   
    
    <!-- Facebook --> 
    <div class="panel" title="Like on Facebook"> 
        <fb:like href="<?PHP echo $share_url; ?>" layout="box_count" action="like" font="arial" show_faces="true" width="48" height="65"></fb:like> 
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
        <p>Like to Unlock</p>
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
    // Display Facebook Button
}
</pre>