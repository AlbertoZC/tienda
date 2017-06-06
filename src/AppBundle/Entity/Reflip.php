<?php

namespace AppBundle\Entity;

/**
 * Reflip
 */
class Reflip
{
    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var \AppBundle\Entity\Usuario
     */
    private $usuarioCompartidor;

    /**
     * @var \AppBundle\Entity\Flip
     */
    private $idReflip;


    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Reflip
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
     * Set usuarioCompartidor
     *
     * @param \AppBundle\Entity\Usuario $usuarioCompartidor
     *
     * @return Reflip
     */
    public function setUsuarioCompartidor(\AppBundle\Entity\Usuario $usuarioCompartidor)
    {
        $this->usuarioCompartidor = $usuarioCompartidor;

        return $this;
    }

    /**
     * Get usuarioCompartidor
     *
     * @return \AppBundle\Entity\Usuario
     */
    public function getUsuarioCompartidor()
    {
        return $this->usuarioCompartidor;
    }

    /**
     * Set idReflip
     *
     * @param \AppBundle\Entity\Flip $idReflip
     *
     * @return Reflip
     */
    public function setIdReflip(\AppBundle\Entity\Flip $idReflip)
    {
        $this->idReflip = $idReflip;

        return $this;
    }

    /**
     * Get idReflip
     *
     * @return \AppBundle\Entity\Flip
     */
    public function getIdReflip()
    {
        return $this->idReflip;
    }
}

