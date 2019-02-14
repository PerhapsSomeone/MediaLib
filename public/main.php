<?php
require "../auth_classes.php";
require "../config.php";

auth::loggedInOnly();
?>

<html>
<head>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="container">
    <div class="notification">
        <h1 class="centered page_header">Welcome back to <?= CONFIG["storage_name"]; ?>!</h1>
        <hr>
        <button onclick="window.location = 'filemanager.php'" class="centered button is-success is-medium">File Manager</button>
    </div>
</div>
</body>
</html>