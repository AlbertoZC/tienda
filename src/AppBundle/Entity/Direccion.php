<?php

namespace AppBundle\Entity;

/**
 * Direccion
 */
class Direccion
{
    /**
     * @var string
     */
    private $comunidad;

    /**
     * @var string
     */
    private $localidad;

    /**
     * @var string
     */
    private $calle;

    /**
     * @var string
     */
    private $numero;

    /**
     * @var string
     */
    private $planta;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Usuario
     */
    private $usuario;

    /**
     * @var \AppBundle\Entity\Pais
     */
    private $paisNombre;


    /**
     * Set comunidad
     *
     * @param string $comunidad
     *
     * @return Direccion
     */
    public function setComunidad($comunidad)
    {
        $this->comunidad = $comunidad;

        return $this;
    }

    /**
     * Get comunidad
     *
     * @return string
     */
    public function getComunidad()
    {
        return $this->comunidad;
    }

    /**
     * Set localidad
     *
     * @param string $localidad
     *
     * @return Direccion
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad
     *
     * @return string
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set calle
     *
     * @param string $calle
     *
     * @return Direccion
     */
    public function setCalle($calle)
    {
        $this->calle = $calle;

        return $this;
    }

    /**
     * Get calle
     *
     * @return string
     */
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * Set numero
     *
     * @param string $numero
     *
     * @return Direccion
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set planta
     *
     * @param string $planta
     *
     * @return Direccion
     */
    public function setPlanta($planta)
    {
        $this->planta = $planta;

        return $this;
    }

    /**
     * Get planta
     *
     * @return string
     */
    public function getPlanta()
    {
        return $this->planta;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Direccion
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * @return Direccion
     */
    public function setUsuario(\AppBundle\Entity\Usuario $usuario)
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
     * Set paisNombre
     *
     * @param \AppBundle\Entity\Pais $paisNombre
     *
     * @return Direccion
     */
    public function setPaisNombre(\AppBundle\Entity\Pais $paisNombre = null)
    {
        $this->paisNombre = $paisNombre;

        return $this;
    }

    /**
     * Get paisNombre
     *
     * @return \AppBundle\Entity\Pais
     */
    public function getPaisNombre()
    {
        return $this->paisNombre;
    }
}

