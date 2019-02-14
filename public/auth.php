<?php

require "../auth_classes.php";

if(isset($_COOKIE["auth_token_secret"]) && isset($_COOKIE["userid"]) && is_numeric($_COOKIE["userid"])) {
    if(auth::checkAuthToken(auth::usernameToId($_COOKIE["userid"]))) {
        successfulLogin();
    }
}

if((isset($_POST["username"]) && isset($_POST["password"]))) {

    if(auth::try_auth(auth::usernameToId($_POST["username"]), $_POST["password"])) {
        successfulLogin();
    } else {
        badLogin();
    }
}

badLogin();

function successfulLogin() {
    header("Location: main.php");
    exit;
}

function badLogin() {
    setcookie("err", "Invalid username/password.");
    header("Location: login.php");
    exit;
}