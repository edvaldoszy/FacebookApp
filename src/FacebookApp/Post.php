<?php

namespace FacebookApp;

use SplObjectStorage;

class Post
{
    /**
     * Generated post ID
     * @var string $id
     */
    private $id;

    /**
     * Your post message
     * @var string $message
     */
    private $message;

    /**
     * @var Link $link
     */
    private $link;

    /**
     * People target in the post
     * @var SplObjectStorage $tags
     */
    private $tags;

    public function __construct($message = null)
    {
        if ($message) $this->message = $message;
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
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return Link
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param Link $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @return SplObjectStorage
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param SplObjectStorage $tags
     */
    public function setTags(SplObjectStorage $tags)
    {
        $this->tags = $tags;
    }
} 