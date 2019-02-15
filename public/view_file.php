<?php

require "../media_player.php";
require "../config.php";
require  "../auth_classes.php";
require "../file_classes.php";

auth::loggedInOnly();

if(!isset($_GET["path"])) {
    http_response_code(400);
    die("400 - Bad Request");
}

if(strpos($_GET["dir"], '..') !== false || substr($_GET["dir"], 0, 1) === "/" || strpos($_GET["path"], '..') !== false || substr($_GET["path"], 0, 1) === "..") {
    die("No. Go away.");
}

$fileExt = pathinfo(CONFIG["data_dir"].$_GET["path"].$_GET["file"], PATHINFO_EXTENSION);

if(isset($_GET["download"])) {
    files::Download(CONFIG["data_dir"].$_GET["path"].$_GET["file"]);
    exit;
}

if($fileExt === "mp4") {
    media_player::useVideoPlayer();
} else {
    files::Download(CONFIG["data_dir"].$_GET["path"].$_GET["file"]);
}
