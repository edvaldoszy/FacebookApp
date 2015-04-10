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

$link = new Link("http://www.edvaldotsi.com/");
$post = new Post("Testando aplicativo de postagens automáticas no Facebook");
$post->setLink($link);

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

var_dump($app->getProfile());

/*
$link = new Link("http://www.edvaldotsi.com/");
$post = new Post("Testando aplicativo de postagens automáticas no Facebook");
$post->setLink($link);

$app->publish(new Profile(), $post);
echo $post->getId();
*/