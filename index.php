<?php

require_once "vendor/autoload.php";

use FacebookApp\FacebookApp;

session_start();
$token = isset($_SESSION["token"]) ? $_SESSION["token"] : null;

$app = new FacebookApp(require "config/app.config.php");
if (!$app->checkAccess($token)) {
    exit("<a href=\"{$app->getLoginUrl()}\">Fazer login com Facebook</a>");
}