<?php

require "../config.php";
require  "../auth_classes.php";

auth::loggedInOnly();

$fileArray = [];


if(strpos($_GET["path"], '..') !== false || substr($_GET["path"], 0, 1) === "/") {
    die("No. Go away.");
}

if ($handle = opendir(CONFIG["data_dir"].$_GET["path"])) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            $fileArray[] = array($entry, is_dir(CONFIG["data_dir"].$_GET["path"].$entry));
        }
    }
    closedir($handle);
}

echo json_encode($fileArray);