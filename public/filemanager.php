<?php
require "../auth_classes.php";
auth::loggedInOnly();
?>

<html>
<head>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="container is-fluid">
    <div class="notification">
        <h1 class="centered page_header">Filemanager</h1>
        <hr>
        <div id="files" style="float: left;">

        </div>
    </div>
</div>
<script src="js/filemanager.js"></script>
<script>
    getFiles();
</script>
</body>
</html>