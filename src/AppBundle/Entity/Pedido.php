<?php

namespace AppBundle\Entity;

/**
 * Pedido
 */
class Pedido
{
    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Usuario
     */
    private $usuario;

    /**
     * @var \AppBundle\Entity\Estadoenvio
     */
    private $envioEstado;

    /**
     * @var \AppBundle\Entity\Direccion
     */
    private $direccion;


    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Pedido
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set usuario
     *
     * @param \AppBundle\Entity\Usuario $usuario
     *
     * @return Pedido
     */
    public function setUsuario(\AppBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \AppBundle\Entity\Usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set envioEstado
     *
     * @param \AppBundle\Entity\Estadoenvio $envioEstado
     *
     * @return Pedido
     */
    public function setEnvioEstado(\AppBundle\Entity\Estadoenvio $envioEstado = null)
    {
        $this->envioEstado = $envioEstado;

        return $this;
    }

    /**
     * Get envioEstado
     *
     * @return \AppBundle\Entity\Estadoenvio
     */
    public function getEnvioEstado()
    {
        return $this->envioEstado;
    }

    /**
     * Set direccion
     *
     * @param \AppBundle\Entity\Direccion $direccion
     *
     * @return Pedido
     */
    public function setDireccion(\AppBundle\Entity\Direccion $direccion = null)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return \AppBundle\Entity\Direccion
     */
    public function getDireccion()
    {
        return $this->direccion;
    }
}

