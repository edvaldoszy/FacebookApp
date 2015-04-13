<?php
/**
 * Created by Edvaldo Szymonek
 * User: edvaldo
 * Date: 13/04/2015
 * Time: 09:46
 * Website: http://edvaldotsi.com
 */

namespace FacebookApp;

use Exception;

class Page extends Feed
{
    /**
     * @var string $id
     */
    private $id;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var String $category
     */
    private $category;

    /**
     * @var string $accessToken
     */
    private $accessToken;

    public function __construct($id = null)
    {
        if ($id) $this->id = $id;
    }

    /**
     * Publish a Post in feed
     *
     * @param Post $post
     *
     * @throws Exception
     *
     * @return Post
     */
    public function publish(Post $post)
    {
        if (!$this->app instanceof FacebookApp)
            throw new Exception("You must have an instance of FacebookApp");

        $param = array("access_token" => $this->accessToken);

        return $this->app->publish($this, $post, $param);
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return string
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @param string $accessToken
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
    }
}