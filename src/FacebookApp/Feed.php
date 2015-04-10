<?php

namespace FacebookApp;

abstract class Feed
{
    /**
     * @var FacebookApp
     */
    private $app;

    /**
     * Publish a Post in feed
     *
     * @param Post $post
     * @return Post
     */
    public function publish(Post $post) {}

    /**
     * Return the ID to post in feed
     * @return string
     */
    public function getId() {}

    /**
     * @return FacebookApp
     */
    public function getApp()
    {
        return $this->app;
    }

    /**
     * @param FacebookApp $app
     */
    public function setApp(FacebookApp $app)
    {
        $this->app = $app;
    }
} 