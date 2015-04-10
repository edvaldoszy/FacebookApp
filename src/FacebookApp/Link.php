<?php

namespace FacebookApp;

class Link
{
    /**
     * Your link destination
     * @var string $url
     */
    private $url;

    /**
     * Preview image associated with the link
     * @var string $picture
     */
    private $picture;

    /**
     * Title of link preview
     * @var string $name
     */
    private $name;

    /**
     * Caption under the title in the link
     * @var string $caption
     */
    private $caption;

    /**
     * Description of the link
     * @var string $description
     */
    private $description;

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function __toString()
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @param string $picture
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
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
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * @param string $caption
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
} 