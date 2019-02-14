<?php

require "../config.php";
require  "../auth_classes.php";

auth::loggedInOnly();

$fileArray = [];


if ($handle = opendir(CONFIG["data_dir"].$_GET["path"])) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            $fileArray[] = array($entry, is_dir(CONFIG["data_dir"].$_GET["path"].$entry));
        }
    }
    closedir($handle);
}

echo json_encode($fileArray);