<?php

class media_player {
    public static function useVideoPlayer() {
        $design = "<html> <head> <link rel=\"stylesheet\" href=\"css/main.css\"> </head> <body> <div class=\"container is-fluid\"> <div class=\"notification\"> <h1 class=\"centered page_header\">Video Player</h1> <hr> <div id=\"video_container\" class='centered'> <video src='' id='player' controls preload='auto'></video> </div> </div> </div> <script src=\"js/player.js\"></script> <script> startPlayback(); </script> </body> </html>";
        echo $design;
    }
}