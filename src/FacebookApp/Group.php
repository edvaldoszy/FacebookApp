<?php

namespace FacebookApp;

class Group extends Feed
{
    private $id;
    private $name;
    private $admin;

    public function __construct($id = null)
    {
        if ($id) $this->id = $id;
    }

    /**
     * @return mixed
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
     * Return if user is group's administrator
     *
     * @return bool
     */
    public function isAdmin()
    {
        return (bool) $this->admin;
    }

    /**
     * @return bool
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * @param bool $admin
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;
    }
}