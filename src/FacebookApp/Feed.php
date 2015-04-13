<?php
/**
 * Created by Edvaldo Szymonek
 * User: edvaldo
 * Date: 13/04/2015
 * Time: 09:46
 * Website: http://edvaldotsi.com
 */

namespace FacebookApp;

abstract class Feed
{
    /**
     * @var FacebookApp
     */
    protected $app;

    /**
     * Publish a Post in feed
     *
     * @param Post $post
     *
     * @throws Exception
     * 
     * @return Post
     */
    public function publish(Post $post) {
        if (!$this->app instanceof FacebookApp)
            throw new Exception("You must have an instance of FacebookApp");

        return $this->app->publish($this, $post);
    }

    /**
     * Return the ID to post in feed
     * @return string
     */
    abstract public function getId();

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