<?php

namespace AppBundle\Entity;

/**
 * Pais
 */
class Pais
{
    /**
     * @var string
     */
    private $nombre;


    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }
}

