<script src="https://vjs.zencdn.net/8.3.0/video.min.js"></script>
<link href="https://vjs.zencdn.net/8.3.0/video-js.css" rel="stylesheet" />
     <script src="<?php echo $octopus_loc;?>"></script>
<script>

function getBaseUrl() {
   var pathname = window.location.pathname;

   var pos = pathname.lastIndexOf('/');

   if (pos !== -1) {
       pathname = pathname.slice(0, pos);
   }

   return window.location.origin + pathname;
}
var currentTrack = "";
var baseUrl = getBaseUrl();
var player = videojs('#<?php echo $player_id;?>');
player.ready(function (){

var video = this.tech_.el_;
player.one("loadedmetadata", function () {
  updateSubtitle(baseUrl,video);
          player.textTracks().on("change", function(){
        updateSubtitle(baseUrl,video);
          
          }); 
       });
  });
function updateSubtitle(baseUrl,video){
 var tracks = player.textTracks();

for(var i =0; i < tracks.length; i++){
 console.log(tracks[i].language +" "+ tracks[i].src);
   if(tracks[i].mode === "showing"){
     if (currentTrack !=  tracks[i].language) {
       console.log("Language Switched: "+tracks[i].language +" "+ tracks[i].src);
       var subUrl = tracks[i].src;

         currentTrack = tracks[i].language;
         if (window.octopusInstance) {
           window.octopusInstance.freeTrack();
                     window.octopusInstance.setTrackByUrl(baseUrl +"/"+subUrl);
                 } else if (SubtitlesOctopus) {
                     var options = {
                         video: video,
                         subUrl: baseUrl +"/"+subUrl,
                         fonts: [baseUrl +'/<?php echo $font_folder;?>/nyala.ttf'], // Links to fonts (not required, default font already included in build)
                         //onReady: onReadyFunction,
                         debug: true,
                         workerUrl: baseUrl +'/<?php echo $octopus_worker_loc;?>' // Link to WebAssembly-based file "libassjs-worker.js"
                        
                     };
                     window.octopusInstance = new SubtitlesOctopus(options);
                 }
         return;
       }
   }else{
     if (currentTrack ==  tracks[i].language) {
       window.octopusInstance.freeTrack();
       currentTrack = "none";
     }
   }
}
if(currentTrack == "none"){
 window.octopusInstance.dispose();
 window.octopusInstance = null;
}
}


</script>