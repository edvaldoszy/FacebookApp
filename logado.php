<?php

require_once "vendor/autoload.php";

use FacebookApp\FacebookApp;

session_start();

$app = new FacebookApp(require "config/app.config.php");
$_SESSION["token"] = $app->getAccessToken();
echo $_SESSION["token"];