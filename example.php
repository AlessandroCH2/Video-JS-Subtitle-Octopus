<html>

<body>

<video id="my-video" class="video-js" width="600"controls preload="auto" poster="Poster link here" data-setup="{}">
        <source src="https://animethemes.moe/video/ToaruKagakuNoRailgunS-OP1.webm" type="video/webm">
        <track kind="captions" src="railgun-sub-eng" srclang="en" label="English" default>
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
