<?php

namespace AppBundle\Entity;

/**
 * Bloqueo
 */
class Bloqueo
{
    /**
     * @var \DateTime
     */
    private $fechaFin;

    /**
     * @var \DateTime
     */
    private $fechaInicio;

    /**
     * @var \AppBundle\Entity\Usuario
     */
    private $bloqueado;

    /**
     * @var \AppBundle\Entity\Admin
     */
    private $bloqueador;

    /**
     * @var \AppBundle\Entity\Motivobloqueo
     */
    private $motivobloqueo;


    /**
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     *
     * @return Bloqueo
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    /**
     * Get fechaFin
     *
     * @return \DateTime
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     *
     * @return Bloqueo
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set bloqueado
     *
     * @param \AppBundle\Entity\Usuario $bloqueado
     *
     * @return Bloqueo
     */
    public function setBloqueado(\AppBundle\Entity\Usuario $bloqueado)
    {
        $this->bloqueado = $bloqueado;

        return $this;
    }

    /**
     * Get bloqueado
     *
     * @return \AppBundle\Entity\Usuario
     */
    public function getBloqueado()
    {
        return $this->bloqueado;
    }

    /**
     * Set bloqueador
     *
     * @param \AppBundle\Entity\Admin $bloqueador
     *
     * @return Bloqueo
     */
    public function setBloqueador(\AppBundle\Entity\Admin $bloqueador)
    {
        $this->bloqueador = $bloqueador;

        return $this;
    }

    /**
     * Get bloqueador
     *
     * @return \AppBundle\Entity\Admin
     */
    public function getBloqueador()
    {
        return $this->bloqueador;
    }

    /**
     * Set motivobloqueo
     *
     * @param \AppBundle\Entity\Motivobloqueo $motivobloqueo
     *
     * @return Bloqueo
     */
    public function setMotivobloqueo(\AppBundle\Entity\Motivobloqueo $motivobloqueo = null)
    {
        $this->motivobloqueo = $motivobloqueo;

        return $this;
    }

    /**
     * Get motivobloqueo
     *
     * @return \AppBundle\Entity\Motivobloqueo
     */
    public function getMotivobloqueo()
    {
        return $this->motivobloqueo;
    }
}

