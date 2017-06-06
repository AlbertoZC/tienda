<?php

namespace AppBundle\Entity;

/**
 * Admin
 */
class Admin
{
    /**
     * @var string
     */
    private $clave;

    /**
     * @var string
     */
    private $username;


    /**
     * Set clave
     *
     * @param string $clave
     *
     * @return Admin
     */
    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }

    /**
     * Get clave
     *
     * @return string
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }
}

