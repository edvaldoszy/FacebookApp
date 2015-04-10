<?php

namespace FacebookApp;

class Group extends Feed
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
     * @var boolean $admin
     */
    private $admin;

    public function __construct($id, $name, $admin)
    {
        $this->id = $id;
        $this->name = $name;
        $this->admin = $admin;
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
     * Return if user is group's administrator
     *
     * @return bool
     */
    public function isAdmin()
    {
        return (bool) $this->admin;
    }
}