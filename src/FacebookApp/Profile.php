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

class Profile extends Feed
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
     * @var string $gender
     */
    private $gender;

    /**
     * @var string $link
     */
    private $link;

    /**
     * @var string $locale
     */
    private $locale;

    public function __construct($id = "me")
    {
        $this->id = $id;
    }

    /**
     * Returns user's page
     *
     * @return SplObjectStorage
     * @throws Exception
     */
    public function getPages()
    {
        if (!$this->app instanceof FacebookApp)
            throw new Exception("You must have an instance of FacebookApp");

        return $this->app->getPages($this);
    }

    /**
     * Returns user's group
     * 
     * @return SplObjectStorage
     * @throws Exception
     */
    public function getGroups()
    {
        if (!$this->app instanceof FacebookApp)
            throw new Exception("You must have an instance of FacebookApp");

        return $this->app->getGroups($this);
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
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param string $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @param string $locale
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
    }
}