<html>

<body>

<video id="my-video" class="video-js" width="600"controls preload="auto" poster="Poster link here" data-setup="{}">
        <source src="https://cdn-cf-east.streamable.com/video/mp4/ylhtmn.mp4?Expires=1686052020&Signature=YK~eUbrLUdsUIOTI0eYVGCvA4kM4mkLi~ncyMrEXzSwABuA4X1RtMbPXEpH7anLs3zilPuD0WVzmmx~bRUsgFVyHTXb99RGTVEsDq1H0iUW8t68948cFNhFsJLWEaKLs7oawDcBNf8znV4fUik25vWD7DBc2j-u4aKKFSKp-rUFVpaMe3d7E9ugxgukz6eykk-j9T1fbrtgoZrGKblACj~lWtr0HZ0X7BnQqbdY-BySmO9pGqnfOuQqSDxBXWOVfvOtxnAjN7Dm67aVLJAqOqwrwn7h9LzXs81w8lnC6affgNHNkKyvHhtVJeL7ZufaIbbrr3YFODZX4ykoIZuwI6g__&Key-Pair-Id=APKAIEYUVEN4EVB2OKEQ" type="video/mp4">
        <track kind="captions" src="subs.ass" srclang="it" label="Italiano" default>
    </video>
<?php
$player_id="my-video";
$font_folder = "videojs-ass-support/fonts"; //fonts directory;
$octopus_loc = "videojs-ass-support/subtitles-octopus.js"; //subtitles-octopus.js directory;
$octopus_worker_loc = "videojs-ass-support/subtitles-octopus-worker.js"; //subtitles-octopus-worker.js directory;
include "videojs-ass-support/init_player.php"; //init_player.php directory
?>
</body>
</html>