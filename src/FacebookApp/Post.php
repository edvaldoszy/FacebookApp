<?php
/**
 * Created by Edvaldo Szymonek
 * User: edvaldo
 * Date: 13/04/2015
 * Time: 09:46
 * Website: http://edvaldotsi.com
 */

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
     * Page ID of a location associated with this post
     * @var string $place
     */
    private $place;

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
     * @return string
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * @param string $place
     */
    public function setPlace($place)
    {
        $this->place = $place;
    }

    /**
     * @return SplObjectStorage
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Returns an array of IDs tagged in post
     *
     * @return null|string
     */
    public function getTagsAsString()
    {
        if ($this->tags instanceof SplObjectStorage) {
            $out = array();
            foreach ($this->tags as $tag) {
                $out[] = $tag->getId();
            }
            return implode(",", $out);
        }
        return null;
    }

    /**
     * Tag a new Profile
     * @param Profile $profile
     */
    public function addTag(Profile $profile)
    {
        if (!$this->tags instanceof SplObjectStorage)
            $this->tags = new SplObjectStorage();

        $this->tags->attach($profile);
    }

    /**
     * @param SplObjectStorage $tags
     */
    public function setTags(SplObjectStorage $tags)
    {
        $this->tags = $tags;
    }
} 