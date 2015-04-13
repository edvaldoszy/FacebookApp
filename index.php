<?php

require_once "vendor/autoload.php";

use FacebookApp\FacebookApp;
use FacebookApp\Profile;
use FacebookApp\Post;
use FacebookApp\Link;

session_start();
$token = isset($_SESSION["token"]) ? $_SESSION["token"] : null;

$app = new FacebookApp(require "config/app.config.php");
if (!$app->checkAccess($token)) {
    exit("<a href=\"{$app->getLoginUrl()}\">Fazer login com Facebook</a>");
}

$link = new Link("http://www.edvaldotsi.com/");
$post = new Post("Testando aplicativo de postagens automáticas no Facebook");
$post->setLink($link);

//$post->setPlace("229578350443883");

$post->addTag(new Profile("100003137118209"));
$post->addTag(new Profile("100002169769495"));

$app->publish(new Profile(), $post);
echo $post->getId();

/*
$profile = new Profile();
$pages = $app->getPages($profile);
var_dump($pages);
*/
/*
foreach ($pages as $page) {
    $page->publish($post);
    echo $post->getId();
}
*/

/*
$profile = new Profile();
var_dump($app->getGroups($profile));
*/
/*
$link = new Link("http://www.edvaldotsi.com/");
$post = new Post("Testando aplicativo de postagens automáticas no Facebook");
$post->setLink($link);

$app->publish(new Profile(), $post);
echo $post->getId();
*/

/*
$path = __DIR__ . "/images/Edvaldo.jpg";
$app->uploadPhoto($path);
*/