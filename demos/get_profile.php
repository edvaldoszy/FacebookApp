<?php
/**
 * Created by Edvaldo Szymonek
 * User: edvaldo
 * Date: 13/04/2015
 * Time: 09:46
 * Website: http://edvaldotsi.com
 */

require_once "../vendor/autoload.php";

use FacebookApp\FacebookApp;

session_start();
$token = isset($_SESSION["token"]) ? $_SESSION["token"] : null;

$app = new FacebookApp(require "../config/app.config.php");
if (!$app->checkAccess($token)) {
    exit("<a href=\"{$app->getLoginUrl()}\">Fazer login com Facebook</a>");
}

$profile = $app->getProfile();
echo "ID: " . $profile->getId() . "<br>";
echo "Name: " . $profile->getName() . "<br>";
echo "Link: " . $profile->getLink() . "<br>";