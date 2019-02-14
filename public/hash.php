<?php

error_reporting("ALL");

echo password_hash($_GET["pass"], PASSWORD_BCRYPT);