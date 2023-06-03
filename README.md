# Video-JS + Subtitle-Octopus
This Repository contains a php library made for implement subtitle octopus on video js for .ass subtitle support


## Usage/Examples
Make sure your page is in php
```php
<video id="my-video" class="video-js" width="600"controls preload="auto" poster="Poster link here" data-setup="{}">
        <source src="your video link here" type="video/mp4">
        <track kind="captions" src="subs.ass" srclang="en" label="English" default> <!--You can add more subtitles track here -->
    </video>
<?php
$player_id="my-video"; //id of the video tag
$font_folder = "videojs-ass-support/fonts"; //fonts directory;
$octopus_loc = "videojs-ass-support/subtitles-octopus.js"; //subtitles-octopus.js directory;
$octopus_worker_loc = "videojs-ass-support/subtitles-octopus-worker.js"; //subtitles-octopus-worker.js directory;
include "videojs-ass-support/init_player.php"; //init_player.php directory
?>
```
You don't need to manually setup video.js as is included in this code

## Demo

A working demo can be found here: https://alessandroch2.github.io/Video-JS-Subtitle-Octopus/index.html

(This html file is the result using the php library as php can't run on github pages)

# Libraries
This library use Video.js as video player and https://github.com/libass/JavascriptSubtitlesOctopus for subtitle rendering
that are all inclused in this library
