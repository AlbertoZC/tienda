<?php

namespace AppBundle\Entity;

/**
 * Motivobloqueo
 */
class Motivobloqueo
{
    /**
     * @var string
     */
    private $desc;

    /**
     * @var integer
     */
    private $castigo;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set desc
     *
     * @param string $desc
     *
     * @return Motivobloqueo
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;

        return $this;
    }

    /**
     * Get desc
     *
     * @return string
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * Set castigo
     *
     * @param integer $castigo
     *
     * @return Motivobloqueo
     */
    public function setCastigo($castigo)
    {
        $this->castigo = $castigo;

        return $this;
    }

    /**
     * Get castigo
     *
     * @return integer
     */
    public function getCastigo()
    {
        return $this->castigo;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}

