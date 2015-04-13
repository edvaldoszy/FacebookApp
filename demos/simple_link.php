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
use FacebookApp\Post;
use FacebookApp\Link;

session_start();
$token = isset($_SESSION["token"]) ? $_SESSION["token"] : null;

$app = new FacebookApp(require "../config/app.config.php");
if (!$app->checkAccess($token)) {
    exit("<a href=\"{$app->getLoginUrl()}\">Fazer login com Facebook</a>");
}

$post = new Post("Testando aplicativo do Facebook");
$post->setLink(new Link("http://www.edvaldotsi.com/"));

$profile = $app->getProfile();
$profile->publish($post);