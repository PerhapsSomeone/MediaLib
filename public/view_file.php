<?php

require "../config.php";
require  "../auth_classes.php";
require "../file_classes.php";

auth::loggedInOnly();

files::Download(CONFIG["data_dir"].$_GET["path"].$_GET["file"]);