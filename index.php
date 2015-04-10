<?php

require_once "vendor/autoload.php";

use FacebookApp\FacebookApp;
use FacebookApp\Profile;
use FacebookApp\Post;
use FacebookApp\Link;

session_start();
$token = isset($_SESSION["token"]) ? $_SESSION["token"] : null;

$app = new FacebookApp();
if (!$app->checkAccess($token)) {
    exit("<a href=\"{$app->getLoginUrl()}\">Fazer login com Facebook</a>");
}

/*
$profile = new Profile();
var_dump($app->getPages($profile));
*/


$profile = new Profile();
var_dump($app->getGroups($profile));

/*
$link = new Link("http://www.edvaldotsi.com/");
$post = new Post("Testando aplicativo de postagens automáticas no Facebook");
$post->setLink($link);

$app->publish(new Profile(), $post);
echo $post->getId();
*/