<?php

namespace jr\PhotoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photo
 */
class Photo
{
    /**
     * @var interger
     */
    private $id;

    /**
     * @var string
     */
    private $path;

    /**
     * @var \jr\PhotoBundle\Entity\Menu
     */
    private $menu;


    /**
     * Get id
     *
     * @return \interger 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Photo
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set menu
     *
     * @param \jr\PhotoBundle\Entity\Menu $menu
     * @return Photo
     */
    public function setMenu(\jr\PhotoBundle\Entity\Menu $menu = null)
    {
        $this->menu = $menu;

        return $this;
    }

    /**
     * Get menu
     *
     * @return \jr\PhotoBundle\Entity\Menu 
     */
    public function getMenu()
    {
        return $this->menu;
    }
}
