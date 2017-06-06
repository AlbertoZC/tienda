<?php

namespace AppBundle\Entity;

/**
 * Seguimiento
 */
class Seguimiento
{
    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var \AppBundle\Entity\Usuario
     */
    private $seguido;

    /**
     * @var \AppBundle\Entity\Usuario
     */
    private $seguidor;


    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Seguimiento
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set seguido
     *
     * @param \AppBundle\Entity\Usuario $seguido
     *
     * @return Seguimiento
     */
    public function setSeguido(\AppBundle\Entity\Usuario $seguido)
    {
        $this->seguido = $seguido;

        return $this;
    }

    /**
     * Get seguido
     *
     * @return \AppBundle\Entity\Usuario
     */
    public function getSeguido()
    {
        return $this->seguido;
    }

    /**
     * Set seguidor
     *
     * @param \AppBundle\Entity\Usuario $seguidor
     *
     * @return Seguimiento
     */
    public function setSeguidor(\AppBundle\Entity\Usuario $seguidor)
    {
        $this->seguidor = $seguidor;

        return $this;
    }

    /**
     * Get seguidor
     *
     * @return \AppBundle\Entity\Usuario
     */
    public function getSeguidor()
    {
        return $this->seguidor;
    }
}

